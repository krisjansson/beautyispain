<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aftale</title>
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />    
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            // check the input
            is_numeric($_GET['id']) or die("invalid URL");
            
            require_once '_db.php';
            
            $stmt = $db->prepare('SELECT id, name, start, end, status FROM events WHERE id = ?');
            $stmt->bind_param('i', $_GET['id']);
            $stmt->execute();
            $stmt->bind_result($id, $name, $start, $end, $status);
            $result = $stmt->get_result();

            class Event {}
            $events = array();

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
                  
                //echo json_encode($events);
              };

            

        ?>

        
        <form id="f" style="padding:20px;" action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php print $_GET['id'] ?>" />
            <h1>Aftale</h1>
            <div>Name: </div>
            <div><input type="text" id="name" name="name" value="<?php print $e->text ?>" /></div>
            <div>Start:</div>
            <div><input type="text" id="start" name="start" value="<?php print $e->start ?>"/></div>
            <div>End:</div>
            <div><input type="text" id="end" name="end" value="<?php print $e->end ?>"/></div>
            <div>Status:</div>
                <select name="status">
                    <option value="<?php print $e->status ?>">Ændre status?</option>
                    <option value="privat">Privat</option>
                    <option value="free">Ledig Tid</option>
                    <option value="kundeaftale">Kundeaftale</option> 
                </select>
                       
            <div class="space"><input type="submit" value="Save" /> <a href="javascript:close();">Cancel</a></div>
        </form>
        
        <script>
        function close(result) {
            DayPilot.Modal.close(result);
        };       

    
        </script>
    </body>
</html>