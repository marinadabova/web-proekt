<?php
include("../config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 26214400; // 25MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "../videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 25MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO db(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: ./upload_video.php');
   exit;
} 
?>
<DOCTYPE html>
    
<html>
    <head>
        <link rel="stylesheet" href="./style.css">

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
        echo "<div style='float: left; margin-right: 5px;'>
            <video src='../".$location."' controls width='320px' height='320px' >
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
