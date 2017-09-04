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
                <h2>Update Skateboard</h2>

                <?php
                    $skateboardid = $_GET['skateboardid'];
                    echo "<h5>The Skateboard you are updating is: $skateboardid</h5>";
                ?>
                <div id="contact-area">
                    <form method="post">
                    <div>
                        <label>Deck</label>
                        <input type='text' name='deck'/>
                    </div>
                    <div>
                        <label>Trucks</label>
                        <input type='text' name='trucks'/>
                    </div>
                    <div>
                        <label>Wheels</label>
                        <input type='text' name='wheels'/>
                    </div>
                    <div>
                        <label>Bearings</label>
                        <input type='text' name='bearings'/>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type='text' name='image'/><br>
                    </div>
                    <div>
                        <input class='button' type='reset' value='Clear'>
                        <input class='button' type='submit' name ='update' value='Submit'>
                    </div>
                    </form>
            </div>

                <?php
                    if (!empty($_POST['deck']) && !empty($_POST['trucks']) && !empty($_POST['wheels']) && !empty($_POST['bearings']) && !empty($_POST['image']))
                    {   
                    $deck = trim($_POST['deck']);
                    $trucks = trim($_POST['trucks']);
                    $wheels = trim($_POST['wheels']);
                    $bearings = trim($_POST['bearings']);
                    $image = trim($_POST['image']);
                    require_once ('function.php');  
                    $qryUpdate = " update skateboard set deck = '$deck', trucks = '$trucks', wheels = '$wheels', bearings = '$bearings', image = '$image' where skateboardid = '$skateboardid'";
                    $resultUpdate = mysql_query($qryUpdate, RMITconnect());
                    print "<h4>You have successfully updated a skateboard to the database </h4>";
                }
                ?>

                <h4>Click here to end session: <a href="logout.php">Logout</a></h4>

            </div>
        </article>

        <?php include 'footer.php'; ?>

    </body>
</html>
