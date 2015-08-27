<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title></title>
  <meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
  <meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
  <meta name="author" content="Serhioromano">
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" media='screen' />
  <link rel="stylesheet" href="components/bootstrap2/css/bootstrap.css">
  <link rel="stylesheet" href="components/bootstrap2/css/bootstrap-responsive.css">
  <link rel="stylesheet" href="css/calendar.css">
  <link rel="stylesheet" href="css/datepicker.css">
  </head>
    <script src="Script/jquery-2.1.3.min.js"></script>
  <script src="Script/bootstrap.min.js"></script>
    <style type="text/css">
    .btn-twitter {
      padding-left: 30px;
      background: rgba(0, 0, 0, 0) url(https://platform.twitter.com/widgets/images/btn.27237bab4db188ca749164efd38861b0.png) -20px 6px no-repeat;
      background-position: -20px 11px !important;
    }
    .btn-twitter:hover {
      background-position:  -20px -18px !important;
    }
  </style>
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
  <div class="hero-unit">
  <div class="page-header">

    <div class="pull-right form-inline">
      <div class="btn-group">
        <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
        <button class="btn" data-calendar-nav="today">Today</button>
        <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
      </div>
      <div class="btn-group">
        <button class="btn btn-warning" data-calendar-view="year">Year</button>
        <button class="btn btn-warning active" data-calendar-view="month">Month</button>
        <button class="btn btn-warning" data-calendar-view="week">Week</button>
        <button class="btn btn-warning" data-calendar-view="day">Day</button>
      </div>
    </div>

 
         

    <h3></h3>
    <small>To see example with events navigate to march 2013</small>
  </div>
    <div class="row">
    <div class="span9">
      <div id="calendar"></div>
    </div>

<div class="well">
  <div id="datetimepicker4" class="input-append">
    <input data-format="yyyy-MM-dd" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>
    </div>
    </div>
  <script >
     var startApp = function()
   {
      $.ajax ({
        url: 'befabsence.php',
        success: function(result) { alert(result);  },
      })
   }
  </script>
  <script type="text/javascript" src="components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="components/underscore/underscore-min.js"></script>
  <script type="text/javascript" src="components/bootstrap2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript">
  $(function() {
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
    });
  });
</script>

</body>
</html>