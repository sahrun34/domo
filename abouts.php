<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_magic_quotes_gpc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" href="./Blog1.css">
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
                    <li class="dropdown"><a href="index.php">Home <i class="fa-solid fa-chevron-down"></i></a>



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
    <section class="Home">

        <div class="home2">
            <span class="home33">Popular</span>
            <h1>Hot game releases of the fall: Fasten Your Seatbelts</h1>
            <span class="home-2"> Apr 20 2022 ,Greta Bing </span>


        </div>



    </section>
    <section class="lerrte">
        <div class="page">
            <p><span class="trx_addons">Q</span>Proin faucibus nec mauris a sodales, sed elementum mi
                tincidunt. Sed eget viverra egestas nisi in consequat. Fusce sodales
                augue a accumsan. Cras sollicitudin, ipsum eget blandit pulvinar.
                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                eu, consequat vitae, eleifend ac, enim.</p>
            <p class="page2">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore
                veritatis et quasi architecto beatae vitae dicta sunt, explicabo</p>
            <h2>AT VERO EOS ET ACCUSAM</h2>
            <p class="page2">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo
                inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
        </div>

    </section>
    <section class="box">
        <div class="box3">
            <img src="img/2.jpg" alt="">

        </div>
        <div class="box3">
            <img src="img/1.jpg" alt="">

        </div>

    </section>
    <section class="page4">
        <div class="page5">
            <p>Ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
                explicabo.</p>
            <p class="page2">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae
                vitae dicta sunt, explicabo.</p>
            <p class="page3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit.</p>

        </div>

    </section>
    <section class="card-content">
        <div class="card4">
            <p class="khan">Curabitur varius eros et lacus rutrum consequat. Mauris sollicitudin enim condimentum,
                luctus justo non,
                molestie nisl. </p>
        </div>
    </section>
    <section class="page4">
        <div class="page5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.</p>
            <h2>Creative approach to every project</h2>
            <p class="page3">Aenean et egestas nulla. Pellentesque habitant morbi tristique senectus et netus et
                malesuada fames ac turpis egestas. Fusce gravida, ligula non molestie tristique, justo elit blandit
                risus, blandit maximus augue magna accumsan ante. Duis id mi tristique, pulvinar neque at, lobortis
                tortor.</p>

        </div>

    </section>
    <section class="card-34">
        <div class="card-img">
            <img src="img/3.jpg" alt="">

        </div>
    </section>
    <section class="page4">
        <div class="page5">
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit.</p>
            <p class="page3">Etiam vitae leo et diam pellentesque porta. Sed eleifend ultricies risus, vel rutrum erat
                commodo ut. Praesent finibus congue euismod. Nullam scelerisque massa vel augue placerat, a tempor sem
                egestas. Curabitur placerat finibus lacus.</p>


        </div>
    </section>
    <section class="contacts">
        <div class="cons">

            <button><i class="fa-solid fa-heart"></i></button>
            <span class="post_meta_number">0</span>
            <div class=" icanfa">


                <a href=""><i class="fa-brands fa-square-twitter"></i>
                </a>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
                <a href=""><i class="fa-solid fa-link"></i></a>

            </div>
        </div>

    </section>
    <div class="nav-links-single">

        <nav class="navigation post-navigation" aria-label="Posts">

            <div class="nav-links">
                <div class="nav-previous">

                    <span class="nav-arrow-label">Previous</span>
                    <h6 class="post-title">Top extreme sports simulation games</h6>
                    <span class="post_date">Mar 29, 2022</span>

                </div>
                <div class="nav-next">

                    <span class="nav-arrow-label">Next</span>
                    <h6 class="post-title">Can you overcome the challenge of an ancient curse?</h6>
                    <span class="post_date">Apr 1, 2022</span>

                </div>
            </div>
        </nav>
    </div>
    <div class="cards">
        <div class="parmeen">
            <div class="cards-img"><img src="img/69.png" alt="">



            </div>
            <div class="house">
                <h2>GRETA BING</h2>
                <h3>ABOUT AUTHOR</h3>
                <p class="dddd">Phasellus et ipsum justo. Aenean fringilla a fermentum mauris non venenatis. Praesent at
                    nulla aliquam ligula.</p>
                <div class="icana">
                    <a href=""><i class="fa-brands fa-square-twitter"></i>
                    </a>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-solid fa-link"></i></a>
                </div>
            </div>




        </div>

    </div>
    <section class="comments_wrap ">
        <div class="comments_form">
            <div class="comments_form">
                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="section_title comments_form_title comment-reply-title">Leave a comment
                        <small><a rel="nofollow" id="cancel-comment-reply-link"
                                href="/hot-game-releases-of-the-fall-fasten-your-seatbelts/#respond"
                                style="display:none;" class="inited">Cancel reply</a></small></h3>
                    <form action="https://gamic.themerex.net/wp-comments-post.php" method="post" id="commentform"
                        class="comment-form inited_validation" novalidate="" data-inited-validation="1">
                        <div class="comments_field comments_author">
                            <label for="author" class="required"></label>
                            <span class="sc_form_field_wrap">
                                <input id="author" name="author" type="text" placeholder="Your Name *" value=""
                                    aria-required="true" class="fill_inited">
                            </span>
                        </div>
                        <div class="comments_field comments_email">
                            <label for="email" class="required"></label>
                            <span class="sc_form_field_wrap">
                                <input id="email" name="email" type="text" placeholder="Your E-mail *" value=""
                                    aria-required="true" class="fill_inited"></span>
                        </div>
                        <div class="comments_field comments_comment">
                            <label for="comment" class="required"></label>
                            <span class="sc_form_field_wrap">
                                <textarea id="comment" name="comment" placeholder="Your comment *" aria-required="true"
                                    class="fill_inited"></textarea>
                            </span>
                        </div>
                        <p class="wpgdprc-checkbox
comment-form-wpgdprc">
                            <input type="checkbox" name="wpgdprc" id="wpgdprc" value="1" class="inited">
                            <label for="wpgdprc">
                                I agree that my submitted data is being <a href="/privacy-policy/">collected and
                                    stored</a>.
                                <abbr class="wpgdprc-required" title="You need to accept this checkbox.">*</abbr>
                            </label>
                        </p>
                        <p class="form-submit"><input name="submit" type="submit" id="send_comment" class="submit"
                                value="Leave a comment"> <input type="hidden" name="comment_post_ID" value="20839"
                                id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </p>
                    </form>
                </div><!-- #respond -->
            </div>
        </div>
    </section>

    <div class="may">
        <h2>YOU MAY ALSO LIKE</h2>
    </div>
    <section class="card-cantainer">

        <div class="card">
            <img src="img/4.jpg" alt="">
            <div class="card-content">
                <h2>POPULAR</h2>
                <p>HOT GAME RELEASES OF THE FALL: FASTEN YOUR SEATBELTS
                </p>



            </div>

        </div>
        <div class="card">
            <img src="img/5.jpg" alt="">
            <div class="card-content">
                <h2>POPULAR</h2>
                <p>CREATE YOUR OWN METAVERSE REALITY IN JUST A FEW CLICKS
                </p>



            </div>

        </div>
    </section>
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