<?php
session_start();
ini_set('display_errors', true);
require_once('_db.php');


$insert = "SELECT status, start, end FROM events WHERE id = ?";
$stmt = $db->prepare($insert);
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
$stmt->store_result();
$num_of_rows = $stmt->num_rows;
$stmt->bind_result($status, $start, $end);


$insert = "DELETE FROM events WHERE id = ?";
$stmt = $db->prepare($insert);
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();

if($status != 'free'){

    $status2 = 'free';
    $name = 'Ledig tid';


    $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
    $stmt = $db->prepare($insert);
    $stmt->bind_param('ssss', $name, $start, $end, $status2);
    $stmt->execute();

    }




class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Delete successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
