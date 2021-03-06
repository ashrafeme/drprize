<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!-- CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo get_template_directory_uri(); ?>/css/color-niceblue.css" rel="stylesheet" media="screen" title="default">
    <link href="<?php echo get_template_directory_uri(); ?>/css/width-boxed.css" rel="stylesheet" media="screen" title="default">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-rtl.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <![endif]-->

    <?php
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
    ?>

    <?php wp_head(); ?>
</head>

<body>

<?php if(of_get_option('om_show_options_panel','')) : ?>
    <!-- Setting Options -->
    <div id="color-switcher" class="animated fadeIn animation-dalay-10 hidden">
        <div id="color-switcher-tab">
            <i class="fa fa-gear fa fa-2x"></i>
        </div>
        <div id="color-switcher-content">
            <h3>Color Selector</h3>
            <a href="#" rel="color-default.css" class="color default">default</a>
            <a href="#" rel="color-niceblue.css" class="color niceblue">niceblue</a>
            <a href="#" rel="color-intenseblue.css" class="color intenseblue">intenseblue</a>
            <a href="#" rel="color-otherblue.css" class="color otherblue">otherblue</a>
            <a href="#" rel="color-blue.css" class="color blue">blue</a>
            <a href="#" rel="color-puregreen.css" class="color puregreen">puregreen</a>
            <a href="#" rel="color-grassgreen.css" class="color grassgreen">grassgreen</a>
            <a href="#" rel="color-green.css" class="color green">green</a>        
            <a href="#" rel="color-olive.css" class="color olive">olive</a>
            <a href="#" rel="color-gold.css" class="color gold">gold</a>
            <a href="#" rel="color-orange.css" class="color orange">orange</a>
            <a href="#" rel="color-pink.css" class="color pink">pink</a>
            <a href="#" rel="color-fuchsia.css" class="color fuchsia">fuchsia</a>
            <a href="#" rel="color-violet.css" class="color violet">violet</a>
            <a href="#" rel="color-red.css" class="color red">red</a>

            <h3>Container Selector</h3>
            <div class="btn-group">
                <button href="#" class="option btn btn-sm btn-primary" rel="width-boxed.css">Boxed</button>
                <button href="#" class="option btn btn-sm btn-primary" rel="width-full.css">Full Width</button>
            </div>
        </div>
    </div> <!-- color-switcher -->
<?php endif; ?>

<style type="text/css">
        #header{
        background-image:url("https://drprize-ashrafeme.c9.io/wp-content/uploads/2015/03/pan.jpg");
        }
</style>
<div class="boxed">

<header id="header" class="hidden-xs">
    <div class="container">
        <div id="header-title">
            <h1 class="animated fadeInDown"><a href="<?php bloginfo('home'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            <p class="animated fadeInLeft"><?php bloginfo('description'); ?></p>
        </div>

        <div id="social-header" class="hidden hidden-xs">
            <a href="<?php echo of_get_option('om_twitter_user','#'); ?>" class="social-icon soc-twitter animated fadeInDown animation-delay-1"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo of_get_option('om_google_user','#'); ?>" class="social-icon soc-google-plus animated fadeInDown animation-delay-2"><i class="fa fa-google-plus"></i></a>
            <a href="<?php echo of_get_option('om_facebook_user','#'); ?>" class="social-icon soc-facebook animated fadeInDown animation-delay-3"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo of_get_option('om_instagram_user','#'); ?>" class="social-icon soc-instagram animated fadeInDown animation-delay-4"><i class="fa fa-instagram"></i></a>
            <a href="<?php echo of_get_option('om_pinterest_user','#'); ?>" class="social-icon soc-pinterest animated fadeInDown animation-delay-5"><i class="fa fa-pinterest"></i></a>
            <a href="<?php echo of_get_option('om_linkedin_user','#'); ?>" class="social-icon soc-linkedin animated fadeInDown animation-delay-6"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo of_get_option('om_github_user','#'); ?>" class="social-icon soc-github animated fadeInDown animation-delay-7"><i class="fa fa-github"></i></a>
        </div>

        <div id="search-header" class="hidden hidden-xs animated fadeInRight">
            <form class="navbar-search" method="get" action="<?php bloginfo('home'); ?>/">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="s" id="s">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </div> <!-- container -->
</header> <!-- header -->



<nav class="navbar navbar-static-top navbar-mind" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand visible-xs" href="index.html"><?php echo get_bloginfo('name'); ?></span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-inverse"></i>
            </button>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-mind-collapse">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => '',
                    'container_class'   => '',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>

            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                <?php if ( is_user_logged_in() ) : ?>
                    <?php global $current_user;
                        get_currentuserinfo();
                    ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $current_user->user_login; ?></a>
                    <div class="dropdown-menu pull-right dropdown-profile animated fadeInUp">
                        <?php echo get_avatar( $current_user->user_email, 100); ?> 
                        <h4><?php echo $current_user->user_login; ?></h4>
                        <?php echo $current_user->user_email; ?><br>
                        <a href="<?php echo get_page_link(get_page_by_title('Profile')->ID); ?>">Profile</a> | <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                    </div>
                <?php else : ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">دخول</a>
                    <div class="dropdown-menu pull-right dropdown-login animated fadeInUp">
                        <form role="form" name="loginform" id="loginform" action="<?php echo wp_login_url(); ?>" method="post">
                            <h4 class="section-title">تسجيل دخول</h4>
                    
                            <div class="form-group">
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="اسم المستخدم" name="log" id="user_login">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="كلمة المرور" name="pwd" id="user_pass">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        تذكرنى
                                    </label>
                                    <input type="checkbox"  name="rememberme" id="rememberme" value="forever" tabindex="90">
                                </div>
                                <input type="hidden" name="redirect_to" value="<?php bloginfo('home'); ?>" />
                                <input type="hidden" name="testcookie" value="1" />
                                <button type="submit" class="btn btn-primary pull-right" name="wp-submit" id="wp-submit">تسجيل دخول</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>      
                    </div>
                <?php endif; ?>
                </li> <!-- dropdown -->
            </ul> <!-- nav nabvar-nav -->
        </div><!-- navbar-collapse -->
    </div> <!-- container -->
</nav> <!-- navbar navbar-default -->