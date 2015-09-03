<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media='screen' />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">




</head>
<body style="background-image:url('11.jpg')">
<div class='container'>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="margin-buttum=100px;">
    <li data-target="#carousel-example-generic" data-slide-to="0" id='1' class="active"  ></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" id='2' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="3" id='3' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="4" id='4' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="5" id='5' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="6" id='6' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="7" id='7' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="8" id='8' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="9" id='9' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="10" id='10' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="11" id='11' class='menu'></li>
    <li data-target="#carousel-example-generic" data-slide-to="11" id='12' class='menu'></li>

    
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
      <img src="janu.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="febr.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="march.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="apri.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="mmay.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="jjune.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="jul.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="aug.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
  </div>
  <!-- Controls -->
</div> <!-- Carousel -->


     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>

</div>
   <script>startApp();</script>
   <script src="Script/jquery-2.1.3.min.js"></script>
   <script src="Script/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script type="text/javascript" src="components/jquery/jquery.min.js"></script>
   <script type="text/javascript" src="components/bootstrap2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script>
   	function startApp()
   	{
       $(document).ready(function() {
           $(".menu").click(function(event){
               var id = 'illness';
             //  $('#stage').load('.php',{'id':id});

    if(id != 0)
    {
      $.ajax({
        type:'post',
        url:'showAbsence.php',
        data:{id:id},
        cache:false,
        success: function(returndata){
          alert('haha');
        }
      });
    }


            });
         });

    }
            });
         });
   	}
   <script>
    $('.carousel').carousel({
        interval: 3000
    });





   </script>
</body>
</html>