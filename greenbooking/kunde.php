<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>HTML5 Doctor Appointment Scheduling (JavaScript/PHP)</title>

        <link type="text/css" rel="stylesheet" href="media/layout.css" />

        <!-- DayPilot library -->
        <script src="js/daypilot/daypilot-all.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div>

                <div style="float:left; width:160px">
                    <div id="nav"></div>
                </div>
                <div style="margin-left: 160px">
                    <div class="space">Available time slots:</div>
                    <div id="dp"></div>
                </div>

            </div>
        </div>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/daypilot/daypilot-all.min.js"></script>

        <script>
            var nav = new DayPilot.Navigator("nav");
            nav.selectMode = "week";
            nav.showMonths = 3;
            nav.skipMonths = 3;
            nav.onTimeRangeSelected = function(args) {
                 loadEvents(args.start.firstDayOfWeek(), args.start.addDays(7));
            };
            nav.init();

            var dp = new DayPilot.Calendar("dp");
            dp.viewType = "Week";
            dp.locale = "da-dk";
            dp.cellDuration = 15;
            dp.timeRangeSelectedHandling = "Disabled";
            dp.eventMoveHandling = "Disabled";
            dp.eventResizeHandling = "Disabled";
            dp.onBeforeEventRender = function(args) {
                if (!args.data.tags) {
                    return;
                }
                switch (args.data.tags.status) {
                    case "free":
                        args.data.barColor = "green";
                        args.data.html = "Available<br/>" + args.data.tags.doctor;
                        args.data.toolTip = "Click to request this time slot";
                        break;
                    case "waiting":
                        args.data.barColor = "orange";
                        args.data.html = "Your appointment, waiting for confirmation";
                        break;
                    case "confirmed":
                        args.data.barColor = "#f41616";  // red
                        args.data.html = "Your appointment, confirmed";
                        break;
                }
            };
            dp.onEventClick = function(args) {
                if (args.e.tag("status") !== "free") {
                    dp.message("You can only request a new appointment in a free slot.");
                    return;
                }

                var modal = new DayPilot.Modal({
                    onClosed: function(args) {
                        if (args.result) {  // args.result is empty when modal is closed without submitting
                            loadEvents();
                        }
                    }
                });

                modal.showUrl("appointment_request.php?id=" + args.e.id());
            };
            dp.init();

            loadEvents();

            function loadEvents(day) {
                var start = nav.visibleStart() > new DayPilot.Date() ? nav.visibleStart() : new DayPilot.Date();

                var params = {
                    start: start.toString(),
                    end: nav.visibleEnd().toString()
                };

                $.post("events_free.php", JSON.stringify(params), function(data) {
                    if (day) {
                        dp.startDate = day;
                    }
                    dp.events.list = data;
                    dp.update();

                    nav.events.list = data;
                    nav.update();

                });
            }
        </script>

    </body>
</html>
