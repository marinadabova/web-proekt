<?php
include("../config.php");
?>
<DOCTYPE html>
    
<html>
    <head>
        <title> Video Annotation</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div>
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM db ORDER BY id ASC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['location'];
        $name = $row['name'];
        $id=$row['id'];
        $subs_name=$row['subs_name'];
        $subs_location=$row['subs_location'];
        echo 
        "<div class=\"vd\">
            <h1>".$name."</h1>
            <video  src='../".$location."' controls >
                <track src='../subtitles/".$subs_name."' kind=\"subtitles\" srclang=\"en\" label=\"English\" default> 
            </video>
            <br>
            <a href=\"upload_subs.php?id=".$id."\" class=\"href-btn\">
                Upload subtitles
            </a>
            <br>
        </div>";
        }
        ?>
    </body>
    <script src="./scrpt.js"></script>

</html>
