<!DOCTYPE html>
<html>
<body>

<video width="720" autoplay loop>
<?php
    $vid = base_url('user_data/video/');
    switch($id){
        case "1": $vid.="vid01.mkv";break;
        case "2": $vid.="vid02.mkv";break;
        case "3": $vid.="vid03.mkv";break;
    }
?>
  <source src="<?=$vid;?>" type="video/mp4">
  <source src="<?=$vid;?>" type="video/ogg">
  Your browser does not support the video tag.
</video>

</body>
</html>
