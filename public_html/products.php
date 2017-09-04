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
                <h2>Boards Available</h2>

                <table>
        <!-- First print the field names -->
                    <tr>
                        <th>Deck</th>
                    </tr>       
                        <?php
                            require_once('function.php');    
                                // Create the SQL query
                                $query = 'select * from skateboard order by skateboardid';
                                // Send query to the database and store the results in an array
                                $skateboard = mysql_query($query, RMITConnect());
                                $num_skateboard = mysql_num_rows($skateboard);
                                
                                for($i = 0 ; $i < $num_skateboard ; $i++)
                                { $row[$i] = mysql_fetch_array($skateboard);}
                                //display the skateboards one by one in a table format
                                foreach ($row as $next_one)
                                {   echo '<tr>';                
                                    echo "<td><img src='" . $next_one['image'] ."' 'width='100px' height='100px''/></td>";                    
                                    echo '<td>' . $next_one['deck'] . '</td>';
                                    echo '<td> <a href="detail.php?skateboardid=' . $next_one['skateboardid'] . '">Show Details</a> </td>';             
                                    echo '</tr>';
                                }           
                        ?>
                </table>
            </div>
        </article>

        <?php include 'footer.php'; ?>

    </body>
</html>
