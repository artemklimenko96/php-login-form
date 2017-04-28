# php-login-form
A simple php login form which saves validated emails and enctypted passwords into a MySQL database.

## Motivation
This project is intended as a solution for a test assignment from LianaTech for a position of a back-end developer.

## Installation
Find database export files in a "database" folder. The database contains two columns - "email and password", email is a Primary Key.
The database name is "credentials", table name is "users". All the connection data is stored in "dbconnect.php" file. Deploy the database and allocate the folder on an apache server. Use of XAMPP is recommended.

## Some technical information
Email validation is done through PHP's filter_var() function. Password is encrypted via SHA1 before being stored in database for a better security. Using prepared statements, generated through $mysqli->prepare() in order to protect from MySQL injections. 
All the database connection data is outsoursed into a separate file "dbconnect.php".
