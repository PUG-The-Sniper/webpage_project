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
        .container2 {
            width: max-content;
            margin: auto;
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }
        .header{
            background-color: #610303;
            line-height: 70px;
            padding-left: 30px;
            margin: 0px;
            padding: 0px;
        }
</style>
<body>
    
<?php 
switch ($role) {
    case 'Administrator':
        ?>
        <div class="header">
            <a href="">Admin Dashboard</a>
        </div>
        <div class="container">
    <div class="sidebar" id="sidebar">
        <img src="img/ecss_logo.png" style="width: 180px;">
    <a href="#home" class="myButton">Home</a>
    <br>
    <a href="#contact" class="myButton">Student Council</a>
    <a href="student_survey.php" class="myButton">School Survey</a>
    <br>
    <a href="logout.php" class="myButton">Log Out</a>
</div>

    <div class="content" id="content">
        <center>
            <div class="container2"> 
    <img src="img/profile.png" style="width: 80px;">
    <br>
    <b><span style="font-size: 25px; position:relative;">Hello, <?php echo $_SESSION['name']; ?></span></b>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;"><?php echo $_SESSION['status']; ?> | <?php echo $_SESSION['role']; ?></span>
    </div>
        </center>
        
    <br>
    <div class="container2"> 
    <center>
        <br>
    <b><span style="font-size: 25px; position:relative;">ESCUELA CATOLICA DE SAN SEBASTIAN, INC</span></b>
    <br>
    <br>
    <br>
    <b><span style="font-size: 25px; position:relative;">VISION</span></b>
    <br>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">A Relevant, Transformative Catholic School Community in Joyful</span>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">Mission with Home and Parish</span>
    <br>
    <br>
    <b><span style="font-size: 25px; position:relative;">MISSION</span></b>
    <br>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">We are wholeheartedly committed to a culture of excellence in and</span>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">through:</span>
    </center>
    <br>
    <ol style="width: 500px;">
        <li>Formation of Families</li>
        <li>Relevance of Curriculum, Programs and Services Attuned with 21st Century Education</li>
        <li>Promotion of the Integrity of Creation</li>
        <li>Enhancement of Parish Involvement</li>
        <li>Service to the Poor</li>
        <li>Deeper Appreciation and Witnessing of the Philippine Catholic Schools Standards and Filipino Values</li>
        <li>Collaboration towards Viability of Resources</li>
    </ol>
    </div>
    
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
    <?php
        break;
    case 'teacher':
        ?>
        <div class="header">
            <a href="">Teacher's Dashboard</a>
        </div>
<div class="container">
    <div class="sidebar" id="sidebar">
        <img src="img/ecss_logo.png" style="width: 180px;">
    <a href="#home" class="myButton">Home</a>
    <br>
    <a href="student_survey.php" class="myButton">School Survey</a>
    <a href="#contact" class="myButton">Add Student</a>
    <a href="#contact" class="myButton">View Student</a>
    <br>
    <a href="logout.php" class="myButton">Log Out</a>
</div>
    <div class="content" id="content">
        <center>
            <div class="container2"> 
    <img src="img/profile.png" style="width: 80px;">
    <br>
    <b><span style="font-size: 25px; position:relative;">Hello, <?php echo $_SESSION['name']; ?></span></b>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;"><?php echo $_SESSION['status']; ?></span>
    </div>
        </center>
        
    <br>
    <div class="container2"> 
    <center>
        <br>
    <b><span style="font-size: 25px; position:relative;">ESCUELA CATOLICA DE SAN SEBASTIAN, INC</span></b>
    <br>
    <br>
    <br>
    <b><span style="font-size: 25px; position:relative;">VISION</span></b>
    <br>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">A Relevant, Transformative Catholic School Community in Joyful</span>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">Mission with Home and Parish</span>
    <br>
    <br>
    <b><span style="font-size: 25px; position:relative;">MISSION</span></b>
    <br>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">We are wholeheartedly committed to a culture of excellence in and</span>
    <br>
    <span style="right: -2px; position:relative; font-size: 15px;">through:</span>
    </center>
    <br>
    <ol style="width: 500px;">
        <li>Formation of Families</li>
        <li>Relevance of Curriculum, Programs and Services Attuned with 21st Century Education</li>
        <li>Promotion of the Integrity of Creation</li>
        <li>Enhancement of Parish Involvement</li>
        <li>Service to the Poor</li>
        <li>Deeper Appreciation and Witnessing of the Philippine Catholic Schools Standards and Filipino Values</li>
        <li>Collaboration towards Viability of Resources</li>
    </ol>
    </div>
    
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
<?php
        break;
    case 'student':
        ?>
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
    
        <div class="content" id="content">
            <center>
                <div class="container2"> 
        <img src="img/profile.png" style="width: 80px;">
        <br>
        <b><span style="font-size: 25px; position:relative;">Hello, <?php echo $_SESSION['name']; ?></span></b>
        <br>
        <span style="right: -2px; position:relative; font-size: 15px;"><?php echo $_SESSION['status']; ?></span>
        </div>
            </center>
            
        <br>
        <div class="container2"> 
        <center>
            <br>
        <b><span style="font-size: 25px; position:relative;">ESCUELA CATOLICA DE SAN SEBASTIAN, INC</span></b>
        <br>
        <br>
        <br>
        <b><span style="font-size: 25px; position:relative;">VISION</span></b>
        <br>
        <br>
        <span style="right: -2px; position:relative; font-size: 15px;">A Relevant, Transformative Catholic School Community in Joyful</span>
        <br>
        <span style="right: -2px; position:relative; font-size: 15px;">Mission with Home and Parish</span>
        <br>
        <br>
        <b><span style="font-size: 25px; position:relative;">MISSION</span></b>
        <br>
        <br>
        <span style="right: -2px; position:relative; font-size: 15px;">We are wholeheartedly committed to a culture of excellence in and</span>
        <br>
        <span style="right: -2px; position:relative; font-size: 15px;">through:</span>
        </center>
        <br>
        <ol style="width: 500px;">
            <li>Formation of Families</li>
            <li>Relevance of Curriculum, Programs and Services Attuned with 21st Century Education</li>
            <li>Promotion of the Integrity of Creation</li>
            <li>Enhancement of Parish Involvement</li>
            <li>Service to the Poor</li>
            <li>Deeper Appreciation and Witnessing of the Philippine Catholic Schools Standards and Filipino Values</li>
            <li>Collaboration towards Viability of Resources</li>
        </ol>
        </div>
        
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
    <?php
        break;
    default:
        echo '<p>Unknown User</p>';
}
?>

<?php 
} else {
    header("Location: student_login.php");
    exit();
}
?>
</body>
</html>