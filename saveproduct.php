<?php
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $filetype=explode("/",$_FILES["filePic"]["type"]);
    if(!in_array($filetype[1],$allowedType)){
        echo "Non-image file is not allowed.";
    }

    echo "Type: " .$_FILES["filePic"]["type"] . "<br>";
    echo "Name: " .$_FILES["filePic"]["name"] . "<br>";
    echo "Size: " .$_FILES["filePic"]["size"] . "<br>";
    echo "Temp name: " .$_FILES["filePic"]["tmp_name"] . "<br>";
    echo "Error: " .$_FILES["filePic"]["error"] . "<br>";
?>