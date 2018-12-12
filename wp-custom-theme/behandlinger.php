<?php /* Template Name: behandlinger page */ ?>

<?php get_header(); ?>

 <!-- JUMBOTRON -->
 <div id="title" class="bg-navbg ">

</div>  

<!--Main Content-->
<main>
    <div class="container " id="behandlinger">
      <hr class="my-5">

      <!--Section: Behandlinger -->
      <div class="my-5" >
        <h1 class="text-center ">Behandlinger</h1>
        <p class="text-center w-75 mx-auto">Beauty By Green er en privatejet helse- og skønhedsklinik i Fredensborg. Hos Beauty By Green tilbydes professionel hudpleje og behandlinger i lækre nyindrettede lokaler.</p>
      </div>
      <section  class="d-flex flex-wrap justify-content-center mb-5"> 

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card">
            
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/intim.svg" alt="" class="b-icons"></div>
            <div class="service-text">
            <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Intim voks - både kvinder og mænd</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
                <ul class="hidden">
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <a href="http://localhost/beautyispain/?page_id=8" class="btn btn-custom">Book</a>
                </ul>
            </div>
        </div>

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/negle.svg" alt="" class="b-icons"></div>
            <div class="service-text">
            <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Negle - shellac </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
            </div>
        </div>

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/vipperogbryn.svg" alt="" class="b-icons" ></div>
            <div class="service-text">
                <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Vipper og Bryn</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
            </div>
        </div>

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/ansigt.svg" alt="" class="b-icons"></div>
            <div class="service-text">
                <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Ansightsbehandlinger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
                <ul class="hidden">
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <a href="book" class="btn btn-custom">Book</a>
                </ul>
            </div>
        </div>

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/krop.svg" alt="" class="b-icons" ></div>
            <div class="service-text">
                <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Rygbehandlinger</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
            </div>
        </div>

        <!-- <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/negle.svg" alt="" class="b-icons" ></div>
            <div class="service-text">
                <h3>Manicure</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
            </div>
        </div>   -->

        <div class=" c-shadow  rounded service p-4 pb-3 m-3 wow fadeIn grow-normal b-card ">
            <div class="service-icon pb-3"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ikoner/ben.svg" alt="" class="b-icons" ></div>
            <div class="service-text text-left">
                <span class="hidden close grow"><i class="fas fa-times"></i></span>
                <h3>Ben</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, nam.</p>
                <ul class="toggle hidden">
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>
                        <a href="book" class="btn btn-custom">Book</a>
                </ul>
            </div>
        </div>

      </section><!-- Behandlinger END -->
    </div>
</main>

<?php get_footer(); ?>