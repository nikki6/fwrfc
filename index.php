<?php
    //include("inc/contactForm.php");
    include("inc/header.php");
?>
    <!--  Banner  -->
    <div class="row banner">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="jumbotron">
<!--                <img src="img/FWRFCFabHeaderWhite.png" alt="FWRFC">-->
<!--
                <h1>
            Frederick Women's Rugby Football Club<br>
            <small>est. 2004</small>
        </h1>
-->

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row first">
            <div class="col-sm-6 col-md-6 col-lg-6 about">
                <h2>About The Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget quam sit amet nisi hendrerit blandit. Duis a pretium ante. Morbi blandit rutrum lorem sed finibus. Quisque auctor enim eu turpis vestibulum tincidunt. Donec at ligula venenatis, vestibulum urna id, vulputate nulla. Donec tincidunt convallis elit quis imperdiet. Nulla laoreet ligula ut enim ultricies, ut varius neque aliquam.</p>
                <p>Phasellus id sapien nec orci pretium gravida. Morbi pellentesque accumsan libero. Phasellus at malesuada leo, at porttitor nisi. Phasellus nunc dui, dapibus vel purus pellentesque, faucibus tristique dolor. Pellentesque gravida efficitur pretium. Mauris consectetur ipsum ut tellus commodo pretium. Etiam mattis eros dui, non vestibulum sem dictum aliquam.</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 roster">                
                <div class = "shape"></div>
                <a href="roster.php">Our Roster  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            </div>
        </div>
        <div class="row second">
            <div class="col-sm-6 col-md-6 col-lg-6 practice">
                <div class = "shape"></div>
                <h2>Practices</h2>
                <p>The Summer 7s Season has started up again! Practices are Tuesdays and Thursdays at 7:00 to 8:30 at Walnut Ridge.</p>
                <address>
                    <strong>Walnut Ridge</strong><br>
                    1166 Rocky Springs Rd<br> 
                    Frederick, MD 21702<br>
                    
                </address>
                
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 events">
                <h2>Upcoming Events</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>June 20</td>
                            <td>Keys Game</td>
                            <td>Enter Address Here</td>
                        </tr>
                        <tr>
                            <td>July 25</td>
                            <td>Pig Roast</td>
                            <td>The Farm</td>
                        </tr>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row third">
            <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 schedule">
                <h2>Our Schedule</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Location</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                        <tr>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                            <td>Event</td>
                        </tr>
                    </tbody>
                </table>
                <div class="map">
                    
                </div>
            </div>
        </div>
        <div class="row fourth">
            <div class="col-sm-12 col-md-12 col-lg-12 media">
                <a href="media.php" id="media-link">Media</a>
            </div>
        </div>
        <div class="row footer">
            <div class="col-sm-12 col-md-4 col-lg-4 social">
                <a href="http://www.facebook.com">Facebook</a>
                <a href="http://www.twitter.com"><img src="img/social_media/twitterSwirl.png" alt = "twitter"></a>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 important">
                <h3>Frederick Women's Rugby Football Club <small>est. 2004</small></h3>
                <p>We can't wait to meet you.</p>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 contact">
                <h3>Contact Us</h3>
                <form class="form-horizontal" role="form" method="post" action="index.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>