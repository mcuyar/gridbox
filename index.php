<?php $domain = $_SERVER['HTTP_HOST']; ?>

<!DOCTYPE html>
<!--[if IE 8 ]> <html dir="ltr" lang="en-US" class="no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="ltr" lang="en-US" class="no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html class="no-js" dir="ltr" lang="en-US">
<!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Home | Gridbox</title>
        <base href="http://<?=$domain?>"> <?="\n" // base url for relative links ?>
        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index,follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="" />
        <meta name="application-name" content="Mediasation CMS" id="site-meta-data" <?="\n" //HTML5 allows id attribute for any html element ?>
            data-gaId="UA-XXXXX-Y" 
            data-optId="XXXXXX"
        />
        
        <?="\n" //Open Graph - Facebook/Social Media ?>
        <meta property='og:locale' content='en_US'/>
        <meta property='og:type' content='article'/>
        <meta property='og:site_name' content='Gridbox'/>
        <meta property='og:title' content='Home'/>
        <meta property='og:description' content=''/>
        <meta property='og:url' content='http://<?=$domain?>/'/>
        <meta property='og:image' content='http://<?=$domain?>/images/image.jpg'/>
        
        <?="\n" //canonical url & site icons ?>
        <link rel="canonical" href="http://<?=$domain?>/" /> <?php // current page url ?>
        <link rel="shortcut icon" href="http://<?=$domain?>/favicon.ico">
        <link rel="apple-touch-icon" sizes="114×114" href="http://<?=$domain?>/touch-icon-114×114.png" />
        <link rel="apple-touch-icon" sizes="72×72" href="http://<?=$domain?>/touch-icon-72×72.png" />
        <link rel="apple-touch-icon" href="http://<?=$domain?>/touch-icon-iphone.png" /> <?php // size: 57x57 ?>

        <!--[if (lt IE 9) ]><! internet explorer 8 stylesheet / html5 support -->
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <link rel="stylesheet" href="http://<?=$domain?>/assets/ie.css"/>
        <!--<![endif]-->
        <!--[if (gte IE 9)|!(IE)]><! modern browser stylesheet -->
		    <link rel="stylesheet" href="http://<?=$domain?>/assets/style.css"/>
        <!--<![endif]-->
        
        <?="\n" //scripts that must fire before pageload - jquery should be presentational and loaded in the footer ?>
        <script src="http://<?=$domain?>/assets/js/head.js"></script>
    </head>
    <body id="front" class="home"> <!-- ID should be generic: blog | category | single | calendar, Class should be specific -->
        <div id="accessibility"> <!-- style should be set to display:none or visibility:hidden -->
            <a href="#primary-menu">Skip to Navigation</a> |
            <a href="#primary-content">Skip to Content</a>
        </div>
        <!-- pre-wrapper --> 
    	<div id="container">
    	   <!-- pre-header --> 
    		<div class="header-outer outer">
    			<div class="header-inner inner">
    				<header id="header" role="banner">
    					<!-- header-top --> 
    					<div id="logo" class="logo logo-outer outer">
    						<a href=""></a>
    					</div><!-- end #logo -->
    					<nav id="primary-menu" class="menu-outer outer" role="navigation">
    						<ul class="menu"></ul>
    					</nav>
    					<!-- header-bottom --> 
    				</header>
    			</div>
    		</div>
            <!-- post-header --> 
            <!-- pre-upper --> 
            <div class="upper-outer outer">
            	<div class="upper-inner inner">
            		<!-- upper-top --> 
            		<section id="upper" class="upper-content">
            			<!-- upper --> 
            		</section>
            		<!-- uppper-bottom --> 
            	</div>
            </div>
            <!-- post-header --> 
            <!-- pre-content --> 
    		<main class="content-outer outer" role="main">
    			<article class="content-inner inner">
    				<!-- content-top --> 
    				<section id="primary-content">
    					<!-- content --> 
    				</section>
    				<!-- content-bottom --> 
    				<!-- margin-top --> 
    				<aside id="primary-sidebar" class="margin">
    				    <!-- margin --> 
    				</aside>
    				<!-- margin-bottom -->
    			</article>
    		</main>
            <!-- post-content --> 
            <!-- pre-lower --> 
    		<div class="lower-outer outer">
    			<div class="lower-inner inner">
    				<!-- lower-top --> 
    				<section id="lower" class="lower-content">
    					<!-- lower --> 
    				</section>
    				<!-- lower-bottom --> 
    			</div>
    		</div>
            <!-- post-lower --> 
            <!-- pre-footer --> 
    		<div id="footer-outer" class="outer">
    			<div id="footer-inner" class="inner">
    				<!-- footer-top --> 
    				<footer id="footer">
    					<!-- footer --> 
    				</footer>
    				<!-- footer-bottom --> 
    			</div>
    		</div>
            <!-- post-footer -->
    	</div>
    	<!-- post-wrapper -->
    	
    	<?="\n"  
    	    //CDN Files, Minified plugins file and site scripts 
        	//@todo: need jquery fallback if CDN fails
    	?>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>
        <script src="http://<?=$domain?>/vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="http://<?=$domain?>/assets/js/plugins.js"></script>
        <script src="http://<?=$domain?>/assets/js/scripts.js"></script>
    </body>
</html>