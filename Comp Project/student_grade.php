<?php 
session_start();

include 'db3_conn.php';
include 'user_data.php';

// Check if the user is logged in and is a student
if (!(isset($_SESSION['id']) && isset($_SESSION['user_name']))) {
    // Redirect to login page or display an error message
    exit(); // Ensure script execution stops here
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
    <p>Hello, <?php echo $_SESSION['name']; ?></p>
    <p>Your Grades</p>
</div>
<?php
    // Fetch grades for the logged-in user
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
    ?>
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
            <td><?php echo $grd_cl1; ?></td>
            <td><?php echo $grd_cl2; ?></td>
            <td><?php echo $grd_cl3; ?></td>
            <td><?php echo $grd_cl4; ?></td>
            <td><?php echo $grd_clfinals; ?></td>
            <td><?php echo $grd_clremarks; ?></td>
        </tr>
        <tr>
            <td>Filipino</td>
            <td><?php echo $grd_fil1; ?></td>
            <td><?php echo $grd_fil2; ?></td>
            <td><?php echo $grd_fil3; ?></td>
            <td><?php echo $grd_fil4; ?></td>
            <td><?php echo $grd_filfinals;?></td>
            <td><?php echo $grd_filremarks;?></td>
        </tr>
        <tr>
            <td>English</td>
            <td><?php echo $grd_eng1; ?></td>
            <td><?php echo $grd_eng2; ?></td>
            <td><?php echo $grd_eng3; ?></td>
            <td><?php echo $grd_eng4; ?></td>
            <td><?php echo $grd_engfinals;?></td>
            <td><?php echo $grd_engremarks;?></td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td><?php echo $grd_math1; ?></td>
            <td><?php echo $grd_math2; ?></td>
            <td><?php echo $grd_math3; ?></td>
            <td><?php echo $grd_math4; ?></td>
            <td><?php echo $grd_mathfinals;?></td>
            <td><?php echo $grd_mathremarks;?></td>
        </tr>
        </tr>
        <tr>
            <td>Science</td>
            <td><?php echo $grd_sci1; ?></td>
            <td><?php echo $grd_sci2; ?></td>
            <td><?php echo $grd_sci3; ?></td>
            <td><?php echo $grd_sci4; ?></td>
            <td><?php echo $grd_scifinals;?></td>
            <td><?php echo $grd_sciremarks;?></td>
        </tr>
        </tr>
        <tr>
            <td>Araling Panlipunan (AP)</td>
            <td><?php echo $grd_ap1; ?></td>
            <td><?php echo $grd_ap2; ?></td>
            <td><?php echo $grd_ap3; ?></td>
            <td><?php echo $grd_ap4; ?></td>
            <td><?php echo $grd_apfinals;?></td>
            <td><?php echo $grd_apremarks;?></td>
        </tr>
        </tr>
        <tr>
            <td>Technology And Livelihood Education/Computer</td>
            <td><?php echo $grd_tlecp1; ?></td>
            <td><?php echo $grd_tlecp2; ?></td>
            <td><?php echo $grd_tlecp3; ?></td>
            <td><?php echo $grd_tlecp4; ?></td>
            <td><?php echo $grd_tlecpfinals;?></td>
            <td><?php echo $grd_tlecpremarks;?></td>
        </tr>
        </tr>
        <tr>
            <td>MAPEH</td>
            <td><?php echo $grd_mapeh1; ?></td>
            <td><?php echo $grd_mapeh2; ?></td>
            <td><?php echo $grd_mapeh3; ?></td>
            <td><?php echo $grd_mapeh4; ?></td>
            <td><?php echo $grd_mapehfinals;?></td>
            <td><?php echo $grd_mapehremarks;?></td>
        </tr>
        </tr>
        <tr>
            <td>MAPEH - Music</td>
            <td><?php echo $grd_mapehm1; ?></td>
            <td><?php echo $grd_mapehm2; ?></td>
            <td><?php echo $grd_mapehm3; ?></td>
            <td><?php echo $grd_mapehm4; ?></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Arts</td>
            <td><?php echo $grd_mapeha1; ?></td>
            <td><?php echo $grd_mapeha2; ?></td>
            <td><?php echo $grd_mapeha3; ?></td>
            <td><?php echo $grd_mapeha4; ?></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Physical Education</td>
            <td><?php echo $grd_mapehpe1; ?></td>
            <td><?php echo $grd_mapehpe2; ?></td>
            <td><?php echo $grd_mapehpe3; ?></td>
            <td><?php echo $grd_mapehpe4; ?></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
        <tr>
            <td>MAPEH - Health</td>
            <td><?php echo $grd_mapehh1; ?></td>
            <td><?php echo $grd_mapehh2; ?></td>
            <td><?php echo $grd_mapehh3; ?></td>
            <td><?php echo $grd_mapehh4; ?></td>
            <td style="background-color: #999999;"></td>
            <td style="background-color: #999999;"></td>
        </tr>
    </table>
</div>
    <script src="script.js"></script>
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