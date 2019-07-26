<?php 
set_time_limit(0);
define("same", "https://samehadaku.tv/");
define('site', 'http://yukiteru.xyz/');


include site.'simple_html_dom.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Samehadaku Downloader</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= site ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= site ?>style.css">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 nav-custom">
		<div class="container">
		 	<a class="navbar-brand" href="#">
		 		<img src="http://xvid.yukiteru.xyz//logo.png" width="43" height="43">
		 	</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form action="<?= site ?>/search/s.php" method="get" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="query" type="search" placeholder="Fairy Tail">
          <button class="btn btn-danger my-2 my-sm-0" type="submit" name="submit">Search</button>
        </form>
        </div>
	  </div>
	</nav>
