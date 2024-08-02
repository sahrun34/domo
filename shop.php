<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> shop Gamic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="./shop.css">
        

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
                    <li class="dropdown">
                        <a href="">Home <i class="fa-solid fa-chevron-down"></i></a> 
                        



                        <ul class="sub-menu">
                            <li><a href="#"><span>Metaverse Game 1</span></a></li>
                            <li><a href=""><span>Metaverse Game 2</span></a></li>
                            <li><a href=""><span>VR Business Portal</span></a></li>
                            <li><a href=""> <span>Online Gaming</span></a></li>
                            <li><a href=""><span>Esports Blog</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>


                    </li>
                    <li class="dropdown">
                        <a href="">Pages   <i class="fa-solid fa-chevron-down"></i></a>
                        

                        <ul class="sub-menu">
                            <li><a href="#"><span>About Us</span></a></li>
                        <li><a href=""><span>Whitepaper</span></a></li>
                            <li><a href=""><span>Our Services</span></a></li>
                            <li><a href=""> <span>Our Team</span></a></li>
                            <li><a href=""><span>FAQs</span></a></li>
                            <li><a href=""><span>Esports Portal</span></a></li>

                        </ul>
                    </li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="">Shop</a></li>
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
    <div class="shop">
        <h1>SHOP
        </h1>

    </div>

    <div class="list-contaoi">
        <div class="left-col">
            <!-- <h2>sahrun</h2>
          <h3>Hellfire King has</h3> -->
            <div class="house">
                <div class="house-img"><a href=""><img src="./img/prod1.png" alt=""></a>
                    <h3 class="brand">Brand T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$65.00 </span>
                      
                    <br> <br>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>

                </div>
                <div class="house-info">
                  
                    <h3 class="shop-img"><a href=""><img src="./img/prod2.jpg" alt=""></a></h3>
                    <h3 class="brand">Monster T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$35.00</span>
                
                    <br><br>

                
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>

                   
                </div>
                


            </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="./img/prod3.jpg" alt=""></a>
                    <h3 class="brand">Brand T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$56.00 </span>
                      
                    <br> <br>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>


                </div>
                <div class="house-info">
                    <h3 class="shop-img"><a href=""><img src="./img/prod2.jpg" alt=""></a></h3>
                    <h3 class="brand">Monster T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$35.00</span>
                    
                    <br><br>

                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                </div>


            </div>
            <div class="house">
                <div class="house-img"><a href="index2.php"><img src="img/prod5.webp" alt=""></a>
                    <h3 class="brand">Brand T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$45.00 – $75.00</span>
                      
                    <br> <br>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>


                </div>
                <div class="house-info">
                    
                    <h3 class="shop-img"><a href=""><img src="./img/prod2.jpg" alt=""></a></h3>
                    <h3 class="brand">Monster T-shirt</h3>
                    <span class="woocommerce-Price-currencySymbol">$18.00</span>
                    
                    <br>
                    <br>

                
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                    <span class="icans"><i class="fa-sharp fa-solid fa-star"></i></span>
                </div>


            </div>
           







        </div>

        <div class="rigth">
            <div class="silder">
                <h2>CART</h2>
                <div class="sahrub">
                    <div class="box-img"><img src="./img/prod1.png" alt="">
                        <h4>Subtotal:$65.00</h4>
                    </div>
                    <div class="texts">
                        <h2 class="tser_7">Brand T-shirt</h2>
                        <span class="woocommerce-Price-currencySymbol">1*$65.00</span>
                    </div>

                </div>
                <div class="sahrub">

                    <button class="view">View cart</button>
                    <br>
                    <button class="kout">Checkout</button>
                   

            </div>
            <div class="">
                <h3>SEARCH</h3>
                <span class="serach"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="search_field" placeholder="Search for products …" value="" name="s">
                <!-- <button class="search_button" type="submit">Search</button> -->


      
                

            </div>
            <div class="FILTER">
                <h3>FILTER</h3>

                <h3 class="sahil"></h3>
                <p class="price">Price: $10 — $1,070</p>

                <button class="Filtes">FILTER</button>




            </div>
            <div class="sahr">
                <h2 class="widget_title">Categories</h2>
                <ul class="sahrr">
                    <li><a href="">Chairs</a> <span class="count">(2)</span></li>
                    <li><a href="">Clothing</a><span class="count">(5)</span></li>
                    <li><a href="">Gadgets</a><span class="count">(5)</span></li>
                    <li><a href="">Uncategorized</a><span class="count">(0)</span></li>
                </ul>
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