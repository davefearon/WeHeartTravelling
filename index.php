<?php
require 'Mustache/Autoloader.php';
Mustache_Autoloader::register();

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
\Slim\Extras\Views\Mustache::$mustacheDirectory = "Mustache/";
$app = new \Slim\Slim(array(
  //'view' => new \Slim\Extras\Views\Mustache()
));
$app->config(array(
  'articles.path' => './articles'
));

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route
$app->get('/', function () use ($app) {
  $path = $app->config('articles.path');
  $dir = new Directoryiterator($path);
  
  $articles = array();
  foreach( $dir as $file ) {
    if( $file->isFile() && $file->getFilename() != '.DS_Store' ) {
      //$handle = fopen($path . '/' . $file->getFilename(), 'r');
      $content = file_get_contents('./articles/'. $file->getFilename());
      $c = (array) json_decode($content);
      
      if( $c['published'] === true ) {
         $mustache = new Mustache_Engine(array(
          'loader' => new Mustache_Loader_FilesystemLoader('./templates'),
        ));
        
        $article = $mustache->render("article", $c);
        
        $articles[strtotime($c['date'])] = $article;
      }
    }
  }
  
  krsort($articles);
  
  $app->render('main.php', array('articles' => $articles));
});

$app->notFound( function() use ($app) {
  $app->render('404.html');
});

$app->run();