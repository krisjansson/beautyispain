<?php
session_start();
ini_set('display_errors', true);

require_once('_db.php');

$insert = 'INSERT INTO events (name, start, end) VALUES (?, ?, ?)';
$stmt = $db->prepare($insert);
$stmt->bind_param('sss', $_POST['name'], $_POST['start'], $_POST['end']);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Created with id: '.$db->insert_id;

echo json_encode($response);
?>


