	'username' => 'root',
	'password' => '1234',
	'database' => 'MyQAs',

CREATE DATABASE myqas;

CREATE TABLE users (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
username varchar(16) NOT NULL,
password varchar(16) NOT NULL,
email varchar(200) NOT NULL,
is_admin int(2) unsigned NOT NULL DEFAULT 0,
label varchar(16) NOT NULL,
PRIMARY KEY(id)
);

CREATE TABLE questions (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
authorId int(10) NOT NULL,
label varchar(16) NOT NULL,
title varchar(255) NOT NULL,
content varchar(1000) NOT NULL,
created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
);

CREATE TABLE answers (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
authorId int(10) NOT NULL,
questionId int(10) NOT NULL,
content varchar(1000) NOT NULL,
created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id)
);

