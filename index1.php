<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="mystyle.css"> 
      <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php echo "<h1>Hello to U's world!</h1>"; ?>      
      <img src="picture/a.jpg" alt="Home" style="width:1024px;height:auto;">

      <?php $output = shell_exec('./raspistill.sh');
      echo "<pre>$output</pre>";
      ?>

      <button onclick="myFunction()">Press to take a picture</button>

      <script>
        function myFunction() {
        location.reload();
      }
      </script>


      <?php echo date('Y-m-d H:i:s'); ?>    
   </body>

</html>






