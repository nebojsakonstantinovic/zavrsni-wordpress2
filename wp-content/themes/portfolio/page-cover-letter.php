<?php

/**
*Template Name: Cover Letter Template
*/

?>

<?php
get_header();
 ?>

 <!--menja se -->
 <div class="col-lg-8">

     <article class="">

         <section class="section-5 gray mb-5 p-5 box-shadow animation" data-animation='slideLeft'>

          <p><?php  echo $post->post_date; ?></p>

          <p><?php echo get_field('person_name',$post->ID)?></p>

           <p><?php echo get_field('company_name',$post->ID)?></p>


           <!-- <span><?php // echo $post->post_date; ?></span><br/> -->
           <!-- <?php // echo $post->post_title; ?><br/> -->
           <!-- <?php // echo $post->post_except; ?><br/> -->
            <?php echo  portfolio_excerpt_more($post->post_content); ?><br/>

          <p><?php echo get_field('letter_subtitle',$post->ID)?></p>

          <?php $post->ID ?>

         </section>

         <section class="section-6 gray mb-5 padding-y-2rem box-shadow animation" data-animation='slideRight'>
             <div class="row">

                 <div class="col-md-2 text-center">
                     <img src="img/kapa.png" alt="" class="icon-position"/>
                 </div>

                 <div class="col-md-10 pr-5 pl-5 pl-md-0">
                     <h2 class="mt-4">References</h2>

                     <h4>Mr.John Doe</h4>
                     <p class="blue-text mb-1">Founder & CEO, Lorem Ipsum</p>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing
                         elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     </p>

                     <hr>

                     <h4>Mr. Anwar Hosain</h4>
                     <p class="blue-text mb-1">Co-Founder & CEO, MedA-ID</p>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod dolore magna aliqua.
                         Ut enim ad quis nostrud exercitation
                     </p>

                 </div>
             </div>
         </section>

     </article>
 </div>
 </div>




 </div>

 <?php
 get_footer();
  ?>
