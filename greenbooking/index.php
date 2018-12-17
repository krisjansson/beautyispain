<!DOCTYPE html lang="dk-DK">
<html>
<head>
    <title>Beauty BY Green</title>
	<!-- stylesheet -->
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />

  
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

        </div>

</body>
</html>

