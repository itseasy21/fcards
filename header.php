<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>

  <div class="contaner1">
     <div class="row">
        <div class="col-sm-4 bg-white text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo1.jpg" alt="logo_img" style="width: 96%;" class="mx-auto d-block" />
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
          <?php b4st_navbar_search();?>

  </div>

    <?php //b4st_navbar_brand();
    ?>

  <nav class="navbar navbar-expand-md navbar-light bg-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>
    </div>
  </nav>


  </div>


</div>
</div>
</div>


<?php
//b4st_navbar_after(); //calling search
?>
