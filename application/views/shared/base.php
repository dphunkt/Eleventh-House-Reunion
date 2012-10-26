<?php
    if (!isset($active)) $active = '';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />	
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="author" content="Dan Phelps Studio">
    <meta property="og:title" content="Larry Coryell and The Eleventh House Reunion Concert and Birthday Event">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Jazz fusion legends The Eleventh House reuinite for one night to celebrate Larry Coryell's 70th birthday.">
    <meta property="og:url" content="http://www.eleventhhousereunion.com/<?=$active?>">
    <meta property="og:image" content="http://www.eleventhhousereunion.com/images/logo_190x20.png">
    <meta property="og:site_name" content="Larry Coryell and The Eleventh House Reunion">
    <meta property="fb:admins" content="825699081">
    
    <title>Larry Coryell Birthday Event | Eleventh House Reunion</title>
	
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/general_enclosed_foundicons.css">
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script:700|Monoton' rel='stylesheet' type='text/css'>

	<script src="/js/foundation/modernizr.foundation.js"></script>
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
    <div id="root">
	<div class="row">
		<header class="twelve columns mainHeader">
			<h1><a href="/">The Eleventh House</a></h1>&nbsp;<h4 class="subheader"> Reunion Concert and Birthday Celebration</h4>
		</header>
        <nav class="twelve columns">
            <ul class="twelve columns nav-bar">
              <li class="<?= $active == '/' ? 'active' : ''?>"><a href="/">Home</a></li>
              <li class="<?= $active == 'eleventh-house' ? 'active ' : ''?>has-flyout">
                <a href="/eleventh-house">The Band</a>
                <a href="#" class="flyout-toggle"><span> </span></a>
                <ul class="flyout">
                  <li><a href="/eleventh-house#coryell">Larry Coryell</a></li>
                  <li><a href="/eleventh-house#brecker">Randy Brecker</a></li>
                  <li><a href="/eleventh-house#mouzon">Alphonse Mouzon</a></li>
                  <li><a href="/eleventh-house#mandel">Mike Mandel</a></li>
                  <li><a href="/eleventh-house#trifan">Danny Trifan</a></li>
                </ul>
              </li>
              <li class="<?= $active == 'contact' ? 'active' : ''?>">
                  <a href="/contact">Contact</a>
              </li>
            </ul>
        </nav>
	</div>

	<!-- Main Page Content -->
	<?= $main_content ?>
	<div id="root_footer"></div>
    </div>
    
	<footer id="footer" class="footer">
    	<div class="row">
        	<div class="eight columns">
            	<iframe src="https://embed.spotify.com/?uri=spotify:album:1W6nbdhaPL4zlaw09EIULx" width="300" height="80" frameborder="0" allowtransparency="true"></iframe>
        	</div>
        	
        	<div class="four columns show-for-large-up">
            	<div id="fb-root"></div>
            	<div class="fb-like" data-href="http://www.eleventhstreetreunion.com" data-send="false" data-layout="box_count" data-show-faces="false" data-font="Helvetica"></div>
                <div class="g-plusone" data-size="tall" data-href="http://www.eleventhhousereunion.com"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-counturl="http://www.eleventhstreetreunion.com">Tweet</a>
        	</div>
    	</div>
	</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">    
        window.jQuery || document.write('<script src="/js/jquery-1.8.1.min.js">\x3C/script>');
        window._gaq = [['_setAccount', ''], ['_trackPageview']];
        
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = '//apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
                
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
          
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));              
    </script>
    <!--[if lt IE 8 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->    
	
	<script src="/js/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="/js/foundation/jquery.foundation.forms.js"></script>
	
	<script src="/js/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="/js/foundation/jquery.foundation.navigation.js"></script>
	<script src="/js/foundation/jquery.foundation.accordion.js"></script>

	
	<script src="/js/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="/js/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="/js/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="/js/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="/js/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="/js/foundation/jquery.placeholder.js"></script>
	  
	<script src="/js/foundation/app.js"></script>
</body>
</html>