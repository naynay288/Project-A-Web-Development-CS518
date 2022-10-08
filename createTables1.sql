
CREATE TABLE userprofile(
	firstname varchar(50) DEFAULT NULL,
	lastname varchar(50) DEFAULT NULL,
	email varchar(50) DEFAULT NULL,
	password varchar(1024) DEFAULT NULL,
	CONSTRAINT PK_userprofile PRIMARY KEY (email)
)
