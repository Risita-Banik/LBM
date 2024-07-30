<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css link-->
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <div class="header"> 
        <nav class="menubar">
            <h1>LIBRARY</h1>
            <ul class="navlink">
                <li class=""><a href="#"> HOME </a></li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BOOKS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="all_book.php">ALL BOOKS</a></li>
            <li><a class="dropdown-item" href="sem_book.php">SEMESTER BOOKS</a></li>
            <li><a class="dropdown-item" href="#">ADDITIONAL BOOKS</a></li>
          </ul>
        </li>
        <li><a href="user_issue_book.php">Your Issued book</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="profile.php"><?php echo $_SESSION['email']?></a></li>
                <li><a href="user_signup.php">LOGOUT</a></li>
            </ul>
            <ul class="navicon">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
                
            </ul>
        </nav>
        <div class="front">
            <div class="centerlogo">
                <h1>LIBRARY</h1>
                <button> Explore Now </button>
            </div>
        </div>
    </div>

    <!--about part-->
    <section id="about">
        <div class="about-left-col">
            <img src="images/about.png">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1 class="about1">About Us</h1>
                <p>The film concerns the relationship between Louis, a painter suffering from Alzheimer's, and his wife Michelle. At first, Louis seems merely forgetful, but as the film progresses his dementia becomes apparent.[1] The viewer experiences much of this from Louis' point of view; objects melt and shape shift in his hand. When Louis encounters other characters, such as the doctor Michelle takes him to,</p>
                <h5>..............Choose the right path towards Success</h4>
            </div>
        </div>
    </section >

    <!-----Features part------>>
    <section id="feature">
        <div class="feature-row">
            <div class="feature-col">
                <img src="images/pic-1.png">
                <h4>Learn Anywhere</h4>
                <P>Switch between your phone , tablet or mobile</P>
            </div>
            <div class="feature-col">
                <img src="images/pic2.png">
                <h4>1000+ Trusted User</h4>
                <p>We have so many users who trust us </p>
            </div>
            <div class="feature-col">
                <img src="images/pic3.png">
                <h4>500+ Books</h4>
                <p>all types of book are available in our library </p>
            </div>
        </div>
    </section>


    <!------week book------>
    <section id="week-Book">
        <h1 class="most-read"> <u>MOST READ BOOK OF THE WEEK</u></h1>
        <div class="week-Book-left-col">
            <div class="week-Book-Text">
                <h1>LIFE'S AMAZING SECRETS</h1>
                <h2>.......written By Garu Gopal Das</h2>
                <p>Stop going through life <br> Start growing through life!</p>
                <p>While navigating their way through Mumbai's horrendous traffic Gaur Gopal Das and his wealthy young friend Harry get talking delving into concepts ranging from the human condition to finding one's purpose in life and the key to lasting happiness.</p>
                <p>Whether you are looking at strengthening your relationships discovering your true potential understanding how to do well at work or even how you can give back to the world Gaur Gopal Das takes us on an unforgettable journey with his precious insights on these areas of life.</p>
                <p>Das is one of the most popular and sought-after monks and life coaches in the world having shared his wisdom with millions. His debut book Life's Amazing Secrets distils his experiences and lessons about life into a light-hearted thought-provoking book that will help you align yourself with the life you want to live.</p>
            </div>
        </div>
        <div class="week-Book-right-col">
            <img src="images/week-book.jpg" alt="">     
        </div>
    </section>






    <!-- footer part -->
    <section id="footer-part">
            <footer class="footer">
                <div class="row">
                    <div class="col">
                        <h1 >LIBRARY</h1>
                        <p class="short-note">
                            National Esports is your one-stop go for gaming, blogging, content creation, brand deals. Our 24/7 support will help you out to fulfill your need in no time.
                        </p>
                    </div>
                    <div class="col">
                        <h3>Office <div class="underline"><span></span></div></h3>
                        <p class="address">154,Shyama Mukherjee Rd</p>
                        <p class="address">Kolkata, North 24 Parganas</p>
                        <p class="address">West bengal, PIN 700110, India</p>
                        <p class="email-id">info.nationalesports@gmail.com</p>
                        <h5 class="phone_no">+91-3335647407</h5>
                    </div>
                    <div class="col">
                        <h3>Links <div class="underline"><span></span></div></h3>
                         <div class="social-icons">
                            <a href="https://www.facebook.com/nationalesports.in" class= fi target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/nationalesportsindia" class= fi target="_blank" >
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://twitter.com/NationalEspin" class= fi target="_blank" >
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://discord.gg/PCMh3HdbXt" class= fi target="_blank" >
                                <i class="fa-brands fa-discord"></i>
                            </a>
                            <a href="https://www.instagram.com/nationalesports.in/" class= fi target="_blank" >
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCOxaHU3XPapJL7QLSXAIRDg" class= fi target="_blank" >
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                         </div>
                    </div>
                    <div class="col">
                        <h3>Newsletter <div class="underline"><span></span></div></h3>
                        <form>
                            <i class="fa-regular fa-envelope"></i>
                            <input type="email" placeholder="Enter your email id" required>
                            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
                <hr>
                <p class="copyright">National Esports India © 2021 - All Rights Reserved</p>
            </footer>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var menubar = document.querySelector('.menubar');
        window.addEventListener('scroll',scrollFunction);

        function scrollFunction(){
            if(window.scrollY > 150){
                menubar.classList.add('active');
            }
            else{
                menubar.classList.remove('active');
            }
        }
    </script>
    <script type="text/javascript">
        const icon = document.querySelector(".navicon")
        const navLink = document.querySelector(".navlink")
 
        icon.addEventListener('click',()=>{
        navLink.classList.toggle('mobilemenu')
        })
</script>
</body>
</html>