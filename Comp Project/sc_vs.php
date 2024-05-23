<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
    <br>
    <div class="container3">
        <form method="post" action="https://script.google.com/macros/s/AKfycbw-B0fk15qxkmwyqpQbelzQICNmn_40GXYEYi8WgLWvzw0M1-p4DK524RpeKgE21cbQhw/exec" onsubmit="submitForm()">
<h1>SSG Voting</h1>
		<br>
    <form id="form">
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			<input type="text" id="name"
				placeholder="Enter your name" />
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				Grade
			</label>

			<input type="number" name="Number" required>
		</div>

		<div class="form-control">
			<label>
				<b> 1. President </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
				<b> 2. Vice President </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
				<b> 3. Secretary </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
				<b> 4. Treasurer</b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>
	</form>
<br>
<form>
<b> <i> <h1> Class Representatives</h1> </i> </b>
<br>
<br>
<br>

		<div class="form-control">
			<label>
				<b> 5. Grade 10 </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
				<b> 6. Grade 9 </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 1
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
				<b> 7. Grade 8 </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>

		<div class="form-control">
			<label>
			<b>	8. Grade 7 </b>
			</label>

			<label for="recommed-1">
				<input type="radio" id="recommed-1"
					name="recommed">Student 1
				</input>
			</label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2"
					name="recommed">Student 2
				</input>
			</label>
			<label for="recommed-3">
				<input type="radio" id="recommed-3"
					name="recommed">Student 3
				</input>
			</label>
		</div>
</form>
<br>
<form>
		<div class="form-control">
			<label for="comment">
				<b> 9.Do you have any more questions or further suggestions? </b>
			</label>
			<textarea name="comment" id="comment"
					placeholder="Enter your comment here">
			</textarea>
		</div>	
    <ul style="list-style-type:none;">
			<li> <button class="button9 button4" onclick="document.location='Voting.html'"> Submit </a> </button> </li>
	</ul> </form>
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
        return response.text(); // Return the text of the response
    })
    .then(data => {
        // Check if the response indicates success
        if (data === "success") {
            // Display success message
            alert("Thank you! your form is submitted successfully.");
            // Reload the page
            window.location.reload();
        } else {
            // Handle other cases, like if the response is "error"
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
      form.target = '_blank'; // Open form submission in a new tab
      form.submit(); // Submit the form
      setTimeout(function(){ 
        window.close(); // Close the new tab after 1 second
        showSuccessMessage(); // Show success message in the main tab
      }, 1000);
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