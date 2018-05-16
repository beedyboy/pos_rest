-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for boladepos
CREATE DATABASE IF NOT EXISTS `boladepos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `boladepos`;

-- Dumping structure for table boladepos.beedysystem
CREATE TABLE IF NOT EXISTS `beedysystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code1` varchar(50) NOT NULL,
  `code2` varchar(50) NOT NULL,
  `codekey` varchar(30) NOT NULL,
  `dateFrom` varchar(50) NOT NULL,
  `dateTo` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.beedysystem: ~0 rows (approximately)
/*!40000 ALTER TABLE `beedysystem` DISABLE KEYS */;
INSERT INTO `beedysystem` (`id`, `code1`, `code2`, `codekey`, `dateFrom`, `dateTo`, `active`) VALUES
	(1, 'TURG-QLFZ-MUVN-RVLY', 'VFVS-RY1R-TEZA-LU1V', '01AC-D0F1-BD0E-7F80', '2017-06-13', '2018-08-13', 'One-Off');
/*!40000 ALTER TABLE `beedysystem` ENABLE KEYS */;

-- Dumping structure for table boladepos.hall
CREATE TABLE IF NOT EXISTS `hall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.hall: ~4 rows (approximately)
/*!40000 ALTER TABLE `hall` DISABLE KEYS */;
INSERT INTO `hall` (`id`, `name`) VALUES
	(1, 'Bar'),
	(2, 'Local Dishes'),
	(3, 'Continental'),
	(4, 'Ice Cream');
/*!40000 ALTER TABLE `hall` ENABLE KEYS */;

-- Dumping structure for table boladepos.hseat
CREATE TABLE IF NOT EXISTS `hseat` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `tid` (`tid`),
  CONSTRAINT `hseat_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `htables` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.hseat: ~2 rows (approximately)
/*!40000 ALTER TABLE `hseat` DISABLE KEYS */;
INSERT INTO `hseat` (`sid`, `tid`, `name`) VALUES
	(1, 1, '1'),
	(2, 2, '2');
/*!40000 ALTER TABLE `hseat` ENABLE KEYS */;

-- Dumping structure for table boladepos.htables
CREATE TABLE IF NOT EXISTS `htables` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `id` (`id`),
  CONSTRAINT `htables_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hall` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.htables: ~2 rows (approximately)
/*!40000 ALTER TABLE `htables` DISABLE KEYS */;
INSERT INTO `htables` (`tid`, `id`, `name`) VALUES
	(1, 3, '1'),
	(2, 3, '002');
/*!40000 ALTER TABLE `htables` ENABLE KEYS */;

-- Dumping structure for table boladepos.products
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `selling_price` varchar(100) DEFAULT NULL,
  `qty_left` int(11) DEFAULT NULL,
  `main` varchar(20) NOT NULL,
  `vat` varchar(30) DEFAULT NULL,
  `price` varchar(30) NOT NULL,
  `checks` smallint(6) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `subId` (`main`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.products: ~19 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`product_id`, `product_name`, `selling_price`, `qty_left`, `main`, `vat`, `price`, `checks`) VALUES
	(1, 'Fried Rice', '12', 0, 'C', '0.00', '12', 0),
	(18, 'Banku', '', 0, 'L', '0.00', '0', 0),
	(19, 'Goat soup', '', 0, 'S', '0.00', '0', 0),
	(20, 'Fufu', '', 0, 'L', '0.00', '0', 0),
	(21, 'Vodka', '12', 50, 'D', '0.00', '12', 0),
	(22, 'red red', '', 0, 'SM', '0.00', '0', 0),
	(23, 'Jollof', '10', 0, 'C', '0.00', '10', 0),
	(24, 'Cassava Fish', '5', 18, 'F', '0.00', '5', 1),
	(25, 'Beef Burger', '15', 0, 'C', '0.00', '15', 0),
	(26, 'Coke', '3', 0, 'D', '0.00', '3', 0),
	(27, 'Tuna Salad', '2', 0, 'C', '0.00', '2', 0),
	(28, 'Rice Ball', '', 0, 'L', '0.00', '0', 0),
	(29, 'Salted Beef', '', 0, 'L', '0.00', '0', 0),
	(30, 'Okro Soup', '', 0, 'S', '0.00', '0', 0),
	(31, 'Palava Sauce', '', 0, 'S', '0.00', '0', 0),
	(32, 'Point and kill', '', 0, 'SM', '0.00', '0', 0),
	(33, 'TZ', '', 0, 'SM', '0.00', '0', 0),
	(34, 'Chinkafa', '', 0, 'SM', '0.00', '0', 0),
	(36, 'Tuna Fish', '7', 13, 'F', '0.00', '7', 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table boladepos.purchases
CREATE TABLE IF NOT EXISTS `purchases` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.purchases: ~0 rows (approximately)
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;

-- Dumping structure for table boladepos.purchases_item
CREATE TABLE IF NOT EXISTS `purchases_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.purchases_item: ~0 rows (approximately)
/*!40000 ALTER TABLE `purchases_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases_item` ENABLE KEYS */;

-- Dumping structure for table boladepos.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `balance` varchar(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Pending',
  `tid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `hall` int(11) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `tid` (`tid`),
  KEY `sid` (`sid`),
  KEY `hall` (`hall`),
  CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `htables` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `hseat` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`hall`) REFERENCES `hall` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.sales: ~6 rows (approximately)
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` (`transaction_id`, `invoice_number`, `cashier`, `date`, `amount`, `discount`, `balance`, `status`, `tid`, `sid`, `hall`) VALUES
	(1, 'RS-3022209', 'Akinnniyi', '04/19/2017', '8', '0', '8', 'Paid', 1, 1, 3),
	(2, 'RS-39022', 'Akinnniyi', '04/20/2017', '24', '3', '24', 'Pending', 1, 1, 3),
	(3, 'RS-0330492', 'Akinnniyi', '04/20/2017', '21', '0', '21', 'Pending', 1, 1, 3),
	(4, 'RS-032350', 'Akinnniyi', '04/20/2017', '6', '0', '6', 'Pending', 2, 2, 3),
	(7, 'RS-224252', 'Local kitchen', '04/24/2017', '7', '0', '7', 'Pending', NULL, NULL, NULL),
	(8, 'RS-209', 'Akinnniyi', '04/24/2017', '12', '0', '12', 'Pending', 1, 1, 3);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;

-- Dumping structure for table boladepos.sales_order
CREATE TABLE IF NOT EXISTS `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `amount` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `vat` varchar(50) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.sales_order: ~9 rows (approximately)
/*!40000 ALTER TABLE `sales_order` DISABLE KEYS */;
INSERT INTO `sales_order` (`transaction_id`, `invoice`, `qty`, `amount`, `product_id`, `price`, `vat`, `discount`, `date`) VALUES
	(7, 'RS-0330492', '0', '9', 20, '0', '0', '0', '04/20/17'),
	(8, 'RS-0330492', '1', '12', 1, '12', '12', '0', '04/20/17'),
	(9, 'RS-032350', '0', '6', 18, '0', '0', '0', '04/20/17'),
	(10, 'RS-032350', '0', '0', 30, '0', '0', '0', '04/20/17'),
	(12, 'RS-2560082', '1', '7', 36, '7', '7', '0', '04/24/17'),
	(13, 'RS-2560082', '1', '5', 24, '5', '5', '0', '04/24/17'),
	(14, 'RS-224252', '0', '2', 18, '0', '0', '0', '04/24/17'),
	(15, 'RS-224252', '1', '5', 24, '5', '5', '0', '04/24/17'),
	(16, 'RS-209', '1', '12', 1, '12', '12', '0', '04/24/17');
/*!40000 ALTER TABLE `sales_order` ENABLE KEYS */;

-- Dumping structure for table boladepos.subcategory
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subId` int(11) NOT NULL AUTO_INCREMENT,
  `main` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  PRIMARY KEY (`subId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.subcategory: ~7 rows (approximately)
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` (`subId`, `main`, `sub`) VALUES
	(1, 'C', 'Starter'),
	(2, 'C', 'Sauces'),
	(3, 'L', 'Local'),
	(4, 'C', 'Rice Family'),
	(5, 'C', 'Grilled'),
	(6, 'D', 'Alcoholic'),
	(7, 'S', 'Soup'),
	(8, 'L', 'ounje');
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;

-- Dumping structure for table boladepos.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(100) DEFAULT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `supplier_contact` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.suppliers: ~0 rows (approximately)
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Dumping structure for table boladepos.system
CREATE TABLE IF NOT EXISTS `system` (
  `companyName` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `CompanyEmail` varchar(100) DEFAULT NULL,
  `CompanyPhoneNum` varchar(100) DEFAULT NULL,
  `version` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.system: ~0 rows (approximately)
/*!40000 ALTER TABLE `system` DISABLE KEYS */;
INSERT INTO `system` (`companyName`, `address`, `logo`, `CompanyEmail`, `CompanyPhoneNum`, `version`) VALUES
	('Glory\'s Restaurant', 'East Legon', NULL, 'glory@gmail.com', '087643356', 'Vs-W2.0.0.');
/*!40000 ALTER TABLE `system` ENABLE KEYS */;

-- Dumping structure for table boladepos.systemwindow
CREATE TABLE IF NOT EXISTS `systemwindow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code1` varchar(50) NOT NULL,
  `code2` varchar(50) NOT NULL,
  `codekey` varchar(30) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.systemwindow: ~0 rows (approximately)
/*!40000 ALTER TABLE `systemwindow` DISABLE KEYS */;
INSERT INTO `systemwindow` (`id`, `code1`, `code2`, `codekey`, `active`) VALUES
	(1, 'beedy', 'beedy', 'beedy', 'beedy');
/*!40000 ALTER TABLE `systemwindow` ENABLE KEYS */;

-- Dumping structure for table boladepos.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table boladepos.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `name`, `position`) VALUES
	(2, 'beedyboy', 'Salvation91#', 'Akinnniyi', 'Admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
