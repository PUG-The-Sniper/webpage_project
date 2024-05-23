<?php
// Retrieve data from the POST request
$cl1 = $_POST['cl1'];
$cl2 = $_POST['cl2'];
$cl3 = $_POST['cl3'];
$cl4 = $_POST['cl4'];
$clf = $_POST['clf'];
$clr = $_POST['clr'];

$fil1 = $_POST['fil1'];
$fil2 = $_POST['fil2'];
$fil3 = $_POST['fil3'];
$fil4 = $_POST['fil4'];
$filf = $_POST['filf'];
$filr = $_POST['filr'];

$eng1 = $_POST['eng1'];
$eng2 = $_POST['eng2'];
$eng3 = $_POST['eng3'];
$eng4 = $_POST['eng4'];
$engf = $_POST['engf'];
$engr = $_POST['engr'];

$math1 = $_POST['math1'];
$math2 = $_POST['math2'];
$math3 = $_POST['math3'];
$math4 = $_POST['math4'];
$mathf = $_POST['mathf'];
$mathr = $_POST['mathr'];

$sci1 = $_POST['sci1'];
$sci2 = $_POST['sci2'];
$sci3 = $_POST['sci3'];
$sci4 = $_POST['sci4'];
$scif = $_POST['scif'];
$scir = $_POST['scir'];

$ap1 = $_POST['ap1'];
$ap2 = $_POST['ap2'];
$ap3 = $_POST['ap3'];
$ap4 = $_POST['ap4'];
$apf = $_POST['apf'];
$apr = $_POST['apr'];

$tlecp1 = $_POST['tlecp1'];
$tlecp2 = $_POST['tlecp2'];
$tlecp3 = $_POST['tlecp3'];
$tlecp4 = $_POST['tlecp4'];
$tlecpf = $_POST['tlecpf'];
$tlecpr = $_POST['tlecpr'];

$mapeh1 = $_POST['mapeh1'];
$mapeh2 = $_POST['mapeh2'];
$mapeh3 = $_POST['mapeh3'];
$mapeh4 = $_POST['mapeh4'];
$mapehf = $_POST['mapehf'];
$mapehr = $_POST['mapehr'];

$mapehm1 = $_POST['mapehm1'];
$mapehm2 = $_POST['mapehm2'];
$mapehm3 = $_POST['mapehm3'];
$mapehm4 = $_POST['mapehm4'];

$mapeha1 = $_POST['mapeha1'];
$mapeha2 = $_POST['mapeha2'];
$mapeha3 = $_POST['mapeha3'];
$mapeha4 = $_POST['mapeha4'];

$mapehpe1 = $_POST['mapehpe1'];
$mapehpe2 = $_POST['mapehpe2'];
$mapehpe3 = $_POST['mapehpe3'];
$mapehpe4 = $_POST['mapehpe4'];

$mapehh1 = $_POST['mapehh1'];
$mapehh2 = $_POST['mapehh2'];
$mapehh3 = $_POST['mapehh3'];
$mapehh4 = $_POST['mapehh4'];

// Similarly, retrieve data for other subjects...

// Here you would typically perform some validation and sanitization of the input data
// For example, you might check if the input values are valid numbers, etc.

// Assuming a database connection is established, you can then proceed to save the grades
// For demonstration purposes, let's assume you're using MySQL/MariaDB

// Replace 'your_database_name', 'your_username', 'your_password' with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['id'])) {
    // Assign the value of 'id' to the $id variable
    $id = $_POST['id'];

// SQL to insert data into the grades table
$sql = "UPDATE users_grades SET 
grd_cl1 = '$cl1', grd_cl2 = '$cl2', grd_cl3 = '$cl3', grd_cl4 = '$cl4', grd_clfinals = '$clf', grd_clremarks = '$clr', 
grd_fil1 = '$fil1', grd_fil2 = '$fil2', grd_fil3 = '$fil3', grd_fil4 = '$fil4', grd_filfinals = '$filf', grd_filremarks = '$filr', 
grd_eng1 = '$eng1', grd_eng2 = '$eng2', grd_eng3 = '$eng3', grd_eng4 = '$eng4', grd_engfinals = '$engf', grd_engremarks = '$engr', 
grd_math1 = '$math1', grd_math2 = '$math2', grd_math3 = '$math3', grd_math4 = '$math4', grd_mathfinals = '$mathf', grd_mathremarks = '$mathr', 
grd_sci1 = '$sci1', grd_sci2 = '$sci2', grd_sci3 = '$sci3', grd_sci4 = '$sci4', grd_scifinals = '$scif', grd_sciremarks = '$scir', 
grd_ap1 = '$ap1', grd_ap2 = '$ap2', grd_ap3 = '$ap3', grd_ap4 = '$ap4', grd_apfinals = '$apf', grd_apremarks = '$apr', 
grd_tlecp1 = '$tlecp1', grd_tlecp2 = '$tlecp2', grd_tlecp3 = '$tlecp3', grd_tlecp4 = '$tlecp4', grd_tlecpfinals = '$tlecpf', grd_tlecpremarks = '$tlecpr', 
grd_mapeh1 = '$mapeh1', grd_mapeh2 = '$mapeh2', grd_mapeh3 = '$mapeh3', grd_mapeh4 = '$mapeh4', grd_mapehfinals = '$mapehf', grd_mapehremarks = '$mapehr', 
grd_mapehm1 = '$mapehm1', grd_mapehm2 = '$mapehm2', grd_mapehm3 = '$mapehm3', grd_mapehm4 = '$mapehm4', 
grd_mapeha1 = '$mapeha1', grd_mapeha2 = '$mapeha2', grd_mapeha3 = '$mapeha3', grd_mapeha4 = '$mapeha4', 
grd_mapehpe1 = '$mapehpe1', grd_mapehpe2 = '$mapehpe2', grd_mapehpe3 = '$mapehpe3', grd_mapehpe4 = '$mapehpe4', 
grd_mapehh1 = '$mapehh1', grd_mapehh2 = '$mapehh2', grd_mapehh3 = '$mapehh3', grd_mapehh4 = '$mapehh4' 
WHERE id = $id";
} else {
    // Handle the case where 'id' is not provided
    echo "ID is not provided";
}
// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Grades saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
