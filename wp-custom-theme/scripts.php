 <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js"></script>
    <!--ajax is for the smooth scroll-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/mdb.min.js"></script>
    <!-- Day Pilot -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/daypilot-all.min.js"></script>
    <!-- Sticky sidebar -->
    <script src="https://uploads-ssl.webflow.com/5acfb574ab89753aa4a296df/js/sticky-sidebar.650327e6f.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <!-- Tempus Date time picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- open behabdlinger -->
    <script>
        $(function() {                       //run when the DOM is ready
            $(".b-card").click(function() {  //use a class, since your ID gets mangled
                $(this).toggleClass("more-w row b-card grow-normal bg-f5");  
                $(this).find(".service-icon").toggleClass("col-md-6 col-sm-12");     
                $(this).find(".service-text").toggleClass("col-md-6 col-sm-12 pl-3");     
                $(this).find("ul").toggleClass("hidden");    
                $(this).find(".hide").toggleClass("hidden"); 
                $(this).find("u").toggleClass("hidden");   
                $(this).find(".close").toggleClass("hidden");   //add the class to the clicked element
            });
        });
    </script>
    <!-- SMOOTH SCROLL -->
    <script>
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top -100
            }, 1000);
            return false;
            }
          }
          });
        });
      </script>
    <!-- DATE TIME PICKER UI -->
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker4').datetimepicker({
            format: 'L',
            daysOfWeekDisabled: [0, 6]
        });
      });
    </script>
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker5').datetimepicker({
            format: 'L',
            daysOfWeekDisabled: [0, 6]
        });
      });
    </script>
    <script type="text/javascript">
      $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'H:m',
            icons: {
                  up: "fas fa-arrow-up",
                  down: "fas fa-arrow-down"
              },
            disabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 17, 18, 19, 20, 21, 22, 23, 24],
            enabledHours: [8 ,9, 10, 11, 12, 13, 14, 15, 16]
        });
      });
  </script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

    <!-- Animation intialization -->
    <script type="text/javascript">
    // Animations initialization
      new WOW().init();
    </script>
    
    <!-- DAYPILOT FOR BOOKING SYSTEM -->
    <script>
      var nav = new DayPilot.Navigator("nav");
      nav.showMonths = 3;
      nav.skipMonths = 3;
      nav.selectMode = "week";
      nav.onTimeRangeSelected = function(args) {
          dp.startDate = args.day;
          dp.update();
          loadEvents();
      };
      nav.init();

      var dp = new DayPilot.Calendar("dp");
      dp.locale = "da-dk";
      dp.viewType = "Week";

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

      <!-- DAY PILOT THEME CHANGER -->
      <script type="text/javascript">
      $(document).ready(function() {
      $("#theme").change(function(e) {
          dp.theme = this.value;
          dp.update();
      });
      });
    </script>
