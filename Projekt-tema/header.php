		<?php include('theme_includes.php'); ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		
                
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php wp_head(); ?>
	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="1638d57b-35d8-4293-af7f-80d3fd759fbc" type="text/javascript" async></script>

 <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type= "text/plain" data-cookieconsent="statistics" async src="https://www.googletagmanager.com/gtag/js?id=UA-46938234-4"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-46938234-4');
		</script>
		 <!-- Add the background image to the header -->
		<style type="text/css" id="custom-background-css-override">
        .jumbotron { background-image: url('<?php echo background_image(); ?>'); }
    </style>
	</head>
<body>
	
	<div class = "sticky-header">
		<img src = "https://xn--ungevrk-qxa.dk/wp-content/uploads/2018/03/UV-fin-web-logo-tranparent-1.png" />
		
		
	</div> 	
	<div id = "mobile-header">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <div class = "burger"> <i class="fa fa-bars fa-lg"></i></div>
       <div class="topnav" id="myTopnav"> <div class = 'close'>Luk</div>  
			<?php $newmenuView->mobileMenu('Right sidebar menu'); ?>
       </div>
	    <div class = 'mobile-body'></div> 	
	   <div class = "mobile-logo"> <?php  Logo::setCustomizeLogo();?> </div> 
	</div>
    
	
	
	<div class="jumbotron">
	
	<div class = "projekt-logo"><?php  Logo::setCustomizeLogo();?>  </div>
	   <div class = "col-xs-12">
          <div class = "overlay"></div>
	   </div>

	</div>
	<!-- Show the admin links if user is loggedin-->
	<div class = "admin-links">
		 <?php if(is_user_logged_in()){ ?>
		 <a href = "<?php echo admin_url();?>">Kontrolpanel</a><?php echo ' - ' ?>
		 <?php edit_post_link("Rediger"); echo ' - ' ?>
		 <a href = "<?php echo admin_url('post-new.php?post_type=page');?>">Nyt indlæg</a>
		 <?php }?>
	</div>
