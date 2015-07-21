

# projects tables
CREATE DATABASE KANOLA;
USE KANOLA;

#  Highway Construction

CREATE TABLE Highways(
    Id INT(5) AUTO_INCREMENT,
    P_id varchar(256) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Type VARCHAR(32) DEFAULT "Highways" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,   
    PRIMARY KEY(Id)
);



CREATE TABLE Irrigation(
    Id INT(5) AUTO_INCREMENT,
    P_id varchar(256) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Type VARCHAR(32) DEFAULT "Irrigation" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);



CREATE TABLE Buildings(
    Id INT(5) AUTO_INCREMENT,
    P_id varchar(256) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Type VARCHAR(32) DEFAULT "Buildings" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);



CREATE TABLE Bridges(
    Id INT(5) AUTO_INCREMENT,
    P_id varchar(256) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Type VARCHAR(64) DEFAULT "Bridge" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);


CREATE TABLE Water_Drainage(
    Id INT(5) AUTO_INCREMENT,
    P_id varchar(256) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Type VARCHAR(32) DEFAULT "Water_Drainage" NOT NULL,
    State ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL, 
    PRIMARY KEY(Id)
);






INSERT INTO Bridge (id, Title, Client , Location, srt_date, cmpt_date, Description, Project_state, Images) value ( "1233454656.json" ,"Kandy road" , "kcc", "from kandy to matale" , "2012/12/02", "2014/06/04", "this a testing project", "Ongoing", "a.jpg/b.jpg" ); 


INSERT INTO Buildings (Id, Title, Client , Location, Srt_date, Cmpt_date, Description, Project_state, Images) VALUES ('$name', '$title' , '$client', '$location' , '2012/02/15', '2015/04/21', '$description', 'Ongoing', 'images/ghrh/hrhrt/rth' );

INSERT INTO Highways (Id, Title, Client , Location, Srt_date, Cmpt_date, Description, Project_state, Images) VALUES ('20150701190214299802', 'etheth' , 'thhh4h', '4hthh' , '2015-07-17', '2015-07-22', '4thn344erbnebnth hheh f heh eh', 'Ongoing', ',../../Highways/images/20150701190214299802/01.jpg,../../Highways/images/20150701190214299802/12.jpg' );






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







