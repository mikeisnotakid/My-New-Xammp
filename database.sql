-- Code to create a database

CREATE DATABASE `webdev24_b`;

-- Query to drop a database 

DROP DATABASE `webdev24_b`;

-- Query to drop a table 

DROP TABLE `transaction`;


-- Query to create a table

CREATE TABLE `users`( 
    `id` INT,
     `firstname` VARCHAR(50),
     `lastname` VARCHAR(50),
     `email` VARCHAR(100),
      `gender` ENUM('MALE','FEMALE'),
       `password` VARCHAR(20) 
    );



    CREATE TABLE `item`( 
    `serial no` INT,
  `clothes` VARCHAR(40),
     `electronics` VARCHAR(40),
     `fruite` VARCHAR(40),
      `food`  VARCHAR(40),
    `accessories`  VARCHAR(40)
      
    );

    
CREATE TABLE `transaction`( `serial no` INT,  `username` VARCHAR(20), `amount` INT, `transaction_date` VARCHAR(40), `transaction_time` VARCHAR(40) );



-- how to insert to a table

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('mike', 'dev', 'mikedev@gmail.com', 'Ahm22277');
INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES ('Apiri', 'Jnr', 'apirijnr@gmail.com', 'apirij%%n$$r@@');

INSERT INTO `items_main` ( `item_name`, `item_price`, `item_qty`) VALUES ('cucumber', 400, 5 );

INSERT INTO `users_main` ( `first_name`, `last_name`, `email`, `gender`, `age` , `password`, `nationality`) VALUES ('Teekaa', 'Michael', 'teekaamichaele@gmail.com', 'MALE', 30, 'Teekaa12345678', 'Nigeria' );

INSERT INTO `transaction` (`trans_id`, `status`, `users_id`, `item_id`, `qty`, `total_price`) VALUES (1, 'SuccesFul', 1, 1, 300, 34524 );


-- how to update a table values

UPDATE `users` SET `lastname` = 'Michael' WHERE `id` = 1;


-- how to update two values in a tabke 
UPDATE `users` SET `lastname` = 'Michael', `email` = 'mikedevonly@gmail.com' WHERE `id` = 1;

UPDATE `items_main` SET `item_name` = 'Pawpaw', `item_price` = 800  WHERE `item_id` = 5;

-- how to delete a row 
DELETE FROM `users` WHERE `id` = 5 

-- how to make a filled not null 
ALTER TABLE `users` MODIFY `id` INT NOT NULL;

-- Quey to alter and make unique table

ALTER TABLE `users` ADD UNIQUE(`email`);

-- alter make primary key 
ALTER TABLE `users` ADD PRIMARY KEY(`id`);

-- how to make a default key 
ALTER TABLE `users` ALTER `password` SET DEFAULT '12345';

-- how to auto incremnet a table 
ALTER TABLE `users` AUTO_INCREMENT = 10;


-- query to create professional tables 

CREATE TABLE `users_main` (
  `users_id` INT NOT NULL AUTO_INCREMENT ,
  `first_name` VARCHAR(50) NOT NULL ,
  `last_name` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `gender` ENUM('MALE','FEMALE') NOT NULL ,
  `age` INT NOT NULL DEFAULT 1,
  `password` VARCHAR(20) NOT NULL,
  `nationality` VARCHAR(50) NOT NULL,
  `reg_date` TIMESTAMP DEFAULT current_timestamp(),
  PRIMARY KEY(`users_id`),
  UNIQUE(`email`)
  );



  CREATE TABLE `items_main` (
  `item_id` INT NOT NULL AUTO_INCREMENT, 
  `item_name` VARCHAR(50) NOT NULL , 
  `item_price` INT DEFAULT 0,
  `item_qty` INT DEFAULT 0,
  `insert_date` TIMESTAMP DEFAULT current_timestamp(),
  PRIMARY KEY(`item_id`)
  
);


-- ORDER BY 

SELECT `id` `email` FROM `users` ORDER BY `id` ASC;
SELECT `id` `email` FROM `users` ORDER BY `id` DESC;

SELECT * FROM `users` WHERE `email` LIKE '%gmail%';

SELECT * FROM `users` WHERE `id` IN (2,4,6);


-- Query to give nick name using aliases keyword

SELECT SUM(`id`) / COUNT (`id`) AS Avg FROM `users`;

-- Query to inner join

SELECT transaction.status, users_main.email, transaction.total_price FROM transaction INNER JOIN users_main ON transaction.users_id = users_main.users_id;

-- Query to inner left join

SELECT items_main.item_name , transaction.total_price FROM items_main LEFT JOIN transaction ON items_main.item_id = transaction.item_id;

-- Query to inner right join

SELECT transaction.total_price, items_main.item_name FROM items_main RIGHT JOIN transaction ON items_main.item_id = transaction.item_id; 

-- Query to group by

SELECT COUNT(nationality), nationality FROM users_main GROUP BY nationality;


-- how to create a procedure


DELIMITER //
CREATE PROCEDURE find_items()
BEGIN
SELECT * FROM `items_main` WHERE `items_price` > 500;
END //
DELIMITER ;


-- Trigger
BEGIN

SET @gender:=(SELECT gender FROM users WHERE id = NEW.id);

SET @fname:=(SELECT first_name FROM users WHERE id = NEW.id);

SET @lname:=(SELECT last_name FROM users WHERE  id = NEW.id);

IF @gender = 'MALE' THEN
 SET @title:= 'Mr';
 
ELSE 
 SET @title:= 'Mrs';
 
END IF;
SET @fullname:= CONCAT(@title, ' ', @fanme, ' ', @lname);

UPDATE users SET full_name = @fullname WHERE id = NEW.id;

END



BEGIN

SET @gender:= NEW.gender;

SET @fname:= NEW.firstname;

SET @lname:= NEW.lastname;

IF @gender = 'MALE' THEN
 SET @title:= 'Mr';
 
ELSE 
 SET @title:= 'Mrs';
 
END IF;
SET @fullname:= CONCAT(@title, ' ', @fanme, ' ', @lname);

INSERT INTO trigger_test (full-name, user_id) VALUES (@fullname, NEW.id);

END