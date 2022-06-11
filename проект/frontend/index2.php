<?php
include("../config.php");
?>
<DOCTYPE html>
    
<html>
    <head>
        <title> Video Anotation</title>
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

        $fetchVideos = mysqli_query($con, "SELECT * FROM db ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['location'];
        $name = $row['name'];
        $subs_name=$row['subs_name'];
        $subs_location=$row['subs_location'];
        echo 
        "<div class=\"vd\">
        <h1>".$name."</h1>
        <video  src='../".$location."' controls width='320px' height='320px' >
            <track src='../".$subs_name."' kind=\"subtitles\" srclang=\"en\" label=\"English\" default> 
        </video>
            <br>
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
