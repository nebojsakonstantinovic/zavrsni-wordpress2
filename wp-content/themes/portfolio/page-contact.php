<?php

/**
*Template Name: Contact Template
*/

?>

<?php
get_header();
 ?>

 <!--menja se -->
 <div class="col-lg-8">

     <article class="">

         <section class="section-10 gray mb-5 mt-4 box-shadow"> <!-- name form -->

             <div id="googleMap" style="width:100%;height:400px;"></div>

         </section>

         <!--Form -->
         <section class="section-11 gray mb-5 padding-y-2rem box-shadow animation" data-animation='slideLeft'> <!-- name map -->

             <div class="px-5">
                 <h2 class="mt-4">Contact</h2>
                 <!--forma -->
                 <form class="contact-form" method="post" action="">
                     <!-- name -->
                     <div class="form-group">
                         <div class="input-group">
                             <input class="form-control" name="name" value="" placeholder="Name*">
                             <span class="input-group-addon fa fa-user-o fs-35"></span>
                         </div>
                         <div class="error"></div>
                     </div>
                     <!-- email -->
                     <div class="form-group">
                         <div class="input-group">
                             <input class="form-control" name="email" value="" placeholder="Email*">
                             <span class="input-group-addon fa fa-envelope-o"></span>
                         </div>
                         <div class="error"></div>
                     </div>
                     <!-- message -->
                     <div class="form-group">
                         <div class="input-group">
                             <input class="form-control" name="message" value="" placeholder="Message*">
                             <span class="input-group-addon fa fa-file-text-o fs-35"></span>
                         </div>
                         <div class="error"></div>
                     </div>
                     <!-- button -->
                     <button class="btn btn-info text-white hand" type='submit'>Submit</button>
                 </form>

             </div>

         </section>

     </article>


     <section class="section-4 gray mb-5 py-2 box-shadow animation" data-animation='slideLeft'>

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

 </div>
 </div>




 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="js/jquery.min.js" type="text/javascript"></script>
 <script src="js/poper.js" type="text/javascript"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <!-- JS bootstrap -->
 <script src="js/bootstrap.min.js"></script>
 <!-- JS main -->
 <script src="js/main.js" type="text/javascript"></script>
 <!-- JS validate min -->
 <script src="js/jquery.validate.min.js" type="text/javascript"></script>
 <!-- form validation -->
 <script type="text/javascript">
 $(document).ready(function () {
 $(function () {
     $(".contact-form").validate({
         highlight: function (element) {
             $(element).closest('.form-group').addClass("has-danger");
             $(element).addClass("form-control-danger");
         },
         unhighlight: function (element) {
             $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
             $(element).removeClass('form-control-danger').addClass('form-control-success');
         },
         rules: {
             name: {
                 required: true,
                 rangelength: [3, 255]
             },
             email: {
                 required: true,
                 email: true
             },
             message: {
                 required: true,
                 rangelength: [10, 255]
             }


         },
         messages: {
             name: {
                 required: "The *Name field is required!",
                 rangelength: "The *Name must be between 3 and 255 characters!"
             },
             email: {
                 required: "The *Email field is required!",
                 email: "Pleas enter a valid email adress"
             },
             message: {
                 required: "The *Name field is required!",
                 rangelength: "The *Message must be between 10 and 255 characters!"
             }
         },
         errorElement: 'p',
         errorPlacement: function (error, element) {
             error.appendTo($(element).closest('.form-group').find('.error'));
         }

     });
 });
 });
 //Form Validation

 </script>

 <!-- google maps -->
 <script>
 function myMap() {

 var prvi = {lat: 44.816046, lng: 20.460716};

 //                var mapProp = {
 //                    center: new google.maps.LatLng(44.816046, 20.460716),
 //                    zoom: 17
 //                };


 var map = new google.maps.Map(document.getElementById('googleMap'), {
     zoom: 17,
     center: prvi
 });


 //          var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);



 var contentString1 = '<div id="content" class="text-center">' +
         '<img  class="img-fluid" style="max-width:260px" src="img/sat.png"></img>' +
         '<div id="bodyContent">' +
         '<h2 style="margin-top:10px">EKOL Tepisi Beograd</h2>' +
         '<p>Smederevski put 45, 11130 Beograd</p>' +
         '<p>Tel:011/341-55-05</p>' +
         '</div>' +
         '</div>';



 var infowindow1 = new google.maps.InfoWindow({
     content: contentString1
 });


 var marker1 = new google.maps.Marker({
     position: prvi,
     map: map,
     title: 'EKOL Tepisi Beograd',
     animation: google.maps.Animation.DROP
 });
 marker1.addListener('click', function () {
     infowindow1.open(map, marker1);
 });

 marker1.addListener('click', toggleBounce);

 }






 // animacija

 function toggleBounce() {
 if (marker1.getAnimation() !== null) {
     marker1.setAnimation(null);
 } else {
     marker1.setAnimation(google.maps.Animation.BOUNCE);
 }
 }

 </script>

 <!-- api key -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy2SusA4wzNLjcKAfnQlEXP-YjsIreHW8&callback=myMap"></script>




 <?php
 get_footer();
  ?>
