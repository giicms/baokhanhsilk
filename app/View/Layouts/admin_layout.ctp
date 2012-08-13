<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bao Khanh Silk Management</title>
	
	
	<?php
		echo $this->Html->meta('icon');

		
		//echo $this->Html->css('cake.generic');
		echo $this->Html->script('jquery-1.7.2');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('base');		
		
		//echo $this->Html->css('reset');
		echo $this->Html->css('admin-bt.min');
		echo $this->Html->css('admin-bt-responsive.min');
		echo $this->Html->css('bootstrap-responsive');
		
		echo $this->Html->css('base-admin-responsive');
		echo $this->Html->css('plans');
		echo $this->Html->css('dashboard');
		echo $this->Html->css('base-admin');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<script type="text/javascript">
		jQuery(function($){
			$('ul.mainnav li').click(function(event){
				event.preventDefault();
				$('ul.mainnav li').removeClass('active');
				$(this).addClass('active');     
			});
		});
  
</script>
</head>
<body>
	<div id="container">
		<div id="content">	

			<!-- /top menu -->
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<a class="brand" href="./">Bao Khanh Silk Management</a>
						
						<div class="nav-collapse">
							<ul class="nav pull-right">
								<li class="dropdown">						
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-user icon-white"></i> 
										Sy Do
										<b class="caret"></b>
									</a>
									
									<ul class="dropdown-menu">
										<li><a href="#">My Profile</a></li>							
										<li class="divider"></li>
										<li><a href="#">Logout</a></li>
									</ul>
									
								</li>
							</ul>
						</div><!--/.nav-collapse -->	
				
					</div> <!-- /container -->
					
				</div> <!-- /navbar-inner -->
				
			</div> <!-- /navbar -->


			<!-- /menu bar-->
			<div class="subnavbar">
				<div class="subnavbar-inner">
					<div class="container">
						<ul class="mainnav">
							<li>
								<a href="#">
									<i class="icon-design-menu"></i>
									<span>Design</span>
								</a>	    				
							</li>
							
							<li>
								<a href="#">
									<i class="icon-fabric-menu"></i>
									<span>Fabric</span>
								</a>	    				
							</li>
							
							<li class="active">					
								<a href="#" class="dropdown-toggle">
									<i class="icon-category-menu"></i>
									<span>Categories</span>
								</a>	  				
							</li>
							
							<li>					
								<a href="#">
									<i class="icon-user-menu"></i>
									<span>User Management</span>
								</a>  									
							</li>
							
							<li>
								<a href="#">
									<i class="icon-report-menu"></i>
									<span>Reports</span>
								</a>    				
							</li>
							
							<li class="dropdown">					
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-share-alt"></i>
									<span>More Pages</span>
									<b class="caret"></b>
								</a>	
							
								<ul class="dropdown-menu">
									<li><a href="./charts.html">Charts</a></li>
									<li><a href="./account.html">User Account</a></li>
									<li class="divider"></li>
									<li><a href="./login.html">Login</a></li>
									<li><a href="./signup.html">Signup</a></li>
									<li><a href="./error.html">Error</a></li>
								</ul>    				
							</li>
						</ul>
					</div> <!-- /container -->
				</div> <!-- /subnavbar-inner -->
			</div> <!-- /subnavbar -->


			<?php echo $content_for_layout; ?>

			

		</div>
		<div id="footer" class="offset-left">
			<p>&copy;Baokhanh Silk. All Right Reserved 2012</p>
		</div>
	</div>
</body>
</html>