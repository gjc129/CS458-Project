-- Create Table Form

drop table Security_Personnel;
drop table Users cascade constraints;
drop table Admin_Acct cascade constraints;
drop table Regular_Acct cascade constraints;
drop table Ticket cascade constraints;
drop table Parking_Meter cascade constraints;
drop table User_Credits cascade constraints;
drop table Schedule cascade constraints;
drop table Security_Issues cascade constraints;
drop table Security_Monitors cascade constraints;
drop table Security_Gets cascade constraints;
drop table User_Pays cascade constraints;
drop table Person cascade constraints;
drop table Account cascade constraints;

CREATE TABLE Person
(PERSONID      char(6),
 firstname     varchar(14),
 lastname      varchar(14),
 phonenumber   char(10),
 issecurity    char(1) check(issecurity IN ('y', 'n', 'Y', 'N')),
 isuser        char(1) check(isuser IN ('y', 'n', 'Y', 'N')),
 primary key (personid)
);

--2

CREATE TABLE Security_Personnel
( PERSONID    char(6),
  foreign key(personid) references Person
);

 --3


CREATE TABLE Users
( credit           int,
  licenseplatenum  varchar(8),
  color            varchar(15),
  personid         char(6),
  foreign key(personid) references Person
);

 --4


CREATE TABLE Account
( ACCOUNTID   char(8),
  username    varchar(20),
  password    varchar(20),
  personid    char(6),
  isregular   char(1) check(isregular IN ('y','n','Y','N')),
  isadmin     char(1) check(isadmin IN ('y','n','Y','N')),
  primary key (accountid),
  foreign key (personid) references Person
);

--5

CREATE TABLE Admin_Acct
( ACCOUNTID   char(8),
  foreign key (accountid) references Account
);

--6


CREATE TABLE Regular_Acct
( ACCOUNTID   char(8),
  foreign key (accountid) references Account
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
  primary key (ticketid)
);

--8

CREATE TABLE Parking_Meter
( METERID         char(4),
  metercredit     int,
  currentuser     char(6),
  previoususer    char(6),
  usestoday       varchar(3),
  isinuse         char(1) check(isinuse IN ('y','n','Y','N')),
  primary key(meterid)
);

--9

CREATE TABLE Schedule
( SCHEDULEID    char(3),
  daytowork     varchar(5),
  primary key(scheduleid)
);

--10


CREATE TABLE Security_Issues
( PERSONID    char(6),
  ticketid    char(5),
  foreign key(personid) references Person,
  foreign key(ticketid) references Ticket
);

--11


CREATE TABLE Security_Monitors
( PERSONID    char(6),
  meterid     char(4),
  foreign key(personid) references Person,
  foreign key(meterid) references Parking_Meter
);

--12


CREATE TABLE Security_Gets
( PERSONID    char(6),
  scheduleid  char(3),
  foreign key(personid) references Person,
  foreign key(scheduleid) references Schedule
);


--13


CREATE TABLE User_Pays 
( PERSONID char(6),
  ticketid    char(5),
  foreign key(personid) references Person,
  foreign key(ticketid) references Ticket
);

--14


CREATE TABLE User_Credits
( PERSONID   char(6),
  meterid    char(4),
  foreign key(personid) references Person,
  foreign key(meterid) references Parking_Meter
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
