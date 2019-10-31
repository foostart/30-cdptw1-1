<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1339">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                    <div class="img-logo">
                        <a href="#"> <img src="../1339/image/logo.png" alt=""></a>
                    </div>
                </div>

                <div class="col-md-6 ">
                        <div class="row">
                            <div class="r-first">
                                <a class="navbar-5" href="#">Contact </a>
                                <a class="navbar-5" href="#">Compare |</a>
                                <a class="navbar-5" href="#">Wishlist |</a>
                                <a class="navbar-5" href="#">Register |</a>
                                <a class="navbar-5" href="#">Login |</a>
                            </div>
                         </div>   
                        <div class="row ">
                            <select class="languages">
                                <option>English</option>
                                <option>Vietnamese</option>
                                <option>USA</option>
                            </select>
                        </div>
                        <div class="row ">
                             <div class="search">
                                <input type="text" placeholder="Search ...">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                
                    

                <ul class="nav navbar-nav">
                    <li><a class="navbar-1" href="#">Home</a></li>
                    <li><a class="navbar-1" href="#">Online Store</a></li>
                    <li><a class="navbar-1" href="#">Template</a></li> 
                    <li><a class="navbar-1" href="#">Pages</a></li>
                    <li><a class="navbar-1" href="#">Extensions</a></li> 
                    <li><a class="navbar-1" href="#">Languages</a></li> 
                    <li><a class="navbar-1" href="#">Styles</a></li> 

                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <li><a class="navbar-3" href="#"><i class="fa fa-heart-o"></i></a></li>
                        <li><a class="navbar-4" href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
            </div>

        </div>

    </div>
</div>