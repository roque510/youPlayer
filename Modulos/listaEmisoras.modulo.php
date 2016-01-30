<?php
require_once("config.php");

$conn = new mysqli($SVR,$USR,$PW,$DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM emisoras";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 

	echo '<div class="audioBox large-4">
  <img class="imgBoxB" src="'.$row["Foto"].'"></img>
  <div class="darkBox"></div>
  <img class="imgBox " src="'.$row["Foto"].'">
  <h3 class="tituloBox ">Emisoras</h3>
  <h5 class="subtituloBox ">'.$row["Nombre"].'</h5>
  <a class="btnP" onClick="return false;" data-Nombre="'.$row["Nombre"].'" style="color:black !important;" href="'.$row["Url"].'"><i class="fi-play-circle" ></i></a>
</div>';  
        




    }
} else {
    echo "0 results";
}
$conn->close();


?>


