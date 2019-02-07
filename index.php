<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST HOTEL BOOKING</title>
    <link rel="stylesheet" href="bulma/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alice|Bad+Script|Charm|Cinzel:700|Courgette|Dancing+Script:700|Kaushan+Script|Lobster|Merienda|Playfair+Display+SC:400i|Tangerine:700|Roboto+Condensed:400i|" rel="stylesheet">
    <script src="js/jquery.min.js"></script>

    <script>
        $("document").ready(function() {
            $("#fade-in").on("click", function(){
                $("#textBox").fadeIn(3000, function(){
                    alert("I'm done fading");
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

    #textBox {
            display: none;
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
                    <h1 class="title is-1 has-text-grey-dark has-text-centered" id="hotel-name">HOTEL? TRIVAGO</h1>
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
                <img src="img/urick.jpg">
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
           <h2 class="subtitle is-3 has-text-black" id="quickselect">Select your hotel by clicking the menu below:</h2>
           <br>
           <form action="" method="post">
                <select name="hotels" id="hotels" action="index.php">
                    <option value="blank" method="post" class="img">Select your hotel</option>
                    <option value="hotel1" method="post" class="img">Four Seasons Hotel</option>
                    <option value="hotel2" method="post" class="img">Royal Tulip</option>
                    <option value="hotel3" method="post" class="img">Sun1 Parow</option>
                </select>
                <br>
                <br>

                <div id="output-image">
                </div>
                





                <br>
                <h2 class="subtitle is-3 has-text-black" id="quickdays">How many days are you staying over?</h2>
                <input type="number" name="days" id="days">
                <br>
                <br>
                <h2 class="subtitle is-3 has-text-black" id="quickdays"> Your Total:</h2>
                <br>
                <tr>
                    <td>
                        R300
                    </td>
                </tr>
                
           </form>
           <br>

           
           <button class="button is-link is-large" href="#">
                Book now
           </button>


            
        </div>
        <div class="column">
            <a href="#jump" id="fade-in">Fade in</a>
            <div id="textBox">
                </p> <span id=jump> lorem</span> ipsum dolor sit amet, consectetur adipisicing elit. Non accusamus, nihil amet dignissimos minus voluptatem eligendi ea consectetur, quod officiis, nostrum magni. Corrupti repellendus maxime, nemo unde possimus iure debitis.
                
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