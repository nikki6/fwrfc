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

    <title>FWRFC Admin Login</title>
    <!-- CSS Reset   -->
    <link href="scss/normalize.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="scss/bootstrap.min.css" rel="stylesheet">
    <!--  Custom CSS  -->
    <link href="scss/forms.css" rel="stylesheet"> 
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top ">
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
                     <li><a href="../index.php">Go to Webpage</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Forms <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Roster</a>
                            </li>
                            <li><a href="#">Schedule</a>
                            </li>
                            <li><a href="#">Events</a>
                            </li>
                            <li><a href="#">Practice Info</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!--  End of Navigation Bar  -->
<!--
    <div class = "container basic">
        <div class = "row loginForm">
              <div class = "col-xs-10 col-sm-10 col-md-4 col-lg-4 col-md-offest-4 col-lg-offset-4">
                <h1>Login to FWRFC Forms</h1>
                  <form action="test.php" method = "post">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" maxlength="50" placeholder="username" value= "<?=$varUsername;?>">
                        <br>
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" maxlength="50" placeholder="password" value= "<?=$varPassword;?>">
                        <br>
                        <button type="submit" class="btn btn-default" name = "formLogin" value = "Login">Login</button>
                      </div>
                    </form>
                </div>
            </div>
    </div>
-->
 
    <div class="container">
        <?php
            include("forms/rosterForm.php");
        ?>
    
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="scss/bootstrap.min.js"></script>
</body>

</html>