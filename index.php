<?php include('server.php'); 

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $rec = mysqli_query($db, "SELECT * FROM date_info WHERE id=$id");
    $edit_state = true;
    $record = mysqli_fetch_array($rec);
    $date_in = $record['date_in'];
    $date_out = $record['date_out'];
    $id = $record['id'];

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOTEL BOOKING</title>
    <link rel="stylesheet" href="bulma/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alice|Bad+Script|Charm|Cinzel:700|Courgette|Dancing+Script:700|Kaushan+Script|Lobster|Merienda|Playfair+Display+SC:400i|Tangerine:700|Roboto+Condensed:400i|" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/jquery.min.js"></script>

    <script>
       $("document").ready(function() {
            $("#hotel1").on("click", function(){
                $("#reviewF").fadeIn(3000, function(){
                    
                });
            }); 



        });
    </script>
    <script>
       $("document").ready(function() {
            $("#hotel2").on("click", function(){
                $("#reviewT").fadeIn(3000, function(){
                    
                });
            }); 



        });
    </script>
    <script>
       $("document").ready(function() {
            $("#hotel3").on("click", function(){
                $("#reviewS").fadeIn(3000, function(){
                    
                });
            }); 



        });
    </script>
            
    

    <style>
    
    .hero-body {
        align-items: center;
        display: flex;
    }

    .container {
        flex-grow: 1;
        flex-shrink: 1;
    }

    section {
        background-image: url('img/bighero.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    img {
        border-radius: 10px;
    }

    .container > h1 {
        font-family: 'Merienda', cursive;
    }

    #hotel-name {
        font-family: 'Cinzel', serif;
    }

    #slogan {
        font-family: 'Dancing Script', cursive;
    }

    #reviews {
        font-family: 'Alice', serif;
    }

    #review-text {
        text-align: left;
        display: block;
    }

    #review-column > img {
        align: center;
    }

    #newstuff {
        font-family: 'Alice', serif;
    }

    #quick {
        font-family: 'Alice', serif;
    }

    h3 {
        text-decoration: underline;
    }

    #activities {
        color: red;
        font-size: 20px;
        font-family: 'Cinzel', serif;

    }

    #quickselect {
        font-family: 'Roboto Condensed', sans-serif;
    }

    #quickdays {
        font-family: 'Roboto Condensed', sans-serif;
    }

    #myLogoImg { 
        display: none;
    }

    #reviewF {
            display: none;
        }

        #reviewT {
            display: none;
        }
        #reviewS {
            display: none;
        }

        #bookdates {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px;
            border: 6px solid #bbbbbb;
            border-radius: 13px;
        }


    
    
    </style>
</head>
<body>
    
        
        <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <img src="" width="112" height="28">
              
                  <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                  </a>
                </div>
              
                <div id="navbarBasicExample" class="navbar-menu">
                  <div class="navbar-start">
                    <a class="navbar-item">
                      Home
                    </a>
              
                    <a class="navbar-item">
                      Documentation
                    </a>
              
                    <div class="navbar-item has-dropdown is-hoverable">
                      <a class="navbar-link">
                        More
                      </a>
              
                      <div class="navbar-dropdown">
                        <a class="navbar-item">
                          About
                        </a>
                        <a class="navbar-item">
                          Jobs
                        </a>
                        <a class="navbar-item">
                          Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                          Report an issue
                        </a>
                      </div>
                    </div>
                  </div>
              
                  <div class="navbar-end">
                    <div class="navbar-item">
                      <div class="buttons">
                        <a class="button is-primary" href="form.php">
                          <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                          Log in
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
    
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                    <h1 class="title is-1 has-text-grey-dark has-text-centered" id="hotel-name">URICK ESAU</h1>
                    <h2 class="subtitle is-2 has-text-centered is-italic" id="slogan">Welcome Home</h2>
                    <h1 class="title is-1 is-italic">
                           <!-- HOTEL TRIVAGO-->
                        </h1>
                        <h2 class="subtitle is-size-3 has-text-grey-darker has-shadow has-text-left">
                            “The key is to set realistic customer expectations and then not to just meet them, but to exceed them — preferably in unexpected and helpful ways.”
                        </h2>
                        <br>
                        
                        
                
                    <!-- <img src="img/bighero.jpeg" alt="" srcset="" style="max-width: 1000px"> -->
                
            </div>
        </div>
    </section>

    <div class="columns has-background-grey-lighter">
        <div class="column has-text-centered">
            <img src="img/doubleroom.jpeg" alt="" srcset="">
        </div>
        <div class="column has-text-centered">
                <img src="img/hallway.jpeg" alt="" srcset="">
        </div>
        <div class="column has-text-centered">
                <img src="img/queenbed.jpeg" alt="" srcset="">
        </div>
    </div>
    <div class="columns has-text-centered">
        <div class="column" id="review-column">
            <h2 class="title is-1 has-text-grey-dark" id="reviews">CUSTOMER REVIEWS</h2>
            <div>
            <figure class="image is-128x128 is-centered">
                <img src="img/john-paul.jpg">
            </figure>
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia sed iure cumque debitis quos impedit ducimus magni quaerat at provident quas, commodi obcaecati accusamus illum dolorum, dolorem rem quae eos!</div>
            </p>
            <br>
            <figure class="image is-128x128 is-centered">
                <img src="img/gordi.jfif">
            </figure>
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia sed iure cumque debitis quos impedit ducimus magni quaerat at provident quas, commodi obcaecati accusamus illum dolorum, dolorem rem quae eos!</div>
            </p>
            <br>
            <figure class="image is-128x128 is-centered">
                <img src="img/style8.jpg">
            </figure>
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia sed iure cumque debitis quos impedit ducimus magni quaerat at provident quas, commodi obcaecati accusamus illum dolorum, dolorem rem quae eos!</div>
            </p>
            </div>
            
                
        </div>
        <div class="column has-background-grey-lighter">
        <h2 class="title is-1 has-text-grey-dark" id="quick">QUICK SEARCH</h2>
           <br>
           <h2 class="subtitle is-3 has-text-black" id="quickselect">Select your hotel by<u>  clicking </u>the menu below: </h2>
           <br>
           <form action="" method="post">
                <select name="hotels" id="hotels" action="index.php">
                    <option value="blank" method="post" class="img">Select your hotel</option>
                    <option value="hotel1" method="post" class="img" id="hotel1">Four Seasons Hotel</option>
                    <option value="hotel2" method="post" class="img" id="hotel2">Royal Tulip</option>
                    <option value="hotel3" method="post" class="img" id="hotel3">Sun1 Parow</option>
                </select>
                <br>
                <br>

                <div id="output-image">
                </div>
                





                <br>
                
                <br>
                <tr>
                    <td>
                        
                    </td>
                </tr>
                
           </form>
           <br>
           <br>
           <!------------------------------------------------------------------>
           <form method="post" action="server.php" class="bookdates">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <div class="input-group">
            <label class="subtitle is-3 has-text-black" id="quickdays">Check-in Date</label>
            <input type="date"name="date_in" value="<?php echo $date_in; ?>">
        </div>
        <div class="input-group">
            <label class="subtitle is-3 has-text-black" id="quickdays">Check-out Date</label>
            <input type="date"name="date_out" value="<?php echo $date_out; ?>">
        </div>
        <div class="input-group">
            <!--Here I defined my buttons to respond according to whether a user wants to update or save a task-->
            
        </div>
    </form>
        <br>
        <br>
        <!------------------------------------------------------------------>
        <!------------------------------------------------------------------>
        
    <!--THIS IS THE TABLE WHICH DISPLAYS THE TASK INFORMATION ONCE IT HAS BEEN ENTERED AND SAVED-->
    <table class="table">
        <thead>
            <tr>
                <th>Check-in date</th>
                <th>Check-out date</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <!--THE DATA IS FETCHED AND DISPLAYED VIA THE FETCH ARRAY FUNCTION. I CALLED THE DATA FROM THEIR ASSIGNED FIELDS IN THE DATABASE TO THEIR CORRESPONDING POSITION IN THE USER TABLE-->
        <?php while($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['date_in']; ?></td>
                <td><?php echo $row['date_out']; ?></td>
            </tr>

        <?php }?>
            
        </tbody>
    </table>














           <!------------------------------------------------------------------>
           <button class="button is-link is-large" href="#">
                Check availability
           </button>


            
        </div>
        <div class="column">
           
            <div id="reviewF">
                </p> <span id=jump> Tyrone Joubert</span> <img src="img/tyrone.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Four Seasons hotel has the best service in the industry. Nothing can compare to the way they make you feel at home.
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Taufeeq Rajap</span> <img src="img/taufeeq.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Four Seasons hotel has the best vetkoeks. They even add extra mince for free!!!
                
                </p>
            </div>
            <div id="reviewT">
                </p> <span id=jump> Natheer Kamish</span> <img src="img/natheer.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Royal Tulip hotel has the best service in the industry. Nothing can compare to the way they make you feel at home.
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Reagan Beck</span> <img src="img/reagan.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Royal Tulip hotel has the best vetkoeks. They even add extra mince for free!!!
                
                </p>
            </div>
            <div id="reviewS">
                </p> <span id=jump> Marlon Demas</span> <img src="img/marlon.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Sun1 hotel has the best service in the industry. Nothing can compare to the way they make you feel at home.
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Evan Christians</span> <img src="img/evan.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    The Sun1 hotel has the best vetkoeks. They even add extra mince for free!!!
                
                </p>
            </div>
        </div>
        
            
           
    
    </div>


    <script>
                var images = document.querySelectorAll('.img');

        for (var i = images.length; i--;) images[i].addEventListener('click', change);

        function change() {
        switch (this.value) {
            case "hotel":
            image = '<span class="tag is-danger is-medium">Please select your hotel</span>';
            break;
            case "hotel1":
            image = '<img src="img/four.jpg"></img> <br> <span class="tag is-danger is-medium">Daily rate (off season) R1200.00 per night</span>';
            break;
            case "hotel2":
            image = '<img src="img/Royal-Tulip.png"></img> <br> <span class="tag is-warning is-medium">Daily rate (off season) R950.00 per night</span>';
            break;
            case "hotel3":
            image = '<img src="img/sun1.jpg"></img> <br> <span class="tag is-primary is-large">Daily rate (off season) R550.00 per night</span>';
            break;

            default:
            image = '<img src="img/logo.png"></img>';
        }

        document.getElementById("output-image").innerHTML = image;
        }
    </script>



    
    
</body>
</html>