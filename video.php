<?php
if ($handle = opendir('/mnt/PIHDD/video')) {
    while (false !== ($file = readdir($handle)))
    {
      /*  if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
        */
      /* if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>'  . '</LI>';
        }
       */
       
       if (($file != ".") 
         && ($file != "..")
           && ($file != "index.html"))
        {
           // $thelist .= '<video width="320" height="240" controls> <source src="'/mnt/PIHDD/video' . '.$file.' . " . 'type="video/mp4"'>';
             $thelist .= '<video width="320" height="240" controls>
  <source src="' . 'video/' .$file.'" type="video/mp4">
Your browser does not support the video tag.
</video>';
           
        }
    }

    closedir($handle);
}
?>

<P>List of video files:</p>
<UL>
<P><?=$thelist?></p>
</UL>