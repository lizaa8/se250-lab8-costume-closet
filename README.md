Campus Costume Closet - SE 250 Lab 9

Overview

For this lab, I created a simple costume loan system using PHP and MySQL. It keeps track of costumes that students borrowed and whether they have been returned.

What it does

Add new costume loans with an item, borrower, and due date

Display all loans in a table

Mark costumes as returned

Delete loans from the list

How I built it

I used HTML for the forms and tables, PHP to handle the different actions, and MySQL to store the loan information. I used XAMPP to run the website locally and phpMyAdmin to set up the database.

I also used prepared statements when adding new loans to help prevent SQL injection.

Screenshots

The screenshots folder contains two pictures:

loans.png - Shows the list of costume loans

returned.png - Shows the list after marking a costume as returned

Files

list.php - Displays all loans

add.php - Adds new loans

mark_returned.php - Marks a loan as returned

delete.php - Deletes a loan

costume_closet.sql - Contains the database

Author

Elizabeth Homich
