<?php /* Template Name: Test */?>
<script>
(function($){

$(document).on('click', '.navbar-brand',function(event){
  event.preventDefault();
  if($('#menu-row').hasClass('menuOpen')){
    $('#menu-row').removeClass('menuOpen')
    .addClass('menuClosed');
    $('#nav-icon').removeClass('fas fa-times fa-2x')
    .addClass('fas fa-bars fa-2x');
  }
  else{
    $('#menu-row').removeClass('menuClosed')
    .addClass('menuOpen');
    $('#nav-icon').removeClass('fas fa-bars fa-2x')
    .addClass('fas fa-times fa-2x');
  }
});
}(jQuery));
</script>

<style>
.row.justify-content-center.menuClosed{
  transform: translateX(-100%);
  transition: all 300ms;
}
.row.justify-content-center.menuOpen{
  transition: all 300ms;
  transform: translateX(0%);
}
</style>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="profile" href="http://gmpg.org/xfn/11">

  <title><?php bloginfo('name'); ?></title>
  <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md fixed-top" id="bs-nav">
  <a class="navbar-brand" href="#"><i class="fas fa-bars fa-2x" id="nav-icon"></i></a>
</nav>

  <div class="container-fluid" id="menu-wrapper">
    <div class="row justify-content-center menuClosed" id="menu-row">
      <div class="col-sm-12 col-lg-12 col-md-12">
      
   
      </div>
    </div>
  </div>
<?php get_footer(); ?>