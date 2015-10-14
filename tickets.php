<?php
session_start();
include('header.php');
include('navigation.php');
?>
  	<title>Silverado - Tickets</title>
	<link rel="icon" href="images/icon.ico">
        <script src="script/jquery-2.1.3.min.js"></script>
        
</head>
	<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet-t.css">
 
<body>
	


<hr>
<br>

<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="POST">
    <div id="booking_form">
            <table id="booking" border="1">
                
            <thead>
                <th colspan="3">Movie</th>
            </thead>
                <tbody>
                    <tr>
                        <td>Choose Movie</td>
                        <td>
                            <select id="movie" name="movie" required>
                                <option value="none">Choose a Movie</option>
                                <option value="minions">Minions</option>
                                <option value="aloha">Aloha</option>
                                <option value="boruto">Boruto: Naruto the Movie</option>
                                <option value="fnf7">Fast & Furious 7</option>
                            </select>
                        </td>  
                    </tr>
                    <tr>
                        <td>Choose Day</td>
                        <td>
                            <select id="day" name="day" required>
                                <option value="none"> Choose a Day</option>
                                <option class="mon" value="monday">Monday</option>
                                <option class="tues" value="tuesday">Tuesday</option>
                                <option class="weds" value="wednesday">Wednesday</option>
                                <option class="thurs" value="thursday">Thursday</option>
                                <option class="fri" value="friday">Friday</option>
                                <option class="sat" value="saturday">Saturday</option>
                                <option class="sun" value="sunday">Sunday</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Choose Time</td>
                        <td>
                            <select id="time" name="time" required>
                                <option value="">Choose a time</option>
                                <option value="twelve">12:00pm</option>
                                <option value="one">1:00pm</option>
                                <option value="three">3:00pm</option>
                                <option value="six">6:00pm</option>
                                <option value="nine">9:00pm</option>
                            </select>
                        </td>  
                    </tr>
                    
                
                
                
                
                </tbody>
            <thead>
            <th>Ticket Type</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            </thead>
            <tbody id="amount">
                <tr>
                    <td>Adult</td>
                    <td>
                        <span class="discount" value="0" hidden >12.00</span>
                        <span class="price" hidden >18.00</span>
                        <input type="number" name="SA" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>Concession</td>
                    <td>
                        <span class="discount" value="0" hidden>10.00</span>
                        <span class="price" hidden >15.00</span>
                        <input type="number" name="SP" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>Child</td>
                    <td>
                        <span class="discount" value="0" hidden>8.00</span>
                        <span class="price" hidden >12.00</span>
                        <input type="number" name="SC" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>First Class Adult</td>
                    <td>
                        <span class="discount" value="0" hidden>25.00</span>
                        <span class="price" hidden >30.00</span>
                        <input type="number" name="FA" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>First Class Child</td>
                    <td>
                        <span class="discount" hidden="">20.00</span>
                        <span class="price" hidden >25.00</span>
                        <input type="number" name="FC" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>Beanbag - 1 Person</td>
                    <td>
                        <span class="discount" value="0" hidden>20.00</span>
                        <span class="price" hidden >30.00</span>
                        <input type="number" name="B1" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>Beanbag - 2 People</td>
                    <td>
                        <span class="discount" value="0" hidden>20.00</span>
                        <span class="price" hidden >30.00</span>
                        <input type="number" name="B2" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td>Beanbag - 3 Children</td>
                    <td>
                        <span class="discount" name="price" hidden>20.00</span>
                        <span class="price" hidden >30.00</span>
                        <input type="number" name="B3" class="qty" autocomplete="off" min="0"/>
                    </td>
                    <td>
                        $<span class="subtotal">0.00</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="tp"><b>Total Price</b></td>
                    <td>
                        $<span class="total" name="price">0.00</span>
                        <input name="price" value="" hidden/>
                        
                    </td>
                </tr>    
		<tr><td></td><td></td><td><input type="submit" value="Submit" /></td></tr>
            </tbody>
	
        </table>
        
         
            
        </form>
	
<br>
	
	
<footer>
<hr>
| Steven Tran | S3431399 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>
<script type="text/javascript" src="script/calculate.js"></script>
</body>

</html>
