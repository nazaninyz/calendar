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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
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
      Event:</br>
      <select class="selectpicker" id='event' >
      <option>illness</option>
      <option>vacation</option>
      <option>personal</option>
  </select></br>
       Date:</br>
      <input type="text" id="datepicker"></br>
      <button type="button" id ='submit'class="btn btn-default">submit</button><p id='stage'></p>
    </div>

    </div>
    </div>

<div id="fullCalModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                <h4 id="modalTitle" class="modal-title"></h4>
            </div>
            <div id="modalBody" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-primary"><a id="eventUrl" target="_blank">Event Page</a></button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() { 
    $('#bootstrapModalFullCalendar').fullCalendar({
        events: '/hackyjson/cal/',
        header: {
            left: '',
            center: 'prev title next',
            right: ''
        },
        eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalBody').html(event.description);
            $('#eventUrl').attr('href',event.url);
            $('#fullCalModal').modal();
        }
    });
});
</script>

  <script >
     var startApp = function()
   {
      $.ajax ({
        url: 'befabsence.php',
        success: function(result) { alert(result);  },
      })
   }
      $(document).ready(function() {
            $("#submit").click(function(event){
               var date = $("#datepicker").val();
               var absence = $("#event").val();
               $('#stage').load('befabsence.php', {'date':date,'absence':absence});

            });
         });


  </script>
  <script type="text/javascript" src="components/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="components/underscore/underscore-min.js"></script>
  <script type="text/javascript" src="components/bootstrap2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/calendar.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.min.js"></script> 
  <script type="text/javascript">
    $('#datepicker').datepicker('show');
  </script>

</body>
</html>