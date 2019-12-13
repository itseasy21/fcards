<?php /* Template Name: HomePage */ ?>
<?php
    get_header();
    // b4st_main_before();
?>
<style type="text/css">
  ul.list-group.list-group-flush.search-3.widget_search {
    margin-left: 20px;
}
</style>
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
<?php
b4st_main_after();
get_footer();
?>
