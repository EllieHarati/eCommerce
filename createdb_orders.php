<?php
	USE cartdb;
	CREATE TABLE IF NOT EXISTS orders (
		order_id VARCHAR (30) NOT NULL,
		email VARCHAR (30) NOT NULL,
		total_amount decimal (6,2) NOT NULL,
		status VARCHAR (15) NOT NULL,
		PRIMARY KEY (order_id)
	);

	/* add order_line_id as the primary key if you want*/
	CREATE TABLE IF NOT EXISTS order_line (
		order_id VARCHAR (30) NOT NULL,
		item_id VARCHAR (6) NOT NULL,
		qty int (4) NOT NULL
	);
?>
