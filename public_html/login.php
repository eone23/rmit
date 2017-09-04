






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
					<div class="photos">
						
						

	<h4>Login</h4>

	<div id="contact-area">

								<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" >
								<div >
									<label>Username:</label>
									<input type="text" name="username" />
								</div>
								<div >
									<label>Password:</label>
									<input type="password" name="password" />
								</div><br>
								<div >
									<input type="submit" name="login" value="Click Here to Log In" />
								</div>
								</form>
							<?php
								if(isset($_POST['login']))
								{
									$username = $_POST['username'];
									$password = $_POST['password'];		
									if(!empty($username)  && !empty($password))
									{//check database for user & password
									include('function.php');
									$qry = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
									$result = mysql_query($qry, RMITConnect());
									$user_data = mysql_fetch_array($result);  
									$rc = mysql_num_rows($result); 
								echo $rc;	
									// if the user is in the database (1 row) then start a session and create user session variable		
									if($rc == 1)
									{	session_start();
										$_SESSION['username'] = $username;
										$_SESSION['password'] = $password;
										//Redirect user to the search page
										header('Location: search.php');}
									else
									{	echo '<br><br>';
										echo '<p>Could not find you in the database.</p>';
									}
									}
									else
									{	echo '<br><br>';
										echo 'Either the username or password are invalid. Please try again</a>';
									}
								}	
							?>
														
				
					</div>
					</div>
				</div>
			</article>

		<?php include 'footer.php'; ?>

	</body>
</html>
