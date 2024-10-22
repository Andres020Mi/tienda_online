<?php

$cnx = new mysqli("localhost", "root", "", "", "3306");


$cnx->query("CREATE DATABASE IF NOT EXISTS online_store"); 
$cnx->select_db("online_store"); 


$cnx->query("CREATE TABLE IF NOT EXISTS buyers (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    name VARCHAR(250) NOT NULL, 
    email VARCHAR(250) NOT NULL, 
    phone INT(20) NOT NULL, 
    password VARCHAR(250) NOT NULL, 
    age INT NOT NULL, 
    money INT NOT NULL 
)"); 


$cnx->query("CREATE TABLE IF NOT EXISTS sellers (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    name VARCHAR(250) NOT NULL, 
    email VARCHAR(250) NOT NULL, 
    phone INT(20) NOT NULL, 
    password VARCHAR(250) NOT NULL, 
    age INT NOT NULL, 
    money INT NOT NULL 
)"); 


$cnx->query("CREATE TABLE IF NOT EXISTS products (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    name VARCHAR(250) NOT NULL, 
    URL_img TEXT NOT NULL, 
    description TEXT NOT NULL, 
    price INT NOT NULL, 
    seller_id INT NOT NULL, 
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (seller_id) REFERENCES sellers(id) 
)");


$cnx->query("CREATE TABLE IF NOT EXISTS sales (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    seller_id INT NOT NULL, 
    buyer_id INT NOT NULL, 
    product_id INT NOT NULL, 
    quantity INT NOT NULL, 
    FOREIGN KEY (seller_id) REFERENCES sellers(id), 
    FOREIGN KEY (buyer_id) REFERENCES buyers(id), 
    FOREIGN KEY (product_id) REFERENCES products(id) 
)");


$cnx->close(); 
?>
