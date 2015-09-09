<html>
<head>
	  <link href="css/bootstrap.min.css" rel="stylesheet" media='screen' />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body style="background-image:url('11.jpg')">
<div class='container'>
<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">

  <ol class="carousel-indicators" style="margin-buttum=100px;">
    <li data-target="#carousel" data-slide-to="1" id='1' class="active"></li>
    <li data-target="#carousel" data-slide-to="2" id='2' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="3" id='3' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="4" id='4' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="5" id='5' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="6" id='6' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="7" id='7' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="8" id='8' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="9" id='9' class='menu'  ></li>
    <li data-target="#carousel" data-slide-to="10" id='10' class='menu'></li>
    <li data-target="#carousel" data-slide-to="11" id='11' class='menu'></li>
    <li data-target="#carousel" data-slide-to="12" id='12' class='menu'></li>
  </ol>
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
      <img src="sept.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x315" alt="...">
      <div class="carousel-caption">
         
      </div>
    </div>
    <div class="item">
      <img src="nov.jpg" alt="...">
      <div class="carousel-caption">
          
      </div>
    </div>
    <div class="item">
      <img src="12.png" alt="...">
      <div class="carousel-caption">  
      </div>
    </div>

  </div>

</div> 
<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>
<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<div class='conrainer'>
 <div class="row">
  <div class='col-md-2'>
  <button type="button" class="btn btn-default abs"  style='margin-top:20px;' id='illness'>illness</button></br>
  <button type="button" class="btn btn-default abs" style='margin-top:20px;' id='personal' >personal</button>
  <button type="button" class="btn btn-default abs" style='margin-top:20px;' id='vacation'>vacation</button>
  </div>
  <div class='col-md-10'>
  	  <select class="selectpicker" style='margin-top:85px; width:400px;' id='select'>
      </select>
  </div>
</div>

</div>
     <p id='info'></p>
</div>
   
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
  
       $(document).ready(function() {
          var slide;
           $(".abs").click(function(){
               var id = $(this).attr('id');
               for(var i=1 ; i<13 ; i++) {
                 if( $('div.active').index() + 1)
                 {
                   slide= $('div.active').index() + 1;;
                   break;
                 }
               }//alert(id);
               if(id != 0) {
                
              //  alert(slide);
                 $.ajax({
                   type: 'get',
                    url: 'showAbsence.php',
                   data: {id: id, slide: slide},
                  // contentType: 'application/json; charset=utf-8',
                   dataType: 'json',
                   async : false,
                   error: function(jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 500) {
                       alert('Internal error: ' + jqXHR.responseText);
                   } else {
                       alert('Unexpected error.');
                     }
                   },
                   success: function(data){
                   // alert('hh');
                    //alert(data);
                        $('#select').empty();
                        $('#select').append("<option value='0'>--date--</option>");
                 //       $('#select').append('<option'+data[0].date+'></option>');
                         
                        $.each(data,function(i,item) { 
                       $('#select').append('<option>'+data[i].date+'</option>');
                       })
                     
                }

            })
             }   
         }); 

     })

    </script>     
   <script>
    $('.carousel').carousel({
        interval: false
    });

   </script>
</body>
</html>