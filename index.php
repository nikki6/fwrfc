<?php
    //include("inc/contactForm.php");
    include("inc/header.php");
?>
    <!--  Banner  -->
    <div class="row banner">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="img/titleBanners/fwrfcxplorwhite.png" alt="Frederick Women's Rugby Football Club">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row first">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about" id="history">
<!--                <img src="img/leftsideoflogo.png" alt="-----">-->
                <img src="img/FWRFC_Logo_Art.png" alt="FWRFC" id="logo">
<!--                <img src="img/leftsideoflogo.png" alt="-----">-->
                <h1>About The Team</h1>
                <p>
                    Thanks for checking out the Frederick Women&#39;s Rugby webpage.
                     The FWRFC was formed in Fall 2004 by a team of fun, enthusiastic women. 
                     We play almost year&#8211;round, with a competitive 15&#39;s season in the spring and fall, 
                     a competitive summer 7&#39;s season and some fitness training during the winter months. 
                     Plus we have social events, retreats and community projects throughout the year.
                </p>
                <p>
                    It&#39;s always a great time for new players to join us! 
                    All experience levels are welcome and no previous knowledge of the 
                    sport is necessary!
                </p>
            </div>
        </div>
         <div class="row second" id="sponser">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sponsers">
                <h1>Our Sponsers</h1>
                <img src="img/rect.png"><img src="img/rect.png"><img src="img/rect.png"><img src="img/rect.png"><img src="img/rect.png"><img src="img/rect.png">
             </div>
        </div>
        <div class="row second" id="pe">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 practice">
                <div class = "shape"></div>
                <h1>Practices</h1>
                <p>The Summer 7s Season has started up again! Practices are Tuesdays and Thursdays at 7:00 to 8:30 at Walnut Ridge.</p>
                <address>
                    <strong>Walnut Ridge</strong><br>
                    1166 Rocky Springs Rd<br> 
                    Frederick, MD 21702<br>
                    
                </address>
                
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 events">
                <h1>Upcoming Events</h1>
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
                            <td>June 27</td>
                            <td>Harrisburg 7s</td>
                            <td>Harrisburg, PA</td>
                        </tr>
                        <tr>
                            <td>July 13</td>
                            <td>Steel City 7s</td>
                            <td>Pittsburg, PA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row third" id="games">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 schedule">
                <h1>Our Schedule</h1>
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
        <div class="row fourth" id="mr">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 media">
                <a href="media.php" id="media-link"><img src="img/media2.png" alt="Media"></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 roster">                
<!--                <div class = "shape"></div>-->
                <a href="roster.php"><img src="img/ourRosterWhite.png" alt="Our Roster">  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            </div>
        </div>
        <div class="row" id="contactandpay">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 contact">
                <h1>Contact Us <small>The Vice President</small></h1>
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
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="pay">
                <h1>Pay for Dues, Donate to our Team and Buy All The <b>Swag!!!</b></h1>
            </div>
        </div>
         <div class="row" id="important">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  media" id="cipp">
                <h1>Everyone CIPPs</h1>
                <a class="pull-left" href="https://platform.allplayers.com/g/frederick_women_s_rugby_football_club-17320_2013/register?destination=https%3A%2F%2Fplatform.allplayers.com%2Fg%2Fusarugby_2013%2Fregister&from=110e430f-017c-11e3-9d8d-22000a929134"><img src="img/social_media/usarugby1.png" alt="Cipp Here" class="media-object img-responsive"></a>
                <div class="media-body">
                 <ol>
                    <li>Click on the icon to the left</li>
                    <li>Click "Myself"</li>
                    <li>Register as a "Senior Player"</li>
                </ol>
                <p>The cost to be registered is: &#36;60.00. This will give you a secondary insurance and will get you registered as a USA rugby player.</p>
                <p class = "important">&#42;You must have this to play.&#42;</p>
                <p>Forward information to the <a href="mailto:fwrfc.execsec@yahoo.com">Executive Secretary</a> after you have registered. Also if 
                    you need help you can contact the Executive Secretary and she will walk you through it.</p>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="docs">
                <h1>Google Docs and Things Like That</h1>
            </div>
        </div>
        <div class="row" id="feeds">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="fb">
                <h1>Facebook Feed</h1>
                <div class="fb-page" data-href="https://www.facebook.com/FWRFC" data-width="700px" data-height="Min. 400px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/FWRFC">
                            <a href="https://www.facebook.com/FWRFC">Frederick Womens Rugby Football Club</a>
                        </blockquote>
                    </div>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="tw">
                <h1>Twitter Feed</h1>
                    <a class="twitter-timeline" data-widget-id="600720083413962752" href="https://twitter.com/TwitterDev" data-tweet-limit="3">
                        Tweets by @FWRFC
                    </a>
            </div>
        </div>
        <div class="end">
            <div class="row" id="footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 social">
                    <a href="http://www.facebook.com"><img src="img/social_media/Facebook-icon.png" alt="Facebook"></a>
                    <a href="http://www.twitter.com"><img src="img/social_media/Twitter-icon.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="row" id="footer2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 important">
                    <h2>Frederick Women's Rugby Football Club <small>est. 2004</small></h2>
                </div>  
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>