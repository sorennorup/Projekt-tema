
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <?php include_once('classes/Category.php'); ?>
		<?php include('classes/Widgets.php'); ?>
	    <?php include('classes/Logo.php'); ?>
		<?php include('classes/Menu.php');?>
		<?php include('classes/MenuViewController.php'); ?>
		<?php include('classes/PostView.php');?>
                
  <!--<script type='text/javascript' src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  
  <script type='text/javascript' src="js/respond.js"></script>-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php wp_head(); ?>
		
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="06e7cf7a-c275-4a06-a002-c3faa99d27ab" type="text/javascript" async></script>

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script type= "text/plain" data-cookieconsent="statistics" async src="https://www.googletagmanager.com/gtag/js?id=UA-46938234-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46938234-4');
</script>




	</head>
	
	<div id = "mobile-header">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <div class = "burger"> <i class="fa fa-bars fa-lg"></i></div>
       <div class="topnav" id="myTopnav"> <div class = 'close'>Luk</div>  
			<?php $newmenuView->mobileMenu('Main menu'); ?>
       </div>
	    <div class = 'mobile-body'></div> 	
	   <div class = "mobile-logo"> <?php  Logo::setCustomizeLogo();?> </div> 
	</div>
	  			
	<div class="jumbotron single-page-header">  
	  
            
	<div class = "projekt-logo"><?php  Logo::setCustomizeLogo();?>  </div>
	   <div class = "col-xs-12">
          <div class = "overlay"></div>
	   </div>

	</div>
        
		<?php// $imageUrl = "https://ungepåsporet.nu/wp-content/uploads/2018/03/" ?>
		
			


	<!-- Show the admin links if user is loggedin-->
	<div class = "admin-links">
		
		<?php if(is_user_logged_in()){ ?>
		<a href = "<?php echo admin_url();?>">Kontrolpanel</a><?php echo ' - ' ?>
		<?php edit_post_link("Rediger"); echo ' - ' ?>
		<a href = "<?php echo admin_url('post-new.php?post_type=page');?>">Nyt indlæg</a>
		<?php }?>
	</div>
	
      

		  