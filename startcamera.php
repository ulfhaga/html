<html>
<body>

Your ip <?php echo $_POST["ip"]; ?><br>
  <?php 

$command .=  "./camera.sh ";
$command .= $_POST["ip"];
echo "<pre>[INFO] $command</pre>";
$output = shell_exec($command);
      echo "<pre>$output</pre>";
      ?>


  <button onclick="myFunction()">Restart</button>

      <script>
        function myFunction() {
        location.reload();
      }
      </script>
      <?php echo date('Y-m-d H:i:s'); ?>  

</body>
</html> 
