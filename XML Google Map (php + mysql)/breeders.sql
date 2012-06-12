CREATE TABLE `breeders` (
	`breeder_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`breeder_name` VARCHAR(255) NULL DEFAULT NULL,
	`breeder_address` TEXT NULL,
	`breeder_postcode` VARCHAR(10) NULL DEFAULT NULL,
	`lat` FLOAT(10,6) NULL DEFAULT NULL,
	`lng` FLOAT(10,6) NULL DEFAULT NULL,
	PRIMARY KEY (`breeder_id`)
);

INSERT INTO `breeders` (`breeder_id`, `breeder_name`, `breeder_address`, `breeder_postcode`, `lat`, `lng`) VALUES (1, 'Henry, Stephen and George Fell', 'West Grange<br />\r\nThorganby<br />\r\nYork\r\n', 'YO19 6DJ', 53.860779, -0.989124);
INSERT INTO `breeders` (`breeder_id`, `breeder_name`, `breeder_address`, `breeder_postcode`, `lat`, `lng`) VALUES (2, 'Nick Walsh', '', '', 53.774689, -2.504883);
