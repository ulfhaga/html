<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

<?php $output = shell_exec('./create_playlist.sh /mnt/PIHDD/music');
      echo "<pre>$output</pre>";
?>   

 Playlist created.
 
 <button class="color green button"  onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
 
</body>
</html>
