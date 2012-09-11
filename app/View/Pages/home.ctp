<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/
?>
<div class="row-fluid">
	<!-- blank -->
	<div class="span12"></div>
</div>
<div class="row-fluid">
	<div class="span1"></div>
	<div class="span10">
		<!--  Carousel - consult the Twitter Bootstrap docs at 
    http://twitter.github.com/bootstrap/javascript.html#carousel -->
		<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
		  <div class="carousel-inner">
		    <div class="item active"><!-- class of active since it's the first item -->
		      <img src="images/bk-img.jpg" alt="" />
		      <div class="carousel-caption">
		        <p>Caption text here</p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1200x480" alt="" />
		      <div class="carousel-caption">
		        <p>Caption text here</p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="images/bk-img.jpg" alt="" />
		      <div class="carousel-caption">
		        <p>Caption text here</p>
		      </div>
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1200x480" alt="" />
		      <div class="carousel-caption">
		        <p>Caption text here</p>
		      </div>
		    </div>
		  </div><!-- /.carousel-inner -->
		  <!--  Next and Previous controls below
		        href values must reference the id for this carousel -->
		    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
		    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
		</div><!-- /.carousel -->
	</div>
</div>

<!-- Example row of columns -->
<div class="row">
  <div class="span4">
  	<div class="collection">
      <h2>MEN </h2><h2> COLLECTION</h2>
       <p> 
       	<ul>
       		<li><a href="<?=$this->webroot?>order_step">">Single Breasted Suits</a></li>
       		<li><a href="<?=$this->webroot?>order_step">Double Breasted Suits</a></li>
       		<li><a href="<?=$this->webroot?>order_step">Shirts</a></li>
       	</ul>
       	
       		
       </p>
      <p><a href="#"><span class="label label-info">View details</span> &raquo;</a></p>
</div>
    
  </div>
  <div class="span4">
  	<div class="collection">
      <h2>WOMEN </h2><h2> COLLECTION</h2>
       <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a href="#"><span class="label label-info">View details</span> &raquo;</a></p>
     </div>
 </div>
  <div class="span4">
  	<div class="collection">
      <h2>KID </h2><h2> COLLECTION</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a href="#"><span class="label label-info">View details</span> &raquo;</a></p>
    </div>
  </div>
</div>

<div class="seperator"></div>
<div class="row-fluid">
	<div class="span12">
		<h2 class="new-style">New Style</h1>
	</div>
</div>
<div class="row-fluid">
  <ul class="thumbnails">
	  <li class="span4">
	    <a href="#" class="thumbnail">
	      <img src="images/silk.png" alt="">
	    </a>
	    <p class="thumbnail collection"><b>SBS2-001</b>-120$</p>
	    <p class="collection">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
    	<a class="more-detail" href="#">See more...</a>
	  </li>
	  <li class="span4">
	    <a href="#" class="thumbnail">
	      <img src="images/silk.png" alt="">
	    </a>
	    <p class="thumbnail collection"><b>SBS2-001</b>-120$</p>
	    <p class="collection">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
	    <a class="more-detail" href="#">See more...</a>
	  </li>
	  <li class="span4">
	    <a href="#" class="thumbnail">
	      <img src="images/silk.png" alt="">
	    </a>
	    <p class="thumbnail collection"><b>SBS2-001</b>-120$</p>
	    <p class="collection">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
	    <a class="more-detail" href="#">See more...</a>
	  </li>
	</ul>
</div>
