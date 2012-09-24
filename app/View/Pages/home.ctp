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
<div class="row-fluid">
<?php
// cho ni lay du lieu ra ne
// 
	App::import('model','Collection');
	$collection = new Collection();
	$parent = $collection->getParentNode();
	$numofParent = count($parent);
	if(count($parent) > 0) {
		for ($i = 0; $i < $numofParent; $i++){
			$parentCollection = $parent[$i];
			$parentName = $parentCollection['Collection']['name'];
			$parent_id = $parentCollection['Collection']['id'];
			echo	"<div class='span6'>"
						."<div class='collection'>"
							."<h2>". $parentName ."</h2>"."<h2> COLLECTION</h2>"
							."<p>"
								."<ul>";
								$child = $collection->getChildCollection($parent_id);
								for($j = 0; $j < count($child); $j++) {
									$childCollection = $child[$j];
									$childName = $childCollection['Collection']['name'];
									$collectionId = $childCollection['Collection']['id'];
									echo "<li>"."<a href='".$this->webroot."order_step/".$collectionId."'>".$childName."</a>"."</li>";
								}
						echo 	"</ul>"
							."</p>";
			echo		"</div>"
					."</div>"	;		
		}
	}
			
?>

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
