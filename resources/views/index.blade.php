<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuTech | Audio Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="/">Home</a></li>
                        <li><a href="/products">Products</a></li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome back, {{auth()->user()->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/account">Account</a></li>
                        @endauth
                        
                    </ul>
                </nav>
                <a href="/cart"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
            </div>
            <div class="row">
                <div class="col-2">

                    <h1>Your one stop place for<br>Everything audio<br>Shopping</h1>
                    <p>Audio experience beyond belief.<br>Explore a whole new world for audiophiles.</p>
                    <a href="/products" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/banner1.jpg">
                </div>

            </div>

        </div>
    </div>

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/col1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/col2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/col3.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product1.html"><img src="images/fp1.jpg"></a>
                <h4><a href="product1.html">QDC Anole VX Professional</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$2,556.00</p>
            </div>
            <div class="col-4">
                <a href="product2.html"><img src="images/fp2.jpg"></a>
                <h4><a href="product2.html">Iriver Astell & Kern KANN CUBE</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$1,727.00</p>
            </div>
            <div class="col-4">
                <a href="product3.html"><img src="images/fp3.jpg"></a>
                <h4><a href="product3.html">Tanchjim Prism</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$599.99</p>
            </div>
            <div class="col-4">
                <a href="product4.html"><img src="images/fp4.jpg"></a>
                <h4><a href="product4.html">SMSL D300 DAC</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$399.99</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product5.html"><img src="images/rp1.jpg"></a>
                <h4><a href="product5.html">QDC Dmagic</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$1,599.99</p>
            </div>
            <div class="col-4">
                <a href="product6.html"><img src="images/rp2.jpg"></a>
                <h4><a href="product6.html">Tanchjim Cable R</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$189.99</p>
            </div>
            <div class="col-4">
                <a href="product7.html"><img src="images/rp3.jpg"></a>
                <h4><a href="product7.html">Topping L30 NCFA</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$149.99</p>
            </div>
            <div class="col-4">
                <a href="product8.html"><img src="images/rp4.jpg"></a>
                <h4><a href="product8.html">Hilidac Audirect Beam 3 Pro</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$149.99</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="product9.html"><img src="images/rp5.jpg"></a>
                <h4><a href="product9.html">BGVP ArtMagic V12</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$1,299.00</p>
            </div>
            <div class="col-4">
                <a href="product10.html"><img src="images/rp6.jpg"></a>
                <h4><a href="product10.html">Iriver A & Ultima SP2000 Player</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$4,136.00</p>
            </div>
            <div class="col-4">
                <a href="product11.html"><img src="images/rp7.jpg"></a>
                <h4><a href="product11.html">Moondrop S8</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$699.99</p>
            </div>
            <div class="col-4">
                <a href="product12.html"><img src="images/rp8.jpg"></a>
                <h4><a href="product12.html">Tanchjim Stargate iOS</a></h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$79.90</p>
            </div>
        </div>
    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/offer.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on AuTech</p>
                    <h1>Moondrop Blessing Dusk 2</h1>
                    <small>Where the Dusk represents “balance in all things“ approach in tonality, the Dawn was originally “pleasantness above all“. As such, the Dawn was a little thicker in note weight overall to impart a little extra warmth and “emotion“, the Dusk is more neutral and more about being a punchier, less upper-mid-forward version of the Blessing 2.
                    </small>
                    <br>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>

    </div>

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>One of the best places to shop audio devices for me!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Anna Rudolph</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Fast shipping, low prices, high quality products. What more can you ask?</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Wasn't sure where I should buy my first earphones. Well now I don't need to look elsewhere since this is the best place!</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Mabel Ellen</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/brand1.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand2.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand3.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand4.jpg">
                </div>
                <div class="col-5">
                    <img src="images/brand5.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col1">
                    <h3>Download Our App!</h3>
                    <p>Available on iOS and Android devices</p>
                    <div class="app-logo">
                        <img src="images/app-store.png">
                        <img src="images/play-store.png">
                    </div>
                </div>
                <div class="footer-col2">
                    <img src="images/logo.png">
                    <p>Our purpose is to give you the best quality audio products with the best shopping experience</p>
                </div>
                <div class="footer-col3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="https://shenzhenaudio.com" target="_blank">Shenzenaudio</a></li>
                        <li><a href="https://hifigo.com" target="_blank">Hifigo</a></li>
                        <li><a href="https://www.whathifi.com" target="_blank">What Hi-Fi?</a></li>
                        <li><a href="https://www.headphones.com" target="_blank">Headphones.com</a></li>
                    </ul>
                </div>
                <div class="footer-col4">
                    <h3>Follow Us!</h3>
                    <ul>
                        <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
                        <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
                        <li><a href="https://www.youtube.com" target="_blank">Youtube</a></li>
                        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"><a href="index.html">Copyright 2022 - AuTech</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

</body>

</html>