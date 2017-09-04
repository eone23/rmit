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
                <h2>Board Details</h2>

                    <?php	
                    	include('function.php');
                    	$value = isset($array['skateboardid']) ? $array['skateboardid'] : '';	
                    	$query = "SELECT * FROM skateboard WHERE skateboardid = '" . $_GET['skateboardid'] . "'";				
                    	// Execute the query and store the result set in a variable
                    	
                    	$skateboard = mysql_query($query, RMITConnect());
                    	$num_skateboard = mysql_num_rows($skateboard);	
                    	//fetch one row at a time and store it in an array
                    	for($i = 0 ; $i < $num_skateboard ; $i++)
                    	{ $row[$i] = mysql_fetch_array($skateboard); } // This funcn fetches 1 row at a time		
                    	//display the skateboards one by one in a table format
                    	foreach ($row as $next_one)
                    	{	echo '<tr>';
                                    echo "<div style ='font:20px/20px Arial,Trebuchet MS,sans-serif;color:#000000;text-align: center;'>";                				
                    				echo "<td><img src='" . $next_one['image'] ."' 'width='400px' height='400px''/><br></td>";
                    				echo "Skateboard ID: " . '<td>' . $next_one['skateboardid'] . '<br></td>' ;				
                    				echo "Deck: " . '<td>' . $next_one['deck'] . '<br></td>';
                    				echo "Trucks: " . '<td>' . $next_one['trucks'] . '<br></td>';
                    				echo "Wheels: " . '<td>' . $next_one['wheels'] . '<br></td>';
                                    echo "Bearings: " . '<td>' . $next_one['bearings'] . '<br></td>';
                    				echo '</tr>';
                                    echo '</div>';                           
                    	}	
                    ?>
                         
            </div>
        </article>

        <?php include 'footer.php'; ?>

    </body>
</html>
