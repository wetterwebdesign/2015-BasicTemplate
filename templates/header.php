<div class="overflow-container">
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="top-bar">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-6 mob-padd">
            	<div class="social-media"><?php dynamic_sidebar('sidebar-top-bar-left-social-media'); ?></div>
                <div class="top-bar-left-content"><?php dynamic_sidebar('sidebar-top-bar-left'); ?></div>
                <div class="clear"></div>
            </div>
            <div class="col-md-6 contact-info"><?php dynamic_sidebar('sidebar-top-bar-right'); ?></div>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    	<div class="logo"><?php dynamic_sidebar('sidebar-logo'); ?></div>
    </div>
  </div>
<div class="navigation-container">
  <div class="container">
    <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <div class="mobile-menu"><span class="menu-ico">&#xf0c9;</span> MENU</div>
          </button>
        </div>
    
        <nav class="collapse navbar-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>
        </nav>
    </div>
  </div>
</div>
</header>
