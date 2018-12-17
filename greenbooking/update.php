<?php
require_once '_db.php';

$id = filter_input(INPUT_POST, 'id') or die('ID please!');
$name = filter_input(INPUT_POST, 'name') or die('Name please!');
$starttime = filter_input(INPUT_POST, 'start') or die('When to start?');
$endtime = filter_input(INPUT_POST, 'end') or die('Is it ever going to end?');
$status = filter_input(INPUT_POST, 'status') or die('whats the status?');

$sql = "UPDATE events SET name = ?, start = ?, end = ?, status = ? WHERE id = ?";
$stmt = $db->prepare($sql);

$stmt->bind_param('ssssi', $_POST['name'], $_POST['start'], $_POST['end'], $_POST['status'], $_POST['id']);
$stmt->execute();

class Result {}

    $response = new Result();
    $response->result = 'OK';
    $response->message = 'Update successful';
    
    header('Content-Type: text/plain');
    echo json_encode($response);

?>
