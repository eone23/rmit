<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Skateboarding Website</title>
        <meta name="description" content="">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content="width=1030, maximum-scale=1.0" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/styles2.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">        
    </head>

    <body>

        <div class="background"></div>

        <?php include 'header.php'; ?>

        <article class="container">
            <div class="content">

            	<?php
				session_start();
				$secUserName = $_SESSION['username'];
				$title = 'logout';
				$stylesheet = 'css/styles2.css';
				include('header.php');
					
				// Unset and destroy the session variable
				if (isset($_SESSION)) 
					{
					unset($_SESSION['username']);
					session_destroy(); 
					}
					
				echo "<h4 class='logout'>Thank you $secUserName, You are now logged out.</h4>";

			
				?>   

                <img src="images/brand.gif" alt="logout"/> 		  				
					
			</div>           
        </article>

        <?php include 'footer.php'; ?>
    </body>
</html>



