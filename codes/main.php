<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/bootstrap.css"  type="text/css"/>
           <script src="https://apis.google.com/js/api:client.js"></script>
           <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
           </script>


   </head>
<body>
   <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <?php echo "<p><h1>Hi </h1>".$_SESSION['name']."!</p>"; ?> 
<iframe src="https://www.google.com/calendar/embed?src=nazanin.yz94%40gmail.com&ctz=Europe/Belgrade" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

</body>
</html>