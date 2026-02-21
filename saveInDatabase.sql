DROP DATABASE IF EXISTS save_in_database;
CREATE DATABASE save_in_database;

USE save_in_database;

-- CREATE table 
CREATE TABLE user
(
    id INT PRIMARY KEY NOT NULL auto_increment,
    username VARCHAR(100),
    userPassword VARCHAR(100)
);

INSERT INTO save_in_database.user (username, userPassword) VALUES ('edmond', '0123');