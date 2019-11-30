<?php
    include("connect.php");
    echo ini_get("upload_max_filesize") . "<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $filetype=explode("/",$_FILES["filePic"]["type"]);
    $size=$_FILES["filePic"]["size"]/1024/1024;
    if(!in_array($filetype[1],$allowedType)){
        echo "Non-image file is not allowed.";
    }
    else if($size>1.00){
        echo "File size exceeds the maximum treshold";
    }

    else{
        $name = $_POST['txtName'];
        $desc = $_POST['txtDescription'];
        $price = $_POST['txtPrice'];
        $unitInstock = $_POST['txtStock'];
        $filename = $_FILES["filePic"]["name"];
   /* echo "Type: " .$_FILES["filePic"]["type"] . "<br>";
    echo "Name: " .$_FILES["filePic"]["name"] . "<br>";
    echo "Size: " .$_FILES["filePic"]["size"] . "<br>";
    echo "Temp name: " .$_FILES["filePic"]["tmp_name"] . "<br>";
    echo "Error: " .$_FILES["filePic"]["error"] . "<br>";*/
    
    move_uploaded_file($_FILES["filePic"]["tmp_name"],"pic-product/".$_FILES["filePic"]["name"]);

    $sqlInsert = "INSERT INTO product (name,description,price,unitInstock,picture) VALUE('$name','$desc',$price,$unitInstock,'$filename')";
    echo $sqlInsert;
}
?>