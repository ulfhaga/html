<?php ini_set('memory_limit','1024M'); ?>

<?php

if (isset($_FILES['image']))
	{

/*
	$inipath = php_ini_loaded_file();
	
	if ($inipath)
		{
		echo 'Loaded php.ini: ' . $inipath . "<br />";
		}
	  else
		{
		echo 'A php.ini file is not loaded' . "<br />";
		}
	
*/

	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];

	$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
	$expensions_music = array(
		"mp3",
		"mp4",
                "m4a"
	);

	if (empty($file_tmp))
		{
		echo "Empty file_tmp";
		echo $_FILES["image"]['name'] . "<br />";
		echo $_FILES["image"]['tmp_name'] . "<br />";
		echo $_FILES["image"]['size'] . "<br />";
		echo $_FILES['image']['error'] . "<br />";
		}

	if (in_array($file_ext, $expensions_music) === false)
		{
		$errors = 'Extension not allowed, please choose a m4a, mp3 or mp4 file.';
		}

	if($file_size > 209715200){
	    $errors ='File size must be excately 200 MB';
	  }

	if (empty($errors) == true)
		{
		
		if (move_uploaded_file($file_tmp, "/mnt/PIHDD/music/" . "$file_name"))
			{
			echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded." . "<br />";
			}
		  else
			{
			echo "Sorry, there was an error uploading your file." . "<br />";
			print_r($errors);
			}
		}
	  else
		{
		print_r($errors);
		}
	}
	

?>
<html>
<head>
   <title>Ladda upp filer</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<h1>
Ladda upp musik
</h1>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input class="color green button"  type="file" name="image" id="image"/>
         <input class="color green button"  type="submit"/>
      </form>
      
    <form action="create_m3u.php" id="createPlaylistForm" method="get">  
   <button class="color green button" type="submit"  form="createPlaylistForm" >Create playlist</button> 
   
   
        
   </body>
</html>
