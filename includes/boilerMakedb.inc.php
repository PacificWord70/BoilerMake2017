<?php

//Setting up the database stuff
$link = MySQLi_connect("lshankerdb.cdsmztpikwiw.us-west-2.rds.amazonaws.com", "lshanke", "boilerEar17MK");

if(!$link){
  $output = "Failed to connect to database server.";
  include "output.html.php";
  exit();
}

if(!MySQLi_set_charset($link, "utf8")){
  $output = "Failed to set character encoding.";
  include "output.html.php";
  exit();
}

if(!MySQLi_select_db($link, "homedb")){
  $output = "Failed to select database.";
  include "output.html.php";
  exit();
}
 

$output = "Connected to database successfully.";

?>
