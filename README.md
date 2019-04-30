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

To get the project to run you must currently run on localhost through Xampp by
dropping the project folder (Called:ch06_tech_support Located:php-apache folder) into the htdocs folder of the xampp directory (usually placed in your main drive) and then access the localhost with localhost/ch06_tech_support/index.php

If you have netbeans and xampp you can run the intial index file from it.

The attached SQL file will auto load some random data into MySQL through myPhpAdmin. Go through the import screen to load it up.

##
