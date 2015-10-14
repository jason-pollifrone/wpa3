<?php
session_start();
include('header.php');
include('navigation.php');
?>
  <title>Silverado - Wednesday to Friday</title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css"> 

	<body>
<div>


<hr>
<br>

<table id="movies">
        <tr>
            	<th>1PM - Romantic Comedy</th>
            	<th>6PM - Childrens</th>
            	<th>9PM - Action</th>
        </tr>
        <tr>
           	<td>Aloha</th>
           	<td>Minions</td>
           	<td>Fast & Furious 7</td>
        </tr>
        <tr>
           	<td><a href="movies/aloha.php"><img src="images/aloha.jpg" width="260" height="400" alt="aloha"/></td>
            	<td><a href="movies/minions.php"><img src="images/minions.jpg" width="260" height="400" alt="aloha"/></td>
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