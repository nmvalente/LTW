<?php
include_once('events.php');
include_once('read_edit_event.php');

editEvent($_POST['id'], $_POST['date'], $_POST['description'], $_POST['type'], $_FILES['image']);

//header('Location: ' . $_COOKIE['redirect']);
?>
