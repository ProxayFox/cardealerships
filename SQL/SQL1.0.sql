-- Creat the DataBase
CREATE DATABASE kencars;

-- creat SQL Table register
-- CPID   = Presenting Constion Identification
-- LID    = Login Identiforcation
CREATE TABLE clientProfile (
  CPID int(11) NOT NULL AUTO_INCREMENT,
  fName VARCHAR(50) NULL,
  lName VARCHAR(50) NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  mPhone VARCHAR(12) NOT NULL UNIQUE,
  address VARCHAR(255) NULL,
  city VARCHAR(100) NULL,
  state VARCHAR(50) NULL,
  postcode VARCHAR(4) NULL,
  country VARCHAR (75) NULL,
  PRIMARY KEY (CPID)
);

-- Creat SQL table users
-- LID    = Login Identification
-- PWD    = Password, going to be using SHA-512
CREATE TABLE login (
  LID int(11) NOT NULL AUTO_INCREMENT,
  CPID int(11) NOT NULL,
  UName VARCHAR(100) NOT NULL UNIQUE,
  PWD VARCHAR(150) NOT NULL,
  PRIMARY KEY (LID),
  FOREIGN KEY (CPID) REFERENCES clientProfile(CPID)
);

-- creat SQL table with Booking infomation
-- BID    = Booding Identifircation
-- LID    = Login Identification
CREATE TABLE booking (
  BID INT(11) NOT NULL AUTO_INCREMENT,
  LID INT(11) NOT NULL,
  bookingDate DATE NULL,
  bookingTime TIME NULL,
  PRIMARY KEY (BID),
  FOREIGN KEY (LID) REFERENCES login(LID)
);