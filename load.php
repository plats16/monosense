<?php 
$conn = new mysqli("qn66usrj1lwdk1cc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","cc6n5y7f0z9ul5u4","lvns0umbcb5e4xhr","g05c6oo23imnkzld");

$sql = "SELECT * FROM images ORDER BY ID ASC"; 
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$data = '';

while ($row = $result->fetch_assoc()){
    $data .= '<div class="col-lg-4 bg-light">
                <figure class="figure">
                    <img src="'.$row['IMAGE_PATH'].'" class="figure-img img-fluid rounded img-hover" height="300" alt="A generic square placeholder image with rounded corners in a figure."> 
                    <figcaption class="figure-caption text-center">
                        <a href="'.$row['IMAGE_PATH'].'" class="text-center text-dark" download>Download</a>
                    </figcaption>
                </figure>
              </div>';
}

echo $data;

?>
