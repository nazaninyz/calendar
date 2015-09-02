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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" media='screen' />
  <link rel="stylesheet" href="css/datepicker.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  
  </head>
    <script src="Script/jquery-2.1.3.min.js"></script>
  <script src="Script/bootstrap.min.js"></script>
</head>
<body style='background-image:url("1.png");'>
   
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
        <a class="navbar-brand" href="#">3FS.SI</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Profile</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Absence <b class="caret" id='showEvent'></b></a>
                <ul class="dropdown-menu">
                    <li ><a href="#" id='ill'>illness</a></li>
                    <li ><a href="#" id='vacation'>vacation</a></li>
                    <li ><a href="#" id='personal'>personal</a></li>
               </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



    <!-- Header -->
    <a name="about"></a>
    <?php echo  "heeeeey<p>". $_SESSION['userid']."</p>"; ?>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>calendar</h1>
                        <hr class="intro-divider">
                        <ul class="list-inline ">
                            <li>
                               <select class="selectpicker" id='event' style='width:150px; height:35px;'>
                                   <option>illness</option>
                                   <option>vacation</option>
                                   <option>personal</option>
                               </select>
                            </li>
                            <li>
                               <input type="text" id="datepicker" style='color:black;' value='Date...'>
                                
                            </li>
                            <li>
                               <button type="button" id ='submit'class="btn btn-default"> submit </button><p id='stage' style='color:black;'></p>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

  <a  name="services"></a>



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
      $(document).ready(function() {
           $("#ill").mouseover(function(event){
               var id = 'illness';
               $('#stage').load('showAbsence.php',{'id':id});

            });
         });
      $(document).ready(function() {
           $("#vacation").mouseover(function(event){
               var id = 'vacation';
               $('#stage').load('showAbsence.php',{'id':id});

            });
         });
      $(document).ready(function() {
           $("#personal").mouseover(function(event){
               var id = 'personal';
               $('#stage').load('showAbsence.php',{'id':id});

            });
         });
  </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
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