-- Create Table Form

DROP TABLE Security_Personnel;
DROP TABLE Users cascade constraints;
DROP TABLE Admin_Acct cascade constraints;
DROP TABLE Regular_Acct cascade constraints;
DROP TABLE Ticket cascade constraints;
DROP TABLE Parking_Meter cascade constraints;
DROP TABLE User_Credits cascade constraints;
DROP TABLE Schedule cascade constraints;
DROP TABLE Security_Issues cascade constraints;
DROP TABLE Security_Monitors cascade constraints;
DROP TABLE Security_Gets cascade constraints;
DROP TABLE User_Pays cascade constraints;
DROP TABLE Person cascade constraints;
DROP TABLE Account cascade constraints;

CREATE TABLE Person
(PERSONID      char(6),
 firstname     varchar(14),
 lastname      varchar(14),
 phonenumber   char(7),
 issecurity    char(1) check(issecurity IN ('y', 'n', 'Y', 'N')),
 isuser        char(1) check(isuser IN ('y', 'n', 'Y', 'N')),
 PRIMARY KEY(personid)
);

--2

CREATE TABLE Security_Personnel
( PERSONID    char(6),
  FOREIGN KEY(personid) references Person
);

 --3


CREATE TABLE Users
( credit           int,
  licenseplatenum  varchar(7),
  color            varchar(15),
  personid         char(6),
  FOREIGN KEY(personid) references Person
);

 --4


CREATE TABLE Account
( ACCOUNTID   char(8),
  username    varchar(20),
  password    varchar(20),
  personid    char(6),
  isregular   char(1) check(isregular IN ('y','n','Y','N')),
  isadmin     char(1) check(isadmin IN ('y','n','Y','N')),
  PRIMARY KEY(accountid),
  FOREIGN KEY(personid) references Person
);

--5

CREATE TABLE Admin_Acct
( ACCOUNTID   char(8),
  FOREIGN KEY(accountid) references Account
);

--6


CREATE TABLE Regular_Acct
( ACCOUNTID   char(8),
  FOREIGN KEY(accountid) references Account
);

--7


CREATE TABLE Ticket
( TICKETID      char(5),
  price         int,
  due_date      date,
  date_issued   date default sysdate,
  issuedby      char(6),
  issuedto      char(6),
  ispaid        char(1) default 'n' check(ispaid IN ('y','n','Y','N')),
  PRIMARY KEY(ticketid)
);

--8

CREATE TABLE Parking_Meter
( METERID         char(4),
  timeremaining   timestamp,
  currentuser     char(6),
  previoususer    char(6),
  usestoday       varchar(3),
  isinuse         char(1) check(isinuse IN ('y','n','Y','N')),
  PRIMARY KEY(meterid)
);

--9


CREATE TABLE Schedule
( SCHEDULEID    char(3),
  daytowork     varchar(5),
  PRIMARY KEY(scheduleid)
);

--10


CREATE TABLE Security_Issues
( PERSONID    char(6),
  ticketid    char(5),
  FOREIGN KEY(personid) references Person,
  FOREIGN KEY(ticketid) references Ticket
);

--11


CREATE TABLE Security_Monitors
( PERSONID    char(6),
  meterid     char(4),
  FOREIGN KEY(personid) references Person,
  FOREIGN KEY(meterid) references Parking_Meter
);

--12


CREATE TABLE Security_Gets
( PERSONID    char(6),
  scheduleid  char(3),
  FOREIGN KEY(personid) references Person,
  FOREIGN KEY(scheduleid) references Schedule
);


--13


CREATE TABLE User_Pays 
( PERSONID char(6),
  ticketid    char(5),
  FOREIGN KEY(personid) references Person,
  FOREIGN KEY(ticketid) references Ticket
);

--14


CREATE TABLE User_Credits
( PERSONID   char(6),
  meterid    char(4),
  FOREIGN KEY(personid) references Person,
  FOREIGN KEY(meterid) references Parking_Meter
);


describe Person
describe Security_Personnel
describe Users
describe Account
describe Admin_Acct
describe Regular_Acct
describe Ticket
describe Parking_Meter
describe Schedule
describe Security_Issues
describe Security_Monitors
describe Security_Gets
describe User_Pays
describe User_Credits
