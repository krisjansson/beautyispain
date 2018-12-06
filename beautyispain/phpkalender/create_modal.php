<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Event</title>
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />    
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
            session_start();
            require( 'util.php' );
            $userid = $_SESSION['uid'];
            if (intval($userid) === 1) { 

            require_once '_db.php';
        
            $start = $_GET['start'];
            $end = $_GET['end'];
            

            // basic sanity check
            new DateTime($start) or die("invalid date (start)");
            new DateTime($end) or die("invalid date (end)");
            
            } else { 
              
              echo "You need to login!<br>";
              echo '<a href="login.php">To login page</a>';
                
                
            }; 
            
        ?>
        <form id="f" style="padding:20px;" action="create.php" method="post" enctype="multipart/form-data">
            <h1>New Event</h1>
            <div>Name: </div>
            <div><input type="text" id="name" name="name" value="" /></div>
            <div>Start:</div>
            <div><input type="text" id="start" name="start" /></div>
            <div>End:</div>
            <div><input type="text" id="end" name="end" /></div>
            
            <div class="space"><input type="submit" value="Save" /> <a href="javascript:close();">Cancel</a></div>
        </form>
        
        <script>
        
        var startPicker =  new DayPilot.DatePicker({
            target: 'start', 
            pattern: 'yyyy-MM-dd HH:mm:ss',
            date: "<?php echo $start ?>",
            onShow: function() {
                parent.DayPilot.ModalStatic.stretch();
            }
        });

        var endPicker =  new DayPilot.DatePicker({
            target: 'end', 
            pattern: 'yyyy-MM-dd HH:mm:ss',
            date: "<?php echo $end ?>",
            onShow: function() {
                parent.DayPilot.ModalStatic.stretch();
            }
        });

        
        function close(result) {
            DayPilot.Modal.close(result);
        };       
    
        </script>
    </body>
</html>