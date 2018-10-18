<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Frederick Women's Rugby Football Club</title>
    <!-- CSS Reset   -->
    <link href="../css/normalize.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--  Custom CSS  -->
<!--    <link href="css/main.css" rel="stylesheet">-->
    <link href="../css/main2.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
 <script>
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
       center: new google.maps.LatLng(39.413205,-77.4490153),
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.SATALITE
    }
    
   
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
     
     
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
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
                    <li><a href="#banner">Home</a>
                    </li>
                    <li><a href="#history">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">The Team <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" class="disabled">
                            <li class="disabled"><a href="roster.php">Our Roster</a>
                            </li>
                            <li><a href="#games">The Schedule</a>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled"><a href="media.php" >Media</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Teams <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="http://www.frederickrugby.org">FRFC</a>
                            </li>
                            <li><a href="http://www.frederickyouthrugby.org/">Youth</a>
                            </li>
                            <li><a href="http://www.wildgeeserugby.com/">Old Boys</a>
                            </li>
                            <li><a href="http://frederickrugby.org/">The Foundation</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

<h2>Roster Form</h2>
	<form name = "input" action = "roster_form.asp" method = "get">
		Name: <input type = "text" name ="name"><br>
		A.K.A: <input type = "text" name ="aka"><br>
		Position:  <input type = "text" name ="pos"><br>
		Experience:  <input type = "text" name ="exp"><br>
		Office:  <input type = "text" name ="off"><br>
		<input type = "submit" value = "Submit">
	</form>

	<center><div class="end">
            <div class="row" id="footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 social">
                    <a href="https://www.facebook.com/FWRFC"><img src="../img/social_media/Facebook-icon.png" alt="Facebook" ></a>
                    <a href="https://twitter.com/FrederickWRFC"><img src="../img/social_media/Twitter-icon.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="row" id="footer2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 important">
                    <h2>Frederick Women's Rugby Football Club <small>est. 2004</small></h2>
                </div>  
            </div>
        </div></center>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body></html>