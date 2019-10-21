<?php /* Template Name: HomePage */ ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/theme/css/bootstrap.css">
      <script src="<?php get_template_directory_uri() ?>/theme/js/jquery.js"></script>
      <script src="<?php get_template_directory_uri() ?>/theme/js/popper.js"></script>
      <script src="<?php get_template_directory_uri() ?>/theme/js/bootstrap.js"></script>
      <link rel="stylesheet" href="<?php get_template_directory_uri() ?>/theme/css/custom.css">
      <style>
		body {overflow-x:hidden;}
        .text-color {color:#616161;}
      </style>
   </head>
   <body style="background: #ebebeb;">
      <div class="contaner1">
         <div class="row">
            <div class="col-sm-4 bg-white">
				<img src="<?php get_template_directory_uri() ?>/theme/img/logo1.jpg" alt="logo_img" style="width: 96%;" class="mx-auto d-block" />
            </div>
            <div class="col-sm-8 bg-white">
			<div class="row" style="margin: 12px;">
				<div class="col">
				  <select class="form-control" id="sel1" name="sellist1">
					<option>Select Currencies</option>
					<option>Currencies-1</option>
					<option>Currencies-2</option>
					<option>Currencies-3</option>
					<option>Currencies-4</option>
				  </select>
				</div>
				<div class="col">
				  <div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search">
					<div class="input-group-append">
					<button class="btn btn-success" type="submit">Go</button>
					</div>
				  </div>
				</div>
			</div>

               <nav class="navbar navbar-expand-md navbar-light bg-white">
                  <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="nav">
                     <ul class="navbar-nav">
                        <li class="nav-item" >
                           <a class="nav-link text-color font-weight-bold px-3" href="#">HOME</a>
                        </li>
                        <li class="nav-item" >
                           <a class="nav-link text-color font-weight-bold px-3" href="#">New Prodects</a>
                        </li>
                        <li class="nav-item" >
                           <a class="nav-link text-color font-weight-bold px-3" href="#">Shipping</a>
                        </li>
                        <li class="nav-item" >
                           <a class="nav-link text-color font-weight-bold px-3" href="#">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-color font-weight-bold px-3" href="#">FAQ'S</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-color font-weight-bold px-3" href="#">CONTACT</a>
                        </li>
                     </ul>
                     <!-- Search bar -->
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <div class="mb-5">
         <img src="<?php get_template_directory_uri() ?>/theme/img/banner.png" alt="banner_img" class="img-fluid img_banner"/>
      </div>
      <div class="contaner">
         <div class="row">
            <div class="col-sm-4 bg">
               <h3 class="text-center heding_color font-weight-bolder heding_border mt-2 mb-2">Categories</h3>
               <div class="contaner">
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">MATCH ATTAX inc Non UK releases</li>
                     <li class="list-group-item">TOPPS/ MERLIN STICKERS</li>
                     <li class="list-group-item">NON UK CARDS</li>
                     <li class="list-group-item">ADRENALYN XL inc Non UK releases</li>
                     <li class="list-group-item">PANINI STICKERS inc Non UK</li>
                     <li class="list-group-item">A&BC CARDS</li>
                     <li class="list-group-item">OTHER UK CARDS</li>
                     <li class="list-group-item">TOPPS CARDS–NON MATCH ATTAX</li>
                     <li class="list-group-item">CARD SUPPLIES</li>
                     <li class="list-group-item">PANINI CARDS–NON ADRENALYN XL</li>
                     <li class="list-group-item">SELL YOUR CARDS</li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-8">
               <h3 class="text-center heding_color font-weight-bolder heding_border mt-2 mb-2">WELCOME TO FOOTBALL CARDSDIRECT</h3>
               <p class="text-justify">At football Cards Direct you are in the ideal place to find football cards and stickers from both here in
                  the UK and from all around the world. As a full time business it enables us to provide customers with the
                  professional and reliable service you would expect from the top match Attax. Adrenalyn XL and Panini
                  sticker suppliers on the net. As collectors since hildhood (many years ago now) we know what collectors
                  want and are happy to provide that service with the knowledge of man years of experience. Some promise
                  much and are gone tomorrow, we’re here for the long term.
               </p>
               <p class="text-justify">At football Cards Direct you are in the ideal place to find football cards and stickers from both here in
                  the UK and from all around the world. As a full time business it enables us to provide customers with the
                  professional and reliable service you would expect from the top match Attax. Adrenalyn XL and Panini
                  sticker suppliers on the net. As collectors since hildhood (many years ago now) we know what collectors
                  want and are happy to provide that service with the knowledge of man years of experience. Some promise
                  much and are gone tomorrow, we’re here for the long term.
               </p>
               <p class="text-justify">At football Cards Direct you are in the ideal place to find football cards and stickers from both here in
                  the UK and from all around the world. As a full time business it enables us to provide customers with the
                  professional and reliable service you would expect from the top match Attax. Adrenalyn XL and Panini
                  sticker suppliers on the net. As collectors since hildhood (many years ago now) we know what collectors
                  want and are happy to provide that service with the knowledge of man years of experience. Some promise
                  much and are gone tomorrow, we’re here for the long term.
               </p>
               <p class="text-justify">
                  THE HOME OF FOOTBALL CARDS, COLLECTINS FROM THE UK INCLUDING, MATCH ATTAX, ADDRENLYN XL,
                  PANINI STICKERS WITH SO MUCH MORE FROM OUTSIDE THE UK INCLUDING
                  SPAIN, FRANCE, ITALY, GERMANY AND MUCH MORE
               </p>
            </div>
         </div>
      </div>
      <section class="customer-logos slider mt-3">
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-1.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-2.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-3.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-4.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-5.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-6.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-7.png"></div>
         <div class="slide"><img src="<?php get_template_directory_uri() ?>/theme/img/page-8.png"></div>
      </section>
      <div class="bg1 mt-3">
         <p class="text-center"> Copyright © 2018 FootballCardsDirect.com </p>
      </div>
      <script>
         $(document).ready(function(){
             $('.customer-logos').slick({
                 slidesToShow: 6,
                 slidesToScroll: 1,
                 autoplay: true,
                 autoplaySpeed: 1500,
                 arrows: false,
                 dots: false,
                 pauseOnHover: false,
                 responsive: [{
                     breakpoint: 768,
                     settings: {
                         slidesToShow: 4
                     }
                 }, {
                     breakpoint: 520,
                     settings: {
                         slidesToShow: 3
                     }
                 }]
             });
         });

      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   </body>
</html>
