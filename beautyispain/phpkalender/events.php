<?php
session_start();
ini_set('display_errors', true);
require_once('_db.php');

    class Event {}
    $events = array();

    $sql = 'SELECT id, name, start, end, status FROM events WHERE status <>"free"';
    $stmt = $db->prepare($sql);
	  $stmt->execute();
	  $stmt->bind_result($id, $name, $start, $end, $status);
    $result = $stmt->get_result();
    
    while($row = $result->fetch_object('Event')) {
      $events[] = $row;
      foreach($result as $row) {
        $e = new Event();
        $e->id = $row['id'];
        $e->text = $row['name'];
        $e->start = $row['start'];
        $e->end = $row['end'];
        $e->status = $row['status'];
        $events[] = $e;
        }
      
      echo json_encode($events);
    }

    