 <html>
<body>
<script type="text/javascript">
  var userip;
</script>
<script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
Starta din dator med kommandot  nc -l 62000 | mplayer -fps 200 -demuxer h264es - 
<form  action="startcamera.php" method="post">
Ditt IP: <input type="text" id="ip" name="ip" ><br>
<input type="submit">
</form>

<script type="text/javascript">
  document.getElementById("ip").value = userip;
</script>

</body>
</html> 
