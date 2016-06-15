<?php
CREATE DATABASE cartdb;
USE cartdb;
CREATE TABLE customers (
	first_name VARCHAR (20) NOT NULL,
	last_name VARCHAR (30)NOT NULL,
	phone VARCHAR (10) NOT NULL,
	password VARCHAR (64) NOT NULL,
	email VARCHAR (40) NOT NULL,
	PRIMARY KEY (email)
)
?>
