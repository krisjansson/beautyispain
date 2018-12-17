<?php
session_start();
ini_set('display_errors', true);

require_once('_db.php');
$status = 'free';
$name = 'Ledig tid';


$insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
$stmt = $db->prepare($insert);
$stmt->bind_param('ssss', $name, $_POST['start'], $_POST['end'], $status);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Created with id: '.$db->insert_id;

echo json_encode($response);
?>


