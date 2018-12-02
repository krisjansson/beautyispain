<?php
require_once '_db.php';

$insert = "UPDATE events SET start = ?, end = ? WHERE id = ?";

$stmt = $db->prepare($insert);

$stmt->bind_param(':ssi', $_POST['newStart'], $_POST['newEnd'], $_POST['id']);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
