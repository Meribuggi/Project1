

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `bookstore`
--
CREATE DATABASE `bookstore`;
-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` INT(20) NOT NULL  AUTO_INCREMENT,
  `product` varchar(150) NOT NULL,
  `price` int(40) NOT NULL,
  `quantity` int(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `inventory_order` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `firstname` VARCHAR(20) NOT NULL ,
    `lastname` VARCHAR(30) NOT NULL ,
    `product` VARCHAR(40) NOT NULL ,
    `quantity` INT(55) NOT NULL ,
    `payment_method` VARCHAR(20) NOT NULL ,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB;
--

COMMIT;

