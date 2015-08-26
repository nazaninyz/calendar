<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media='screen' />
 
    <link rel="stylesheet" href="demo/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="Script/calendar.js"></script>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Music Store</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Active Link</a></li>
          <li><a href="#">Ordinary Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4"><h3>Welcome</h3>
            <h1>SuperCal Examples</h1>
            <h2>Basic example</h2>
           <p>Simple calendar widget with default options</p>

            <div class="example1"></div>
      </div>

      <div class="col-xs-12 col-md-8"><h3>Second</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus magna vitae velit ullamcorper, vel pellentesque arcu malesuada. Curabitur eros magna, blandit finibus sagittis sed, tincidunt placerat nisl. Integer quis dolor dui. Curabitur tempus purus metus, non bibendum erat condimentum sed. Fusce eget tellus est.</div>
      
    </div>
  </div>
  <script src="Script/jquery-2.1.3.min.js"></script>
  <script src="Script/bootstrap.min.js"></script>
  <script src="demo/jquery-1.9.1.js"></script>
  <script src="jquery.supercal.js"></script>
  <script>
      $('.example1').supercal({
        transition: 'carousel-vertical'
      });
  </script>
</body>
</html>