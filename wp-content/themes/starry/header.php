<?php
/**
 * The Header of STARRY
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php // GET FAVICON
	$favicon = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('favicon') : '';
	if( !empty( $favicon ) ) : ?>
		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($favicon['url']) ?>">
	<?php endif ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE]> 
    	<style> 
    	.with-separation-top:before{top: 0px!important;} 
    	.with-separation-bottom:after{bottom: -30px!important;} 
    	</style> 
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <!-- START BODY -->
  <?php 
  // GET BODY LAYOUT : BOXED OR WIDE ?
  $body_style = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('layout') : ''; 
  ?>
  <body <?php body_class($body_style); ?>>

  	<?php
	// IF YOU WANT TO DISPLAY THE PAGE LOADER
	$pageloading = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloading') : '';
	if( is_front_page() && $pageloading == "yes" ) :
	?>
  		<!-- LOADER DIV - ONLY HOME -->
	  	<div id="loader">
	  		<div id="loading-logo"></div>
	  	</div><!-- END #HEADER -->
	<?php endif; ?>

  	<div id="page">
	  	<!-- START HEADER -->
	  	<?php if ( is_front_page() ) { 
	  		$header_size = "big"; 
	  	} else{
			$header_size = "small"; 
	  	} ?>
	  	<header id="header" class="<?php echo $header_size;?> with-separation-bottom">
	  		<?php
	  		// IF YOU WANT TO DISPLAY ANIMATED POINTER
			$headercursor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headercursor') : '';
			if(  $headercursor == "show" ) :
			?>
		  		<!-- POINTER ANIMATED -->
	  			<canvas id="header-canvas"></canvas>
			<?php endif; ?>
	  		
	  		<?php
	  		// IF YOU WANT TO DISPLAY THE TOP BAR
			$topbarshow = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('topbarshow') : '';
			if(  $topbarshow == "show" ) :
			?>
		  		<!-- TOP NAVIGATION -->
		  		<?php 
				//GET TOPBAR COMPOMENTS
				$topbarcompoments = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('topbarcomponents') : ''; ?>

		  		<?php if (!empty($topbarcompoments['topbarlanguage']) && $topbarcompoments['topbarlanguage'] == true) : ?>
		  			<div id="top-navigation" class="show-mobile">
		  		<?php else: ?>
		  			<div id="top-navigation">
		  		<?php endif; ?>
		  		
			  		<ul class="animate-me fadeInDown" data-wow-duration="1.2s">

				  		<?php 
				  		if (!empty($topbarcompoments['topbarphone']) && $topbarcompoments['topbarphone'] == true) : ?>
				  			<?php 
				  			//DISPLAY PHONE NUMBER
				  			$phonenumber = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('phone') : ''; ?>
					  		<li class="menu-item"><i class="fa fa-phone"></i> <?php echo esc_html($phonenumber); ?></li>
					  	<?php endif; ?>

					  	<?php if (!empty($topbarcompoments['topbarmenu']) && $topbarcompoments['topbarmenu'] == true) : ?>
					  		<?php
					  		// DISPLAY TOPBAR MENU
					  		if ( has_nav_menu('top-nav') ) {
						  		$settings_top = array(
									'theme_location'  => 'top-nav',
									'container'       => false,
									'menu_class'      => '',
									'menu_id'         => '',
									'items_wrap'      => '%3$s'
								);
								wp_nav_menu( $settings_top );
							}
							?>
						<?php endif; ?>

						<?php if (!empty($topbarcompoments['topbarsocial']) && $topbarcompoments['topbarsocial'] == true) : ?>
					  		<li class="menu-item">
					  			<?php 
				  				//DISPLAY PHONE NUMBER
				  				$socialtext = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('topbarsocialtext') : ''; ?>
					  			<span class="navigation-social"><?php echo esc_html($socialtext); ?></span> 

					  			<?php 
					  			//GET THE SOCIAL ICONS
					  			starry_social_icons(); ?>
					  		</li>
					  	<?php endif; ?>

					  	<?php if (!empty($topbarcompoments['topbarsearch']) && $topbarcompoments['topbarsearch'] == true) : ?>
					  		<li class="menu-item">
					  			<?php 
					  			//GET THE SEARCH FORM
					  			get_search_form(); ?>
					  		</li>
					  	<?php endif; ?>

					  	<?php if (!empty($topbarcompoments['topbarlanguage']) && $topbarcompoments['topbarlanguage'] == true) : ?>
					  		<li class="menu-item menu-item-has-children language-switcher">
						  		<?php 
						  		//GET WPML LANGUAGES
						  		starry_languages_switcher(); ?>
						  	</li>
					  	<?php endif; ?>
			  		</ul>
		  		</div><!-- END #TOP-NAVIGATION -->
	  		<?php endif; ?>

	  		<!-- MOBILE NAVIGATION -->
	  		<nav id="navigation-mobile"></nav>
	  	
	  		<!-- MAIN MENU -->
	  		<nav id="navigation">
	  			<!-- DISPLAY MOBILE MENU -->
	  			<a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
	  			<!-- CLOSE MOBILE MENU -->
		  		<a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>
	  			
		  		<?php
		  		// DISPLAY LEFT MENU
		  		if ( has_nav_menu('left-primary') ) {
			  		$settings_left = array(
						'theme_location'  => 'left-primary',
						'menu'            => '',
						'container'       => '',
						'menu_class'      => 'animate-me fadeInLeftBig',
						'menu_id'         => 'left-navigation',
					);
					wp_nav_menu( $settings_left );
				} 
				?>
		  		<div <?php if ( !has_nav_menu('left-primary') && !has_nav_menu('right-primary') ) : echo 'id="logo-container-no-menu"'; endif; ?> class="animate-me flipInX" data-wow-duration="3s">
		  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-navigation">
		  				<?php
				  		// IF YOU WANT TO DISPLAY THE SLOGAN
						$headerslogan = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerslogan') : '';
						if(  $headerslogan == "show" ) :
						?>
		  					<span><?php bloginfo( 'description' ); ?></span>
		  				<?php endif; ?>
		  			</a>
		  		</div>
		  		<?php
		  		//DISPLAY RIGHT MENU
		  		if ( has_nav_menu('right-primary') ) {
			  		// DISPLAY RIGHT MENU
			  		$settings_right = array(
						'theme_location'  => 'right-primary',
						'menu'            => '',
						'container'       => '',
						'menu_class'      => 'animate-me fadeInRightBig',
						'menu_id'         => 'right-navigation',
					);
					wp_nav_menu( $settings_right );
				}
				?>
	  		</nav>

	  		<?php
	  		// IF YOU WANT TO DISPLAY THE TEXT SLIDER
			$showtextticker = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickershow') : '';
			if( is_front_page() && $showtextticker == "yes" ) :
			?>
		  		<!-- TEXT SLIDER -->
				<div id="ticker" class="animate-me zoomIn">
					<?php 
	  				$hometickerintroduce = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickerintroduce') : ''; ?>
					<h4 class="with-breaker"><?php echo $hometickerintroduce; ?></h4>
					<div id="ticker-text">
						<ul>
							<?php 
	  						$hometickercontent = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickercontent2') : ''; ?>
	  						<?php
	  						foreach($hometickercontent as $value) {
							  echo '<li>'.esc_html($value).'</li>';
							}
	  						?>
						</ul>
					</div><!-- END #Ticker-text -->
				</div> <!-- END #ticker --> 
			<?php endif; ?>		
	  		
	  		<?php
	  		// IF YOU WANT TO DISPLAY THE SCROLL BOTTOM BUTTON
			$showscrollbottom = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('homescrolldown') : '';
			if( is_front_page() && $showscrollbottom == "show" ) : ?>
		  		<!-- SCROLL BOTTOM -->
		  		<div id="scroll-bottom" class="animate-me fadeInUpBig">
			  		<a href="#the-container"><i class="fa fa-angle-double-down"></i></a>
		  		</div><!-- END #scroll-bottom -->
			<?php endif; ?>
	  		
	  		
	  		<?php
	  		// IF YOU WANT TO DISPLAY THE SHADING
			$showshade = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headershadow') : '';
			if(  $showshade == "show" ) : ?>
		  		<!-- SHADOW -->
	  			<div id="shade"></div>
			<?php endif; ?>

