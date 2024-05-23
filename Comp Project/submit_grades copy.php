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

// SQL to insert data into the grades table
$sql = "INSERT INTO users_grades 
(grd_cl1, grd_cl2, grd_cl3, grd_cl4, grd_clfinals, grd_clremarks, 
grd_fil1, grd_fil2, grd_fil3, grd_fil4, grd_filfinals, grd_filremarks, 
grd_eng1, grd_eng2, grd_eng3, grd_eng4, grd_engfinals, grd_engremarks, 
grd_math1, grd_math2, grd_math3, grd_math4, grd_mathfinals, grd_mathremarks, 
grd_sci1, grd_sci2, grd_sci3, grd_sci4, grd_scifinals, grd_sciremarks, 
grd_ap1, grd_ap2, grd_ap3, grd_ap4, grd_apfinals, grd_apremarks, 
grd_tlecp1, grd_tlecp2, grd_tlecp3, grd_tlecp4, grd_tlecpfinals, grd_tlecpremarks, 
grd_mapeh1, grd_mapeh2, grd_mapeh3, grd_mapeh4, grd_mapehfinals, grd_mapehremarks, 
grd_mapehm1, grd_mapehm2, grd_mapehm3, grd_mapehm4, 
grd_mapeha1, grd_mapeha2, grd_mapeha3, grd_mapeha4, 
grd_mapehpe1, grd_mapehpe2, grd_mapehpe3, grd_mapehpe4, 
grd_mapehh1, grd_mapehh2, grd_mapehh3, grd_mapehh4) 
VALUES 
('$cl1', '$cl2', '$cl3', '$cl4', '$clf', '$clr', 
'$fil1', '$fil2', '$fil3', '$fil4', '$filf', '$filr', 
'$eng1', '$eng2', '$eng3', '$eng4', '$engf', '$engr', 
'$math1', '$math2', '$math3', '$math4', '$mathf', '$mathr', 
'$sci1', '$sci2', '$sci3', '$sci4', '$scif', '$scir', 
'$ap1', '$ap2', '$ap3', '$ap4', '$apf', '$apr', 
'$tlecp1', '$tlecp2', '$tlecp3', '$tlecp4', '$tlecpf', '$tlecpr', 
'$mapeh1', '$mapeh2', '$mapeh3', '$mapeh4', '$mapehf', '$mapehr', 
'$mapehm1', '$mapehm2', '$mapehm3', '$mapehm4', 
'$mapeha1', '$mapeha2', '$mapeha3', '$mapeha4', 
'$mapehpe1', '$mapehpe2', '$mapehpe3', '$mapehpe4', 
'$mapehh1', '$mapehh2', '$mapehh3', '$mapehh4')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Grades saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
