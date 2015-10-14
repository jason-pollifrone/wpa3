<?php
session_start();
include('header.php');
include('navigation.php');
?>
  <title>Silverado - Monday to Tuesday</title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css"> 

	<body>

<hr>
<br>
<div>
<table id="movies">
        <tr>
            	<th>1PM - Childrens</th>
            	<th>6PM - Foreign</th>
            	<th>9PM - Romantic Comedy</th>
        </tr>
        <tr>
           	<td>Minions</th>
           	<td>Boruto: Naruto the Movie</td>
           	<td>Aloha</td>
        </tr>
        <tr>
           	<td><a href="movies/minions.php"><img src="images/minions.jpg" width="260" height="400" alt="aloha"/></td>
            	<td><a href="movies/boruto.php"><img src="images/boruto.jpg" width="260" height="400" alt="aloha"/></td>
            	<td><a href="movies/aloha.php"><img src="images/aloha.jpg" width="260" height="400" alt="aloha"/></td>
        </tr>
       </table>
</div>
<br>
<br>
<br>

	</body>

<footer>
<hr>
| Steven Tran | S3431399 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>

</html>