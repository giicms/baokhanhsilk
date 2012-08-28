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
		echo $this->Html->script('jquery.validate.js');
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
							<ul class="nav nav-pills pull-right">
							  <li><a href="#login-modal" data-toggle="modal">Log In</a></li>
							  <li><a href="#signup-modal" data-toggle="modal">Sign Up</a></li>
							</ul>
						</div>
					</div>
					<!-- phan danh cho login va signin -->
					<div class="modal hide fade" id="login-modal" style="display: none; ">
						<a class="close" data-dismiss="modal">&times;</a>
    				<h1>Log in to Bao Khanh Silk</h1>
    				
    				<form action="/baokhanhsilk/Users/login" method="POST" autocomplete="off">
			        <fieldset>
			            <input type="text" placeholder="Username or email" name="username" maxlength="30" id="id_username" />
			            <input type="password" placeholder="Password" name="password" id="id_password" />
			            <input type="submit" value="Log in" class="btn">
			        </fieldset>
			         <a href="/accounts/password/reset/"><span>Forgot password?</span></a> &middot; <a href="/signup/"><span>Sign up to Baokhanh</span></a>
			     </form>
					</div>
					<div class="modal hide fade" id="signup-modal">
					    <a class="close" data-dismiss="modal">×</a>
					    <h1>Sign up for Baokhanh Silk</h1>
					    
					
					
					      <form action="/baokhanhsilk/Users/signin" method="POST" autocomplete="off">
					        <fieldset>
					            <input type="text" placeholder="Username" name="username" maxlength="30" id="id_username">
					            <input type="email" placeholder="Email" name="email" maxlength="75" id="id_email"><div class="email_suggestion"></div>
					            <input type="password" placeholder="Password" name="password" id="id_password">
					            <input type="submit" value="Sign Up" class="btn">
					        </fieldset>
					         <a href="/baokhanhsilk/Users/login/"><span>Already have an account?</span> Log in</a>
					     </form>
					</div>					
					<!-- het phan danh cho login va signin -->					
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
			            <li><a href="/baokhanhsilk/farbics">Fabrics</a></li>
			            <li><a href="/baokhanhsilk/order_online">How to Order Online</a></li>
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
