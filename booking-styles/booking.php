<!DOCTYPE HTML>
<html>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <meta property="og:image" content="" />
                <meta property="og:description" content="" />
                <meta property="og:url" content="" />
                <meta property="og:title" content="Beauty By Green" />
                <title>Beauty By Green</title>
                <link rel="icon" href="img/logo-leaf.png">
                <!-- Google Font -->
            
                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
                   <!-- STICKY STYLES -->
                   <link href="https://uploads-ssl.webflow.com/5acfb574ab89753aa4a296df/css/sticky-sidebar.2f7183a5c.css" rel="stylesheet" type="text/css"/>
                <!-- Bootstrap core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <!-- Material Design Bootstrap -->
                <link href="css/mdb.min.css" rel="stylesheet">
                <!-- Tempus Date time picker -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
            
                <!-- Custom styles  -->
                <link href="css/style.min.css" rel="stylesheet">
                <link href="css/main.css" rel="stylesheet">
                <style type="text/css">
                  
                  @media (min-width: 800px) and (max-width: 850px) {
                          .navbar:not(.top-nav-collapse) {
                              background: #1C2331!important;
                          }
                      }
                      .bg-f5 {
                            background: #f5f5f5 !important;
                        }
                        label {
                            font-weight: normal;
                        }
                        
                        /* .dato-valg {
                            overflow-x: auto !important;
                        } */
                </style>
            

            </head>
            
            <body>
              <div id="wptime-plugin-preloader" style="background-color: rgba(0,0,0, 0.8)"></div>
              <!-- Navbar -->
              <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" id="nav">
              <p class="text-white navbar-brand"></p>
                <div class="container">
                
            
                  <!-- Brand -->
                  <a class="navbar-brand brand-font" href="" >
                    <img src="img/logo.svg" alt="" class="grow">
                  </a>
            
                  <!-- Collapse -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            
                  <!-- Links -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                    <!-- Left -->
                    <ul class="navbar-nav mr-auto ">
                      <li class="nav-item">
                        <a class="nav-link grow" href="">Hjem
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link grow" href="#behandlinger">Behandlinger</a>
                      </li>
            
                      <li class="nav-item">
                        <a class="nav-link grow" href="?page_id=12&preview=true">Prisliste</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link grow" href="?page_id=15&preview=true">Åbningstider</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link grow" href="#service">Om os</a>
                      </li>
            
                    </ul>
            
                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
            
                      <li class="nav-item">
                        <a href="http://localhost/beautyispain/?page_id=8" class="grow nav-link px-3 btn-outline-white">
                          <i class="far fa-calendar-alt pr-2"></i>Book Tid
                        </a>
                      </li>
                    </ul>
            
                  </div>
            
                </div>
              </nav>
              <!-- Navbar -->
            
    <main>
        <!-- JUMBOTRON -->
        <section id="title" class="text-center text-white jumbotron  bg-custom shadow-lg d-flex flex-column justify-content-center align-items-center ">
            <h4 class="pt-5" >Book online</h4>
            <h1>Behandlinger</h1>
        </section>  
        <!-- Search Section -->
         <div class="container mt-5">
              <h2 class="text-center mb-5">Vælg dato og Behandling</h2>
            <section id="booking-form" class="">
                
                <form action="" class="needs-validation row justify-content-center" novalidate>
                    <div class="col-lg-4 col-md-6 ">
                        <!-- DATO -->
                        <div class="form-group">
                            <label for="dato">Dato *</label>
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input id="dato" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" required/>
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Behandling -->
                    <div class="col-lg-4 col-md-6 ">
                        <div class="form-group">
                            <label for="behandling">Behandling *</label>
                            <select id="ddl" class="custom-select browser-default" required>
                                <option value="">Vælg behandling</option>

                                <option value="" class="font-weight-bold h5">Voksbehandling</option>
                                <option value="00:45:00 Helt ben" >Helt ben 45min</option>
                                <option value="00:60:00  Helt ben, inkl bikinilinje" >Helt ben, inkl bikinilinje 60min</option>
                                <option value="00:30:00 Ben fra knæ & ned" >Ben fra knæ & ned 30min</option>
                                <option value="00:30:00 Bikini" >Bikini 30min</option>
                                <option value="00:45:00 Tanga" >Tanga 45min</option>
                                <option value="00:60:00 Hollywood" >Hollywood 60min</option>
                                <option value="01:15:00 Brasiliansk, kvinder" >Brasiliansk, kvinder 75min</option>
                                <option value="01:30:00 Brasiliansk mænd" >Brasiliansk mænd 90min</option>
                                <option value="00:30:00 Bum wax" >Bum wax 30min</option>
                                <option value="00:45:00 Baller" >Baller 45min</option>
                                <option value="00:30:00 Lænd el. nakke" >Lænd el. nakke 30min</option>
                                <option value="00:30:00 Skuldre" >Skuldre 30min</option>
                                <option value="00:30:00 Bryst el. mave" >Bryst el. mave 30min</option>
                                <option value="00:45:00 Bryst og mave" >Bryst og mave 45min</option>
                                <option value="00:45:00 Hel ryg" >Hel ryg 45min</option>
                                <option value="00:45:00 Hel ryg inkl. nakke" >Hel ryg inkl. nakke 45min</option>
                                <option value="00:30:00 Hel arm" >Hel arm 30min</option>
                                <option value="00:30:00 Halv arm til albuen" >Halv arm til albuen 30min</option>
                                <option value="00:30:00 Axil (under armene)" >Axil (under armene) 30min</option>
                                <option value="00:30:00 Overlæbe el. Hage" >Overlæbe el. Hage 30min</option>
                                <option value="00:30:00 Overlæbe & hage" >Overlæbe & hage 30min</option>
                                <option value="00:30:00 Næse el. ører" >Næse el. ører 30min</option>
                                <option value="00:30:00 Kinder" >Kinder 30min</option>

                                
                                <option value="" class="font-weight-bold h5">Hænder og Negle</option>
                                <option value="00:45:00 Shellac farve" >Shellac farve 45min</option>
                                <option value="00:45:00 Shellac med fransk" >Shellac med fransk 45min</option>
                                <option value="00:60:00 Shellac inkl. Aftagning" >Shellac inkl. Aftagning 60min</option>
                                <option value="00:30:00 Shellac aftagning" >Shellac aftagning 30min</option>
                                <option value="01:15:00 Manicure behandling" >Manicure behandling 75min</option>
                                
                                <option value="" class="font-weight-bold h5">Vipper og bryn</option>
                                <option value="00:45:00 Farvning af vipper & bryn, inkl. retning" >Farvning af vipper & bryn, inkl. retning 45min</option>
                                <option value="00:45:00 Farvning af vipper & bryn" >Farvning af vipper & bryn 45min</option>
                                <option value="00:45:00 Farvning & retning af bryn" >Farvning & retning af bryn 45min</option>
                                <option value="00:30:00 Farvning af vipper el. bryn" >Farvning af vipper el. bryn 30min</option>
                                <option value="00:30:00 Retning af bryn m. voks el. pincet" >Retning af bryn m. voks el. pincet 30min</option>
                                <option value="01:15:00 Henna brow" >Henna brow 75min</option>
                                
                                <option value="" class="font-weight-bold h5">Ansigtsbehandlinger</option>
                                <option value="00:60:00 Basis Ansigtsbehandling" >Basis Ansigtsbehandling 60min</option>
                                <option value="01:15:00 Classic Ansigtsbehandling" >Classic Ansigtsbehandling 75min</option>
                                <option value="01:45:00 De Luxe Ansigtsbehandling" >De Luxe Ansigtsbehandling 105min</option>
                                <option value="01:15:00 Dybderens og Acne behandling" >Dybderens og Acne behandling 75min</option>
                                <option value="01:45:00 Classic ansigtsbehandling inkl Diamantslibning" >Classic ansigtsbehandling inkl Diamantslibning 105min</option>
                                
                                <option value="" class="font-weight-bold h5">Krops Behandlinger</option>
                                <option value="01:15:00 Rygbandling" >Rygbandling 75min</option>
                                <option value="01:30:00 Kropsexoliering" >Kropsexoliering 90min</option>
                                <option value="01:45:00 De luxe krops behandling" >De luxe krops behandling 105min</option>
                                
                                <option value="" class="font-weight-bold h5">Pakker</option>
                                <option value="02:15:00 Pakke 1" >Pakke 1 135min</option>
                                <option value="01:45:00 Pakke 2" >Pakke 2 105min</option>

                            </select>
                            <div class="invalid-feedback">Vælg en behandling!</div>

           
                        </div>
                    </div>

                    <div class="justify-content-center col-12 d-flex" >
                        <button class="btn btn-custom text-white rounded ">Search<i class="fas fa-search pl-2 "></i></button>
                    </div>
                </form>
    
            </section> <!-- Search form end -->
    
            <hr class="my-5">
            
          <!--  BEHANDLER SECTION -->
            <section class="mb-5 mt-5" >
              <h2 class="text-center">Lediger datoer og tidspunkter</h2>
          </section>
          <section class="mb-5 d-flex flex-wrap justify-content-center dato-valg">
                        
                        <!-- Divider -->
                <div class="border-left"></div>
            
                <!-- Forskellige datoer -->
                <form action="book.php" method="post" class="needs-validation my-4 mx-4" novalidate>
                        <input type="hidden"  name="date" value="123>" />
                        <input type="hidden"  name="id" value="23432" />
                        <input type="hidden"  name="endtime" value="ererttre" />
                        <input type="hidden"  name="duration" value="etr" />
        
                        <h2>29/12/2018</h2>
                        <div class="form-group">
                            <label for="behandlingen">Behandling valgt</label>
                            <input name="behandlingen" type="text" value="Kropsexoliering" class="form-control bg-f5 disabled">
                            <div>
                                    <label for="endtime" class="mt-1">Længde</label>
                                    <input name="behandlingen" type="text" value="60min" class="form-control bg-f5 disabled">
            
                                <label for="starttime" class="mt-2">Vælg tidspunkt</label>
                                <select name="starttime"  class="custom-select browser-default " required>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                </select>
                            </div>
    
                            <div class="invalid-feedback">Vælg en behandling!</div>
                        </div>
                        <button type="submit" class="btn btn-brand m-0 w-100 py-2">book</button>
                    </form>
                <!-- Line divider -->
                <div class="border-left"></div>

                <!-- Forskellige datoer -->
                <form action="book.php" method="post" class="needs-validation my-4 mx-4" novalidate>
                        <input type="hidden"  name="date" value="123>" />
                        <input type="hidden"  name="id" value="23432" />
                        <input type="hidden"  name="endtime" value="ererttre" />
                        <input type="hidden"  name="duration" value="etr" />
        
                        <h2>29/12/2018</h2>
                        <div class="form-group">
                            <label for="behandlingen">Behandling valgt</label>
                            <input name="behandlingen" type="text" value="Kropsexoliering" class="form-control bg-f5 disabled">
                            <div>
                                    <label for="endtime" class="mt-1">Længde</label>
                                    <input name="behandlingen" type="text" value="60min" class="form-control bg-f5 disabled">
            
                                <label for="starttime" class="mt-2">Vælg tidspunkt</label>
                                <select name="starttime"  class="custom-select browser-default " required>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                </select>
                            </div>

                            <div class="invalid-feedback">Vælg en behandling!</div>
                        </div>
                        <button type="submit" class="btn btn-brand m-0 w-100 py-2">book</button>
                    </form>
            
                </section>
          
            <hr class="my-5">
    
                    <!-- BOOTSTRAP FORM -->
            <form action="" class="needs-validation row mb-5" novalidate>  
                <section id="bestilling-detaljer" class="col-md-4 mt-4">        
                    <h2 class="mb-3">Bestillings detaljer</h2>
    
                    <!-- DATO -->
                    <div class="form-group">
                        <label for="dato">Dato</label>
                        <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                            <input id="dato" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" required disabled/>
                            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Tidspunkt -->
                    <div class="form-group">
                        <label for="tidspunkt">Tidspunkt</label>
                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                        
                            <input id="tidspunkt" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" required disabled/>
                            <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
    

    
                    <!-- Behandling -->
                    <div class="form-group ">
                        <label for="behandling">Behandling</label>
                        <select id="behandling"  class="custom-select browser-default" required disabled>
                            <option value="">Vælg behandling</option>
                            <option value="Voksbehandling">Voksbehandling</option>
                            <option value="Intim-voks">Intim voks (både mænd og kvinder)</option>
                            <option value="Negle">Negle (shellac)</option>
                            <option value="Vipper">Vipper</option>
                            <option value="Bryn">Bryn</option>
                            <option value="Ansigtsbehandlinger">Ansigtsbehandlinger</option>
                            <option value="Rygbehandlinger">Rygbehandlinger</option>
                            <option value="Manicure">Manicure</option>
                            <option value="Pedicure">Pedicure</option>
                        </select>
                    <div class="invalid-feedback">Vælg en behandling!</div>
                </div><!-- Bestlings detaljer END -->

                <!-- Behandler -->
                <div class="form-group ">
                    <label for="behandler">Behandler</label>
                    <select id="behandler" class="custom-select browser-default" required>
                        <option value="Voksbehandling">Christina Green</option>
                    </select>
                    <div class="invalid-feedback">Vælg en behandler!</div>
                </div>
                </section>
    
                <!-- Personlige detaljer -->
                <section id="person-oplysniger" class="mt-4 col-md-4">
                    <h2 class="mb-3">Personlige detaljer</h2>
    
                    <div class="form-group">
                        <label for="validationServer013">Navn</label>
                        <input type="text" class="form-control" id="validationServer013" placeholder="Dit navn *"
                        value="" required>
                        <div class="invalid-feedback">
                            Navn er nødventigt!
                        </div>
                    </div>
    
                    <!-- Address -->
                    <!-- <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="test 4, 4tv 1000">
                    </div> -->
                    <div class="">
                        
                        <!-- Email address -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email*" required>
                        </div>

                        <!-- Telephone number -->
                        <div class="form-group">
                            <label for="tel-input" class="">Telephone</label>
                            <input class="form-control" type="tel" value="" id="tel-input" placeholder="Telefon nummer">
                        </div>
                    </div>
                </section>
    
                <!-- Kontakt info -->
                <section id="person-oplysniger" class="mt-4 col-md-4">
                <h2 class="mb-3">Kommentar</h2>
                    <div class="form-group">
                        <label for="comment">Kommentar:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </section>
    
                <div class="d-flex justify-content-center col-12">
                    <button class="btn btn-custom rounded tex" type="submit">Opret en reservation</button>
                </div>
            </form>
        </div>    <!-- CONTAINER END -->
    </main>

    <!--Footer-->
  <footer class="page-footer text-center fonmt-4 mx-0 wow fadeIn">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left px-5 pt-5 pb-2">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">
        <h5 class="text-uppercase">Afbudspolitik</h5>
        <p>Afbudspolitik - Af hensyn til min planlægning skal afbestilling ske inden 24 timer før den aftalte tid ellers faktureres 50% af behandlingens fulde pris, ved udeblivelse faktureres 100%.</p>

        </div>
        <div class="col-md-2 mt-md-0 mt-3"></div>
        <!-- Grid column -->
        <div class="col-md-3 mt-md-0 mt-3">

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">



          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Kontakt</h5>

            <ul class="list-unstyled">
              <li class="mt-3">
                <a  href="mailto:christina@beautybygreen.dk" class="grow footer-link"><i class="fa fa-envelope pr-2"></i> E-mail: christina@beautybygreen.dk</a>
                </li>

                <li class="mt-3">
                <a class="grow footer-link" href="https://www.google.dk/maps/place/H%C3%B8jvangen+6,+3480+Fredensborg/data=!4m2!3m1!1s0x465238f2321cc497:0x7b3f0e4bd0f8a862?ved=2ahUKEwiH95HLkInfAhWFh6YKHdM-AZ8Q8gEwAHoECAAQAQ"><i class="fa fa-map-marker-alt pr-2"></i> Højvangen 6, 3480 Fredensborg</a>
                </li>

                <li class="mt-3">
                  <a  href="tel:+4525133011" class="grow footer-link" ><i class="fa fa-phone  pr-2"></i> Telefon: 25 13 30 11</a>
                </li>
            </ul>

          </div>
          <!-- Grid column -->
                  <!-- Grid column 
        <div class="col-md-3 mb-md-0 mb-3">

     
            <h5 class="text-uppercase">Navigation</h5>

            <ul class="list-unstyled">
              <li class="mt-3">
                <a href="#!" class="footer-link grow">Hjem</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Behandlinger</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Kontakt</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Prisliste</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Åbningstider</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Om os</a>
              </li>
              <li class="mt-2">
                <a href="#!" class="footer-link grow">Gavekort</a>
              </li>
            </ul>

            </div>-->
            <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          © 2018 Copyright:
          <a href="#" >beautybygreen.dk</a>
        </div>
          <div class="col-md-4">
          Developed by: <a href="https://kristjansson.dk/" class="footer-link">kristjansson.dk </a> / <a class="footer-link" href="http://jekes.dk/">jekes.dk</a> / <a class="footer-link" href="https://artlike.dk/#">artlike.dk</a>
      
          </div>
      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
 <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Day Pilot -->
    <script src="js/daypilot-all.min.js"></script>
    <!-- Tempus Date time picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
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

  <!-- Bootstrap Validate form -->
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
        new WOW().init();
    </script>
    
  </body>
<html>