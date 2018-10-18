<?php
/**
 * The application form widget.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="testimonials-section dark text-center row justify-content-center" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/images/busy-lobby.png)">
   <div class="col-12 col-md-11 col-lg-10 col-xl-9">
      <h2>Here's what other job seekers had to say about their experience with Dawson</h2>
      <div class="row justify-content-center testimonial-carousel">
         <div class="card col-md-4 col-10">
            <div class="card-body">
               <div class="testimonial-img">
                  <img class="background-slice" alt="purple-bg" src="<?php echo get_bloginfo('template_url') ?>/images/testimonial-bg-purple.png">
                  <img class="employee-image" alt="employee" src="<?php echo get_bloginfo('template_url') ?>/images/Lindsey_Taylor.png">
               </div>
               <div class="testimonial-content">
                  <div class="testimonial-full-name">Lindsey Taylor</div>
                  <div class="testimonial-feedback">“I feel 
                     like Lindsey is really on my side and is
                     working to find the best fit for me.”
                  </div>
                  <div class="testimonial-cite">DAWSON CUSTOMER EXPERIENCE SURVEY, FEBRUARY 2018</div>
               </div>
            </div>
         </div>
         <div class=" card col-md-4 col-10">
            <div class="card-body">
               <div class="testimonial-img">
                  <img class="background-slice" alt="purple-bg" src="<?php echo get_bloginfo('template_url') ?>/images/testimonial-bg-blue.png">
                  <img class="employee-image" alt="employee" src="<?php echo get_bloginfo('template_url') ?>/images/bernadette_henry.png">
               </div>
               <div class="testimonial-content">
                  <div class="testimonial-full-name">Bernadette Henry</div>
                  <div class="testimonial-feedback">“I appreciate Bernadette’s expertise, knowledge, and professionalism&nbsp;.”
                  </div>
                  <div class="testimonial-cite">DAWSON CUSTOMER EXPERIENCE SURVEY, July 2018</div>
               </div>
            </div>
         </div>
         <div class=" card col-md-4 col-10">
            <div class="card-body">
               <div class="testimonial-img">
                  <img class="background-slice" alt="purple-bg" src="<?php echo get_bloginfo('template_url') ?>/images/testimonial-bg-green.png">
                  <img class="employee-image" alt="employee" src="<?php echo get_bloginfo('template_url') ?>/images/clara_boggs.png">
               </div>
               <div class="testimonial-content">
                  <div class="testimonial-full-name">Clara Boggs</div>
                  <div class="testimonial-feedback">“She was very understandsting and seemed like she really wanted to help me.”
                  </div>
                  <div class="testimonial-cite">DAWSON CUSTOMER EXPERIENCE SURVEY, May 2018</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- testimonials end -->