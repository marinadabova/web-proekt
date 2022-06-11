<?php
include("../config.php");
?>
<DOCTYPE html>
    
<html>
    <head>
        <link rel="stylesheet" href="./style.css">
        <p id="txt"></p>
        <h1>The Three Billy Goats Gruff</h1>
      <video controls >
       <source type="video/mp4" src="../The Three Billy Goats Gruff _ Fairy Tales _ Gigglebox.mp4">
            <track src="../goats.vtt" kind="subtitles" srclang="en" label="English" default> 
      </video>
      
    </head>
    <body>
        <div>
    
        <?php

        /*$subtitles = Subtitles::load('goats.vtt');
        $blocks = $subtitles->getInternalFormat(); // array

        foreach ($blocks as $block) {
            echo $block['start'];
            echo $block['end'];
            foreach ($block['lines'] as $line) {
                echo $line;
            }
        } */
        /*$file = 'goats.vtt'; 
        $file_as_array = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($file_as_array as $f) {    

        // Find lines containing "-->"  
        $start_time = false;
        if (preg_match("/^(\d{2}:[\d\.]+) --> \d{2}:[\d\.]+$/", $f, $match)) {              
            $start_time = explode('-->', $f);
            $start_time = $start_time[0];
            echo '<br>';
            echo $start_time;
        }

        // It's a line of the file that doesn't include a timestamp, so it's caption text. Ignore header of file which includes the word 'WEBVTT'
        if (!$start_time && (!strpos($f, 'WEBVTT')) ) {             
            echo ' ' . $f . ' ';
        }   

    }       */
    

        $fetchVideos = mysqli_query($con, "SELECT * FROM db ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['location'];
        $name = $row['name'];
        echo 
        "<div class=\"vd\">
        <h1>".$name."</h1>
        <video src='../".$location."' controls width='320px' height='320px' >
            <track src=\"../goats.vtt\" kind=\"subtitles\" srclang=\"en\" label=\"English\" default> 
        </video>
            <br>
            <span>".$name."</span>
        </div>";
        }
        ?>

    </div>
        <div class="lyrics" style="display: none">
            0.125 | There were
            0.485 | 10 in his bed
            1.685 | and the little
            2.245 | one said
            2.985 | Roll over!
            5.405 | 
        </div>
        <p id="txt"></p>
        
    </body>
    <script src="./scrpt.js"></script>

</html>
