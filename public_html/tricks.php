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

        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script type="text/javascript">
			function validateForm() {
			    var x = document.forms["myForm"]["Name"].value;
			    if (x == null || x == "") {
			        alert("Contact fields must be filled out!");
			        return false;
			    }
			}
</script>
    </head>

	<body>

		<div class="background"></div>

		<?php include 'header.php'; ?>

		<article class="container">
			<div class="content">
				<h2>Trick List</h2>
						<img src="images/kickflip.gif" alt="Shoe sole"/>
					
						<pre>
		OLLIE<br>
		FRONTSIDE 180<br>
		BACKSIDE 180<br>
		POP SHOVE IT<br>
		FRONTSIDE POP SHOVE IT<br>
		HEELFLIP<br>
		KICKFLIP<br>
		VARIAL KICKFLIP<br>
		HARD FLIP<br>
		BACKSIDE 180 KICKFLIP<br>
		FRONTSIDE 180 KICKFLIP<br>
		VARIAL HEELFLIP<br>
		INWARD HEELFLIP<br>
		BACKSIDE 180 HEELFLIP<br>
		FRONTSIDE 180 HEELFLIP<br>
		BACKSIDE BIGSPIN<br>
		FRONTSIDE BIGSPIN<br>
		360 POP SHOVE IT<br>
		360 KICKFLIP<br>
		BIG SPIN KICKFLIP<br>
		FRONT 360 POP SHOVE<br>
		LASERFLIP<br>
		FRONTSIDE 360 OLLIE<br>
		BACKSIDE 360 OLLIE<br>
		360 HARDFLIP<br>
						</pre>
					
				
		        
		<div id="contact-area">		

			<div class="form_description">
				<h2>Contact</h2>			
			</div>						
					

			

			<form name="myForm" action="tricks.html" onsubmit="return validateForm()" method="post">

				<label>Name:</label>
				<input type="text" name="Name" id="Name"/>
				
		
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button"/>

			</form>	
		</div>

			</div>

		</article>


		<?php include 'footer.php'; ?>




	</body>


</html>
