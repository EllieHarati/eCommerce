<?php
	USE cartdb;
	CREATE TABLE IF NOT EXISTS products (
		item_id VARCHAR (6) NOT NULL,
		item_name VARCHAR (30)NOT NULL,
		price DECIMAL (6,2) NOT NULL,
		type VARCHAR (15) NOT NULL,
		item_date date NOT NULL,
		PRIMARY KEY (item_id)
	);
	
	INSERT INTO products VALUES
	('1001', 'Photo Frame ', '29.99', 'Homewares', '2014-5-1'),
	('1002', 'Candle Holder', '12.50', 'Homewares', '2015-2-1'),
	('1003', 'Candle', '13.50', 'Homewares', '2016-1-1'),
	('1004', 'Dinner Set ', '15:00', 'Homewares', '2016-4-1'),
	('1005', 'Caden Cushion', '10.99', 'Homewares', '2016-2-1'),
	('1006', 'Wall Clock', '10.99', 'Homewares', '2016-2-1'),
	('1007', 'Flec Throw', '10.99', 'Homewares', '2016-2-1'),
	('1008', 'Jali Vase', '10.99', 'Homewares', '2016-2-1')
?>
