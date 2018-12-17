<?php
session_start();
require( 'util.php' );
$userid = $_SESSION['uid'];
if (intval($userid) === 1) { ?><!DOCTYPE html lang="dk-DK">
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
            <h1>Manager side</h1>

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
                dp.locale = "da-dk";
                dp.businessBeginsHour = 8;
                dp.businessEndsHour = 20;
                dp.showNonBusiness = false;
                dp.scale = "CellDuration";
                dp.cellDuration = 30;
                dp.viewType = "Week";
                dp.eventDeleteHandling = "Update";
                dp.allowEventOverlap = false;
                

                dp.onEventDeleted = function(args) {
                    $.post("delete.php",
                        {
                            id: args.e.id()
                        },
                    );
                };

                dp.onEventMoved = function(args) {
                    $.post("move.php",
                        {
                            id: args.e.id(),
                            newStart: args.newStart.toString(),
                            newEnd: args.newEnd.toString()
                        },
                    );
                };

                dp.onEventResized = function(args) {
                    $.post("resize.php",
                        {
                            id: args.e.id(),
                            newStart: args.newStart.toString(),
                            newEnd: args.newEnd.toString()
                        },
                    );
                };

                dp.onTimeRangeSelected = function (args) {
                var modal = new DayPilot.Modal();
                modal.onClosed = function(args) {
                    loadEvents();
                    dp.clearSelection();
                    var data = args.result;
                    if (data && data.result === "OK") { 
                        loadEvents(); 
                        dp.message(data.message); 
                    }
                };
                modal.showUrl("create_modal.php?start=" + args. start + "&end=" + args.end);
                };
                
                dp.init();

                loadEvents();

                function loadEvents() {
                    dp.events.load("events.php");
                    
                }

                dp.onEventClick = function(args) {
                    var modal = new DayPilot.Modal();
                    modal.onClosed = function(args) {
                        loadEvents();
                    };
                    modal.showUrl("modal.php?id=" + args.e.id());
                    
                };
            </script>

           

        </div>
        <div class="clear">
        </div>

</body>
</html>

