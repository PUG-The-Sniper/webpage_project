<?php 
session_start();

include 'db3_conn.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $role = $_SESSION['role'];
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
  .container2 {
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            top: 50px;
        }

    .container3 {
    position: absolute;
    top: 80%;
    right: 460px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
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


        .myButton:hover {
            background-color: #777777;
            color: #ffffff;
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
    <div class="container2">
    <h2>School Schedule</h2>

    <?php
include 'db3_conn.php';

$sql = "SELECT * FROM schedule";
$result = mysqli_query($conn, $sql);

echo '<table>';
echo '<tr><th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo "<td>{$row['monday']}</td>";
    echo "<td>{$row['tuesday']}</td>";
    echo "<td>{$row['wednesday']}</td>";
    echo "<td>{$row['thursday']}</td>";
    echo "<td>{$row['friday']}</td>";
    echo '</tr>';
}
echo '</table>';
mysqli_close($conn);
?>


    
    </div>
    <script src="script.js"></script>
    <script>

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
<?php 
}else{
     header("Location: student_login.php");
     exit();
}
 ?>