CREATETABLE users (
id int(10) unsigned NOTNULL AUTO_INCREMENT,
username varchar(16) NOTNULL,
password varchar(16) NOTNULL,
email varchar(200) NOTNULL,
is_admin int(2) unsigned NOTNULL DEFAULT'0',
label varchar(16) NOTNULL,
PRIMARYKEY(id)
);

CREATETABLE questions (
id int(10) unsigned NOTNULL AUTO_INCREMENT,
authorId int(10) NOTNULL,
label varchar(16) NOTNULL,
title varchar(255) NOTNULL,
content varchar(1000) NOTNULL,
PRIMARYKEY(id)
);

CREATETABLE answers (
id int(10) unsigned NOTNULL AUTO_INCREMENT,
authorId int(10) NOTNULL,
questionId int(10) NOTNULL,
content varchar(1000) NOTNULL,
PRIMARYKEY(id)
);


