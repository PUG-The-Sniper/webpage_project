<?php 
session_start();

include 'db3_conn.php';
include 'user_data.php';


// Check if the user is logged in and is a student
if (!(isset($_SESSION['id']) && isset($_SESSION['user_name']))) {
    // Redirect to login page or display an error message
    exit(); // Ensure script execution stops here
}

$user_id = $_SESSION['id']; // Assuming you have a user ID stored in the session
    $sql = "SELECT * FROM users_grades WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Assign grades to variables
        $grd_cl1 = $row["grd_cl1"];
        $grd_cl2 = $row["grd_cl2"];
        $grd_cl3 = $row["grd_cl3"];
        $grd_cl4 = $row["grd_cl4"];
        $grd_fil1 = $row["grd_fil1"];
        $grd_fil2 = $row["grd_fil2"];	
        $grd_fil3 = $row["grd_fil3"];	
        $grd_fil4 = $row["grd_fil4"];	
        $grd_eng1 = $row["grd_eng1"];	
        $grd_eng2 = $row["grd_eng2"];	
        $grd_eng3 = $row["grd_eng3"];	
        $grd_eng4 = $row["grd_eng4"];	
        $grd_math1 = $row["grd_math1"];
        $grd_math2 = $row["grd_math2"];	
        $grd_math3 = $row["grd_math3"];	
        $grd_math4 = $row["grd_math4"];	
        $grd_sci1 = $row["grd_sci1"];	
        $grd_sci2 = $row["grd_sci2"];	
        $grd_sci3 = $row["grd_sci3"];	
        $grd_sci4 = $row["grd_sci4"];	
        $grd_ap1 = $row["grd_ap1"];	
        $grd_ap2 = $row["grd_ap2"];		
        $grd_ap3 = $row["grd_ap3"];		
        $grd_ap4 = $row["grd_ap4"];		
        $grd_tlecp1 = $row["grd_tlecp1"];		
        $grd_tlecp2 = $row["grd_tlecp2"];	
        $grd_tlecp3 = $row["grd_tlecp3"];	
        $grd_tlecp4 = $row["grd_tlecp4"];	
        $grd_mapehm1 = $row["grd_mapehm1"];	
        $grd_mapehm2 = $row["grd_mapehm2"];		
        $grd_mapehm3 = $row["grd_mapehm3"];		
        $grd_mapehm4 = $row["grd_mapehm4"];		
        $grd_mapeha1 = $row["grd_mapeha1"];	
        $grd_mapeha2 = $row["grd_mapeha2"];		
        $grd_mapeha3 = $row["grd_mapeha3"];		
        $grd_mapeha4 = $row["grd_mapeha4"];		
        $grd_mapehpe1 = $row["grd_mapehpe1"];	
        $grd_mapehpe2 = $row["grd_mapehpe2"];		
        $grd_mapehpe3 = $row["grd_mapehpe3"];		
        $grd_mapehpe4 = $row["grd_mapehpe4"];		
        $grd_mapehh1 = $row["grd_mapehh1"];		
        $grd_mapehh2 = $row["grd_mapehh2"];		
        $grd_mapehh3 = $row["grd_mapehh3"];		
        $grd_mapehh4 = $row["grd_mapehh4"];
        $grd_clfinals = $row["grd_clfinals"];	
        $grd_filfinals = $row["grd_filfinals"];		
        $grd_engfinals = $row["grd_engfinals"];		
        $grd_mathfinals = $row["grd_mathfinals"];		
        $grd_scifinals = $row["grd_scifinals"];	
        $grd_apfinals = $row["grd_apfinals"];		
        $grd_tlecpfinals = $row["grd_tlecpfinals"];		
        $grd_mapehfinals = $row["grd_mapehfinals"];		
        $grd_clremarks = $row["grd_clremarks"];	
        $grd_filremarks = $row["grd_filremarks"];		
        $grd_engremarks = $row["grd_engremarks"];		
        $grd_mathremarks = $row["grd_mathremarks"];		
        $grd_sciremarks = $row["grd_sciremarks"];		
        $grd_apremarks = $row["grd_apremarks"];		
        $grd_tlecpremarks = $row["grd_tlecpremarks"];		
        $grd_mapehremarks = $row["grd_mapehremarks"];

        $grd_mapeh1 = ($grd_mapehm1 + $grd_mapeha1 + $grd_mapehpe1 + $grd_mapehh1) / 4;
        $grd_mapeh2 = ($grd_mapehm2 + $grd_mapeha2 + $grd_mapehpe2 + $grd_mapehh2) / 4;
        $grd_mapeh3 = ($grd_mapehm3 + $grd_mapeha3 + $grd_mapehpe3 + $grd_mapehh3) / 4;
        $grd_mapeh4 = ($grd_mapehm4 + $grd_mapeha4 + $grd_mapehpe4 + $grd_mapehh4) / 4;
    } else {
        echo "User not found or no grades available.";
    }

// Rest of the student-specific code goes here
// ...
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ecss.edu.ph</title>
    <link rel="icon" type="image/x-icon" href="./img/ecss_logo.png">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    overflow-x: hidden;
    background-image: url("none");
}
html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow-x: hidden;
    background-color: #ffffff;
  }
  
  .container {
    display: flex;
    height: 100vh;
    transition: margin 0.3s ease-in-out;
  }

.sidebar {
    height: 100%;
    width: max-content;
    position: fixed;
    top: 0;
    background-color: #610303;
    padding: 20px;
    box-shadow: 0 4px 8px #610303;
    transition: transform 0.3s ease-in-out;
    transform: translateX(-200px);
}

.sidebar a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    color: #DDDDDD;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.content {
    margin-left: 250px;
    padding: 20px;
    transition: margin 0.3s ease-in-out;
    flex-grow: 1;
    box-sizing: border-box;
    margin-left: 0;
}
/* Button styles */
        .myButton {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #610303;
            color: #333333;
            background-color: #555555;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Hover effect */
        .myButton:hover {
            background-color: #777777;
            color: #ffffff;
        }
        table {
            border-collapse: collapse;
            width: max-content;
            right: -35vh;
            position: relative;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .table_bg {
            background-color: #610303;
            color: #fff;
        }
        .subject-name{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .container_shadow {
    width: max-content;
    height: max-content;
    border: 1px solid #ccc; /* Thin outline */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Shadow */
    border-spacing: 2px;
    line-height: 3px;
  }
   input{
   width: 30px;
   }
</style>
<body>
<div class="container">
    <div class="sidebar" id="sidebar">
        <img src="img/ecss_logo.png" style="width: 180px;">
    <a href="user_page.php" class="myButton">Home</a>
    <br>
    <a href="enrollment_new_student.html" class="myButton">Enrollment</a>
    <a href="student_grade.php" class="myButton">Grades</a>
    <a href="#contact" class="myButton">Student Council</a>
    <a href="student_survey.php" class="myButton">School Survey</a>
    <a href="student_schedule.php" class="myButton">Schedule</a>
    <br>
    <a href="logout.php" class="myButton">Log Out</a>
</div>
    <!-- Main Content -->
    <div class="content" id="content">
        <center>
        <br>
        <div class="container_shadow">
        <label for="grade_level">Grade Level:</label>
<select id="grade_level" name="grade_level">
<option value="">Select Grade Level</option>
            <option value="nursery">Nursery</option>
            <option value="kinder">Kinder</option>
            <option value="prep">Prep</option>
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
</select>

<label for="student_id">Student ID:</label>
<select id="student_id" name="student_id">
</select>


</div>
        </center>
    <br> <!-- Add a line break here -->
    <table>
        <tr>
                    <th class="table_bg">Subject Name</th>
                    <th class="table_bg" colspan="4">Quarter</th>
                    <th class="table_bg">Final</th>
                    <th class="table_bg">Remarks</th>
        </tr>
        <tr>
            <td>Christian Living (CL)/ VE</td>
            <td><input type="number" id="cl1" value="<?php echo $grd_cl1; ?>"></td>
            <td><input type="number" id="cl2" value="<?php echo $grd_cl2; ?>"></td>
            <td><input type="number" id="cl3" value="<?php echo $grd_cl3; ?>"></td>
            <td><input type="number" id="cl4" value="<?php echo $grd_cl4; ?>"></td>
            <td><input type="text" id="clf" value="<?php echo $grd_clfinals; ?>"></td>
            <td><input type="text" id="clr" value="<?php echo $grd_clremarks; ?>"></td>
        </tr>
        <tr>
            <td>Filipino</td>
            <td><input type="number" id="fil1" value="<?php echo $grd_fil1; ?>"></td>
            <td><input type="number" id="fil2" value="<?php echo $grd_fil2; ?>"></td>
            <td><input type="number" id="fil3" value="<?php echo $grd_fil3; ?>"></td>
            <td><input type="number" id="fil4" value="<?php echo $grd_fil4; ?>"></td>
            <td><input type="text" id="filf" value="<?php echo $grd_filfinals;?>"></td>
            <td><input type="text" id="filr" value="<?php echo $grd_filremarks;?>"></td>
        </tr>
        <tr>
            <td>English</td>
            <td><input type="number" id="eng1" value="<?php echo $grd_eng1; ?>"></td>
            <td><input type="number" id="eng2" value="<?php echo $grd_eng2; ?>"></td>
            <td><input type="number" id="eng3" value="<?php echo $grd_eng3; ?>"></td>
            <td><input type="number" id="eng4" value="<?php echo $grd_eng4; ?>"></td>
            <td><input type="text" id="engf" value="<?php echo $grd_engfinals;?>"></td>
            <td><input type="text" id="engr" value="<?php echo $grd_engremarks;?>"></td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td><input type="number" id="math1" value="<?php echo $grd_math1; ?>"></td>
            <td><input type="number" id="math2" value="<?php echo $grd_math2; ?>"></td>
            <td><input type="number" id="math3" value="<?php echo $grd_math3; ?>"></td>
            <td><input type="number" id="math4" value="<?php echo $grd_math4; ?>"></td>
            <td><input type="text" id="mathf" value="<?php echo $grd_mathfinals;?>"></td>
            <td><input type="text" id="mathr" value="<?php echo $grd_mathremarks;?>"></td>
        </tr>
        </tr>
        <tr>
            <td>Science</td>
            <td><input type="number" id="sci1" value="<?php echo $grd_sci1; ?>"></td>
            <td><input type="number" id="sci2" value="<?php echo $grd_sci2; ?>"></td>
            <td><input type="number" id="sci3" value="<?php echo $grd_sci3; ?>"></td>
            <td><input type="number" id="sci4" value="<?php echo $grd_sci4; ?>"></td>
            <td><input type="text" id="scif" value="<?php echo $grd_scifinals;?>"></td>
            <td><input type="text" id="scir" value="<?php echo $grd_sciremarks;?>"></td>
        </tr>
        </tr>
        <tr>
            <td>Araling Panlipunan (AP)</td>
            <td><input type="number" id="ap1" value="<?php echo $grd_ap1; ?>"></td>
            <td><input type="number" id="ap2" value="<?php echo $grd_ap2; ?>"></td>
            <td><input type="number" id="ap3" value="<?php echo $grd_ap3; ?>"></td>
            <td><input type="number" id="ap4" value="<?php echo $grd_ap4; ?>"></td>
            <td><input type="text" id="apf" value="<?php echo $grd_apfinals;?>"></td>
            <td><input type="text" id="apr" value="<?php echo $grd_apremarks;?>"></td>
        </tr>
        </tr>
        <tr>
            <td>Technology And Livelihood Education/Computer</td>
            <td><input type="number" id="tlecp1" value="<?php echo $grd_tlecp1; ?>"></td>
            <td><input type="number" id="tlecp2" value="<?php echo $grd_tlecp2; ?>"></td>
            <td><input type="number" id="tlecp3" value="<?php echo $grd_tlecp3; ?>"></td>
            <td><input type="number" id="tlecp4" value="<?php echo $grd_tlecp4; ?>"></td>
            <td><input type="text" id="tlecpf" value="<?php echo $grd_tlecpfinals;?>"></td>
            <td><input type="text" id="tlecpr" value="<?php echo $grd_tlecpremarks;?>"></td>
        </tr>
        </tr>
        <tr>
            <td>MAPEH</td>
            <td><input type="number" id="mapeh1" value="<?php echo $grd_mapeh1; ?>"></td>
            <td><input type="number" id="mapeh2" value="<?php echo $grd_mapeh2; ?>"></td>
            <td><input type="number" id="mapeh3" value="<?php echo $grd_mapeh3; ?>"></td>
            <td><input type="number" id="mapeh4" value="<?php echo $grd_mapeh4; ?>"></td>
            <td><input type="text" id="mapehf" value="<?php echo $grd_mapehfinals;?>"></td>
            <td><input type="text" id="mapehr" value="<?php echo $grd_mapehremarks;?>"></td>
        </tr>
        </tr>
        <tr>
            <td>MAPEH - Music</td>
            <td><input type="number" id="mapehm1" value="<?php echo $grd_mapehm1; ?>"></td>
            <td><input type="number" id="mapehm2" value="<?php echo $grd_mapehm2; ?>"></td>
            <td><input type="number" id="mapehm3" value="<?php echo $grd_mapehm3; ?>"></td>
            <td><input type="number" id="mapehm4" value="<?php echo $grd_mapehm4; ?>"></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Arts</td>
            <td><input type="number" id="mapeha1" value="<?php echo $grd_mapeha1; ?>"></td>
            <td><input type="number" id="mapeha2" value="<?php echo $grd_mapeha2; ?>"></td>
            <td><input type="number" id="mapeha3" value="<?php echo $grd_mapeha3; ?>"></td>
            <td><input type="number" id="mapeha4" value="<?php echo $grd_mapeha4; ?>"></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Physical Education</td>
            <td><input type="number" id="mapehpe1" value="<?php echo $grd_mapehpe1; ?>"></td>
            <td><input type="number" id="mapehpe2" value="<?php echo $grd_mapehpe2; ?>"></td>
            <td><input type="number" id="mapehpe3" value="<?php echo $grd_mapehpe3; ?>"></td>
            <td><input type="number" id="mapehpe4" value="<?php echo $grd_mapehpe4; ?>"></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Health</td>
            <td><input type="number" id="mapehh1" value="<?php echo $grd_mapehh1; ?>"></td>
            <td><input type="number" id="mapehh2" value="<?php echo $grd_mapehh2; ?>"></td>
            <td><input type="number" id="mapehh3" value="<?php echo $grd_mapehh3; ?>"></td>
            <td><input type="number" id="mapehh4" value="<?php echo $grd_mapehh4; ?>"></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
    </table>
<button onclick="editGrades()" class="myButton" style="color: #fff; position:absolute;right: 400px;top:600px;">Edit Grades</button>
</div>
    <script src="script.js"></script>
    <script>
    function editGrades() {
        // Get the selected grade level and student ID
        var gradeLevel = document.getElementById("grade_level").value;
        var studentId = document.getElementById("student_id").value;
        
        // Get grades from input fields
        var cl1 = document.getElementById("cl1").value;
    var cl2 = document.getElementById("cl2").value;
    var cl3 = document.getElementById("cl3").value;
    var cl4 = document.getElementById("cl4").value;
    var clf = document.getElementById("clf").value;
    var clr = document.getElementById("clr").value;

    var fil1 = document.getElementById("fil1").value;
    var fil2 = document.getElementById("fil2").value;
    var fil3 = document.getElementById("fil3").value;
    var fil4 = document.getElementById("fil4").value;
    var filf = document.getElementById("filf").value;
    var filr = document.getElementById("filr").value;

    var eng1 = document.getElementById("eng1").value;
    var eng2 = document.getElementById("eng2").value;
    var eng3 = document.getElementById("eng3").value;
    var eng4 = document.getElementById("eng4").value;
    var engf = document.getElementById("engf").value;
    var engr = document.getElementById("engr").value;

    var math1 = document.getElementById("math1").value;
    var math2 = document.getElementById("math2").value;
    var math3 = document.getElementById("math3").value;
    var math4 = document.getElementById("math4").value;
    var mathf = document.getElementById("mathf").value;
    var mathr = document.getElementById("mathr").value;

    var sci1 = document.getElementById("sci1").value;
    var sci2 = document.getElementById("sci2").value;
    var sci3 = document.getElementById("sci3").value;
    var sci4 = document.getElementById("sci4").value;
    var scif = document.getElementById("scif").value;
    var scir = document.getElementById("scir").value;

    var ap1 = document.getElementById("ap1").value;
    var ap2 = document.getElementById("ap2").value;
    var ap3 = document.getElementById("ap3").value;
    var ap4 = document.getElementById("ap4").value;
    var apf = document.getElementById("apf").value;
    var apr = document.getElementById("apr").value;

    var tlecp1 = document.getElementById("tlecp1").value;
    var tlecp2 = document.getElementById("tlecp2").value;
    var tlecp3 = document.getElementById("tlecp3").value;
    var tlecp4 = document.getElementById("tlecp4").value;
    var tlecpf = document.getElementById("tlecpf").value;
    var tlecpr = document.getElementById("tlecpr").value;

    var mapeh1 = document.getElementById("mapeh1").value;
    var mapeh2 = document.getElementById("mapeh2").value;
    var mapeh3 = document.getElementById("mapeh3").value;
    var mapeh4 = document.getElementById("mapeh4").value;
    var mapehf = document.getElementById("mapehf").value;
    var mapehr = document.getElementById("mapehr").value;

    var mapehm1 = document.getElementById("mapehm1").value;
    var mapehm2 = document.getElementById("mapehm2").value;
    var mapehm3 = document.getElementById("mapehm3").value;
    var mapehm4 = document.getElementById("mapehm4").value;

    var mapeha1 = document.getElementById("mapeha1").value;
    var mapeha2 = document.getElementById("mapeha2").value;
    var mapeha3 = document.getElementById("mapeha3").value;
    var mapeha4 = document.getElementById("mapeha4").value;

    var mapehpe1 = document.getElementById("mapehpe1").value;
    var mapehpe2 = document.getElementById("mapehpe2").value;
    var mapehpe3 = document.getElementById("mapehpe3").value;
    var mapehpe4 = document.getElementById("mapehpe4").value;

    var mapehh1 = document.getElementById("mapehh1").value;
    var mapehh2 = document.getElementById("mapehh2").value;
    var mapehh3 = document.getElementById("mapehh3").value;
    var mapehh4 = document.getElementById("mapehh4").value;
        // Get other grades here...

        // Make an AJAX request to save grades
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle response from the server
                console.log(xhr.responseText);
                // You can redirect or show a success message here
            }
        };
        xhr.open("POST", "save_grades.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(
"grade_level=" + gradeLevel +
"&student_id=" + studentId +
    "&cl1=" + cl1 +
    "&cl2=" + cl2 +
    "&cl3=" + cl3 +
    "&cl4=" + cl4 +
    "&clf=" + clf +
    "&clr=" + clr +
    "&fil1=" + fil1 +
    "&fil2=" + fil2 +
    "&fil3=" + fil3 +
    "&fil4=" + fil4 +
    "&filf=" + filf +
    "&filr=" + filr +
    "&eng1=" + eng1 +
    "&eng2=" + eng2 +
    "&eng3=" + eng3 +
    "&eng4=" + eng4 +
    "&engf=" + engf +
    "&engr=" + engr +
    "&math1=" + math1 +
    "&math2=" + math2 +
    "&math3=" + math3 +
    "&math4=" + math4 +
    "&mathf=" + mathf +
    "&mathr=" + mathr +
    "&sci1=" + sci1 +
    "&sci2=" + sci2 +
    "&sci3=" + sci3 +
    "&sci4=" + sci4 +
    "&scif=" + scif +
    "&scir=" + scir +
    "&ap1=" + ap1 +
    "&ap2=" + ap2 +
    "&ap3=" + ap3 +
    "&ap4=" + ap4 +
    "&apf=" + apf +
    "&apr=" + apr +
    "&tlecp1=" + tlecp1 +
    "&tlecp2=" + tlecp2 +
    "&tlecp3=" + tlecp3 +
    "&tlecp4=" + tlecp4 +
    "&tlecpf=" + tlecpf +
    "&tlecpr=" + tlecpr +
    "&mapeh1=" + mapehm1 +
    "&mapeh2=" + mapehm2 +
    "&mapeh3=" + mapehm3 +
    "&mapeh4=" + mapehm4 +
    "&mapehf=" + mapehf +
    "&mapehr=" + mapehr +
    "&mapeha1=" + mapeha1 +
    "&mapeha2=" + mapeha2 +
    "&mapeha3=" + mapeha3 +
    "&mapeha4=" + mapeha4 +
    "&mapehpe1=" + mapehpe1 +
    "&mapehpe2=" + mapehpe2 +
    "&mapehpe3=" + mapehpe3 +
    "&mapehpe4=" + mapehpe4 +
    "&mapehh1=" + mapehh1 +
    "&mapehh2=" + mapehh2 +
    "&mapehh3=" + mapehh3 +
    "&mapehh4=" + mapehh4 +
    "&mapehm1=" + mapehm1 +
    "&mapehm2=" + mapehm2 +
    "&mapehm3=" + mapehm3 +
    "&mapehm4=" + mapehm4
);
    }

    // Fetch student IDs based on the selected grade level
    document.getElementById("grade_level").addEventListener("change", function() {
        var gradeLevel = this.value;
        fetch("get_students.php?grade_level=" + gradeLevel)
            .then(response => response.json())
            .then(data => {
                var studentDropdown = document.getElementById("student_id");
                studentDropdown.innerHTML = "";
                data.forEach(student => {
                    var option = document.createElement("option");
                    option.value = student.id;
                    option.textContent = student.name; // Assuming you have a name field in your students table
                    studentDropdown.appendChild(option);
                });
            });
    });
</script>
    <script>
        // Ensure the sidebar starts in an open position

document.getElementById('sidebar').style.transform = 'translateX(0)';
document.getElementById('content').style.marginLeft = '200px';

function toggleSidebar() {
  var sidebar = document.getElementById('sidebar');
  var content = document.getElementById('content');
  var currentTransform = getComputedStyle(sidebar).getPropertyValue('transform');

  if (currentTransform === 'matrix(1, 0, 0, 1, 0, 0)') {
    sidebar.style.transform = 'translateX(-270px)';
    content.style.marginLeft = '0';
  } else {
    sidebar.style.transform = 'translateX(0)';
    content.style.marginLeft = '200px';
  }
}

    </script>
</body>
</html>