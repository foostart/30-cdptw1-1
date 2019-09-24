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

        <div class="header-logo">
            <div class="container-fluid">
                <div class="logo">
                    <span id="s1">Trendy</span>
                    <span id="s2">Store</span>
                    <span id="s3">|</span>
                    <span id="s4">Shoes & Fasgion Online</span>
                </div>
                <div class="header-right">
                    <div class="r-first">
                        <a href="#">Login |</a>
                        <a href="#">Register |</a>
                        <a href="#">Wishlist |</a>
                        <a href="#">Compare |</a>
                        <a href="#">Contact </a>
                    </div>
                    <div class="r-sc">
                        <div class="ic-bar">
                            <i class="fa fa-bars"></i>
                        </div>
                        <select>
                            <option>English</option>
                            <option>Vietnamese</option>
                            <option>USA</option>
                        </select>
                        <div class="input">
                            <input type="text" placeholder="Search ...">
                            <i class="fa fa-search"></i>
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
                        <li class=""><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Online Store</a>
                            <div class="new">
                                <span>NEW</span>
                            </div>
                        </li>
                        <li><a href="#">Template</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Extensions</a></li>
                        <li><a href="#">Languages</a></li>
                        <li><a href="#">Styles</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="clear: both;"></div>
    </div>
</div>