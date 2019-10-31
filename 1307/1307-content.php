<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1307">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                    <div class="search">
                            <input type="text" placeholder="Search ...">
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="img-logo">
                        <img src="<?php echo $url_path ?>/images/logo.png" alt=""/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="logoright">
                        <ul class="checkout">
                            <li><a class="wish-check" href="#"><i class="fa fa-heart-o"></i>wishlist</a></li>
                            <li><a class="wish-check" href="#"><i class="fa fa-shopping-cart"></i>checklist</a></li>
                        </ul>
                        <div class="w_likes">
                            <span>3</span>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row row2">
                        <!--767-->
            <div class="navbar-header">
            <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle"/>

            <div class="collapse navbar-collapse myNavbar" id="myNavbar">
                <ul class="nav navbar-nav navbar-2">
                    <li><a class="navbar-default navbar-brand navbar-2" href="#">CATEGORY</a></li>
                </ul>
                    

                <ul class="nav navbar-nav">
                    <li><a class="navbar-1" href="#">HOME</a></li>
                    <li><a class="navbar-1" href="#">SHOP</a></li>
                    <li><a class="navbar-1" href="#">ACCESSORIES</a></li> 
                    <li><a class="navbar-1" href="#">PAGES</a></li>
                    <li><a class="navbar-1" href="#">BLOCK</a></li> 

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="navbar-3" href="#">  <img src="images/bag.png" alt=""/> Cart:2Item</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>