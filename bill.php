<?php
  session_start();
?>
<html>
<head>
  <title>Bill Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alice|Bad+Script|Charm|Cinzel:700|Courgette|Dancing+Script:700|Kaushan+Script|Lobster|Merienda|Playfair+Display+SC:400i|Tangerine:700|Roboto+Condensed:400i|" rel="stylesheet">
  <style>
  
    #heading {
      text-align: center;
      font-family: 'Cinzel', serif;
    }

    body {
      background-color: #99e699; 
    }

    #summary {
      text-align: center;
    }

    h1 {
      text-decoration: underline;
    }
  
  </style>
</head>  
<body>
<!--Including the connection to the database and displying the data from the tariff table, which holds the details of the hotel selected and its cost-->
  <?php
    include "connection.php";
    $type=$_SESSION['type'];

    $qq=mysqli_query($con,"select inrsin from tariff where type='$type'");

    while($res = mysqli_fetch_assoc($qq)){
      $_SESSION['price'] = $res['inrsin'];
    }
  ?>

  <div id = "heading">
    <h1>Thank you for booking. Here is a summary of your bill:</h1>
  </div>



  <div id = "summary">

    <h2>Hotel : <?php echo $_SESSION['type']; ?> </h2>
    <h2>Cost per Room : <?php echo $_SESSION['price']; ?> </h2>
    <h2>Number of Rooms : <?php echo $_SESSION['norm']; ?> </h2>
    <h2>Number of Days : <?php echo $_SESSION['datediff']; ?> </h2>
    <br><br>
    <h2>Thank you for coming, <strong><?php echo $_SESSION['username']?></strong></h2>
    <h2>The following room has been booked for you. Have a nice day 🙂</h2>
    <!--This displays the unique room number and hotel the user has booked based on his/her username-->
    <?php
      include "connection.php";
      $rid=$_SESSION['rid'];
      $qq=mysqli_query($con,"select room_number from maprr where r_id= '$rid' ");

      //The particular room number is being called based on the hotel name and the price of the hotel, from the available hotel rooms
      while($res = mysqli_fetch_assoc($qq)){
      echo "<h2>R-";
      echo $res['room_number'];
      echo "</h2>";
      }
    ?>

      <!--This is where the calculation for the hotel base amount multiplied by the number of days is being processed-->
    <h1>Your bill amount is <?php echo $_SESSION['price']?> x <?php echo $_SESSION['norm'] ?> x <?php echo $_SESSION['datediff'] ?> = R<?php echo $_SESSION['price']*$_SESSION['norm']*$_SESSION['datediff'] ?></h1>
  <div>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
