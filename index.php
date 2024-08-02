<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
        

</head>

<body>


    <header class="header">
        <div class="container">
            <div class="logo">
                <img src="img/logo.webp" alt="">
            </div>
            <nav class="menu">
                <div class="head">
                    <div class="logo"><img src="img/logo.webp" alt=""></div>
                    <button type="button" class="close-menu-btn"></button>

                </div>
                <ul>
                    <li class="dropdown"><a href="">Home <i class="fa-solid fa-chevron-down"></i></a>



                        <ul class="sub-menu">
                            <li><a href="#"><span>Metaverse Game 1</span></a></li>
                            <li><a href=""><span>Metaverse Game 2</span></a></li>
                            <li><a href=""><span>VR Business Portal</span></a></li>
                            <li><a href=""> <span>Online Gaming</span></a></li>
                            <li><a href=""><span>Esports Blog</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>


                    </li>
                    <li class="dropdown"><a href="">Pages</a>

                        <ul class="sub-menu">
                            <li><a href="#"><span>About Us</span></a></li>
                            <li><a href=""><span>Whitepaper</span></a></li>
                            <li><a href=""><span>Our Services</span></a></li>
                            <li><a href=""> <span>Our Team</span></a></li>
                            <li><a href=""><span>FAQs</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>
                    </li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>



            </nav>
            <div class="header-right">
                <button type="button" class="serch ican-btn"><i class="fa-solid fa-trash"></i></button>
                <button type="button" class="catd ican-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button type="button" class="sahtu ican-btn"><i class="fa-solid fa-film"></i></button>
                <button type="button" class="open-menu-btn">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>

                </button>
            </div>

        </div>

    </header>
    <script>
        const menu = document.querySelector(".menu");
const openmenuBtn = document.querySelector(".open-menu-btn");
const closemenuBtn = document.querySelector(".close-menu-btn");

[openmenuBtn, closemenuBtn].forEach((btn) => {
    btn.addEventListener("click", () => {
        menu.classList.toggle("open");
        menu.style.transition = "transform 0 .5s ease";

    });



});
menu.addEventListener("transitionend", function () {
    this.removeAttribute("style");
});
menu.querySelectorAll(".dropdown > i").forEach((arrow) => {
    arrow.addEventListener("click", function () {
        this.closest(".dropdown").classList.toggle("active");
    });
});

    </script>
    
    <div class="slideshow">

        <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->

            <img src="img/post3.jpg">
            <div class="text">
                <!-- <h2>Caption Text</h2> -->
                <h2>Top Rated
                </h2>
                <h3>Ancient death Vikings keep fighting bad guys</h3>
                <span class="home-2"> Apr 20 2022 ,Greta Bing </span>
            </div>

        </div>

        <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="img/post30.jpg">
            <div class="text">
                <!-- <h2>Caption Text</h2> -->
                <h2>Streaming </h2>
                <h3>Top extreme sports simulation games </h3>
                <span> Apr 20 2022 ,Greta Bing </span>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/post29-copyright.jpg">
            <div class="text">
                <!-- <h2>sahrun</h2> -->
                <h2>Streaming </h2>
                <h3>ASSASSINS BLADE: THE BATTLE OF THE CENTURY</h3>
                <span class="home-2"> Apr 20 2022 ,Greta Bing </span>
            </div>
        </div>


        <br>

        <div class="datsbox" style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 10000); // Change image every 2 seconds
        }
    </script>
    <section class="containe">
        <div class="conten">
            <h3>worth reading</h3><br>

            <p>POPULAR ARTICLES</p>
        </div>


    </section>
    <section class="card-cantainer">
        <div class="card">
            <a href="./abouts.php"><img src="img/4.jpg" alt=""></a>
            <div class="card-content">
                <h2>POPULAR</h2>
                <p> <a href="./abouts.php">Hot game releases of the fall: Fasten Your Seatbelts</a></p>
                <h3 class="news-7"><a href="">Apr 1, 2022 0Comments</a></h3>


            </div>

        </div>
        <div class="card">
            <a href="./abouts.php"><img src="img/5.jpg" alt=""></a>
            <div class="card-content">
                <h2>POPULAR</h2>
                <p> <a href="./abouts.php">Create your own metaverse reality in just a few clicks</a></p>
                <h3 class="news-7"><a href="">Apr 1, 2022 0Comments</a></h3>


            </div>

        </div>
        <div class="card">
            <a href="./abouts.php"><img src="img/6.jpg" alt=""></a>
            <div class="card-content">
                <h2>POPULAR</h2>
                <p><a href="./abouts.php"> Can you overcome the challenge of an ancient curse?</a></p>
                <h3 class="news-7"><a href="">Apr 1, 2022 0Comments</a></h3>


            </div>

        </div>





    </section>
    <div class="containe">
        <div class="conten23">
            <h3>
                INTERESTING
            </h3><br>

            <p>RECENT NEWS</p>
        </div>
    </div>
    </section>
    <div class="list-contaoiner">
        <div class="left-col">
            <!-- <h2>sahrun</h2>
          <h3>Hellfire King has</h3> -->
            <div class="house">
                <div class="house-img"><a href="./pages.php"><img src="img/7.jpg" alt=""></a>

                </div>
                <div class="house-info">
                    <button class="btn">Heroes</button>
                    <h3><a href="./pages.php">Breathtaking adventures the new Dragon Game</a></h3>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed…</p>
                    <br>
                    <div class="pen">

                    </div>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="./pages.php"><img src="img/8.jpg" alt=""></a>

                </div>
                <div class="house-info">
                    <button class="btn">Heroes</button>
                    <h3><a href="./pages.php">The metaverse universe is closer than you think</a></h3>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed…</p>
                    <br>
                    <div class="pen">

                    </div>
                    <br><span class="news-6">Jul 21, 2022 0 Comments</span>
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="img/11.jpg" alt=""></a>

                </div>
                <div class="house-info">
                    <button class="btn">Heroes</button>
                    <h3><a href="./pages.php">Hellfire King has risen to bring his power back</a></h3>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed…</p>
                    <br>
                    <div class="pen">

                    </div>
                    <br><span class="news-6">Jul 21, 2022 0 Comments</span>
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="../pages.php"><img src="img/9.jpg" alt=""></a>

                </div>
                <div class="house-info">
                    <button class="btn">Heroes</button>
                    <h3><a href="abouts.php">Riding a dragon is the new game for fantasy lovers</a></h3>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed…</p>
                    <br>
                    <div class="pen">

                    </div>
                    <br><span class="news-6">Jul 21, 2022 0 Comments</span>
                </div>
                <button class="lorem">load more</button>

            </div>








        </div>

        <div class="rigth">
            <div class="silder">
                <h2>RECENT POSTS</h2>
                <div class="sahrub">
                    <div class="box-img"> <img src="img/post1.jpg" alt=""></div>
                    <div class="texts">
                        <h2 class="tser_7">NEWSAug 14, 2022</h2>
                        <h3 class="box_3"><a href="shop.php">Top five assassin games for pc and p4</a></h3>
                    </div>

                </div>
                <div class="sahrub">
                    <div class="box-img"> <img src="img/post.jpg" alt=""></div>
                    <div class="texts">
                        <h2 class="tser_7">NEWSAug 14, 2022</h2>
                        <h3 class="box_3"><a href="page.php">Life simulation has just got onto another level</a></h3>
                    </div>

                </div>
                <div class="box2-img"> <img src="img/new.jpg" alt=""></div>

            </div>

        </div>

    </div>


    <footer>
        <div class="row">
            <div class="col">
                <h2>NEWSLETTER SIGNUP</h2>
                <forma>
                    <i class="fa-solid fa-clapperboard"></i>
                    <input type="email" placeholder="Enter Your Email Address" id="email">
                    <button class="saa"><i class="fa-solid fa-arrow-right"></i></button>
                </forma>
                <input name="i_agree_privacy_policy" value="1" required="" type="checkbox" id="go1" class="inited">

                <label for="check" style="color: #ffff;">I agree to the <a href="/privacy-policy/"
                        target="_blank">Privacy Policy</a>.</label>


            </div>
            <div class="col">
                <h2>SOCIALS</h2>


                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Dribble</a></li>
                <li><a href="">Instagram</a></li>
            </div>

            <div class="col">
                <h2>MENU</h2>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Contact</a></li>
            </div>

            <div class="col">
                <h2>SAY HELLO</h2>
                <li><a href="">info@email.com</a></li>
            </div>

        </div>
        <br><br>
        <hr>
        <p class="pocty">ThemeRex © 2024. All Rights Reserved.</p>
    </footer>











</body>

</html>