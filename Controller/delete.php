<?php
if(!isset($_GET['Del_ID'])){ //avoid direct access
    echo 'Don\'t try direct access';
    return;
}

require_once('../Model/connection.php');

$userID = $_GET['Del_ID'];

$query = "delete from records where User_ID='".$userID."'";  //generate the query
$result = $con->query($query); //register the query

if(!result){
    echo 'Please check your query';
    return;
}

header("location:../View/view.php");