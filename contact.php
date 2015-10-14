<?php
session_start();
include('header.php');
include('navigation.php');
?>
	
  	<title>Silverado - Tickets</title>
	<link rel="icon" href="images/icon.ico">
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/contact.css"> 	


<body>
	

<hr>
<br>


                <form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
                    <div id="contact-form">

	    <table id="booking" border="1">
                
            <thead>
                <th colspan="3"><h1>Contact Us</h1></th>
            </thead>
                        <tr><td>Select an Enquiry:</td>
                        <td colspan="2"><Select id="contact-dropdown" name="subject">
		            <option value="none"></option>
                            <option value="general">General Enquiries</option>
                            <option value="booking">Group and Corporate Bookings</option>
                            <option value="complaints">Suggestions and Complaints</option>
                        </Select><br>
			</tr>
                        <tr>
                        	<td>First Name:</td><td><input class="form-height" type="text" placeholder="First Name" required><br/></td>
			</tr>
                        <tr>
                        	<td>Last Name:</td><td> <input class="form-height" type="text" placeholder="Last Name" required><br/></td>
			</tr>
                        <tr>                        
                        	<td>Contact Number:</td><td> <input class="form-height" type="tel" placeholder="Number" ><br/></td>
			</tr>
                        <tr>                       
                        	<td>Email Address:</td><td> <input class="form-height" type="email" name="email" placeholder="Email" required><br/></td>
			</tr>

                        <thead>
                        	<th colspan="2">Message:<br><br><textarea name="message" rows="7" cols="80" placeholder="Insert Message" required></textarea><br/><br></th>
			</thead>
			<tr>
			<td colspan="2">
                        <input id="submit-button" type="submit" value="Submit"></td>
			</tr>
                    </form>
		</div>
	</table>
<br>
	
	
<footer>
<hr>
| Steven Tran | S3431399 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>
</body>

</html>
