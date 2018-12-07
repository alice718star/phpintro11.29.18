<?php session_start(); //grab session variables
session_destroy(); //destroy them
header('location:contact.php');
//this takes user back to contact page
?>