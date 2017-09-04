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

        	function changeImage()
		    {
		    var image = document.getElementById('myImage');
		    if (image.src.match("images/janoski2")) {
		    	image.src = "images/janoski.jpg";
		    } else {
		    	image.src = "images/janoski2.jpg";
		    }
		     	   }
		</script>

    </head>

	<body>

		<div class="background"></div>

		<?php include 'header.php'; ?>

		<article class="container">
			<div class="content">
				<h2>Nike SB Stefan Janoski</h2>

				<!--<images src="images/janoski.jpg" alt="Image of shoe" />-->
				<img id="myImage" onclick="changeImage()" src="images/janoski.jpg" alt="Image of shoe"/>

				<h3>Click shoe to change colourway</h3>

				<p>Following the formation of the Nike Skateboarding (Nike SB) brand in 2002, the shoe company's second attempt at establishing itself in the skateboard market, Janoski was a team selection and was given the opportunity to design his own signature shoe model for release. As of 2013, the "Nike SB Zoom Stefan Janoski" model is described as "extremely successful," "wildly successful," and a "dynamic success." Janoski revealed in 2013 that he is completely responsible for the design of the shoe, following initial resistance from Nike, Inc.</p>



				<img src="images/janoski3.jpg" alt="Shoe sole"/>
				<h4>Gum sole</h4>

				<p>
					Nike SB Zoom Stefan Janoski canvas skate shoe.<br>
					Low profile canvas skate shoe by Nike SB.<br>
					Signature Stefan Janoski pro model skate shoe.<br>
					Black and white colorway.<br>
					Durable black canvas upper.<br>
					Double stitched perforated padded toe cap.<br>
					Vulcanized white rubber outsole with black foxing for increased board feel and flexibility.<br>
					Neoprene lining on inner collar.<br>
					Nike Zoom Air insole with air pocket.<br>
					Custom Nike Swoosh logo embroidered at sides in white.<br>
					Custom Stefan Janoski logo patch at tongue.<br>
					Reinforced metal lace eyelets.<br>
					Nike SB specific tread pattern for grip.<br>
					Imported.<br>
				</p>
				<img src="images/janoski4.jpg" alt="Shoe side"/>
				<h4>Side profile</h4>

				<table class="center">
				  <caption>Shoe sizes</caption>
				  <tr>
				    <th>US</th>
				    <th>UK</th>
				    <th>EU</th>
				  </tr>
				  <tr>
				    <td>6.5</td>
				    <td>6</td>
				    <td>38.5</td>
				  </tr>
				  <tr>
				    <td>7</td>
				    <td>6.5</td>
				    <td>39</td>
				  </tr>
				  <tr>
				    <td>7.5</td>
				    <td>7</td>
				    <td>40</td>
				  </tr>
				  <tr>
				    <td>8</td>
				    <td>7.5</td>
				    <td>41</td>
				  </tr>
				  <tr>
				    <td>8.5</td>
				    <td>8</td>
				    <td>42</td>
				  </tr>
				  <tr>
				    <td>9</td>
				    <td>8.5</td>
				    <td>43</td>
				  </tr>
				  <tr>
				    <td>9.5</td>
				    <td>9</td>
				    <td>43.5</td>
				  </tr>
				  <tr>
				    <td>10</td>
				    <td>9.5</td>
				    <td>44</td>
				  </tr>
				  <tr>
				    <td>10.5</td>
				    <td>10</td>
				    <td>44</td>
				  </tr>
				  <tr>
				    <td>11</td>
				    <td>10.5</td>
				    <td>44.5</td>
				  </tr>
				</table>



			</div>



		</article>

		<?php include 'footer.php'; ?>

	</body>


</html>
