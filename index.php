<!--Purpose of this file is it is my homepage so goal is to have home,dininghall
about section and footer-->
<!doctype html>
<html lang="en">
  <head>
    <title>Food Review</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--font awesome cdn link (can change it later to own font)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--CSS sheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
<!--head section starts-->
    <header>
        <!--maybe can make my own logo and put it there-->
        <div class="header-container">
        <a href="#home" class="logo"><img src = "images/notebook.png" alt=""></img>FoodReview</a>
        <nav class="navbar">
            <!--can change it to the different webpages-->
            <a href="#home" class="active">Home</a>
            <a href="#dishes" >Dining Halls</a>
            <a href="#about" >About</a>
            <a href="#footer">Contact</a>
        </nav>

        <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
<!--This child thing just for decor but I think I will make it link to my portfolio later :D-->
        <i class="fa fa-child" id="signup"></i>
     
        </div>
    </div>
    </header>

<!--Might change to a diff home section swiper cause kinda nnoying how it be doing stuff like merge-->
    <!--Home section starts-->
    <section class ="home" id="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content">
                        <span> rATE the Food</span>
                        <h3>Discover Best Option</h3>
                        <p>Look at all the dinig halls and find the best choice
                        for you</p>
                    </div>
                    <div class="image">
                        <img src="images/img3.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <span> rATE the Food</span>
                        <h3>Express Your Thoughts</h3>
                        <p>Look at all the dinig halls and find the best choice 
                        for you</p>
                    </div>
                    <div class="image">
                       <img src="images/img2.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <span> rATE the Food</span>
                        <h3>Which Dining Hall is Best</h3>
                        <p>Look at all the dinig halls and find the best choice 
                        for you</p>
                    </div>
                    <div class="image">
                        <img src="images/img1.png" alt="">
                    </div>
                </div>

            </div>
<!--The little arrows-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>

    <!--Dining halls-->
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">Select Here</h3>
        <h1 class="heading">Dining Halls</h1>
        <div class="box-container">
        <div class="box">
            <!--can change to diff shape maybe more computer related-->
            <a class="fa fa-times"></a>
            <h3>Sixth</h3>
            <a href="sixth.php">
            <img src="images/sixth.png" alt="">
            </a>
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Warren</h3>
            <a href="warren.php">   
            <img src="images/warren_push.gif" alt="" href="warren.php">
           
             </a>
            
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Eighth College</h3>
            <a href="eighth.php">
            <img src="images/eighth-pixeljump.gif" alt="" class="button1" href="eighth.php">
            </a>
        </div>
        <div class="box">
           
            <a  class="fa fa-times"></a>
            <h3>Muir</h3>
            <a href="muir.php">
            <img src="images/img3.png" alt="">
            </a>
        </div>
        <div class="box">
            <a class="fa fa-times"></a>
            <h3>Seventh</h3>
            <a href="seventh.php">
            <img src="images/seventh.png" alt="">
            </a>
        </div>
        <div class="box">
           
            <a  class="fa fa-times"></a>
            <h3>Revelle</h3>
            <a href="revelle.php">
            <img src="images/revelle.png" alt="">
            </a>
        </div>
<!--Just a repeat in order to have the boxes there -->
        <div class="box">
           
            <a  class="fa fa-times"></a>
            <h3>Roosevelt</h3>
            <a href="roosevelt.php">
            <img src="images/img2.png" alt="">
            </a>
        </div>
        <div class="box">
           
            <a  class="fa fa-times"></a>
            <h3>Marshall</h3>
            <a href="marshall.php">
            <img src="images/thurgod.png" alt="">
            </a>
        </div>
    </div>
            </section>

    <!--About section-->
          <section class="about" id="about">
            <h3 class="sub-heading">About</h3>
            <h1 class="heading">Why made</h1>
            <div class="content">
                <!---I think i can change it maybe change font I feel like it looks a tad bit awkwardd-->
                    <h3>Fun activity</h3>
                    <p> I find it really enjoyable to share my thoughts on what we eat,
                        especially with friends and family. 
                        I believe that saving and sharing these culinary experiences
                        can make the food even more enjoyable.
                        It's fun to reflect on our meals and discuss them with others.
                        It adds an extra layer of appreciation and connection to the dining experience.
                        Also to give a visual representation of what to expect.

                    </p>
                </div>
            
<!--Maybe change the art either get rid of it completly or do something else-->
                <div class="image">
                    <img src="images/computer.png" alt="">

                

                
            </div>

          </section>  

          <!--footer-->
          <section class="footer" id="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="">home</a>
                    <a href="">dining halls</a>
                    <a href="">about</a>
                    <a href="">contact</a>
                </div>
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="">email</a>
                    <a href="">school email</a>
                </div>
                <div class="box">
                    <h3>follow</h3>
                    <a href="https://www.linkedin.com/in/sabine-loaiza-chable-296213320/">linkedin</a>
                    <a href="">indeed</a>
                </div>
                <div class="box">
                    <h3>MAGNIFICENT ARTIST SARAHI</h3>
                    <a href="">linkedin</a>
                    <a href="">resume</a>
                </div>

            </div>


          </section>

<!--To do at the moment fix the swiper!, fix the images and then clear data base and then fix the circl icon-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <script src="custom.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>