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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script('jquery-1.7.2');
		echo $this->Html->script('bootstrap.min');
		
		
		echo $this->Html->css('reset');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('main');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
</head>
<body>
    <div id="wrapper" class="container">
			<header>
				<div class="">
					<div class="row-fluid">
						<div class="span12 offset-right offset-top">
							<form class="form-inline pull-right">
							  <input type="text" class="input-small" placeholder="Email" style="width: 150px;margin-right:10px; height: 15px;">
							  <input type="password" class="input-small" placeholder="Password" style="width: 150px;height: 15px;">
							  <label class="checkbox">
							    <input type="checkbox" ><span> Remember me </span>
							  </label>
							  <button type="submit" class="btn">Sign in</button>
							</form>
						</div>	
					</div>
					<div class="row-fluid">
						<div class="span4 offset-left">
							<img src="images/bk-logo.png" alt="baokhanhsilk" />
						</div>
						<div class="span8 offset-right">
							<a href="#" class="pull-right"><span class="label">Create Account</span></a>
							<br/>
							<a href="#" class="pull-right offset-top"><img src="images/cart.png" alt="" /> 2 product(s)</a>
						</div>
					</div>
				</div>
				
				<div class="navbar">
			    <div class="navbar-tmp-inner">
			      <div class="">
			        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </a>
			        <div class="nav-collapse">
			          <ul class="nav">
			            <li class="active"><a href="#"><i class="icon-home icon-white"></i>Home</a></li>
			            <li><a href="#">Collections</a></li>
			            <li><a href="#">Fabrics</a></li>
			            <li><a href="#">How to Order Online</a></li>
			            <li><a href="/baokhanhsilk/contactUs">Contact Us</a></li>
			            <li><a href="/baokhanhsilk/aboutUs">About Us</a></li>
			          </ul>
			          <form class="navbar-search pull-right" action="">
			            <input type="text" class="search-query span2 " placeholder="Search" style="width:200px; margin-right:20px">
			          </form>
			          
			        </div><!-- /.nav-collapse -->
			      </div>
			    </div><!-- /navbar-inner -->
			  </div><!-- /navbar -->
			</header>		
			<?php echo $content_for_layout; ?>
			<footer id="footer" class="offset-left">
				 <p>&copy; Baokhanh Silk. All Right Reserved 2012</p>
			</footer>

    </div> <!-- /container -->
    
  

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!--<script src="js/jquery-1.7.2.js"></script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
    
		<script>
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 4000
        });
      });
    </script>
  </body>
</html>
