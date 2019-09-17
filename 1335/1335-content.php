<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1335">
    <div class="page">
        <div class="container">
            <div class="col-md-8">
                <div class="text">
                    <img class="logo" src="images/logo.png" alt="">
                    <h1 class="content">HEATING & AIR CONDITIONING</h1>
                    <span class="content">SERVICE, REPAIR & INSTALLATION</span>
                    <div class="content">
                        <p id="content">
                            lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
                            sed do siusmod tempor incididunt ut labore et dolore <br>
                            magna aliqua enim ad minim veniam.
                        </p>
                    </div>
                    <h5 class="content">
                        Today Only Get 45% OFF!
                    </h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-8">
                <form class="form">
                    <h2 class="content">Having AC Heating Problem?</h2>
                    <h1 class="content">CONTACT US NOW</h1>
                    <p class="content">Stay Comfortable & Save Money All Year Long</p>
                    <input name="name" class="form-control field_text" id="name" title="Enter your Name" required="" placeholder="Name :" type="text">
                    <input class="form-control field_text" placeholder="Address :" name="address" id="address" title="Enter your address" type="text" required="">
                    <input class="form-control field_text" id="phone" name="phone" title="Enter your phone" placeholder="phone :" type="tel" required="">
                    <textarea class="form-control" id="Message" name="Message" title="Enter Message" placeholder="Your Problem"></textarea>
                    <button type="submit" value="submit" class="submit">Submit Information</button>
                </form>
            </div>
        </div>
    </div>

</div>
