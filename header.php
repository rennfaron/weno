<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
    
    <!-- TEMPORARY WHILE ON STAGING SERVER: -->
    <meta name="robots" content="noindex, nofollow, noarchive">
    
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title>Weno Healthcare</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Armata">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,400italic,600,600italic,700,700italic">
	<link rel="stylesheet" href="/style.css" />
	<!--[if lte IE 8]>
		<link rel="stylesheet" href="ie8.css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="ie7.css" />
	<![endif]-->
	<link rel="shortcut icon" sizes="16x16" href="favicon.ico" />
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
    <div class="wrap-header">
        <header class="site clearfix">
            <div>
                <h1>
                    <a class="logo" href="/"></a>
                </h1>
            </div>
            <a id="post-header"></a>
        </header>