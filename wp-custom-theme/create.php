<?php
session_start();
ini_set('display_errors', true);

// $name = filter_input(INPUT_POST, 'name') or die('name?');
// $start = filter_input(INPUT_POST, 'start') or die('When to start?');
// $end = filter_input(INPUT_POST, 'end') or die('Is it ever going to end?');

require_once('_db.php');

// $sql = 'INSERT INTO events (name, start, end) VALUES (?,?,?)';
// $stmt = $db->prepare($sql);
// $stmt->bind_param('sss', $name, $start, $end);
// $stmt->execute();

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