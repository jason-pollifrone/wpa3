<?php
session_start();
include('header.php');
include('navigation.php');
?>

<title>Silverado - Sessions</title>
<link rel="stylesheet" type="text/css" href="stylesheets/session.css"> 

<head>
  <title>Movie Search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#movie-search").click(function () {
        $('#status').html('Searching for movies ...');
        $.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesHTML.php?formaction=process.php", {
            movie: $("#movie").val(),
            day: $("#day").val(),
            formaction: $("#formaction").val()
          },
          function (data, status) {
            $('#status').html('Movies Currently Screening');
            $('#data').html(data);
          });
      });
    });
  </script>
  <style>
    #data > div {
    }
  </style>
</head>

<body>

  <select id='movie'>
    <option value=''>All movies</option>
    <option value='AC'>MI: Rouge Nation</option>
    <option value='AF'>Girlhood</option>
    <option value='CH'>Inside Out</option>
    <option value='RC'>Trainwreck</option>
  </select>
  <button id='movie-search'>Search for movies</button>

  <p id='status'></p>
  <div id='data'></div>
  
</body>

<footer>
<hr>
| Steven Tran | S3431399 | Web Programming Assignment 2
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</footer>
</html>