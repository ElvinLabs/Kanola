

# projects tables
CREATE DATABASE KANOLA;
USE KANOLA;

#  Highway Construction

CREATE TABLE Highways(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT  NOT NULL,
    Type VARCHAR(32) DEFAULT "Highways" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,   
    PRIMARY KEY(Id)
);



CREATE TABLE Irrigation(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT   NOT NULL,
    Type VARCHAR(32) DEFAULT "Irrigation" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);



CREATE TABLE Buildings(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT   NOT NULL,
    Type VARCHAR(32) DEFAULT "Buildings" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);



CREATE TABLE Bridges(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT   NOT NULL,
    Type VARCHAR(64) DEFAULT "Bridge" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);


CREATE TABLE Water_Drainage(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT  NOT NULL,
    Type VARCHAR(32) DEFAULT "Water_Drainage" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);


CREATE TABLE Interlock(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT  NOT NULL,
    Type VARCHAR(32) DEFAULT "Interlock" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);


CREATE TABLE Asphalt(
    Id INT(5) AUTO_INCREMENT,
    P_id VARCHAR(256) NOT NULL,
    Title TEXT   NOT NULL,
    Type VARCHAR(32) DEFAULT "Asphalt" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);










# kanola sale

CREATE TABLE Auto(
    Id VARCHAR(32) NOT NULL,
    Category VARCHAR(32) NOT NULL,
    Brand VARCHAR(16) NOT NULL,
    Model VARCHAR(64) NOT NULL,
    Model_yr YEAR(4) NOT NULL,
    Cdtn ENUM("New", "Used", "Recondition") DEFAULT "New" NOT NULL,
    Mileage VARCHAR(64) NOT NULL,
    Transmition ENUM("Automatic", "Manual", "Other") DEFAULT "Other",
    Eng_cap VARCHAR(64) NOT NULL,
    Fuel_type ENUM("Diesel", "Petrol" ,"Other") DEFAULT "Other" NOT NULL,
    Location VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Auto/images" NOT NULL,
    Images VARCHAR(256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);


CREATE TABLE Heavy(
    Id VARCHAR(32) NOT NULL,
    Categoty VARCHAR(32) NOT NULL,
    Brand VARCHAR(16) NOT NULL,
    Model VARCHAR(64) NOT NULL,
    Model_yr YEAR(4) NOT NULL,
    Location VARCHAR(256) NOT NULL,
    Description BLOB NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Heavy/images" NOT NULL,
    Images VARCHAR(256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);



#image tables for project sliders


CREATE TABLE Ongoing_img(
    Id INT(3) AUTO_INCREMENT,
    Path VARCHAR(256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    AltText TEXT NOT NULL,
    PRIMARY KEY(Id)
);


CREATE TABLE Finished_img(
    Id INT(3) AUTO_INCREMENT,
    Path VARCHAR(256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    AltText TEXT NOT NULL,
    PRIMARY KEY(Id)
);


CREATE TABLE Users (
    user_id INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    username VARCHAR( 25 ) NOT NULL ,
    email VARCHAR( 35 ) NOT NULL ,
    Password VARCHAR( 50 ) NOT NULL ,
    UNIQUE (email),
    UNIQUE (username)
) ENGINE = MYISAM ;




