<?php 
    date_default_timezone_set('Europe/Copenhagen');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>


<!--html:5-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Warren Ratings</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome cdn link (can change it later to own font)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--CSS sheet-->
    <link rel="stylesheet" href="dining.css">
    <!--bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!--header section-->
    <header>
        <!--maybe can make my own logo and put it there-->
        <div class="header-container">
        <a href="#" class="logo"><img src = "images/notebook.png" alt=""></img>FoodReview</a>
        <nav class="navbar">
            <!--can change it to the different webpages-->
            <a href="index.html#home" class="active">Home</a>
            <a href="index.html#dishes">Dining Halls</a>
            <a href="index.html#about">About</a>
            <a href="index.html#footer">Contact</a>
        </nav>

        <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fa fa-child" id="signup"></i>
     
        </div>
    </div>
    </header>
    <!--main screen/home section-->
    <section class="main" id="main">
        <div class="content">
            <h3>Canyon Vista</h3>
            <p> Image to be added or something</p>
        </div>

    </section>
    <!--the tab section with menus-->
    <section class="breakfast">
        <h4>Breakfast</h4>
        <div class="box-container">
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Burger</h3>

           </div>

        <div class="box">
            
            <a class="fa fa-times"></a>
            <h3>Burrito</h3>
            <a href="warren.php">   
            <img src="images/warren1.jpg" alt="" href="warren.php">
          
            </a>
            
        </div>
        <div class="box">
            
            <a class="fa fa-times"></a>
            <h3>Pancakes</h3>
            <a href="eighth.php">
            <img src="images/eighth-pixeljump.gif" alt="" class="button1" href="eighth.php">
            </a>
        </div>
        <div class="box">
           
            <a  class="fa fa-times"></a>
            <h3>Yogurt</h3>
            <img src="images/img1.png" alt="">
           
        </div>
        <div class="box">
            
            <a class="fa fa-times"></a>
            <h3>Bread</h3>
            <img src="images/thurgod.png" alt="">
           
            </div>
            </div>
        </div>
            </section>

    <section class="lunchDin">
       <h4>Lunch & Dinner</h4>
        <div class="box-container">
        <div class="box">
           
            <a class="fa fa-times"></a>
            <h3>Burger</h3>
            <img src="images/sixth.png" alt="">
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Fries</h3>
            <a href="warren.php">   
            <img src="images/warren1.jpg" alt="" href="warren.php">
             </a>
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Noodles</h3>
            <a href="eighth.php">
            <img src="images/eighth-pixeljump.gif" alt="" class="button1" href="eighth.php">
            </a>
        </div>
        <div class="box">
            <a  class="fa fa-times"></a>
            <h3>Sandwhich</h3>
            <img src="images/img1.png" alt="">
           
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Wings and Tenders</h3>
            <img src="images/thurgod.png" alt="">
          
        </div>
    </div>
            </section>

            <h2> Comment</h2>
            <?php
            echo"<form method='POST' action='".setComments($conn)."'>
                <input type='hidden' name='uid' value='Anonymous'>
                <textarea name='message'></textarea>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <button type='submit' name='commentSubmit' class='comm'>Comment</button>
            </form>";
            
                getComments($conn);
                
            ?>
      

</body>



<script src="custom.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>

