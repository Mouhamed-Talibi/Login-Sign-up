-- create database : 
CREATE DATABASE IF NOT EXISTS members;
USE members;

-- create users table : 
CREATE TABLE IF NOT EXISTS users(
    username VARCHAR(20) NOT NULL,
    password VARCHAR(30) NOT NULL
);