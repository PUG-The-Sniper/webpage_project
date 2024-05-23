<?php 
session_start();

include 'db3_conn.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $role = $_SESSION['role'];
?>
<?php

include 'db3_conn.php';
include 'db2_conn.php';
include 'db1_conn.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  $role = $_SESSION['role'];

  $menuLinks = [
    "Administrator" => [
      "Home" => "#home",
      "Student Council" => "#contact",
      "School Survey" => "student_survey.php",
      "Log Out" => "logout.php"
    ],
    "teacher" => [
      "Home" => "#home",
      "School Survey" => "student_survey.php",
      "Schedule" => "#contact",
      "Log Out" => "logout.php"
    ],
    "Student" => [
      "Home" => "user_page.php",
      "Enrollment" => "enrollment_new_student.html",
      "Grades" => "student_grade.php",
      "Student Council" => "#contact",
      "School Survey" => "student_survey.php",
      "Schedule" => "student_schedule.php",
      "Log Out" => "logout.php"
    ]
  ];

  // Get menu links based on role
  $currentMenuLinks = $menuLinks[$role];
} else {
  header("Location: main.php");
  exit();
}
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
    position: absolute;
    right: 437px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            top: 50px;
        }

    .container3 {
    position: absolute;
    top: 70%;
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
<?php 
switch ($role) {
    case 'Administrator':
        ?>
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
    <div class="container2">
            <h2>Welcome to Our Online Feedback Form</h2>
            <h3>Dear <?php echo $_SESSION['name']; ?>,</h3>
            <br>
            <span>Your feedback matters to us. Please take a moment</span>
            <br>
            <span>to share your thoughts and insights by completing this brief</span>
            <br>
            <span>form.</span>
            <span>Your responses will help us improve our services</span>
            <br>
            <span>and better serve you.</span>
            <br>
            <br>
            <span>Thank you for your time and valuable input!</span>
            <br>
            <br>
            <br>
            <br>
            <span>Sincerely, ECSS Team</span>
            
        </center>
    </div>
    <br>
    <div class="container3">
        <form method="post" action="https://script.google.com/macros/s/AKfycbw-B0fk15qxkmwyqpQbelzQICNmn_40GXYEYi8WgLWvzw0M1-p4DK524RpeKgE21cbQhw/exec" onsubmit="submitForm()">
           
            <h3>Demographic Information</h3>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>

  <label for="grade_level">Grade Level:</label><br>
  <input type="text" id="grade_level" name="grade_level" required><br>

  <label for="parent_name">Parent/Guardian Name:</label><br>
  <input type="text" id="parent_name" name="parent_name"><br>

  <label for="contact_info">Contact Information:</label><br>
  <input type="text" id="contact_info" name="contact_info"><br>

  <label for="parish_affiliation">Parish Affiliation:</label><br>
  <input type="text" id="parish_affiliation" name="parish_affiliation"><br><br>

  <h3>General Satisfaction</h3>
  <label for="satisfaction_rating">Please rate your overall satisfaction with the school:</label><br>
  <select id="satisfaction_rating" name="satisfaction_rating" required>
    <option value="">Select</option>
    <option value="very_satisfied">Very Satisfied</option>
    <option value="satisfied">Satisfied</option>
    <option value="neutral">Neutral</option>
    <option value="dissatisfied">Dissatisfied</option>
    <option value="very_dissatisfied">Very Dissatisfied</option>
  </select><br><br>

  <h3>Academic Programs</h3>
  <label for="academic_satisfaction">Please share your thoughts on the academic programs:</label><br>
  <textarea id="academic_satisfaction" name="academic_satisfaction" rows="4" cols="50" required></textarea><br><br>

  <h3>Extracurricular Activities</h3>
  <label for="extracurricular_satisfaction">Please share your thoughts on extracurricular activities:</label><br>
  <textarea id="extracurricular_satisfaction" name="extracurricular_satisfaction" rows="4" cols="50" required></textarea><br><br>

  <h3>Suggestions for Improvement</h3>
  <label for="improvement_suggestions">Do you have any suggestions for improvement?</label><br>
  <textarea id="improvement_suggestions" name="improvement_suggestions" rows="4" cols="50"></textarea><br><br>

  <h3>Optional Open-Ended Questions</h3>
  <label for="optional_questions">Feel free to share any additional comments or feedback:</label><br>
  <textarea id="optional_questions" name="optional_questions" rows="4" cols="50"></textarea><br><br>

  <input type="submit" value="Submit">
</form>
        </div>
</body>
</html>
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
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbw-B0fk15qxkmwyqpQbelzQICNmn_40GXYEYi8WgLWvzw0M1-p4DK524RpeKgE21cbQhw/exec';
const form = document.forms['contact-form'];

form.addEventListener('submit', e => {
    e.preventDefault();
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok.');
        }
        return response.text(); 
    })
    .then(data => {
        
        if (data === "success") {
            
            alert("Thank you! your form is submitted successfully.");
           
            window.location.reload();
        } else {
            
            alert("An error occurred. Please try again later.");
        }
    })
    .catch(error => console.error('Error!', error.message));
});
    </script>
    <script>
    function showSuccessMessage() {
      alert("Form submitted successfully!");
    }

    function submitForm() {
      var form = document.getElementById('surveyForm');
      form.target = '_blank'; 
      form.submit();
      setTimeout(function(){ 
        window.close(); 
        showSuccessMessage(); 
      }, 1000);
    }
  </script>
<?php
        break;
    default:
     
        echo '<p>Unknown User</p>';
}
?>

<?php 
}else{
     header("Location: main.php");
     exit();
}
 ?>