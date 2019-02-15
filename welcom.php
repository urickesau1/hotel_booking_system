<?php session_start(); ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="css/styles.css">
     <style>
        .display {
            color: white;
            font-size: large;
        }
     
     </style>
 </head>
 <body>
     <div class="body-content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message']; ?></div>
        <div class="display">
         WELCOME <br>
          <span class="user"><?= $_SESSION['username']; ?></span>
        </div>
        <br>
        <h1>Proceed to <a href="index.php">booking</a> </h1>
        
    </div>
</div>
 </body>
 </html>




