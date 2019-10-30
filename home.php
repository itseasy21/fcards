<?php /* Template Name: HomePage */ ?>
<?php
    get_header();
    // b4st_main_before();
?>
<div class="mb-5">
<img src="<?php echo get_template_directory_uri(); ?>/theme/img/banner.png" alt="banner_img" class="img-fluid img_banner"/>
</div>
<!-- <div class="row mb-5">
  <div class="col-md-6">
    <div class="row">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/theme/img/left1.jpg" alt="left1" class="img-fluid img_banner"/>
      </a>
    </div>
    <div class="row">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/theme/img/left2.jpg" alt="left2" class="img-fluid img_banner"/>
      </a>
    </div>
    <div class="row">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/theme/img/left3.jpg" alt="left3" class="img-fluid img_banner"/>
      </a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/img/right_img.jpg" alt="right_img" class="img-fluid img_banner"/>
        </a>
      </div>
    </div>
  </div>
</div> -->
      <div class="contaner">
         <div class="row">
           <?php get_sidebar(); ?>
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
      <section>
        <?php echo do_shortcode("[wcps id='100']"); ?>
      </section>
<?php
    b4st_main_after();
    get_footer();
?>
