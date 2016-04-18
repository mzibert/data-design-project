DROP TABLE IF EXISTS profile;
DROP TABLE IF EXISTS restaurants;
DROP TABLE IF EXISTS ratings;
DROP TABLE IF EXISTS reviews;
DROP TABLE IF EXISTS tags;

CREATE TABLE profile (
profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
userName VARCHAR(128) NOT NULL,
userSalt CHAR(64) NOT NULL,
userHash CHAR(128) NOT NULL,
PRIMARY KEY (profileId)
);

CREATE TABLE restaurants(
restId INT UNSIGNED AUTO_INCREMENT NOT NULL,
restName VARCHAR(128) NOT NULL,
PRIMARY KEY (restId)
);

CREATE TABLE tags(
tagsId INT UNSIGNED AUTO_INCREMENT NOT NULL,
tagsName VARCHAR(64),
PRIMARY KEY (tagsId)
);

CREATE TABLE ratings (
restId,
profileId,
rateService INT UNSIGNED MIN(1) MAX(5),
rateFood INT  UNSIGNED MIN(1) MAX(5),
rateAmbience INT UNSIGNED MIN(1) MAX(5),
rateValue INT UNSIGNED MIN(1) MAX(5),
FOREIGN KEY (restId) REFERENCES restaurants(restId),
FOREIGN KEY (profileId) REFERENCES profile(profileId),
PRIMARY KEY (restId, profileId)
);

CREATE TABLE reviews (
restId
profileId
tagName VARCHAR (64),
FOREIGN KEY (profileId) REFERENCES profile (profileId),
FOREIGN KEY (restId) REFERENCES restaurants (restId),
PRIMARY KEY (profileId, restId)
);