<?php
session_start();
ini_set('display_errors', true);

require_once('_db.php');
//$status = 'Aftale indgået';

$behave = filter_input(INPUT_POST, 'behave') or die('Missing or illegal un parameter1');
$start = filter_input(INPUT_POST, 'start') or die('Missing or illegal un parameter9');
$end = filter_input(INPUT_POST, 'end') or die('Missing or illegal un parameter10');
$name = filter_input(INPUT_POST, 'name') or die('Missing or illegal un parameter10');
$status = filter_input(INPUT_POST, 'status') or die('Missing or illegal un parameter10');


if($behave == 'doublebook'){

$insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
$stmt = $db->prepare($insert);
$stmt->bind_param('ssss', $name, $start, $end, $status);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Created with id: '.$db->insert_id;

echo json_encode($response);

} 

if($behave == 'slet'){
    
         $insert = "SELECT id, end, start FROM events WHERE end >= ? AND start <= ? AND status = 'free'"; 
         $stmt = $db->prepare($insert);
         $stmt->bind_param('ss', $end, $start);
         $stmt->execute();
         $stmt->store_result();
         $num_of_rows = $stmt->num_rows;
         $stmt->bind_result($id, $endOLD, $startOLD);
         
         while ($stmt->fetch()) {
            echo $id, $startOLD, $endOLD;
        }

        $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
        $stmt = $db->prepare($insert);
        $stmt->bind_param('ssss', $name, $start, $end, $status);
        $stmt->execute();

        if($startOLD<$start){

            require_once('_db.php');
            $status = 'free';
            $name = 'Ledig tid';
        
            $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
            $stmt = $db->prepare($insert);
            $stmt->bind_param('ssss', $name, $startOLD, $start, $status);
            $stmt->execute();
        
        }
        
        
        if($end<$endOLD){
        
            require_once('_db.php');
            $status = 'free';
            $name = 'Ledig tid';
        
            $insert = 'INSERT INTO events (name, start, end, status, duration) VALUES (?, ?, ?, ?, TIMEDIFF(end, start))';
            $stmt = $db->prepare($insert);
            $stmt->bind_param('ssss', $name, $end, $endOLD, $status);
            $stmt->execute();
        
        }

        $insert = "DELETE FROM events WHERE id = ?";
        $stmt = $db->prepare($insert);
        $stmt->bind_param('i', $id);
        $stmt->execute();


}      



?>


