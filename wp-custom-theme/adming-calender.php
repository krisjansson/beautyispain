<?php /* Template Name: Admin page */ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Beauty By Green" />
    <title>HTML5/JavaScript Event Calendar</title>
    <!-- Kalender layout styles -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/media/layout.css">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/mdb.min.css" rel="stylesheet">
	<!-- helper libraries -->
	<script src="<?php echo get_bloginfo('template_directory'); ?>js/jquery-3.3.1.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
<body>

        <div id="header">
			<div class="bg-help">
				<div class="inBox">
					<h1 id="logo" class="text-center">Calender</h1>
					<hr class="hidden" />
				</div>
			</div>
        </div>
        <div class="shadow"></div>
            <div class="hideSkipLink"></div>
        <div class="container-fluid">
            <div class="main row justify-content-center">

                    <div id="nav" class="col-md-3"></div>

                <!-- <div class="space">
                    Theme: <select id="theme">
                        <option value="calendar_default">Default</option>
                        <option value="calendar_white">White</option>
                        <option value="calendar_g">Google-Like</option>
                        <option value="calendar_green">Green</option>
                        <option value="calendar_traditional">Traditional</option>
                        <option value="calendar_transparent">Transparent</option>
                    </select>
                </div> -->

                <div id="dp" class="col-md-9"></div>

            <script>

                var nav = new DayPilot.Navigator("nav");
                nav.showMonths = 1;
                nav.skipMonths = 1;
                nav.selectMode = "week";
                nav.onTimeRangeSelected = function(args) {
                    dp.startDate = args.day;
                    dp.update();
                    loadEvents();
                };
                nav.init();

                var dp = new DayPilot.Calendar("dp");
                dp.locale = "da-dk";

                function myFunction(x) {
                    if (x.matches) { // If media query matches
                        dp.viewType = "Day";
                    } else {
                        dp.viewType = "Week";
                
                    }
                }

                var x = window.matchMedia("(max-width: 784px)")
                myFunction(x) // Call listener function at run time
                x.addListener(myFunction) // Attach listener function on state changes

                
          
                
                dp.eventDeleteHandling = "Update";

                dp.onEventDeleted = function(args) {
                    $.post("delete.php",
                        {
                            id: args.e.id()
                        },
                        function() {
                            console.log("Deleted.");
                        });
                };

                dp.onEventMoved = function(args) {
                    $.post("move.php",
                            {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            },
                            function() {
                                console.log("Moved.");
                            });
                };

                dp.onEventResized = function(args) {
                    $.post("resize.php",
                            {
                                id: args.e.id(),
                                newStart: args.newStart.toString(),
                                newEnd: args.newEnd.toString()
                            },
                            function() {
                                console.log("Resized.");
                            });
                };

                // event creating
                dp.onTimeRangeSelected = function(args) {
                    var name = prompt("New event name:", "Event");
                    dp.clearSelection();
                    if (!name) return;
                    var e = new DayPilot.Event({
                        start: args.start,
                        end: args.end,
                        id: DayPilot.guid(),
                        resource: args.resource,
                        text: name
                    });
                    dp.events.add(e);

                    
                    $.post("create.php",
                            {
                                start: args.start.toString(),
                                end: args.end.toString(),
                                name: name
                            },
                            function() {
                                console.log("Created.");
                            });
                    
                };
                
                dp.onEventClick = function(args) {
                var modal = new DayPilot.Modal();
                modal.onClosed = function(args) {
                // reload all events
                var result = args.result;
                if (result && result.status === "OK") {
                loadEvents();
                }
                };
                modal.showHtml('something here');
                };

                dp.init();

                loadEvents();

                function loadEvents() {
                    dp.events.load("events.php");
                }

            </script>

            <script type="text/javascript">
            $(document).ready(function() {
                $("#theme").change(function(e) {
                    dp.theme = this.value;
                    dp.update();
                });
            });
            </script>

        </div>
        <div class="clear">
        </div>
        </div>
</body>
</html>

