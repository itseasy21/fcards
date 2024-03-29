<?php
    get_header();
    b4st_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/woocommerce-content'); ?>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
    b4st_main_after();
    get_footer();
?>
