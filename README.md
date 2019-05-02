## Application Documentation

## Project Name
 
 SportsPro Technical Support

## Team Members 

GW Jilich Kai Loring Chase Robinson Anthony McKinney



Project Agile Sprint 1
2/28/2019

The goal of this project is to create a web-based interface.
The website will be a customer manger database.

##

Using CRUD the website will be able to Create,Read,Update, and Delete transaction records for users.

## Files

    1. Customer View Page
      - Web page to view customer information
    2. Customer Update Page
      - Web page to update customer information
    3. docker-compose.yml
      - Configuration file containing the Docker images  necessary to run the application.
    4. run_container.sh
      - Startup script to build the application using Docker
    5. tech_support.sql
      - database with preloaded information

## Directories

### adr

This directory contains adr files used to document decisions regarding the application.

### apache-php

This directory contains all of the files for the tech  support/customer manager application.

##

Project Agile Sprint 2
4/14/2019
##

Container volumes are not currently working correctly.

To get the project to run you must currently run on localhost through Xampp by dropping the project folder (Called:ch06_tech_support Located:php-apache folder) into the htdocs folder of the xampp directory (usually placed in your main drive) and then access the localhost with localhost/ch06_tech_support
If you have netbeans and xampp you can run the initial index file from it.

##

##

Agile Sprint 3

5/2/2019

## Updates

Container volumes have been fixed 

To get the project to run use the docker command

  - docker-compose up -d
  
Will start the mysql database and the my php-webserver
hosted on localhost:8080

To stop the project use

- docker-compose down
 
We also added a plug-in style architecture and request response messaging to fulfill all requirements for the Final Project.

## Directories
 
### adr

This directory contains adr files used to document decisions regarding the application.

### apache-php

This directory contains all of the files for the tech  support/customer manager application.

### mysql
 
Loads all of the data for the website into the database and displays it on the webserver. This allows data to be persist 
 
 
### webserver
 
 
 
  index.php 
 -  web-app that Contains all of the CRUD components with a persistent Database.
  

 
 1. Manage Products
 	- allows you to Add and Delete products
 2. Manage Technicians
 	- allows you to Create and Add Technicians
 3. Manage Customers
 	- allows you to Search Customers records
 4.  Register Product
 	- allows you to Create and Update Product Records 
  
 
 
 
 
 
