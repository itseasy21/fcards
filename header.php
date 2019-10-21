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

<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
  <div class="contaner1">
     <div class="row">
        <div class="col-sm-4 bg-white">
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
    <div class="col">
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>
      </div>
      </div>
    </div>
  </div>

    <?php b4st_navbar_brand();?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>

      <?php b4st_navbar_search();?>
    </div>


  </div>


</div>
</div>
</div>
<div class="mb-5">
<img src="<?php echo get_template_directory_uri(); ?>/theme/img/banner.png" alt="banner_img" class="img-fluid img_banner"/>
</div>

</nav>
<?php b4st_navbar_after();?>
