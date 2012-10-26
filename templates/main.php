<!DOCTYPE html>
<!--[if lt IE 7]><html lang="{{{language}}}" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="{{{language}}}" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="{{{language}}}" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="{{{language}}}" class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>We ❤ Travelling</title>
  <meta name="description" content="{{{metaDescription}}}">
	<meta name="author" content="{{{metaAuthor}}}">
  <meta name="viewport" content="width=device-width">
  <meta name="HandheldFriendly" content="True">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="purple">
	<meta name="apple-mobile-web-app-title" content="{{{brand}}}">
	<meta property="og:title" content="{{title}}"/>
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="http://logo.png"/>
	<meta property="og:url" content="http://adventuretime.com"/>
	<meta property="og:site_name" content="{{title}}"/>
	<meta property="og:admins" content="90408241,503843067"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->
  
  <div class="container">
    <div class="row">
      <div class="span3" id="sidebar">
        <h2>Adventure</h2>
      </div>
      <div id="blog" class="span9 pull-right">
        <?php
          $count = count( $articles );
          $i = 0;
          foreach( $articles as $article ) {
            echo $article;
            $i++;
            if( $i < $count ) {
              echo "<hr>";
            }
          }
        ?>
      </div>
      
      <footer class="span9 pull-right">
        <hr>
        
        <p>Made with <i class="icon-heart"></i> by <a href="http://davefearon.com" target="_blank">Dave</a> and <a href="http://palinaklimava.com" target="_blank">Palina</a></p>
      </footer>
    </div>
  </div> <!-- /container -->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>