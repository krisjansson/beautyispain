<?php
session_start();
ini_set('display_errors', true);

require_once('_db.php');

$id = filter_input(INPUT_POST, 'kundeformID') or die('Missing or illegal un parameter1');
$customername = filter_input(INPUT_POST, 'customername') or die('Missing or illegal un parameter2');
$treatment = filter_input(INPUT_POST, "treatment") or die('Missing or illegal un parameter2');	
$date = filter_input(INPUT_POST, 'date') or die('Missing or illegal un parameter4');	
$phone = filter_input(INPUT_POST, 'phone') or die('Missing or illegal un parameter5');	
$startselect = filter_input(INPUT_POST, 'startselect4') or die('Missing or illegal un parameter7');	
$duration = filter_input(INPUT_POST, 'onlyBhtime') or die('Missing or illegal un parameter7');
$email = filter_input(INPUT_POST, 'email') or die('Missing or illegal un parameter8');
$start = filter_input(INPUT_POST, 'start') or die('Missing or illegal un parameter9');
$end = filter_input(INPUT_POST, 'end') or die('Missing or illegal un parameter10');
$comment = filter_input(INPUT_POST, 'comment') or die('Missing or illegal un parameter11');

$status = 'kundeaftale';
$name = $treatment;

echo "id .$id. <br>";
echo "Kundenavn .$customername. <br>";
echo "Hehandling .$treatment. <br>";
echo "dato for behandlings tid .$date. <br>";
echo "tlf .$phone. <br>";
echo "start tidspunkt .$startselect. <br>";
echo "behandlingslængde .$duration. <br>";
echo "email .$email. <br>";
echo "Kommentar .$comment. <br>";
echo "Aftale nr. (skal vi sikkert ikke bruge. .$id. <br>";


//duration in minuts
sscanf($duration, "%d:%d:%d", $hours, $minutes, $seconds);
$durToSec = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;
$durInMin = ($durToSec/60). 'minutes'; 

$appointmentEnd = (new DateTime($startselect))->add(DateInterval::createFromDateString($durInMin))->format("Y-m-d H:i:s");

$insert = 'INSERT INTO events (name, comment, customername, treatment, phone, email, start, end, status, duration) VALUES (?,?,?,?,?,?,?,?,?,?)';
$stmt = $db->prepare($insert);
$stmt->bind_param('ssssssssss', $name, $comment, $customername, $treatment, $phone, $email, $startselect, $appointmentEnd, $status, $duration);
$stmt->execute();
$stmt->store_result();
$stmt->close();



//Delet the original appoinment
require_once '_db.php';
$insert = "DELETE FROM events WHERE id = ?";
$stmt = $db->prepare($insert);
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->close();



if($start<$startselect){

    require_once('_db.php');
    $status = 'free';
    $name = 'Ledig tid';

    $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
    $stmt = $db->prepare($insert);
    $stmt->bind_param('ssss', $name, $start, $startselect, $status);
    $stmt->execute();

}


if($appointmentEnd<$end){

    require_once('_db.php');
    $status = 'free';
    $name = 'Ledig tid';

    $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
    $stmt = $db->prepare($insert);
    $stmt->bind_param('ssss', $name, $appointmentEnd, $end, $status);
    $stmt->execute();

}

