<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" ng-app="Project">

<head>
    <!--
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    -->
    <title>GarageSales</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Angular JS -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>

    <!-- jQuery -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/npm.js"></script>
    <!-- <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    -->
    <script src="js/script.js"></script>

</head>

<body>
<!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div>
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#/about">About</a>
              </li>
              <li>
                <a href="#/contact">Contact Us</a>
              </li>
              <li>
                <a href="#/map">Map</a>
              </li>
            </ul>
            </li>
              <li>
                <a href="#/sale">Sale</a>
              </li>
              <li>
                <a href="#/cart">Cart</a>
              </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="content">
        <ng-view></ng-view>
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
<footer class="footer-distributed">
    <div class="footer-center">
      <p>Footer</p>
    </div>
</footer>



</body>

</html>
