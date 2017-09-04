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

		        <h2>Skateboard Search</h2>

		        <img src="images/search.jpg" alt="search"/>
		        <div id="contact-area">		            	
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class>			
						<h5>Choose Search Type:</h5>
						<select name="searchtype">
							<option value="deck">Deck</option>
							<option value="skateboardid">Skateboard ID</option>
						</select>		
						<h5>Enter Search Term:</h5>
						<input name="searchterm" type="text"><br><br>		
						<input name="submitSearch" type="submit" value="Search"">			
					</form>
				</div>

		<?php	
			if (!isset($_POST['submitSearch']))
			{echo "";}
			else{
				echo"<h4>Here are all the skateboards which match your search:</h4>	";
				echo "<table>";
				echo "<tr>";		
				echo "<th>Image</th><th>Deck</th><th>Details</th><th>Update</th><th>Delete</th>";
				echo "</tr>";		
				$searchtype = $_POST['searchtype'];
				$searchterm = $_POST['searchterm'];
				include('function.php');			
				$query = "select * from skateboard where " . $searchtype . " like '%". $searchterm . "%'";			
				$skateboardSearch = mysql_query($query, RMITconnect());
				$num_skateboard = mysql_num_rows($skateboardSearch);
					
					for($i = 0 ; $i < $num_skateboard ; $i++)
					{ $row[$i] = mysql_fetch_array($skateboardSearch);}
					//display the skateboards one by one in a table format
					foreach ($row as $next_one)
					{	echo '<tr>';				
						echo "<td><img src='" . $next_one['image'] ."' 'width='150px' height='150px''/></td>";				
						echo '<td>' . $next_one['deck'] . '</td>';				
						echo '<td> <a href="detail.php?skateboardid=' . $next_one['skateboardid'] . '">Show Details</a> </td>';
						echo '<td> <a href="update.php?skateboardid=' . $next_one['skateboardid'] . '">Update Skateboard</a> </td>';
						echo '<td> <a href="delete.php?skateboardid=' . $next_one['skateboardid'] . '">Delete Skateboard</a> </td>';
						echo '</tr>';

					}
				echo "</table>";		
				}
		?>	
				<h4>Add a new skateboard here: <a href="newskateboard.php">New Skateboard</a></h4>
				<h4>Click here to end session: <a href="logout.php">Logout</a></h4>
				
				
					
			</div>           
        </article>

        <?php include 'footer.php'; ?>
    </body>
</html>
