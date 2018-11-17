-- I know this looks retarded but it's looks nicer to me this way
-- Creat the DataBase
CREATE DATABASE kencars;

-- creat SQL Table register
-- CPID   = Client Profile Identification
-- LID    = Login Identiforcation
CREATE TABLE clientProfile (
	CPID                INT(11)       NOT NULL AUTO_INCREMENT,
	fName               VARCHAR(50)   NULL,
	lName               VARCHAR(50)   NULL,
	email               VARCHAR(150)  NOT NULL UNIQUE,
	mPhone              VARCHAR(12)   NOT NULL UNIQUE,
	address             VARCHAR(255)  NULL,
	city                VARCHAR(100)  NULL,
	state               VARCHAR(50)   NULL,
	postcode            VARCHAR(4)    NULL,
	country             VARCHAR (75)  NULL,
	PRIMARY KEY (CPID)
);

-- Creat SQL table users
-- LID    = Login Identification
-- PWD    = Password, going to be using SHA-512
-- CPID   = Client Profile Identification
CREATE TABLE login (
	LID                 INT(11)       NOT NULL AUTO_INCREMENT,
	CPID                INT(11)       NOT NULL,
	UName               VARCHAR(100)  NOT NULL UNIQUE,
	PWD                 VARCHAR(150)  NOT NULL,
	PRIMARY KEY (LID),
	FOREIGN KEY (CPID) REFERENCES clientProfile(CPID)
);

-- Creat SQL Table to store vehicals
-- CPID   = Client Profile Identification
-- IID 		= Inventory Identification
CREATE TABLE inventory (
	IID                 INT(11)       NOT NULL AUTO_INCREMENT,
	img									VARCHAR(255)	NOT NULL,
	vehicle             VARCHAR(255)  NOT NULL,
	price               INT(11)       NOT NULL,
	kilometer           INT(11)       NOT NULL,
	colour              VARCHAR(11)   NOT NULL,
	transmission        VARCHAR(100)  NOT NULL,
	body                VARCHAR(100)  NOT NULL,
	drivetype           VARCHAR(100)  NOT NULL,
	regostrationplate   VARCHAR(6)    NOT NULL,
	regostrationstatus  VARCHAR(100)  NOT NULL,
	releasedate         VARCHAR(100)  NOT NULL,
	stock               VARCHAR(100)  NOT NULL,
	fuelEconomyCombined INT(5)        NOT NULL,
	PRIMARY KEY (IID)
);

-- Creat SQL Table to Store users saved cars
-- CPID   = Client Profile Identification
-- SCID 	= Saved Cars Identification
-- IID 		= Inventory Identification
CREATE TABLE savedcars (
	SCID                INT(11)		  	NOT NULL AUTO_INCREMENT,
	CPID                INT(11) 	  	NOT NULL,
	IID 								INT(11)				NOT NULL UNIQUE,
	PRIMARY KEY (SCID),
	FOREIGN KEY (CPID) REFERENCES clientProfile(CPID),
	FOREIGN KEY (IID) REFERENCES inventory(IID)
);

-- creat SQL table with Booking inventoryfomation
-- BID    = Booding Identifircation
-- CPID   = Client Profile Identification
-- IID 		= Inventory Identification
CREATE TABLE booking (
	BID                 INT(11)     	NOT NULL AUTO_INCREMENT,
	CPID                INT(11)     	NOT NULL,
	IID 								INT(11)				NOT NULL,
	bookingDate         DATE        	NOT NULL,
	bookingTime         TIME        	NOT NULL,
	PRIMARY KEY (BID),
	FOREIGN KEY (CPID) REFERENCES clientProfile(CPID),
	FOREIGN KEY (IID) REFERENCES inventory(IID)
);


INSERT INTO `clientprofile` (`CPID`, `fName`, `lName`, `email`, `mPhone`, `address`, `city`, `state`, `postcode`, `country`) VALUES
(1, 'Ayden', 'Melhop', 'atcav1@outlook.com', '0490844729', NULL, NULL, NULL, NULL, NULL),
(2, 'Ayden', 'Melhop', 'admin@proxwebdev.com', '66666666666', NULL, NULL, NULL, NULL, NULL);


INSERT INTO `login` (`LID`, `CPID`, `UName`, `PWD`) VALUES
(1, 1, 'atcav', 'e6c83b282aeb2e022844595721cc00bbda47cb24537c1779f9bb84f04039e1676e6ba8573e588da1052510e3aa0a32a9e55879ae22b0c2d62136fc0a3e85f8bb'),
(2, 2, 'admin', 'e6c83b282aeb2e022844595721cc00bbda47cb24537c1779f9bb84f04039e1676e6ba8573e588da1052510e3aa0a32a9e55879ae22b0c2d62136fc0a3e85f8bb');

INSERT INTO `inventory`
(`IID`, `img`, `vehicle`, `price`, `kilometer`, `colour`, `transmission`, `body`, `drivetype`, `regostrationplate`, `regostrationstatus`, `releasedate`, `stock`, `fuelEconomyCombined`)
VALUES
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Black', 'auto', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Silver', 'auto', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Dark Blue', 'auto', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'White', 'auto', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'red', 'auto', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Black', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Silver', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Dark Blue', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'White', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'red', 'auto', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),






(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Black', 'Manual', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Silver', 'Manual', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'Dark Blue', 'Manual', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'White', 'Manual', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Roadster', 300000, 100, 'red', 'Manual', 'Performance', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S P100D', 253895, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00001.jpg', 'Tesla Mode S 100D', 184685, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00009.jpg', 'Tesla Mode S 75D', 145785, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X P100D', 262775, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 100D', 189475, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00003.jpg', 'Tesla Mode X 75D', 155625, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 P100D', 150000, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 100D', 100000, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),

(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Black', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Silver', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'Dark Blue', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'White', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0),
(NULL, '00010.jpg', 'Tesla Mode 3 75D', 75000, 100, 'red', 'Manual', 'Station Wagon', '4x4', 'fgh345', '3', '2001-08-09', 'Ask seller', 0);
