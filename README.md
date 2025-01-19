# PHP MySQL App

A PHP-based web application for managing data with MySQL.

## About

This project is designed to help users manage data using a web interface built with PHP and MySQL. It includes features such as data entry, data retrieval, and data manipulation.

## Features

- User authentication and authorization
- Data entry forms
- Data retrieval and display
- Data update and delete functionality

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/97mohammed/php-mysql-app.git
    ```

2. Navigate to the project directory:
    ```bash
    cd php-mysql-app
    ```

3. Import the database schema:
    ```sql
    mysql -u username -p database_name < database/schema.sql
    ```

4. Configure the database connection in `config.php`:
    ```php
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```







