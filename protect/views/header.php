<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Estore 16</title>
    <!-- // Stylesheets // -->
    <link rel="stylesheet" href="public/css/style.css" type="text/css" >
    <link rel="stylesheet" href="public/css/nivo-slider.css" type="text/css" media="screen" >
    <link rel="stylesheet" href="public/css/default.advanced.css" type="text/css" >
    <link rel="stylesheet" href="public/css/contentslider.css" type="text/css"  >
    <link rel="stylesheet" href="public/css/jquery.fancybox-1.3.1.css" type="text/css" media="screen" >
    <!-- // Javascript // -->
    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.min14.js"></script>
    <script type="text/javascript" src="public/js/jquery.easing.1.2.js"></script>
    <script type="text/javascript" src="public/js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="public/js/scroll.js"></script>
    <script type="text/javascript" src="public/js/ddaccordion.js"></script>
    <script type="text/javascript" src="public/js/acordn.js"></script>
<!--    <script type="text/javascript" src="public/js/cufon-yui.js"></script>-->
<!--    <script type="text/javascript" src="public/js/Trebuchet_MS_400-Trebuchet_MS_700-Trebuchet_MS_italic_700-Trebuchet_MS_italic_400.font.js"></script>-->
<!--    <script type="text/javascript" src="public/js/cufon.js"></script>-->
    <script type="text/javascript" src="public/js/contentslider.js"></script>
    <script type="text/javascript" src="public/js/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript" src="public/js/lightbox.js"></script>
    <style>.high-light{color: #2aabd2!important; font-weight: bold}</style>
</head>

<body>
<a name="top"></a>

<div id="wrapper_sec">
    <!-- Header -->
    <div id="masthead">
        <div class="secnd_navi">
            <ul class="links">
                <li>Default welcome msg!</li>
                <li><a href="account.html">My Account</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="cart.html">My Cart</a></li>
                <li><a href="#">Checkout</a></li>
                <li class="last"><a href="login.html">Log In</a></li>
            </ul>
            <ul class="network">
                <li>Share with us:</li>
                <li><a href="#"><img src="public/images/linkdin.gif" alt="" ></a></li>
                <li><a href="#"><img src="public/images/rss.gif" alt="" ></a></li>
                <li><a href="#"><img src="public/images/twitter.gif" alt="" ></a></li>
                <li><a href="#"><img src="public/images/facebook.gif" alt="" ></a></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div class="logo">
            <a href="index.html"><img src="public/images/logo.png" alt="" ></a>
            <h5 class="slogn">The best watches for all</h5>
        </div>
        <ul class="search">
            <li><input type="text" value="Search" id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Search'; }" onfocus="if(this.value == 'Search') { this.value = ''; }" class="bar" ></li>
            <li><a href="#" class="searchbtn">Search for Products</a></li>
        </ul>
        <div class="clear"></div>
        <div class="navigation">
            <ul id="nav" class="dropdown dropdown-linear dropdown-columnar">
                <li><a href="inited.php">Home</a></li>
                <li><a href="static.html">About Us</a></li>
                <li class="dir"><a href="#">Department</a>
                    <ul class="bordergr big">
                        <?php foreach ($menus as $cate => $menu): ?>
                            <li class="dir"><span class="colr navihead bold"><?=$cate?></span>
                                <ul>
                                    <?php foreach ($menu as $menu_child): ?>
                                        <li><a href="?mod=listing&id_cate=<?=$menu_child->fc_id?>" itemid="<?=$menu_child->fc_id?>"><?=$menu_child->fc_name?></a></li>
                                    <?php endforeach?>
                                </ul>
                            </li>
                        <?php endforeach?>


                    </ul>
                </li>
                <li><a href="login.html">BedSheets</a></li>
                <li class="dir"><a href="#">Pages</a>
                    <ul class="bordergr small">
                        <li class="dir"><span class="colr navihead bold">Pages</span>
                            <ul>
                                <li class="clear"><a href="index.html">Home Page</a></li>
                                <li class="clear"><a href="account.html">Account Page</a></li>
                                <li class="clear"><a href="cart.html">Shopping Cart Page</a></li>
                                <li class="clear"><a href="categories.html">Categories</a></li>
                                <li class="clear"><a href="detail.html">Product Detail Page</a></li>
                                <li class="clear"><a href="listing.html">Listing Page</a></li>
                                <li class="clear"><a href="login.html">Login Page</a></li>
                                <li class="clear"><a href="static.html">Static Page</a></li>
                                <li class="clear"><a href="contact.html">Contact Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dir"><a href="#">Themes</a>
                    <ul class="bordergr small">
                        <li class="dir"><span class="colr navihead bold">Themes</span>
                            <ul>
                                <li class="clear"><a href="../blue/index.html">Blue</a></li>
                                <li class="clear"><a href="../green/index.html">Green</a></li>
                                <li class="clear"><a href="../orange/index.html">Orange</a></li>
                                <li class="clear"><a href="index.html">Purple</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="lang">
                <li>Your Language:</li>
                <li><a href="#"><img src="public/images/flag1.gif" alt="" ></a></li>
                <li><a href="#"><img src="public/images/flag2.gif" alt="" ></a></li>
                <li><a href="#"><img src="public/images/flag3.gif" alt="" ></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <!-- Banner Section -->
    <!--<div id="banner">
        <div id="slider4" class="nivoSlider">
            <a href="detail.html"><img src="public/images/banner1.jpg" alt="" ></a>
            <a href="detail.html"><img src="public/images/banner2.jpg" alt="" ></a>
            <a href="detail.html"><img src="public/images/banner3.jpg" alt="" ></a>
            <a href="detail.html"><img src="public/images/banner4.jpg" alt="" ></a>
        </div>
        <script type="text/javascript" src="public/js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="public/js/nivo.js"></script>
    </div>-->
    <div class="clear"></div>
    <div class="content_sec">