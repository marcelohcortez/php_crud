<?php
require_once('.env'); //separate the DB variables

$con = new MySQLi($host,$usr,$pass,$db); //connect to the DB

if (!$con){
    die('Connection Error');
}