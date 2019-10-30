<?php
    get_header();
    b4st_main_before();
?>

<div class="contaner">
   <div class="row">
     <div class="col-sm-8">
       <?php get_template_part('loops/page-content'); ?>
   </div>
</div>
</div>

<?php
    b4st_main_after();
    get_footer();
?>
