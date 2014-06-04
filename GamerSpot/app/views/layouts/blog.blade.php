<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Rockit Now</title>
<meta name="description" content="">
<meta name="author" content="">
<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--// Stylesheets //-->
<link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/skeleton.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/player.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/color.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/fancybox.css') }}" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--// Favicons //-->
<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />
<link rel="rockit-touch-icon" href="{{ URL::asset('images/rockit-touch-icon.png') }}" />
<link rel="rockit-touch-icon" sizes="72x72" href="{{ URL::asset('images/rockit-touch-icon-72x72.png') }}" />
<link rel="rockit-touch-icon" sizes="114x114" href="{{ URL::asset('images/rockit-touch-icon-114x114.png') }}" />
<!--// Javascript //-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.infinite-carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/animatedcollapse.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/ddsmoothmenu.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.nivo.slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/scrolltopcontrol.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/tabs.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.countdown.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.jplayer.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jplayer.playlist.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/player.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.fancybox-1.3.1.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.mCustomScrollbar.js') }}"></script>

</head>
<body>
<!-- Outer Wrapper Start -->
<div id="outer-wrapper">
	<div class="inner">
    	<!-- Header Start -->
    	<div id="header">
        	<span class="topbar">&nbsp;</span>
        	<!-- Container Start -->
            <div class="container">
            	<!-- Logo Start -->
            	<div class="five columns left">
                	<a href="index.html" class="logo"><img style="width: 200px;" src="{{ URL::asset('images/GamerSpot Logo.png') }}" alt="" /></a>
                </div>
                <!-- Logo End -->
                <div class="eleven columns right">
                    <!-- Navigation Start -->
                    <div class="navigation">
                    	<!--  <a href="albums.html" class="onlinestore">Online Store</a> -->
                        <div id="smoothmenu1" class="ddsmoothmenu">
                            <ul>
                                <li class="current-menu-item"><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">Reviews</a></li>
                                <li><a href="news.html">Previews</a></li>
                                <li><a href="#">Secciones</a>
                                    <ul>
                                        <li><a href="albums.html">Xbox</a></li>
                                        <li><a href="album-detail.html">Playstation</a></li>
                                        <li><a href="album-detail.html">Nintendo</a></li>
                                        <li><a href="album-detail.html">PC</a></li>
                                        <li><a href="album-detail.html">Mobile</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">TV</a>
                                    <ul>
                                        <li><a href="timeline.html">Twitch</a></li>
                                        <li><a href="calendar.html">Youtube</a></li>
                                        <li><a href="map.html">Stream</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Podcast</a>
                                	<ul>
                                    	<li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-detail.html">Three Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Eventos</a>
                                    <ul>
                                        <li><a href="gallery-two-col.html">Two Column</a></li>
                                        <li><a href="gallery-three-col.html">Three Column</a></li>
                                        <li><a href="gallery-four-col.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contacto</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Navigation End -->
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Header End -->
        <div class="clear"></div>
        <div class="inner shadow">
        	<!-- Banner Start -->
            <div id="banner" class="row">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <a href="#"><img src="images/image_35293_fit_620.jpg" title="#banner1" alt="" /></a>
                        <a href="#"><img src="images/news_photo_28999_1369164982.jpg" title="#banner2" alt="" /></a>
                        <a href="#"><img src="images/xbox-one-vs-ps41.jpg" title="#banner3" alt="" /></a>
                        <a href="#"><img src="images/League-of-legends-wallpaper.jpg" title="#banner4" alt="" /></a>
                    </div>
                    <!-- Banner Caption Start -->
                    <div id="banner1" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Riot <span class="colr">All-Star</span></h1>
                            <h1>2014<span class="colr">PARIS</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">25 Apr 2014 - 2014 All-Star Challenge!</h4>
                            <p>
                            	Game Mode voting for the 2014 All-Star event is now live. Don't miss your opportunity to cast your votes to influence the exciting new All-Star Challenge.
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner2" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Riot <span class="colr">All-Star</span></h1>
                            <h1>2014<span class="colr">PARIS</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">25 Apr 2014 - 2014 All-Star Challenge!</h4>
                            <p>
                            	Game Mode voting for the 2014 All-Star event is now live. Don't miss your opportunity to cast your votes to influence the exciting new All-Star Challenge.
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner3" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Riot <span class="colr">All-Star</span></h1>
                            <h1>2014<span class="colr">PARIS</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">25 Apr 2014 - 2014 All-Star Challenge!</h4>
                            <p>
                            	Game Mode voting for the 2014 All-Star event is now live. Don't miss your opportunity to cast your votes to influence the exciting new All-Star Challenge.
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner4" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Riot <span class="colr">All-Star</span></h1>
                            <h1>2014<span class="colr">PARIS</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">25 Apr 2014 - 2014 All-Star Challenge!</h4>
                            <p>
                            	Game Mode voting for the 2014 All-Star event is now live. Don't miss your opportunity to cast your votes to influence the exciting new All-Star Challenge.
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                </div>
            </div>
            <!-- Banner End -->
            <div class="clear"></div>
            <!-- Container Start -->
            <div class="container row">
            	<!-- Event Counter Start -->
            	<div class="one-third column small-banners">
                	<a href="#" class="thumb"><img style="height: 188px;width: 298px;" src="images/event1.jpg" alt="" /></a>
                    <h1 class="title"><a class="white" href="timeline.html">Proximo Evento</a></h1>
                    <div class="event-counter">
                    	<h3><a class="colr" href="timeline.html">Gamerspot- TNT Cup</a></h3>
                    	<div id="defaultCountdown"></div>
                    </div>
                </div>
                <!-- Event Counter End -->
                <!-- Just Arrived Start -->
                <div class="one-third column small-banners">
                	<a href="albums.html" class="thumb"><img style="height: 188px;width: 298px;" src="images/event2.jpg" alt="" /></a>
                    <h1 class="title"><a class="white" href="albums.html">Disponibles Ya!</a></h1>
                </div>
                <!-- Just Arrived End -->
                <!-- Twitter Start -->
                <div class="one-third column tweet-banners">
                	<a href="#" class="thumb"><img style="height: 188px;width: 298px;" src="images/GamerSpot Portada.jpg" alt="" /><span>&nbsp;</span></a>
                    <!-- Twitter Scroll Start -->
                    <div class="scroll-sec">
                    	<div id="logoscroll" class="scroller">
                        	<ul>
                            	<li>
                                	<div class="twitter-sec">
                                        <h4 class="white">Gamer Spot Mexico</h4>
                                        <p class="date">4 hours Ago</p>
                                        <p class="txt">
                                            Plants vs. Zombies Garden Warfare To March Onto PC This June http://ea.vg/1kdg35H
                                        </p>
                                    </div>
                                </li>
                                <li>
                                	<div class="twitter-sec">
                                        <h4 class="white">Gamer Spot Mexico</h4>
                                        <p class="date">4 hours Ago</p>
                                        <p class="txt">
                                            Les tenemos Beta Keys de Dead Island: Epidemic, esten atentos a nuestros canales https://www.youtube.com/user/GspotVidz  http://www.twitch.tv/gspotvidz
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="follow">Follow Us Twitter</a>
                        <div class="controls">
                            <a id="logoPrevious">Previous</a>
                            <a id="logoNext">Next</a>
                        </div>
                    </div>
                    <!-- Twitter Scroll End -->
                </div>
                <!-- Twitter End -->
            </div>
            <!-- Banners End -->
            <div class="container row">
            	<div class="two-thirds column left">
                	<!-- Tabs Section Start -->
                    <div class="tab-section">
                    	<div class="tab-head">
                        	<h1>LO &Uacute;LTIMO DE GAMERSPOT</h1>
                            <div class="tab_menu_container">
                                <ul id="tab_menu">  
                                    <li><a class="" rel="tab-news">Noticias</a></li>
                                    <li><a class="current" rel="tab-gallery">Galer&iacute;a</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="tab_container">
                            <div class="tab_container_in">
                                <div id="tab-news" class="tab-list">	
                                	<!-- News List Start -->				
                                	<ul class="news-list">
                                    	<li>
                                        	<div class="date">
                                            	<h6>WEDNESDAY</h6>
                                                <h1>29JUN</h1>
                                            </div>
                                            <div class="desc">
                                            	<h4><a href="blog-detail.html">NAMCO BANDAI Games Europa anuncia ONE PIECE UNLIMITED WORLD RED para Europa y Australia</a></h4>
                                                <p>
                                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. In consecteturconsectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. ... <a href="#">Read More</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                        	<div class="date">
                                            	<h6>SUNDAY</h6>
                                                <h1>03JUL</h1>
                                            </div>
                                            <div class="desc">
                                            	<h4><a href="blog-detail.html">NAMCO BANDAI Games Europa anuncia ONE PIECE UNLIMITED WORLD RED para Europa y Australasia</a></h4>
                                                <p>
                                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. In consecteturconsectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. ... <a href="#">Read More</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                        	<div class="date">
                                            	<h6>FRIDAY</h6>
                                                <h1>01AUG</h1>
                                            </div>
                                            <div class="desc">
                                            	<h4><a href="blog-detail.html">GRID AUTOSPORT BLACK EDITION ya se puede reservar en las tiendas habituales</a></h4>
                                                <p>
                                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. In consecteturconsectetur adipiscing elit. In tellus orci, semper et ornare dictum, varius ut tellus. ... <a href="#">Read More</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- News List End -->
                                    <a href="#" class="button">Ver todas las noticias y eventos</a>
                                </div> 
                                <div id="tab-gallery" class="tab-list"> 
                                	<!-- Gallery Small Section Start -->
                                	<ul class="gallery-small">
                                        <li>
                                            <a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="thumb play"><img src="images/gal-two-col-1.jpg" alt="" /></a>
                                            <div class="gal-caption video-bg">
                                				<h3><a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="play colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="images/banner1.jpg" class="tip4 thumb"><img src="images/gal-two-col-2.jpg" alt="" /></a>
                                            <div class="gal-caption image-bg">
                                				<h3><a href="images/banner1.jpg" class="tip4 colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="thumb play"><img src="images/gal-two-col-1.jpg" alt="" /></a>
                                            <div class="gal-caption video-bg">
                                				<h3><a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="play colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="images/banner1.jpg" class="tip4 thumb"><img src="images/gal-two-col-2.jpg" alt="" /></a>
                                            <div class="gal-caption image-bg">
                                				<h3><a href="images/banner1.jpg" class="tip4 colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="thumb play"><img src="images/gal-two-col-1.jpg" alt="" /></a>
                                            <div class="gal-caption video-bg">
                                				<h3><a href="http://www.youtube.com/watch?v=uvBVUit3kjY" class="play colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="images/banner1.jpg" class="tip4 thumb"><img src="images/gal-two-col-2.jpg" alt="" /></a>
                                            <div class="gal-caption image-bg">
                                				<h3><a href="images/banner1.jpg" class="tip4 colr">LATEST FROM Rockit Band</a></h3>
                                            </div>
                                        </li>  
                                    </ul>
                                    <!-- Gallery Small Section End -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabs Section End -->
                </div>
                <div class="one-third column left">
                	<div class="box-small">
                    	<h1 class="heading">Reproduciendo ahora</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="nowplaying">
                            	<h5>Grow us with me</h5>
                                <p>by: Paul Weller</p>
                                <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                                <div id="jp_container_2" class="jp-audio">
                                    <div class="jp-type-playlist">
                                        <div class="jp-gui jp-interface">
                                            <ul class="jp-controls">
                                                <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                                                <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                                <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                                <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                                                <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                                <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                                <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                                <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                            </ul>
                                            <div class="jp-progress">
                                                <div class="jp-seek-bar">
                                                    <div class="jp-play-bar"></div>
                                                </div>
                                            </div>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                            <div class="jp-current-time"></div>
                                            <div class="jp-duration"></div>
                                            <ul class="jp-toggles">
                                                <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                                                <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                                            </ul>
                                        </div>
                                        <div class="jp-playlist">
                                        	<div id="mcs2_container">
                                                <div class="customScrollBox">
                                                    <div class="container">
                                                        <div class="content">
                                                            <ul>
                                                                <li></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="dragger_container">
                                                        <div class="dragger">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-no-solution">
                                            <span>Update Required</span>
                                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
			<div class="container row hidemobile">
            	<div class="sixteen columns">
                	<!-- Albums Start -->
                	<div class="prod-sec">
                    	<div class="prod-head">
                        	<h1>Buy from Our Store</h1>
                            <a href="#" class="buttonsmall right">View All Albums</a>
                            <div class="clear"></div>
                        </div>
                        <ul class="prod-list">
                        	<li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album5.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">THE FLOOR IN SOUTH</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album6.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">date and line-up</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album7.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">Spanish iTunes</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album8.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">Planet FM</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Albums End -->
                </div>
            </div>
            <div class="clear"></div>
            <!-- Footer Start -->
            <div id="footer">
            	<div class="foot-top">
                	<!-- Footer Logo Start -->
                    <div class="logo-foot">
                    	<a href="#"><img src="images/logo-foot.png" alt="" /></a>
                    </div>
                    <!-- Footer Logo End -->
                    <!-- Footer Navigation Start -->
                    <div class="links-foot">
                    	<ul>
                        	<li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Tour Dates</a></li>
                            <li><a href="#">Audio</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Footer Navigation End -->
                    <!-- Newsletter Start -->
                    <div class="newsletter">
                    	<h5 class="white">NEWSLETTER</h5>
                        <ul>
                        	<li class="left">
                            	<input name="" value="Enter Email Address"
                                onfocus="if(this.value=='Enter Email Address') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter Email Address';}" type="text" class="bar" />    
                            </li>
                            <li class="right"><button class="backcolr">Submit</button></li>
                        </ul>
                    </div>
                    <!-- Newsletter End -->
                </div>
                <div class="foot-bottom">
                	<!-- Copyrights Start -->
                    <div class="copyrights">
                    	<p>Copyright <a href="#">Wordpress Music Band</a> 2012</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                    	<a href="#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                    	<ul>
                        	<li><h6 class="white">Follow Us</h6></li>
                        	<li><a href="#" class="facebook">&nbsp;</a></li>
                            <li><a href="#" class="twitter">&nbsp;</a></li>
                            <li><a href="#" class="vimeo">&nbsp;</a></li>
                            <li><a href="#" class="amazon">&nbsp;</a></li>
                            <li><a href="#" class="apple">&nbsp;</a></li>
                            <li><a href="#" class="grooveshark">&nbsp;</a></li>
                            <li><a href="#" class="soundcloud">&nbsp;</a></li>
                        </ul>
                        <!-- Follow Us End -->
                    </div>
                    <!-- Follow Us and Top End -->
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Outer Wrapper End -->
</body>
</html>