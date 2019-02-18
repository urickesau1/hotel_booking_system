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
    <!--I used jquery to target an id, when it is clicked it will fade in hidden content i coded as a ui effect-->
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

        #quickSearch a {
            padding: 20px;
        }

        #output-image {
            padding: 10px;
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
                    <a class="navbar-item" href=home.php>
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
                        <a class="button is-primary" href="userinfo.php">
                          <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="login.php">
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
                <h1 class="title is-1 has-text-grey-dark has-text-centered" id="hotel-name">URICK ESAU's <br> LOOKIN4BOOKIN</h1>
                <h2 class="subtitle is-2 has-text-centered is-italic" id="slogan">Welcome Home</h2>
                <h2 class="subtitle is-size-3 has-text-grey-darker has-shadow has-text-left">
                    “The key is to set realistic customer expectations and then not to just meet them, but to exceed them — preferably in unexpected and helpful ways.”
                </h2>
                <br>      
            </div>
        </div>
    </section>

    <div class="columns has-background-grey-lighter" style="padding:1.75rem">
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
            </figure> <h2>John-Paul Lewis</h2> 
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">"Fantastic design and very easy to use! It takes the complications out of having to sign up to different hotel websites and end up not choosing the one I signed up for." 
                <br>
                <br>
               <h2>5 out of 5 stars ⭐⭐⭐⭐⭐ </h2> </div>
            </p>
            <br>
            <figure class="image is-128x128 is-centered">
                <img src="img/gordi.jfif"> 
            </figure> <h2>Gordi Fungula</h2>
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">"The fact that they do all the work of comparing prices and only having to sign up once is a great feature for me. I can book at any hotel without having to register on a million sites, and this gives me great peace of mind. Booking a room is as simple as clicking a button!"
                <br>
                <br>
                <h2>4 out of 5 stars ⭐⭐⭐⭐</h2></div>
            </p>
            <br>
            <figure class="image is-128x128 is-centered">
                <img src="img/style8.jpg"> 
            </figure> <h2>Zaeema Jacobs</h2> 
            <br>
            <p class="is-italic" id="review-text">
                <div class="30">Highly recommended! After a long night out I can easily check if a room is available and book it immediately. By the time I reach the hotel, they already have all my details, which makes it so convenient.
                <br>
                <br>
                <h2>4 out of 5 stars ⭐⭐⭐⭐</h2></div>
            </p>
            </div>
            
                
        </div>
        <div class="column has-background-grey-lighter" id=quickSearch>
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
                <a class="button is-primary" href="login.php"><strong>Login or register to check availibility</strong></a>
        

                

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
           <!----------------------------------------------------------------->
           
    
        
        
        <div class="input-group">
            <!--This is where the user will recieve a message to state that an action has been performed or not. I used a div within an if statement to to contain the message and echoed a message which is stored on my server.php page -->
    

    <!--This is my Title/ Application name-->
    


    <!-- This is the form for users to enter their details. The data is saved to the server.php page-->
    
    
    <br>
    <!--USER FORM ENDS HERE-->
 

        </div>
        <div class="input-group">
            <!--Here I defined my buttons to respond according to whether a user wants to update or save a task-->
            
        </div>
    
        <br>
        <br>
       
            
        </div>
        <div class="column">
           
            <div id="reviewF">
                </p> <span id=jump> Tyrone Joubert</span> <img src="img/tyrone.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    "Great hotel and amazing service! The breakfest is great and includes a variety of options.
                    The sea view room is very nice and the shower is very cozy (colored lights in the shower). It was also nice to have control on the lights/curtains from the tablet.."
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Taufeeq Rajap</span> <img src="img/taufeeq.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                "The Four Seasons has long been a favourite or ours and each time we return we soon remember why. The welcome at the doors and the quick and friendly check in at the super efficient reception desk, where the brilliant Andreas and his excellent staff make sure you feel at home immediately, set the tone for a truly relaxing break."
                
                </p>
                <br><br>
            </div>
            <div id="reviewT">
                </p> <span id=jump> Natheer Kamish</span> <img src="img/natheer.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    "Royal Tulip Beach Resort is a five star hotel with excellent service, good food, a clean beach and with a beautiful coral reef."
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Reagan Beck</span> <img src="img/reagan.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    "We arrived at the Royal Tulip beach resort and straight away we were treated like family returning. Staff are always very helpful and kind, they took us straight to our room in a new block over looking the beach. "
                
                </p>
            </div>
            <div id="reviewS">
                </p> <span id=jump> Marlon Demas</span> <img src="img/marlon.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    "In close proximity to Cape Town International Airport, SUN1 Parow offers convenient, modern and comfortable hotel accommodation at affordable rates."
                
                </p>
                <br>
                <br>
                </p> <span id=jump> Evan Christians</span> <img src="img/evan.jpg" alt="" srcset="" class="image is-128x128 is-centered"> <br>
                    "As usual, everything was perfect. Fantastic welcome & great accommodation. As we always stay at Sun1 during Business trips throughout South Africa, we feel like part of the Sun1 family!Thank you to Conrad from Sun1 Parow and his team !"
                
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
            image = '<img src="img/four.jpg" class="image is-128x128"></img> <br> <span class="tag is-danger is-medium">Daily rate (off season) R1200.00 per night</span>';
            break;
            case "hotel2":
            image = '<img src="img/Royal-Tulip.png" class="image is-128x128"></img> <br> <span class="tag is-warning is-medium">Daily rate (off season) R950.00 per night</span>';
            break;
            case "hotel3":
            image = '<img src="img/sun1.jpg" class="image is-128x128"></img> <br> <span class="tag is-success is-large">Daily rate (off season) R550.00 per night</span>';
            break;

            default:
            image = '<img src="img/logo.png"></img>';
        }

        document.getElementById("output-image").innerHTML = image;
        }
    </script>

       

    
    
</body>
</html>
