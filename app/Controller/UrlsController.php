<?php
class UrlsController extends AppController {
	public $helpers = array('Js' => array('Jquery'));

	public function index() {
		if ($this->request->is('ajax') && !empty($this->data['Url']['url'])){
			$hash = $this->shorten($this->data['Url']['url']);

			if ($hash)		return new CakeResponse(array('body'=>json_encode(array('hash'=>$hash)), 'status'=>200));
			else			return new CakeResponse(array('body'=>json_encode(array('message'=>'Something went wrong. Please try again.')), 'status'=>500));
		}
	}
	private function shorten($url){
		$hash = 'test';
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
			$this->setFlash('Invalid url.', 'default', array(), 'bad');
			$this->redirect(array('controller'=>'Urls', 'action'=>'index'));
		}
	}
}