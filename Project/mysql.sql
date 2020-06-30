DROP DATABASE IF EXISTS `car_rental`;
CREATE DATABASE `car_rental`;

USE `car_rental`;

DROP TABLE IF EXISTS `b_report`;

CREATE TABLE `b_report` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(255) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Zipcode` int(30) NOT NULL,
  `Car_name` varchar(100) NOT NULL,
  `Rent` int(60) NOT NULL,
  `Date_of_Travel` date NOT NULL,
  `Delivery_Location` varchar(100) NOT NULL,
  `Delivery_Time` time NOT NULL,
  `License_No` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
);

INSERT INTO `car_rental`.`b_report` (`Id`, `Fullname`, `State`, `Address`, `Email`, `Phone`, `Zipcode`, `Car_name`, `Rent`, `Date_of_Travel`, `Delivery_Location`, `Delivery_Time`, `License_No`) VALUES (NULL, 'SURESH KUMAR', 'Delhi', 'Jasola', 'sureshkumar@gmail.com', '9988994278', '110078', 'Honda City', '2138', '2017-05-25', 'Jasola', '08:00:00', 'DL45 2017 4435342');
INSERT INTO `car_rental`.`b_report` (`Id`, `Fullname`, `State`, `Address`, `Email`, `Phone`, `Zipcode`, `Car_name`, `Rent`, `Date_of_Travel`, `Delivery_Location`, `Delivery_Time`, `License_No`) VALUES (NULL, 'MARCUS ANDREWS', 'Delhi', 'Sarai Jullena', 'marcus1246@gmail.com', '9999942367', '110088', 'Tata Tigor', '3880', '2017-06-05', 'Sarai Jullena', '11:30:00', 'DL21 2017 7877442');



DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Timeliness` varchar(100) NOT NULL,
  `Condition` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Recommend` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL
 ); 

INSERT INTO `car_rental`.`feedback` (`Fullname`, `Email`, `Price`, `Timeliness`, `Condition`, `Service`, `Recommend`, `Message`) VALUES ('Suresh Kumar', 'sureshkumar@gmail.com', 'Very Good', 'Very Satisfied', 'Satisfied', 'Good', 'Definitely', 'Add GPS navigation');
INSERT INTO `car_rental`.`feedback` (`Fullname`, `Email`, `Price`, `Timeliness`, `Condition`, `Service`, `Recommend`, `Message`) VALUES ('Marcus Andrews', 'marcus1246@gmail.com', 'Good', 'Satisfied', 'Very Satisfied', 'Good', 'Not Sure', 'Add more cars');

DROP TABLE IF EXISTS `login_rental`;

CREATE TABLE `login_rental` (
  `Id` int(65) NOT NULL AUTO_INCREMENT,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
); 

INSERT INTO `car_rental`.`login_rental` (`Id`, `Username`, `Password`) VALUES (NULL, 'admin', 'adminpass');
INSERT INTO `car_rental`.`login_rental` (`Id`, `Username`, `Password`) VALUES (NULL, 'marcusandrews', 'marcus');
INSERT INTO `car_rental`.`login_rental` (`Id`, `Username`, `Password`) VALUES (NULL, 'sureshkumar', 'suresh');

DROP TABLE IF EXISTS `u_detail`;

CREATE TABLE `u_detail` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Mobile_no` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
); 

INSERT INTO `car_rental`.`u_detail` (`Id`, `Name`, `Address`, `State`, `Username`, `Password`, `Date_of_Birth`, `Mobile_no`) VALUES (NULL, 'MARCUS ANDREWS', 'Sarai Jullena', 'Delhi', 'marcusandrews', 'marcus', '1992-11-19', '9999942367');
INSERT INTO `car_rental`.`u_detail` (`Id`, `Name`, `Address`, `State`, `Username`, `Password`, `Date_of_Birth`, `Mobile_no`) VALUES (NULL, 'SURESH KUMAR', 'Jasola', 'Delhi', 'sureshkumar', 'suresh', '1982-01-09', '9988994278');

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `state` varchar(60) NOT NULL,
  `t_from` varchar(60) NOT NULL,
  `t_to` varchar(60) NOT NULL,
  `pickup_date` date NOT NULL,
  `no_of_days` int(60) NOT NULL
);


DROP TABLE IF EXISTS `temp2`;

CREATE TABLE `temp2` (
  `Fullname` varchar(255) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Zipcode` int(30) NOT NULL,
  `Car_name` varchar(100) NOT NULL,
  `Rent` int(60) NOT NULL,
  `Date_of_Travel` date NOT NULL,
  `Delivery_Location` varchar(100) NOT NULL,
  `Delivery_Time` time NOT NULL,
  `License_No` varchar(100) NOT NULL
);

