<?php
get_header();
 ?>

 <?php

// Uzimanje Id-ja kategorije koju smo selektovali
$cat_id = get_query_var('cat');

$args = array(
  "numberposts" => -1, // broj postova koji se selektuje, ako je -1 to je selekcija svih postova
  "order" => "DESC", //opadajuce sortiranje , najnoviji ide prvi
  "orderby" => "post_date", //sorttiranje postova po datumu
  "category" => "$cat_id" //filtriranje po kategoriji
);

// filtriranje postova
$posts = get_posts($args);

  ?>

 <!--menja se -->
 <div class="col-lg-8">

     <article class="">

         <section class="section-9">

             <div class="row masonery">


              <?php foreach ($posts as $pt) {  ?>

                 <!--clanak 1 -->
                 <div class="col-sm-6">
                     <article>
                       <a href="<?php echo get_permalink($pt->ID); ?>">
                         <figure>
                             <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?><br/>
                             <!-- <?php print_r($pimage); ?> -->
                             <img src="<?php echo $pimage[0];  ?>" alt=""/>
                         </figure>
                      </a>

                         <div class="red-title-2 title text-white" style="background-color: #f0213e;">

                             <h3> <?php echo $pt->post_title; ?><br/> </h3>
                             <p class="text-white">branding, ui-ux, article</p>
                         </div>

                         <div class="tekst-2">
                             <p>
                                 <?php echo portfolio_get_more_excerpt($pt->post_content); ?><br/>
                             </p>
                         </div>
                     </article>
                 </div>

            <?php } ?>

             </div>
         </section>



         <!--isto je kao u indeksu -->
         <section class="section-4 gray mb-5 py-2 box-shadow">

             <div class="row">
                 <div class="col-md-2">

                 </div>
                 <div class="col-md-10">
                     <div class="row">
                         <div class="col-md-6">
                             <a href="#" class="blue-text my-3 text-center text-md-left d-block">www.alrayhan.com</a>
                         </div>
                         <div class="col-md-6">
                             <a href="#" class="blue-text my-3 text-center text-md-left d-block">dribbble.com/rtralrayhan</a>
                         </div>
                     </div>
                 </div>
             </div>

         </section>

     </article>
 </div>
 </div>


 <?php
 get_footer();
  ?>
