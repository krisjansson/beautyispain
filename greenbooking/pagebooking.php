<?php
session_start();
require_once '_db.php';

$bhtime = filter_input(INPUT_POST, 'bhtime') or die('Missing or illegal parameter1');
$startDate = filter_input(INPUT_POST, 'date') or die('Missing or illegal parameter8');

$onlyBhtime = substr($bhtime, 0, 8);

$insert = "SELECT id, start, end from events WHERE duration >= ? AND status = 'free' AND start >= NOW() ORDER BY start 
LIMIT 8"; //Number of avalible dates
$stmt = $db->prepare($insert);
$stmt->bind_param('s', $bhtime);
$stmt->execute();
$stmt->store_result();
$num_of_rows = $stmt->num_rows;
$stmt->bind_result($id, $start, $end);


while ($stmt->fetch()) {
    //$date = DateTime::createFromFormat("Y-m-d H:i:s", $start)->format("Y/m/d");
    $date = $start;
    //Only time from Datetime
    //$starttime = date("H:i:s",strtotime($start)).'<br>';//skal kun bruges som display MÅ IKKE BRUGES SOM VÆRDI AT REGNE EFTER
    //$endtime = date("H:i:s",strtotime($end)).'<br>';//skal kun bruges som display MÅ IKKE BRUGES SOM VÆRDI AT REGNE EFTER

    //duration in minuts
    sscanf($bhtime, "%d:%d:%d", $hours, $minutes, $seconds);
    $durToSec = isset($seconds) ? $hours * 3600 + $minutes * 60 + $seconds : $hours * 60 + $minutes;
    $durInMin = ($durToSec/60). 'minutes'. '<br>'; 

    //duration minus closingtime.
    $latestStartTime = (new DateTime($end))->sub(DateInterval::createFromDateString($durInMin))->format("Y-m-d H:i:s");//duration minus closingtime.


    $now = new DateTime($start);
    $latest = new DateTime($latestStartTime);

    ?><form action="search.php" method="post" enctype="multipart/form-data">
            <input type="hidden"  name="date" value="<?php echo $date ?>" />
            <input type="hidden"  name="id" value="<?php echo $id ?>" />
            <input type="hidden"  name="start" value="<?php echo $start ?>" />
            <input type="hidden"  name="end" value="<?php echo $end ?>" />
            <input type="hidden"  name="duration" value="<?php echo $bhtime ?>" />
    <select name="startselect"><?php
    while ($now <= $latest) {
    echo "<option>".$now->format('Y-m-d H:i:s')."</option>";
    $now->modify('+15 minutes');
    }?></select><button type="submit">book</button></form><?php  

}



                        

