<?php
session_start();
include_once("events.php");

$id = $_GET['id'];
$event = getEvent($id);

if (isset($_SESSION['username'])) {
    if ($_SESSION['username'] == 'admin' || $_SESSION['username'] == $event['creator'])
        deleteEvent($id);
}

header('Location: ' . './list_events.php');
?>