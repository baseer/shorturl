<?php
App::uses('Security', 'Utility');
class UrlsController extends AppController {
	public $helpers = array('Js' => array('Jquery'));

	public function index() {
		if ($this->request->is('ajax') && !empty($this->data['Url']['url'])){
			$hash = $this->shorten($this->data['Url']['url']);

			if ($hash){
				$shortened_url = Router::url(array('controller'=>'Urls','action'=>'go',$hash), true);
				return new CakeResponse(array('body'=>json_encode(array('hash'=>$hash, 'shortened_url'=>$shortened_url)), 'status'=>200));
			}
			else {
				return new CakeResponse(array('body'=>json_encode(array('message'=>'Something went wrong. Please try again.')), 'status'=>500));
			}
		}

		$this->set('title_for_layout', 'shorturl');
	}
	private function shorten($url){
		$hash = Security::hash($url.uniqid(), 'crc32', true);
		$result = $this->Url->save(compact('hash','url'));
		if ($result)
			return $hash;
		return $result;
	}
	public function go($hash){
		$url = $this->Url->field('url', array('hash'=>$hash));
		if ($url){
			$this->response->header('location',$url);
			return $this->response;
		}
		else {
			$this->Session->setFlash('Invalid url.', 'default', array(), 'bad');
			$this->redirect(array('controller'=>'Urls', 'action'=>'index'));
		}
	}
}