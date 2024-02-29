<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>
    	<?php
        global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );
		?>
    </title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Armata">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,400italic,600,600italic,700,700italic">
    <link rel="stylesheet" href="/style.css" />
    <!--[if lte IE 8]>
    	<link rel="stylesheet" href="/ie8.css" />
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <!--script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script-->
    <![endif]-->
    <!--[if lte IE 7]>
        <link rel="stylesheet" href="/ie7.css" />
    <![endif]-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>

<body id="<?php $pageName = basename($_SERVER['PHP_SELF']); $pageName = substr($pageName, 0, -4); echo $pageName; ?>">
	<nav class="site">
		<button class="menu-btn tablet no-mobile" type="button">Press Here To View Menu Information Or For Member Login</button>
        <button class="menu-btn mobile" type="button">Press To Login Or View Menu Information</button>
		<ul class="clearfix">
        	<li class="member-login tablet"><a>Member Login</a></li>
			<li><a href="/">Home</a></li>
			<li><a href="/join.php">Join</a></li>
			<li><a href="/take-a-tour.php">Take a Tour</a></li>
			<li><a href="/about-us.php">About Us</a></li>
			<li><a href="/blog/">Blog</a></li>
			<li><a href="/contact.php">Contact</a></li>
			<li class="member-login no-tablet"><a>Member Login</a></li>
            <li class="empty"><span></span></li>
		</ul>
	</nav>
    <nav class="login">
    	<h1>Thanks for choosing WENO!</h1>
        <form>
        	<div class="wrap-login">
                <label for="username">
                    Username
                    <input type="text" id="username">
                </label>
                <label for="password">
                    Password
                    <input type="password" id="password">
                </label>
            </div>
            <div class="submit-login">
            	<input type="submit" value="login">
                <span class="before"></span>
                <span class="after"></span>
            </div>
        </form>
        <ul>
        	<li><a href="#">Need to join Weno?</a></li>
            <li><a href="#">Forgot your password?</a></li>
        </ul>
    </nav>
	<header class="site clearfix">
		<div>
			<h1>
				<a class="logo" href="/"></a>
			</h1>
		</div>
		<a id="post-header"></a>
	</header>
    <section>
        <header class="page">
        	<?php if(is_search()){ ?>
            <h1 class="page">Search Results</h1>
            <?php } elseif(is_category()){ ?>
            <h1 class="page"><?php $category = get_the_category(); if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'.</a>'; } ?></h1>
            <?php } elseif(is_date()){ ?>
            <h1 class="page"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F j, Y') ?></time></h1>
            <?php } elseif(is_single()){ } else{ ?>
            <h1 class="page">What WENO is talking about</h1>
            <h2 class="page">discussions from the WENO team</h2>
            <?php } ?>
		</header>
    </section>