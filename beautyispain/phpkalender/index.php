<!DOCTYPE html lang="dk-DK">
<html>
<head>
    <title>Beauty BY Green</title>
	<!-- stylesheet -->
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />

        <!-- <link type="text/css" rel="stylesheet" href="themes/calendar_g.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_green.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_traditional.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_transparent.css" />
        <link type="text/css" rel="stylesheet" href="themes/calendar_white.css" /> -->

	<!-- helper libraries -->
    <!-- <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
<?php
session_start();
require( 'util.php' );
$userid = $_SESSION['uid'];
if (intval($userid) === 1) { ?>
<body>
        <div id="header">
			<div class="bg-help">
				<div class="inBox">
                <form action="login.php" method="post">
                    <h3 style="color:white">Logged in as <?=$_SESSION['uname'] ?></h3>
                    <button class="primary" type="submit" name="cmd" value="logout">Logout</button>
                </form>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">

            <div style="float:left; width: 160px;">
                <div id="nav"></div>
            </div>
            <div style="margin-left: 160px;">
                <h1>Kundebookning</h1>

                <div class="space">
                        Theme: <select onChange="if (this.options[this.selectedIndex].value) window.location.href=this.options[this.selectedIndex].value">
                            <option value="">- Vælg side -</option>
                            <option value="index.php">Kundebookning</option>
                            <option value="manager.php">Manager</option>
                            <option value="settime.php">Sæt timer</option>
                        </select>
                </div>

                <div id="dp"></div>
            </div>

            <?php } else { 
              
              echo "You need to login!<br>";
              echo '<a href="login.php">To login page</a>';
                
                
            } ?>
            <script>

                var nav = new DayPilot.Navigator("nav");
                nav.showMonths = 3;
                nav.skipMonths = 3;
                nav.selectMode = "week";
                nav.weekStarts = 1;
                nav.onTimeRangeSelected = function(args) {
                    dp.startDate = args.day;
                    dp.update();
                    loadEvents();
                };
                nav.init();

                var dp = new DayPilot.Calendar("dp");
                dp.businessBeginsHour = 8;
                dp.businessEndsHour = 17;
                dp.showNonBusiness = false;
                dp.scale = "CellDuration";
                dp.cellDuration = 30;
                dp.locale = "da-dk";
                dp.viewType = "Week";
                dp.eventDeleteHandling = "Disabled";
                dp.timeRangeSelectedHandling = "Disabled";
                dp.eventMoveHandling = "Disabled";
                dp.eventResizeHandling = "Disabled";
                dp.allowEventOverlap = false;
                
                dp.init();

                loadEvents();

                function loadEvents() {

                    dp.events.load("kundeevents.php");
                    
                }
                

                // dp.onEventClick = function(args) {
                //     var modal = new DayPilot.Modal();
                //     modal.onClosed = function(args) {
                //         loadEvents();
                //     };
                //     modal.showUrl("kundemodal.php?id=" + args.e.id());
                // };


            </script>



        </div>
        <div class="clear">

           
            <form id="f" style="padding:20px;" action="pagebooking.php" method="post" enctype="multipart/form-data">
            <div><input type="hidden" id="status" name="status" value="free" /></div>
            <h1>Søg behandlingstider</h1>
            <div>Behandling: </div>
            
            <div>Behandlings længde: </div>
            <select id='time' name="bhtime">
                <option value="00:15:00">15 min</option>
                <option value="00:30:00">30 min</option>
                <option value="00:45:00">45 min</option>
                <option value="01:00:00">1 time</option>
                <option value="01:15:00">1 time og 15 min</option>
                <option value="01:30:00">1 time og 30 min</option>
                <option value="01:45:00">1 time og 45 min</option>
                <option value="02:00:00">2 timer</option>
            </select>

            <!-- <div>Start:</div>
            <div><input type="text" id="start" name="start" /></div>
            <div>Slut:</div>
            <div><input type="text" id="end" name="end" /></div> -->
            <div class="space"><input type="submit" value="Søg" /> <a href="javascript:close();">Cancel</a></div>
       

        </div>

</body>
</html>

