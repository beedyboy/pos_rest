CREATE DATABASE beedypos;

 use beedypos;

CREATE TABLE `beedysystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code1` varchar(50) NOT NULL,
  `code2` varchar(50) NOT NULL,
  `codekey` varchar(30) NOT NULL,
  `dateFrom` varchar(50) NOT NULL,
  `dateTo` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO beedysystem VALUES ('1','TURG-QLFZ-MUVN-RVLY','VFVS-RY1R-TEZA-LU1V','01AC-D0F1-BD0E-7F80','2017-06-13','2018-09-13','One-Off');



 
CREATE TABLE `discount_settings` (
  `value` varchar(10) DEFAULT NULL,
  `status` enum('YES','NO') DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO discount_settings VALUES ('','NO');
INSERT INTO discount_settings VALUES ('','YES');



 
CREATE TABLE `hall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO hall VALUES ('7','Local Dishes');
INSERT INTO hall VALUES ('8','Continental');
INSERT INTO hall VALUES ('9','Bar');



 
CREATE TABLE `hseat` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `tid` (`tid`),
  CONSTRAINT `hseat_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `htables` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO hseat VALUES ('6','12','1');
INSERT INTO hseat VALUES ('7','11','1');
INSERT INTO hseat VALUES ('8','11','2');
INSERT INTO hseat VALUES ('9','6','2');
INSERT INTO hseat VALUES ('10','9','1');



 
CREATE TABLE `htables` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `id` (`id`),
  CONSTRAINT `htables_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hall` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO htables VALUES ('6','9','Bar-1');
INSERT INTO htables VALUES ('7','9','Bar-2');
INSERT INTO htables VALUES ('8','8','Con-1');
INSERT INTO htables VALUES ('9','8','Con-2');
INSERT INTO htables VALUES ('10','8','Con-3');
INSERT INTO htables VALUES ('11','8','Con-4');
INSERT INTO htables VALUES ('12','7','Loc-1');
INSERT INTO htables VALUES ('13','7','Loc-2');



 
CREATE TABLE `printer` (
  `printId` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `receipt_type` enum('Processing Ticket','Cancelled Bill') DEFAULT 'Processing Ticket',
  `status` enum('NO','YES') DEFAULT 'NO',
  PRIMARY KEY (`printId`),
  KEY `trans_id` (`trans_id`),
  CONSTRAINT `printer_ibfk_1` FOREIGN KEY (`trans_id`) REFERENCES `sales_order` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 

 
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `selling_price` varchar(100) DEFAULT NULL,
  `qty_left` int(11) DEFAULT NULL,
  `main` varchar(20) NOT NULL,
  `subId` int(11) DEFAULT NULL,
  `price` varchar(30) NOT NULL,
  `checks` smallint(6) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `subId` (`main`),
  KEY `subId_2` (`subId`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subId`) REFERENCES `subcategory` (`subId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO products VALUES ('1','Fried Rice','15','31','C','9','15','1');
INSERT INTO products VALUES ('18','Banku','2','','L','25','2','1');
INSERT INTO products VALUES ('19','Goat Meat','15','200','L','','15','1');
INSERT INTO products VALUES ('20','Fufu 5','5','33','L','13','5','1');
INSERT INTO products VALUES ('21','Vodka','12','50','D','11','12','1');
INSERT INTO products VALUES ('22','Red Red / Egg','15','30','SM','','15','1');
INSERT INTO products VALUES ('23','Jollof / Grilled Pork','30','38','C','9','30','1');
INSERT INTO products VALUES ('24','Cassava Fish','35','16','F','16','35','1');
INSERT INTO products VALUES ('26','Coke','5','40','D','21','5','1');
INSERT INTO products VALUES ('27','Tuna Salad','20','41','C','24','20','1');
INSERT INTO products VALUES ('28','Rice Ball','2','50','L','23','2','1');
INSERT INTO products VALUES ('29','Salted Beef','4','50','L','20','4','1');
INSERT INTO products VALUES ('36','Tuna Fish','7','13','F','16','7','1');
INSERT INTO products VALUES ('37','Fanta','5','52','D','21','5','1');
INSERT INTO products VALUES ('39','Club L','8','104','D','22','8','1');
INSERT INTO products VALUES ('40','Club M','6','49','D','22','6','1');
INSERT INTO products VALUES ('41','Sprite ','5','9666','D','21','5','1');
INSERT INTO products VALUES ('42','Red Bull','10','51','D','11','10','1');
INSERT INTO products VALUES ('43','Sprite','5','33','D','21','5','1');
INSERT INTO products VALUES ('44','Gulder L','8','12','D','11','8','1');
INSERT INTO products VALUES ('45','Star L','8','10','D','11','8','1');
INSERT INTO products VALUES ('46','Star M','6','15','D','11','6','1');
INSERT INTO products VALUES ('47','Ruut Extra  L','8','10','D','22','8','1');
INSERT INTO products VALUES ('48','Alvaro','6','59','D','21','6','1');
INSERT INTO products VALUES ('49','Malta ','6','29','D','11','6','1');
INSERT INTO products VALUES ('50','SminoffIce','8','40','D','22','8','1');
INSERT INTO products VALUES ('51','Orijin Beer L','8','72','D','22','8','1');
INSERT INTO products VALUES ('52','Hienerken','10','16','D','22','10','1');
INSERT INTO products VALUES ('53','savana Dry ','8','28','D','11','8','1');
INSERT INTO products VALUES ('54','Hunters Gold ','8','33','D','22','8','1');
INSERT INTO products VALUES ('55','GUINNEESS','8','75','D','11','8','1');
INSERT INTO products VALUES ('56','Orijin O','5','17','D','11','5','1');
INSERT INTO products VALUES ('57','Orijin M','6','11','D','11','6','1');
INSERT INTO products VALUES ('58','Mangos Sobolo','5','49','D','21','5','1');
INSERT INTO products VALUES ('59','Shandy L','8','16','D','11','8','1');
INSERT INTO products VALUES ('68','Dry Fish','25','20','L','20','25','1');
INSERT INTO products VALUES ('69','Grasscutter','15','20','L','19','15','1');
INSERT INTO products VALUES ('70','Fried Rice / Grilled chicken','25','23','C','9','25','1');
INSERT INTO products VALUES ('71','Jollof / Grilled Chicken','25','44','C','9','25','1');
INSERT INTO products VALUES ('72','Assorted  Jollof ','35','789','C','9','35','1');
INSERT INTO products VALUES ('73','Banku /  GrilledTilapia','40','26','C','18','40','1');
INSERT INTO products VALUES ('74','Banku /  Grilled Tilapia L','45','40','C','18','45','1');
INSERT INTO products VALUES ('75','Banku / Grilled Tilapia XL','50','41','C','18','50','1');
INSERT INTO products VALUES ('76','Yam / Grilled Pork','30','51','C','10','30','1');
INSERT INTO products VALUES ('77','Fried Rice / Grilled Pork','30','21','C','9','30','1');
INSERT INTO products VALUES ('78','Fried Rice/ Fish','30','19','C','9','30','1');
INSERT INTO products VALUES ('79','Jollof / Fish','30','18','C','9','30','1');
INSERT INTO products VALUES ('80','Plain Rice / Fish','30','3','C','9','30','1');



 
CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(25) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `balance` varchar(20) DEFAULT NULL,
  `status` enum('PAID','PENDING') DEFAULT 'PENDING',
  `tid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `hall` int(11) DEFAULT NULL,
  `ord_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `tid` (`tid`),
  KEY `sid` (`sid`),
  KEY `hall` (`hall`),
  CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `htables` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `hseat` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`hall`) REFERENCES `hall` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 


 
CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `vat` varchar(50) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `date` varchar(500) NOT NULL,
  `plate` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`transaction_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
CREATE TABLE `subcategory` (
  `subId` int(11) NOT NULL AUTO_INCREMENT,
  `main` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  PRIMARY KEY (`subId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO subcategory VALUES ('9','C','Rice');
INSERT INTO subcategory VALUES ('10','C','Yam');
INSERT INTO subcategory VALUES ('11','D','Alcohol');
INSERT INTO subcategory VALUES ('12','C','Pork');
INSERT INTO subcategory VALUES ('13','L','Fufu');
INSERT INTO subcategory VALUES ('14','D','Wine');
INSERT INTO subcategory VALUES ('15','F','Pork');
INSERT INTO subcategory VALUES ('16','F','Fish');
INSERT INTO subcategory VALUES ('17','F','Chicken');
INSERT INTO subcategory VALUES ('18','C','Banku');
INSERT INTO subcategory VALUES ('19','L','Grasscutter');
INSERT INTO subcategory VALUES ('20','L','Fish');
INSERT INTO subcategory VALUES ('21','D','Soft Drink');
INSERT INTO subcategory VALUES ('22','D','Beer');
INSERT INTO subcategory VALUES ('23','L','Rice');
INSERT INTO subcategory VALUES ('24','C','Fish');
INSERT INTO subcategory VALUES ('25','L','Banku');



 
CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(100) DEFAULT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `supplier_contact` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 


 
CREATE TABLE `system` (
  `companyName` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `CompanyEmail` varchar(100) DEFAULT NULL,
  `CompanyPhoneNum` varchar(100) DEFAULT NULL,
  `version` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO system VALUES ('Mango\'s Restaurant','No 14 Street, East Legon','','mangos@gmail.com','0553135336 | 0543977486','Vs-W2.0.0.');



 
CREATE TABLE `systemwindow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code1` varchar(50) NOT NULL,
  `code2` varchar(50) NOT NULL,
  `codekey` varchar(30) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO systemwindow VALUES ('1','TURD-WE1D-MDRN-RENA','VFVS-RC1X-RTFE-LU1E','0710-8073-4802-5F00','One-Off');

 