#generating database
DROP DATABASE IF EXISTS STUMPED;
CREATE DATABASE STUMPED;
USE STUMPED;

#generating tables
CREATE TABLE MAIL(
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	EMAIL VARCHAR(100),
	UNIQUE(EMAIL)
);

CREATE TABLE USERTYPE (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TYPE VARCHAR(15)
);

CREATE TABLE USER (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USERTYPEID INT NOT NULL,
	EMAIL VARCHAR(100) NOT NULL,
	PASSWORD VARCHAR(255),
	ISVERIFIED INT NOT NULL DEFAULT 0,
	UNIQUE (Email),
	FOREIGN KEY (USERTYPEID) REFERENCES USERTYPE(ID)
);

CREATE TABLE EVENT (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USERTYPEID INT NOT NULL,
	NAME VARCHAR(255),
	STARTTIME VARCHAR(255),
	ENDTIME VARCHAR(255),
	LOCATION VARCHAR(255),
	LOCATIONLINK VARCHAR(255),
	DESCRIPTION VARCHAR(255),
	LINK VARCHAR(255)
);

CREATE TABLE CONTACTTYPE (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TYPE VARCHAR(15)
);

CREATE TABLE CONTACT (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	CONTACTTYPEID INT NOT NULL,
	
	TITLE VARCHAR(255),
	FIRSTNAME VARCHAR(255),
	LASTNAME VARCHAR(255),
	
	USERTYPEID INT NOT NULL,
	
	GENDER VARCHAR(255),
	AGEGROUP VARCHAR(255),
	EMAIL VARCHAR(100),
	PHONENUMBER VARCHAR(100),
	SUBJECT VARCHAR(255),
	MESSAGE VARCHAR(255),
	FOREIGN KEY (CONTACTTYPEID) REFERENCES CONTACTTYPE(ID)
);

#some initial population
INSERT INTO USERTYPE (TYPE) VALUES ('ADMIN'), ('PROFESSIONAL'), ('PATIENT');
INSERT INTO CONTACTTYPE (TYPE) VALUES ('CONTACT'), ('STORY'), ('EVENT');

INSERT INTO EVENT (
	USERTYPEID,
	NAME,
	STARTTIME,
	ENDTIME,
	LOCATION,
	LOCATIONLINK,
	DESCRIPTION,
	LINK
	) VALUES (
	'3',
	'Google I/O',
	'Tue May 13 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Tue May 13 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Google IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'3',
	'Microsoft Convergence',
	'Sat April 28 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Sat April 28 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Microsoft IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'3',
	'Microsoft Build Developer Conference',
	'Mon June 7 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Sun June 17 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Microsoft IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Apple Special Event',
	'Thu July 19 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Thu July 19 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Apple IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Apple Keynote',
	'Thu April 19 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Thu April 19 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Apple IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Chrome Developer Summit',
	'Mon December 3 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Fri December 7 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Chrome IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	);	


/*
INSERT INTO CONTACT (
	CONTACTTYPEID,
	TITLE,
	FIRSTNAME,
	LASTNAME,
	USERTYPE,
	GENDER,
	AGEGROUP,
	EMAIL,
	PHONENUMBER,
	SUBJECT,
	MESSAGE
	) VALUES (
	2,
	'DR',
	'Samuel',
	'Watson',
	'patient',	
	'MALE',
	'45',
	's.watson@uni.com',
	'07558746988',
	'I used to hate myself',
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa.'
);

INSERT INTO CONTACT (
	CONTACTTYPEID,
	TITLE,
	FIRSTNAME,
	LASTNAME,
	USERTYPE,
	GENDER,
	AGEGROUP,
	EMAIL,
	PHONENUMBER,
	SUBJECT,
	MESSAGE
	) VALUES (
	2,
	'DR',
	'James',
	'Hooper',
	'patient',	
	'MALE',
	'45',
	'j.hooper@uni.com',
	'07776581477',
	'That was really tough',
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa.'
);
*/