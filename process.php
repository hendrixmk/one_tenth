<?php

$mysqli = new mysqli('localhost','root','','sgm_church') or die (mysqli_error($mysqli));

if(isset($_POST['save'])){
    $date = $_POST['date'];
    $eventname = $_POST['eventname'];
    $details = $_POST['details'];

    $mysqli->query("INSERT INTO event (date, eventname, details) VALUES('$date','$eventname','$details')")
    or die ($mysqli->error);
}