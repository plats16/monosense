<?php 
$conn = new mysqli("localhost","root","","upload"); 

$sql = "SELECT * FROM images ORDER BY id ASC"; 
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$data = '';

while ($row = $result->fetch_assoc()){
    $data .= '<div class="col-lg-4 bg-light">
                <figure class="figure">
                    <img src="'.$row['image_path'].'" class="figure-img img-fluid rounded img-hover" height="300" alt="A generic square placeholder image with rounded corners in a figure."> 
                    <figcaption class="figure-caption text-center">
                        <a href="'.$row['image_path'].'" class="text-center text-dark" download>Download</a>
                    </figcaption>
                </figure>
              </div>';
}

echo $data;

?>