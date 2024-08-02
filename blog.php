<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> blog Gamic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./Blog1.css">
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
                    <li class="dropdown"><a href="index.php">Home  <i class="fa-solid fa-chevron-down"></i></a>



                        <ul class="sub-menu">
                            <li><a href="#"><span>Metaverse Game 1</span></a></li>
                            <li><a href=""><span>Metaverse Game 2</span></a></li>
                            <li><a href=""><span>VR Business Portal</span></a></li>
                            <li><a href=""> <span>Online Gaming</span></a></li>
                            <li><a href=""><span>Esports Blog</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>


                    </li>
                    <li class="dropdown"><a href="page.php">Pages</a>

                        <ul class="sub-menu">
                            <li><a href="#"><span>About Us</span></a></li>
                            <li><a href=""><span>Whitepaper</span></a></li>
                            <li><a href=""><span>Our Services</span></a></li>
                            <li><a href=""> <span>Our Team</span></a></li>
                            <li><a href=""><span>FAQs</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
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

    <div class="blog">
        <h2>STANDARD</h2>

    </div>
    <div class="list-contaoiner">
        <div class="left-col">
            <!-- <h2>sahrun</h2>
          <h3>Hellfire King has</h3> -->
          <div class="house">
            <div class="house-img"><a href="index2.php"><img src="./img/post13.jpg" alt=""></a>

            </div>
            <div class="house-info">
             
                <h3><a href="index2.php">Breathtaking adventures the new Dragon Game</a></h3>
                <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                <br>
                
              
            </div>


        </div>
        <div class="house">
            <div class="house-img"><a href="index2.php"><img src="./img/post14.jpg" alt=""></a>

            </div>
            <div class="house-info">
             
                <h3><a href="index2.php">LIFE SIMULATION HAS JUST GOT ONTO ANOTHER LEVEL</a></h3>
                <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                <br>
                
            </div>


        </div>
        <div class="house">
            <div class="house-img"><a href="index2.php"><img src="img/55.jpg" alt=""></a>

            </div>
            <div class="house-info">
              
                <h3><a href="index2.php">GAME STREAMING SERVICE AND PODCASTS/a></h3>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                    <br>
                    
                </div>
    


        </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="img/7.jpg" alt=""></a>

                </div>
                <div class="house-info">
              
                    <h3><a href="index2.php">BREATHTAKING ADVENTURES IN THE NEW DRAGON GAME</a></h3>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                    <br>
                    
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="img/8.jpg" alt=""></a>

                </div>
                <div class="house-info">
                   
                    <h3><a href="./index2.php">THE METAVERSE UNIVERSE IS CLOSER THAN YOU THINK</a></h3>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                    <br>
                    
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="img/11.jpg" alt=""></a>

                </div>
                <div class="house-info">
                  
                    <h3><a href="index2.php">HELLFIRE KING HAS RISEN TO BRING HIS POWER BACK</a></h3>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                    <br>
                    
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="./index2.php"><img src="img/9.jpg" alt=""></a>

                </div>
                <div class="house-info">
                 
                    <h3><a href="index2.php">RIDING A DRAGON IS THE NEW GAME FOR FANTASY LOVERS</a></h3>
                    <br><span class="news-6">Jul 21, 2022 0 C `omments</span>
                    <p>Q Proin faucibus nec mauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar. Integer…</p>
                    <br>
                    
                </div>

               

            </div>








        </div>

        <div class="rigth">
            <div class="silder">
                  <div class="">
                <h3>SEARCH</h3>
                <span class="serach"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="search_field" placeholder="Search …" value="" name="s">
                <!-- <button class="search_button" type="submit">Search</button> -->


      
                

            </div>
            <!-- <div class="FILTER">
                <h3>FILTER</h3>

                <h3 class="sahil"></h3>
                <p class="price">Price: $10 — $1,070</p>

                <button class="Filtes">FILTER</button>




            </div> -->
            <div class="sahr">
                <h2 class="widget_title">CATEGORIES
                </h2>
                <ul>
                    <li class="top"><a href="">eSports</a></li>
                    <li class="top"><a href="">Heroes</a></li>
                    <li class="top"><a href="">Hot Releases</a></li>
                    <li class="top"><a href="">Metaverse Games
                    </a></li>
                    <li class="top"><a href="">News</a></li>
                    <li class="top"><a href="">Popular</a></li>
                    <li class="top"><a href="">Streaming</a></li>
                    <li class="top"><a href="">Top Rated</a></li>
                    <li class="top"><a href="">VR Games</a></li>
                </ul>
            </div>
          

            
                <h2>RECENT POSTS</h2>
                <div class="sahrub">
                    <div class="box-img"> <img src="img/post1.jpg" alt=""></div>
                    <div class="texts">
                        <h2 class="tser_7">NEWSAug 14, 2022</h2>
                        <h3 class="box_3"><a href="">Top five assassin games for pc and p4</a></h3>
                    </div>

                </div>
                <div class="sahrub">
                    <div class="box-img"> <img src="img/post.jpg" alt=""></div>
                    <div class="texts">
                        <h2 class="tser_7">NEWSAug 14, 2022</h2>
                        <h3 class="box_3"><a href="">Life simulation has just got onto another level</a></h3>
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