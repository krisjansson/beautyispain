<?php
session_start();
ini_set('display_errors', true);
require_once('_db.php');

$date = filter_input(INPUT_POST, 'date') or die('Missing or illegal un parameter1');	
$id = filter_input(INPUT_POST, 'id') or die('Missing or illegal un parameter2');	
$startselect = filter_input(INPUT_POST, 'startselect') or die('Missing or illegal un parameter4');	
$duration = filter_input(INPUT_POST, 'duration') or die('Missing or illegal un parameter5');
$start = filter_input(INPUT_POST, 'start') or die('Missing or illegal un parameter9');
$end = filter_input(INPUT_POST, 'end') or die('Missing or illegal un parameter10');


echo 'date ' . $date. '<br>';
echo 'id '. $id . '<br>';
echo 'starttid for select ' . $startselect. '<br>';
echo 'duration ' . $duration. '<br>';
echo 'start ' . $start. '<br>';
echo 'end ' . $end. '<br>';


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="kundebook.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="hidden" name="start" value="<?php echo $start ?>">
<input type="hidden" name="end" value="<?php echo $end ?>">
  <fieldset>
    <legend>Book en behandling:</legend>
    Navn:<br>
    <input type="text" name="customername" value="" placeholder="Navn">
    <br>
    Book tid til følgende behandling:<br>
    <input type="text" name="treatment" value="behandling">
    <br>
    Dato:<br>
    <input type="text" name="date" value="<?php echo $date ?>">
    <br>
    Telefon:<br>
    <input type="text" name="phone" value="">
    <br>
    Email:<br>
    <input type="text" name="email" value="">
    <br>
    Start tid:<br>
    <input type="text" name="startselect" value="<?php echo $startselect ?>">
    <br>
    Behandlingens varighed:<br>
    <input type="text" name="duration" value="<?php echo $duration ?>">
    <br>
    <br>
    <input type="submit" value="Book ovenstående tid">
  </fieldset>
</form>
    
</body>
</html>