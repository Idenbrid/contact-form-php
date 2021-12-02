# contact-us-php
a simple contact us form for php, this will run only in php server 

## For Mail
 - this feature will only work on live server
 - copy send_contact_mail.php into index.php
 - from emails should be created from your domain server
 - to email could be any

## For DB
 - copy save_in_database.php into index.php
 - run following query in the data base to create table and than connect DB with this project.
 - CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

## Note
- in case you want to run this project in live server than change the user name and database name acordingly right now its set for localhost
