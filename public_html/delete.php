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
                <h2>Delete</h2>

                    <?php
                    	$skateboardid = $_GET['skateboardid'];
                    	require_once ('function.php');
                    	$qryDelete = "delete from skateboard where skateboardid = '$skateboardid'";
                    	$resultDelete = mysql_query($qryDelete, RMITConnect());
                    	echo "<h5>Skateboard $skateboardid is deleted</h5>";
                	?>

	           <img src="images/broken.jpg" alt="broken"/>

               <h4>Click here to end session: <a href="logout.php">Logout</a></h4>

            </div>
        </article>

        <?php include 'footer.php'; ?>

    </body>
</html>
