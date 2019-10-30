<?php
// Check whether the Titan Framework plugin is activated, and notify if it isn't
require_once( 'titan-framework-checker.php' );

add_action( 'tf_create_options', 'fcards_options' );
function fcards_options() {
  // Initialize Titan with my special unique namespace
  $titan = TitanFramework::getInstance( 'fcards' );

  // Create my admin panel
  $panel = $titan->createAdminPanel( array(
      'name' => 'Theme Options',
      'title' => 'fcards Settings',
      'icon'  => 'dashicons-admin-appearance'
  ) );

  $general = $panel->createTab( array(
      'name' => 'General',
      'title' => 'General Options',
  ) );


  $general->createOption( array(
      'name' => 'Default Settings',
      'type' => 'heading',
  ) );

  $general->createOption( array(
      'name' => 'Upload Favicon Default',
      'id' => 'my_favicon_default',
      'type' => 'upload',
      'desc' => 'Upload your Favicon size(16x16 or 32x32 or 64x64)'
  ) );

  $general->createOption( array(
      'name' => 'Upload Main Logo',
      'id' => 'logo_main',
      'type' => 'upload',
      'desc' => 'Upload your main logo'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (Home Page)',
      'id' => 'logo_sub_home',
      'type' => 'upload',
      'desc' => 'Upload Banner for Home'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (About Page)',
      'id' => 'logo_sub_about',
      'type' => 'upload',
      'desc' => 'Upload Banner for About'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (Events Page)',
      'id' => 'logo_sub_event',
      'type' => 'upload',
      'desc' => 'Upload Banner for Events'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (Consultancy Page)',
      'id' => 'logo_sub_consultancy',
      'type' => 'upload',
      'desc' => 'Upload Banner for Consultancy'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (News Page)',
      'id' => 'logo_sub_news',
      'type' => 'upload',
      'desc' => 'Upload Banner for News'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (Contact Page)',
      'id' => 'logo_sub_contact',
      'type' => 'upload',
      'desc' => 'Upload Banner for Contact'
  ) );

  $general->createOption( array(
      'name' => 'Upload Banner (Child Friendly Cities Page)',
      'id' => 'logo_sub_child',
      'type' => 'upload',
      'desc' => 'Upload Banner for Child Friendly Cities'
  ) );


  $general->createOption( array(
  'name' => 'Telephone No.',
  'id' => 'tel_no',
  'type' => 'text',
  'desc' => 'Enter Telephone No.'
  ) );

  $general->createOption( array(
      'name' => 'Footer Settings',
      'type' => 'heading',
  ) );

  $general->createOption( array(
      'name' => 'Upload Footer Logo',
      'id' => 'logo_footer',
      'type' => 'upload',
      'desc' => 'Upload Footer Logo'
  ) );

  $general->createOption( array (
      'name' => 'Footer Logo Link',
      'id' => 'footer_link',
      'type' => 'text'
  ) );

  $general->createOption( array(
  'name' => 'Footer Email ID',
  'id' => 'mail_id',
  'type' => 'text',
  'desc' => 'Enter Email ID'
  ) );

  $general->createOption( array(
      'type' => 'save',
  ) );

}
