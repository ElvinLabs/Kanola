

# projects tables


#  Highway Construction

CREATE TABLE Highways(
    Id VARCHAR(32) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Project_type VARCHAR(32) DEFAULT "Highway" NOT NULL,
    Location VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Srt_date DATE NOT NULL,
    Cmpt_date DATE NOT NULL,
    Description BLOB NOT NULL,
    Project_state ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Highways/images/" NOT NULL,
    Images VARCHAR (256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);



CREATE TABLE Irrigation(
    Id VARCHAR(32) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Project_type VARCHAR(32) DEFAULT "Irrigation" NOT NULL,
    Location VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Srt_date DATE NOT NULL,
    Cmpt_date DATE NOT NULL,
    Description BLOB NOT NULL,
    Project_state ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Irrigation/images/" NOT NULL,
    Images VARCHAR (256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);



CREATE TABLE Buildings(
    Id VARCHAR(32) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Project_type VARCHAR(32) DEFAULT "Buildings" NOT NULL,
    Location VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Srt_date DATE NOT NULL,
    Cmpt_date DATE NOT NULL,
    Description BLOB NOT NULL,
    Project_state ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Buildings/images/" NOT NULL,
    Images VARCHAR (256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);



CREATE TABLE Bridge(
    Id VARCHAR(32) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Project_type VARCHAR(64) DEFAULT "Bridge" NOT NULL,
    Location VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Srt_date DATE NOT NULL,
    Cmpt_date DATE NOT NULL,
    Description BLOB NOT NULL,
    Project_state ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Bridge/images/" NOT NULL,
    Images VARCHAR (256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);


CREATE TABLE Water_Drainage(
    Id VARCHAR(32) NOT NULL,
    Title VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Client VARCHAR (256) DEFAULT "NOT ADDED" NOT NULL,
    Project_type VARCHAR(32) DEFAULT "Water_Drainage" NOT NULL,
    Location VARCHAR(256) DEFAULT "NOT ADDED" NOT NULL,
    Srt_date DATE NOT NULL,
    Cmpt_date DATE NOT NULL,
    Description BLOB NOT NULL,
    Project_state ENUM("Ongoing","Complete") DEFAULT "Ongoing" NOT NULL,
    Img_dir VARCHAR(128) DEFAULT "Water_Drainage/images/" NOT NULL,
    Images VARCHAR (256) DEFAULT "http://placehold.it/800x500" NOT NULL,
    PRIMARY KEY(Id)
);






INSERT INTO Bridge (id, Title, Client , Location, srt_date, cmpt_date, Description, Project_state, Images) value ( "1233454656.json" ,"Kandy road" , "kcc", "from kandy to matale" , "2012/12/02", "2014/06/04", "this a testing project", "Ongoing", "a.jpg/b.jpg" ); 


INSERT INTO Buildings (Id, Title, Client , Location, Srt_date, Cmpt_date, Description, Project_state, Images) VALUES ('$name', '$title' , '$client', '$location' , '2012/02/15', '2015/04/21', '$description', 'Ongoing', 'images/ghrh/hrhrt/rth' );








# kanola sale

CREATE TABLE Auto(
    Id VARCHAR(32) NOT NULL,
    Categoty VARCHAR(32) NOT NULL,
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




