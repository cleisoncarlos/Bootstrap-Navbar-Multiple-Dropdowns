<!DOCTYPE html>
<html lang="">
<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
				<meta name="author" content="">
				<title>Starter Template for Bootstrap 3.3.6</title>
				<link rel="shortcut icon" href="">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
				
</head>

<body>
				
				
				
				
				
		<nav class="navbar navbar-custom">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<!-- <strong>MENU</strong>	-->
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- <a class="navbar-brand" href="#">Brand</a>-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<?php
                                    wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'   => 'primary',
                'depth'             => 3,
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav no-float',
                'fallback_cb'      => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
                                    ?>
							</ul>

						</div>
					</div>
				</nav>
        
        <div class="jumbotron">
            <h1 class="page-header">Bootstrap 3.0.3<br>
            <small>Navbar - Click Dropdown - Sub - Sub - Sub - Sub ...</small></h1>
        </div>

        <div class="container">
        
            <div class="row">
               <h1>You Like It ?</h1>
               <br>
            </div>

        </div>			
				
				
				


				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
				<script>
	
	
	(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
	
	</script>
</body>
</html>
