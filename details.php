<?php
include('header.php');
include('navigation.php');
if(isset($_POST['submit'])){
session_start();
$_SESSION['fname'] = $_POST['firstname'];
$_SESSION['lname'] = $_POST['lastname'];
$_SESSION['email'] = $_POST['emaila'];
$_SESSION['phone'] = $_POST['number'];
}
?>

  	<title>Silverado - Details</title>
	<link rel="icon" href="images/icon.ico">
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/details.css">


<body>

<div id="contact-form">

<table id="details" border="1">

<thead>
	<th colspan="3"><h1>Customer Details</h1></th>
</thead>
    <tr><td>Title:</td>
        <td colspan="2"><Select id="detail-dropdown" name="subject">
		    <option value="none"></option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss">Miss</option>
        </Select><br>
	</tr>
    <tr>
        <td><form action="" method="post">
			First Name:</td><td><input class="form-height" type="text" name="firstname" placeholder="First Name" required/><br/></td>
		</form>
	</tr>
    <tr>
       <td><form action="" method="post">
	   Last Name:</td><td> <input class="form-height" type="text" name="lastname" placeholder="Last Name" required/><br/></td>
		</form>
	</tr>
    <tr>
        <td><form action="" method="post">
		Contact Number:</td><td> <input class="form-height" type="tel" name="number" placeholder="Number" /><br/></td>
		</form>
	</tr>
    <tr>
        <td><form action="" method="post">
		Email Address:</td><td> <input class="form-height" type="email" name="emaila" name="email" placeholder="Email" required/><br/></td>
		</form>
	</tr>
	<tr>
			<td colspan="2">
              <a href="cart.php" class="button">Proceed</a>
			</tr>
		</div>
	</table>
<br>


<footer>
<hr>
| Steven Tran S3431399 | Jason Pollifrone s3431895 | Edward Trinh 3530297 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>
</body>

</html>
