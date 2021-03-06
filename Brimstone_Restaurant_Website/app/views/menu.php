<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!--HEADER-->
        <header class="rest-header">           
                <div class="nav-container sticky2">
                   
                     
                    <div class="brand-wrapper"> 
                    <div class="navbar-brand">
                        <a class="logo" href="#">Brimstone</a>
                    </div>
               
                <a class="icon"><i class="fa fa-bars"></i></a>
        
                </div>  
        
                  <nav>
                      <ul class="topnav">
                      <li><a href="<?php echo HOME; ?>">Home</a></li>
                      <li><a href="<?php echo MENU; ?>">Menu</a></li>
                      <li><a href="<?php echo ABOUT; ?>">About us</a></li>
                      <li><a href="<?php echo CONTACT; ?>">Contact</a></li>
                      </ul>
                  </nav>
               
            </div>
        </header>

        <section class="menu-cover">
        <div class="ht-menu">
            <ul>
                <li><a href="#appetizers">Appetizers</a></li>
                <li><a href="#beverages">Beverages</a></li>
                <li><a href="#fast-food">Fast Food</a></li>
                <li><a href="#dessert">Desserts</a></li>
            </ul>
        </div>
    </section>


    <section class="menu-item">
        <div class="menu-items">
            <div id="appetizers">
                <h1>Appetizers</h1>
                <div class="flex-container">
                    <div class="flex1">
                        <img  class="htmenu-img" src="public/img/Appetizers/appetizer-2802_1280.jpg">
                        <h2>Sandwich.......................<strong class="amt">$10</strong></h2>
                    </div>
                    <div class="flex1">
                        <img  class="htmenu-img" src="public/img/Appetizers/appetizer-1238615_1280.jpg">
                        <h2>Appetizer.......................<strong class="amt">$10</strong></h2>
                    </div>
                    <div class="flex1">
                        <img  class="htmenu-img" src="public/img/Appetizers/vegetable-skewer-3317060_1280.jpg">
                        <h2>Vegetable-Skewer...........<strong class="amt">$10</strong></h2>
                    </div>
                </div>
            </div>


            <div id="beverages">
                    <h1>Bevrages</h1>
                    <div class="flex-container">
                        <div class="flex1">
                            <img  class="htmenu-img" src="public/img/Beverages/beverage-3445991_1280.jpg">
                            <h2>Hot Chocolate.................<strong class="amt">$10</strong></h2>
                        </div>
                        <div class="flex1">
                            <img  class="htmenu-img" src="public/img/Beverages/coffee-3727673_1280.jpg">
                            <h2>Cappuccino....................<strong class="amt">$10</strong></h2>
                        </div>
                        <div class="flex1">
                            <img  class="htmenu-img" src="public/img/Beverages/coffee-983955_1280.jpg">
                            <h2>Latte........................<strong class="amt">$10</strong></h2>
                        </div>
                    </div>
                </div>


                <div id="fast-food">
                        <h1>Fast Food</h1>
                        <div class="flex-container">
                            <div class="flex1">
                                <img  class="htmenu-img" src="public/img/Fast Food/hamburger-494706_1280.jpg">
                                <h2>Hamburger.................<strong class="amt">$10</strong></h2>
                            </div>
                            <div class="flex1">
                                <img  class="htmenu-img" src="public/img/Fast Food/pizza-1949183_1280.jpg">
                                <h2>Fast Food....................<strong class="amt">$10</strong></h2>
                            </div>
                            <div class="flex1">
                                <img  class="htmenu-img" src="public/img/Fast Food/fried-chicken-690039_1280.jpg">
                                <h2>Fried Chicken..................<strong class="amt">$10</strong></h2>
                            </div>
                        </div>
                    </div>
             


                    <div id="dessert">
                            <h1>Desserts</h1>
                            <div class="flex-container">
                                <div class="flex1">
                                    <img  class="htmenu-img" src="public/img/Desserts/ice-1786311_1280.jpg">
                                    <h2>Cake...............................<strong class="amt">$10</strong></h2>
                                </div>
                                <div class="flex1">
                                    <img  class="htmenu-img" src="public/img/Desserts/eclair-3366430_1280.jpg">
                                    <h2>Cake................................<strong class="amt">$10</strong></h2>
                                </div>
                                <div class="flex1">
                                    <img  class="htmenu-img" src="public/img/Desserts/cake-1850011_1280.jpg">
                                    <h2>Cake.................................<strong class="amt">$10</strong></h2>
                                </div>
                            </div>
                        </div>


        </div>
    </section>

            <!--Footer-->
            <footer class="footer">

                    <div class="follow">
                        <h1 class="follow-text">Follow us:</h1>
                        <ul>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                    <p class="copyright-text">&copy;brimstone2019</p>
                    </div>
                </footer>
    

                <script src="js/all.js"></script>
</body>
</html>