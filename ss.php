<?php
session_start();
include('header.php');
include('navigation.php');
?>
  <title>Silverado - Saturday to Sunday</title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css"> 

	<body>


<hr>
<br>
<div>
<table id="movies">
        <tr>
            	<th>12PM - Childrens</th>
		<th>3PM - Foreign</th>
            	<th>6PM - Romantic Comedy</th>
            	<th>9PM - Action</th>
        </tr>
        <tr>
           	<td>Minions</th>
           	<td>Boruto: Naruto the Movie</td>
           	<td>Aloha</td>
		<td>Fast & Furious 7</td>
        </tr>
        <tr>
           	<td><a href="movies/minions.php"><img src="images/minions.jpg" width="260" height="400" alt="aloha"/></td>
            	<td><a href="movies/boruto.php"><img src="images/boruto.jpg" width="260" height="400" alt="aloha"/></td>
            	<td><a href="movies/aloha.php"><img src="images/aloha.jpg" width="260" height="400" alt="aloha"/></td>
		<td><a href="movies/fnf7.php"><img src="images/fnf7.jpg" width="260" height="400" alt="aloha"/></td>

        </tr>
       </table>

<br>
<br>
<br>
</div>
	</body>

<footer>
<hr>
| Steven Tran | S3431399 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>

</html>