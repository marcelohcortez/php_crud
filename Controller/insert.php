<?php
if(!isset($_POST['submit'])){ //avoid direct access
    echo 'Don\'t try direct access';
    return;
}

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])){ //verify if the fields have content
    echo 'Please fill the form properly';
    return;
}

require_once('../Model/connection.php');

//grab the fields content
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userAge = $_POST['age'];

$query = "insert into records (User_Name, User_Email, User_Age) values ('$userName','$userEmail','$userAge')"; //generate the query
$result = $con->query($query); //register the query

if(!$result){ //if the query was registered
    echo 'Please check your registration';
    return;
}

header("location:../View/view.php");