<?php
get_header();
 ?>


 <!--menja se -->
 <div class="col-md-8">

     <!-- Add-this buttoni -->
     <div class="addthis_inline_share_toolbox pt-3"></div>

     <article class="">

         <section class="section-7 gray mb-5 pb-2 box-shadow">

             <figure>
               <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?><br/>
               <!-- <?php print_r($pimage); ?> -->
               <img src="<?php echo $pimage[0];  ?>" alt=""/>
             </figure>

             <div class="red-title text-white" style="background-color: #f0213e;">
                 <h2> <?php echo $post->post_title; ?><br/> </h2>
                 <p class="text-white">branding, ui-ux, article,</p>
             </div>

             <div>
                  <?php echo $post->post_content; ?><br/>
             </div>

         </section>

         <!--Comments -->
         <section class="section-8 box-shadow">

             <!--comments bootstrap -->

             <article class="media">
                 <figure class="mr-3 wrap">
                     <img src="img/jenny-doe.jpg" alt="Generic placeholder image">
                 </figure>
                 <div class="media-body">
                     <h5 class="mt-0">Jenny Doe</h5>
                     <p>February 18, 2015 at 2:56 pm</p>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     </p>
                     <!--reply -->
                     <div class="media mt-3">
                         <figure class="mr-3 wrap">
                             <img src="img/john-doe.jpg" alt="Generic placeholder image">
                         </figure>
                         <div class="media-body">
                             <h5 class="mt-0">John Doe</h5>
                             <p>February 18, 2015 at 2:56 pm</p>
                             <p>
                                 Yahoooo, I you did this
                             </p>
                         </div>
                     </div>
                 </div>
             </article>




             <!--                            <article class='comment'>

                                             <div class="row">

                                                 <div class="col-md-2">
                                                     <img src="img/jenny-doe.jpg" alt="" width="64" height="64"/>
                                                 </div>

                                                 <div class="col-md-10">
                                                     <article class="art-comment">
                                                         <h5>Jenny Doe</h5>
                                                         <p>February 18, 2015 at 2:56 pm</p>
                                                         <p>
                                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                         </p>
                                                     </article>
                                                 </div>

                                             </div>

                                             <article class="reply">

                                                 <div class="row">

                                                     <div class="col-md-2">
                                                         <img src="img/john-doe.jpg" alt="" width="64" height="64"/>
                                                     </div>

                                                     <div class="col-md-10">
                                                         <article class="art-comment">
                                                             <h5>John Doe</h5>
                                                             <p>February 18, 2015 at 2:56 pm</p>
                                                             <p>
                                                                 Yahoooo, I you did this
                                                             </p>
                                                         </article>
                                                     </div>

                                                 </div>
                                             </article>


                                         </article>-->



         </section>




         <!-- comment form -->
         <section class="section-11 gray mb-5 padding-y-2rem box-shadow"> <!-- name map -->

             <div class="px-5">
                 <h2 class="mt-4">Post a comment</h2>
                 <!--forma -->
                 <form class="contact-form" method="post" action="">
                     <!-- name -->
                     <div class="form-group">
                         <input class="form-control" name="name" value="" placeholder="Name">
                         <div class="error"></div>
                     </div>
                     <!-- email -->
                     <div class="form-group">
                         <input class="form-control" name="email" value="" placeholder="Email">
                         <div class="error"></div>
                     </div>
                     <!-- message -->
                     <div class="form-group">
                         <textarea class="form-control" name="text" placeholder="Write Here" rows="6"></textarea>
                         <!--                                            <input class="form-control" name="message" value="" placeholder="Write Here">-->
                         <div class="error"></div>
                     </div>
                     <!-- button -->
                     <button class="btn btn-info text-white hand" type="submit">Comment</button>
                 </form>

             </div>

         </section>


     </article>
 </div>
 </div>





 <?php
 get_footer();
  ?>
