<?php /* Template Name: Booking page */ ?>

<?php get_header(); ?>
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
                        <label for="dato">Dato</label>
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
                        <label for="behandling">Behandling</label>
                        <select id="behandling"  class=" custom-select browser-default" required>
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
          <h2 class="text-center">Book tid hos din favorit behandler</h2>
      </section>

      <section class="mb-5 d-flex">
        <!-- behandler Card -->
          <div class="card mx-3">
            <!-- Behandler billede -->
            <div class="">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/test-profile.jpg" alt="christina" class="img-fluid rounded-top">
                </div >
                <!-- Behandler info -->
                <div id="behandler-content" class="p-3">          
                    <h4>Christina Green</h4>
                    <div class="d-flex justify-content-between my-3">
                        <h5>Vipper</h5>
                        <h5>200 DKK</h5>
                    </div>

                    <hr class="my-3">

                    <div class="row">
                        <div>
                            <input type="time">
                        </div>
                    </div>
                </div> <!-- behandler CONTENT END-->
            </div> <!--CARD END -->


        <!-- behandler 2 Card -->
        <div class="card mx-3">
            <!-- Behandler billede -->
            <div class="">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/b2.jpg" alt="christina" class="img-fluid rounded-top">
            </div >

            <!-- Behandler info -->
          <div id="behandler-content" class="p-3">          
            <h4>Charlotte Blue</h4>
            <div class="d-flex justify-content-between my-3">
              <h5>Vipper</h5>
              <h5>200 DKK</h5>
            </div>
            <hr class="my-3">
            <div class="row mx-auto">
              <!-- First COL -->
              <div class="col">
              <a href="#title">
                <label for="tid1">
                  <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="08:00">
                </label>
              </a>
              <a href="#title">
                  <label for="tid1">
                    <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="09:00">
                  </label>
                </a>
                <a href="#title">
                    <label for="tid1">
                      <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="10:00">
                    </label>
                  </a>
            </div>
            <!-- Secound COl -->
            <div class="col">
                <a href="#title">
                  <label for="tid1">
                    <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="08:00">
                  </label>
                </a>
                <a href="#title">
                    <label for="tid1">
                      <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="09:00">
                    </label>
                  </a>
                  <a href="#title">
                      <label for="tid1">
                        <input type="button" id="tid1" name="tid1" class="btn btn-outline-danger px-4 py-2" value="10:00">
                      </label>
                    </a>
              </div>

          </div>  <!-- row end-->
            </div> <!-- behandler CONTENT END-->
        </div> <!--CARD END --> 
      </section>
      
        <hr class="my-5">

                <!-- BOOTSTRAP FORM -->
        <form action="" class="needs-validation row" novalidate>  
            <section id="bestilling-detaljer" class="col-md-4 mt-4">        
                <h2 class="mb-3">Bestillings detaljer</h2>

                <!-- DATO -->
                <div class="form-group">
                    <label for="dato">Dato</label>
                    <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                        <input id="dato" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" required/>
                        <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Tidspunkt -->
                <div class="form-group">
                    <label for="tidspunkt">Tidspunkt</label>
                    <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    
                        <input id="tidspunkt" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" required/>
                        <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Behandler -->
                <div class="form-group ">
                    <label for="behandler">Behandler</label>
                    <select id="behandler" class="custom-select browser-default" required>
                        <option value="">Vælg en behandler</option>
                        <option value="Voksbehandling">Charlotte Green</option>
                        <option value="Voksbehandling">Christina Blue</option>
                    </select>
                    <div class="invalid-feedback">Vælg en behandler!</div>
                </div>

                <!-- Behandling -->
                <div class="form-group ">
                    <label for="behandling">Behandling</label>
                    <select id="behandling"  class="custom-select browser-default" required>
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

            </section>

            <!-- Personlige detaljer -->
            <section id="person-oplysniger" class="mt-4 col-md-4">
                <h2 class="mb-3">Personlige detaljer</h2>

                <div class="form-group">
                    <label for="validationServer013">Navn</label>
                    <input type="text" class="form-control" id="validationServer013" placeholder="Dit navn*"
                    value="" required>
                    <div class="invalid-feedback">
                        Navn er nødventigt!
                    </div>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="test 4, 4tv 1000">
                </div>
            </section>

            <!-- Kontakt info -->
            <section id="person-oplysniger" class="mt-4 col-md-4">
                <h2 class="mb-3">Kontakt info</h2>

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
            </section>

            <div class="d-flex justify-content-center col-12">
                <button class="btn btn-custom rounded tex" type="submit">Opret en reservation</button>
            </div>
        </form>
    </div>    <!-- CONTAINER END -->
</main>




  
 <?php get_footer(); ?>