

DROP TABLE IF EXISTS `shorturl`.`urls`;


CREATE TABLE `shorturl`.`urls` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`hash` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`url` varchar(2048) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`created` timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
	`modified` timestamp NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `unique_hash` (`hash`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

