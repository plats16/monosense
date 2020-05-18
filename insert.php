<?php 
$conn = new mysqli("qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","cc6n5y7f0z9ul5u4","lvns0umbcb5e4xhr","g05c6oo23imnkzld"); 

foreach($_FILES['images']['name'] as $i => $value) {  

    $image_name = $_FILES['images']['tmp_name'][$i]; 
    $folder = "upload/";
    $image_path = $folder.$_FILES['images']['name'][$i]; 
    move_uploaded_file($image_name,$image_path); 

    $sql = "INSERT INTO images (IMAGE_PATH) VALUES (?)"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s",$image_path);  
    $stmt->execute();
} 

    echo "Image Upload Successfully!";


?>
