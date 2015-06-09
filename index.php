<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'dkn5678@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>
    <!-- CSS Reset   -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--  Custom CSS  -->
    <link href="css/main.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">FWRFC</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#about">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">The Team <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Our Roster</a>
                            </li>
                            <li><a href="#">The Schedule</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#about">Media</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!--  End of Navigation Bar  -->
    <!--  Banner  -->
    <div class="row banner">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="jumbotron">
                <h1>
            Frederick Women's Rugby Football Club<br>
            <small>est. 2004</small>
        </h1>

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
                <p>Cras commodo laoreet posuere. Etiam elementum nulla nec metus fermentum, eget convallis diam tristique. Curabitur iaculis rutrum justo. Morbi eu tellus suscipit, vulputate mi vitae, mollis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus augue nunc, tempor vitae massa et, finibus condimentum nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin laoreet urna eros, non feugiat diam bibendum vitae. Phasellus tristique ipsum sit amet erat tempus viverra. Curabitur pellentesque sapien et imperdiet posuere. In eros tellus, sollicitudin a tincidunt non, dignissim id est. Pellentesque lacinia lacus at elit gravida, non consectetur leo tempus. Ut quis imperdiet massa. Nulla pellentesque euismod posuere. Nam at ante et dolor consequat malesuada. Nullam et mi mauris.</p>
                <address>
                    
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
                <a href="http://www.twitter.com">Twitter</a>
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