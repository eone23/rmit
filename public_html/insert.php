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

            <h4>New Board added!</h4>

            <img src="images/new.gif" alt="new skateboard"/>
          	
        		<?php
        			$skateboardid = trim($_POST['skateboardid']);
        			$deck = trim($_POST['deck']);
        			$trucks = trim($_POST['trucks']);
        			$wheels = trim($_POST['wheels']);
        			$bearings = trim($_POST['bearings']);
        			$image = trim($_POST['image']);	

        			/*$query_age = (isset($_GET['query_age']) ? $_GET['query_age'] : null);*/

        		if (!empty($skateboardid) || !empty($deck) ||!empty($trucks) || !empty($wheels) || !empty($bearings) ||  !empty($image))
        			{
        				require_once('function.php');	
        				// Create the insert query
        				$query = "insert into skateboard(skateboardid, deck, trucks, wheels, bearings, image) values('$skateboardid', '$deck', '$trucks', '$wheels', '$bearings', '$image')";
        				// Execute the query and capture the number of rows altered
        				$result_set = mysql_query($query, RMITconnect());
        				print "<h4>To see the Board you just added, click here: <a href= 'products.php'> Board List </a></h4> ";		
        			}else {print "<h4>You have not entered the form information </h4>";}

        		?>

                
            
		</div>            
              
        </article>

        <?php include 'footer.php'; ?>

    </body>
</html>


