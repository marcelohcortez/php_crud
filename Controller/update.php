<?php
if(!isset($_POST['update'])){ //avoid direct access
    echo 'Don\'t try direct access';
    return;
}

require_once('../Model/connection.php');

$userID = $_POST['id'];
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userAge = $_POST['age'];

$query = "update records set User_Name='".$userName."', User_Email='".$userEmail."', User_Age='".$userAge."' where User_ID='".$userID."'";  //generate the query
$result = $con->query($query); //register the query

if(!result){
    echo 'Please check your query';
    return;
}

header("location:../View/view.php");