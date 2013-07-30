<?php $domain = $_SERVER['HTTP_HOST']; ?>

<!DOCTYPE html>
<!--[if IE 8 ]> <html dir="ltr" lang="en-US" class="no-js ie ie8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<!--[if IE 9 ]> <html dir="ltr" lang="en-US" class="no-js ie ie9"> <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <!--[if (lt IE 9) ]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <link rel="stylesheet" href="http://<?=$domain?>/assets/ie.css"/>
        <!--<![endif]-->
        <!--[if (gte IE 9)|!(IE)]><!-->
		    <link rel="stylesheet" href="http://<?=$domain?>/assets/style.css"/>
        <!--<![endif]-->
        
        <?="\n" //scripts that must fire before pageload - jquery should be presentational and loaded in the footer ?>
        <script src="http://<?=$domain?>/assets/js/head.js"></script>
    </head>
    <body id="front" class="home"> <!-- ID should be generic: blog | category | single | calendar, Class should be specific -->
        <div id="accessibility" class="visuallyhidden"> <!-- style should be set to display:none or visibility:hidden -->
            <a href="#primary-menu">Skip to Navigation</a> |
            <a href="#primary-content">Skip to Content</a>
        </div>
        <!-- pre-wrapper --> 
    	<div id="container">
    	   <!-- pre-header --> 
    		<div class="header-outer outer navbar navbar-fixed-top">
    			<div class="header-inner inner container">
    				<header id="header" class="row show-grid" role="banner">
    					<!-- header-top --> 
    					<div id="logo" class="logo logo-outer outer col-lg-4 col-sm-2">
                            <a class="" href="http://<?=$domain?>/">GridBox</a>
    					</div><!-- end #logo -->
    					<nav id="primary-menu" class="menu-outer outer navbar col-lg-8 col-sm-10" role="navigation">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul>
    					</nav>
    					<!-- header-bottom --> 
    				</header>
    			</div>
    		</div>
            <!-- post-header --> 
            <!-- pre-upper --> 
            <div id="slider-generic" class="upper-outer outer clearfix">
            	<div class="upper-inner inner container">
            		<!-- upper-top --> 
            		<section id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                              <img src="http://<?=$domain?>/assets/images/index.png" alt="">
                              <div class="carousel-caption">
                                this is a carousel caption
                              </div>
                            </div>
                            <div class="item">
                              <img src="http://<?=$domain?>/assets/images/index-2.png" alt="">
                              <div class="carousel-caption">
                                this is a carousel caption 2
                              </div>
                            </div>
                            <div class="item">
                              <img src="http://<?=$domain?>/assets/images/index-3.png" alt="">
                              <div class="carousel-caption">
                                this is a carousel caption 3
                              </div>
                            </div>
                        </div>
            		</section>
            		<!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                        </a>
            		<!-- uppper-bottom --> 
            	</div>
            </div>
            <!-- post-header --> 
            <!-- pre-content --> 
    		<main class="content-outer outer" role="main">
    			<article class="content-inner inner container">
    				<!-- content-top --> 
    				<div class="row">
        				<section id="primary-content" class="col-sm-8 col-lg-8">
        					<h1>This is a heading</h1>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis magna vehicula, sodales nibh id, imperdiet urna. Sed eu augue ultricies, porttitor nunc non, facilisis justo. Vivamus in justo sapien. Ut ultrices molestie tortor suscipit fermentum. Donec pulvinar vitae orci et condimentum. </p>
        					   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis magna vehicula, sodales nibh id, imperdiet urna. Sed eu augue ultricies, porttitor nunc non, facilisis justo. Vivamus in justo sapien. Ut ultrices molestie tortor suscipit fermentum. Donec pulvinar vitae orci et condimentum. </p> 
        				</section>
        				<!-- content-bottom --> 
        				<!-- margin-top --> 
        				<aside id="primary-sidebar" class="col-sm-4 col-lg-4">
        				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis magna vehicula, sodales nibh id, imperdiet urna. Sed eu augue ultricies, porttitor nunc non, facilisis justo. Vivamus in justo sapien. Ut ultrices molestie tortor suscipit fermentum. Donec pulvinar vitae orci et condimentum. </p> 
        				</aside>
    				</div>
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