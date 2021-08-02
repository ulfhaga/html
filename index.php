<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<h1>Hello world!</h1>
<body>
<?php
include ("counter.php");
?>	

  <?php
    $temprature = shell_exec('./rasptemp.sh');
    echo "<pre>Temprature:$temprature</pre>";
   ?>
</body>
</html>
