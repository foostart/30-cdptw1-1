<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1339">
    <div class="container">
        <div class="header-logo">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="#"> <img src="../1339/image/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="r-first">
                        <a class="navbar-1" href="#">Login |</a>
                        <a class="navbar-1" href="#">Register |</a>
                        <a class="navbar-1" href="#">Wishlist |</a>
                        <a class="navbar-1" href="#">Compare |</a>
                        <a class="navbar-1" href="#">Contact </a>
                    </div>
                    </div>
                    <div class="row">
                        <div class="r-sc">
                        <div class="ic-bar">
                            <a href="#"><i class="fa fa-bars"></i></a>
                        </div>
                        <select class="languages">
                            <option>English</option>
                            <option>Vietnamese</option>
                            <option>USA</option>
                        </select>
                        <div class="input">
                            <input type="text" placeholder="Search ...">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class=""><a class="navbar-2" href="#">Home</a></li>
                        
                        <li class="dropdown">
                            <a class="navbar-2" data-toggle="dropdown" href="#">Online Store</a>
                            <div class="new">
                                <span>NEW</span>
                            </div>
                        </li>
                        <li><a class="navbar-2" href="#">Template</a></li>
                        <li><a class="navbar-2" href="#">Pages</a></li>
                        <li><a class="navbar-2" href="#">Extensions</a></li>
                        <li><a class="navbar-2" href="#">Languages</a></li>
                        <li><a class="navbar-2" href="#">Styles</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="navbar-2" href="#"><i class="fa fa-heart-o"></i></a></li>
                        <li><a class="navbar-2" href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="clear: both;"></div>

    </div>
</div>