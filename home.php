<?php /* Template Name: HomePage */ ?>
<?php
    get_header();
    // b4st_main_before();
?>

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
          <div class="mb-5 text-center">
            <a href="?page_id=103">
              <img src="<?php echo get_template_directory_uri(); ?>/theme/img/banner.png" alt="banner_img" class="img-fluid img_banner"/>
            </a>
          </div>
        </div>
         <div class="row">
           <?php get_sidebar(); ?>
            <div class="col-sm-8">
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <?php the_content()?>
                    <?php wp_link_pages(); ?>
              <?php
                endwhile;
                else :
                  get_template_part('loops/404');
                endif;
              ?>
            </div>
         </div>
      </div>
      <section>
        <?php echo do_shortcode("[wcps id='100']"); ?>
      </section>

<script>
  // $(document).ready(function() {
  jQuery(document).ready(function($){
        function myfunction()
        {
          event.preventDefault();
          var origin   = window.location.origin;
          var playername = $( "#playername option:selected" ).text();
          var teamname = $( "#teamname option:selected" ).text();
          // alert(keywords);
          // var searchURI = origin + '/jobs/?s=' + category + '+' + jobtype + '+' + location;
          // console.log(searchURI);
          //window.location.replace(searchURI);
          //location.href = searchURI;

          if(playername != "" && teamname == "")
          {
            var searchURI = origin + '/?s=' + playername;
            window.location.replace(searchURI);
          }
          else if(teamname != "" && playername == "")
          {
            var searchURI = origin + '/?s=' + teamname;
            window.location.replace(searchURI);
          }else{
            var searchURI = origin + '/?s=' + teamname + "+" + playername;
            window.location.replace(searchURI);
          }

        }
      });
      </script>
<?php
b4st_main_after();
get_footer();
?>
