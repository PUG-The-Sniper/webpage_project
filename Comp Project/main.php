<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecss.edu.ph</title>
    <link rel="icon" type="image/x-icon" href="./img/ecss_logo.png">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .popup .overlay {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
        display: none;
    }

    .popup .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: #fff;
        width: max-content;
        height: max-content;
        z-index: 2;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }

    .popup .close-btn {
        cursor: pointer;
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        background: #222;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align: center;
        border-radius: 50px;
    }

    .popup.active .overlay {
        display: block;
    }

    .popup.active .content {
        transition:all 800ms ease-in-out;
        transform: translate(-50%, -50%) scale(1);
    }

    .popup2 .overlay {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
        display: none;
    }

    .popup2 .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: #fff;
        width: max-content;
        height: max-content;
        z-index: 2;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }

    .popup2 .close-btn {
        cursor: pointer;
        position: absolute;
        right: 20px;
        top: 20px;
        width: 30px;
        height: 30px;
        background: #222;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        line-height: 30px;
        text-align: center;
        border-radius: 50px;
    }

    .popup2.active .overlay {
        display: block;
    }

    .popup2.active .content {
        transition:all 800ms ease-in-out;
        transform: translate(-50%, -50%) scale(1);
    }

    .custom-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 10px; /* Adjust padding to make the select box bigger */
    border: 1px solid #ccc; /* Add a border for styling */
    border-radius: 5px; /* Add some border radius for rounded corners */
    width: 300px; /* Set a width for the select box */
    text-align: center;
    font-size: medium;
}
</style>
<body>
    <div class="container">
        <div id="header">
            <span><img src="img/ecss_logo.png" width="50px" style="top: 8%; left: 22px; position: absolute;"></span>
            <a href="main.php"><span class="button">Home</span></a>
            <a href="news_and_events.html"><span class="button">Events</span></a>
            <a href="enrollment_new_student.html"><span class="button">Enroll Now</span>
            <a href="about_us.html"><span class="button">About Us</span></a>
            <span class="button" onclick="togglePopup2()">Login</span>
        </div>
    </div>
    <div class="popup2" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup2()">&times;</div>
            <img src="./img/ecss_logo.png">
            <br>
            <span style="font-size: medium;">Login:</span>
            <form action="" method="post">
        <select id="user" name="user" placeholder="* Select User Type" class="custom-select">
            <option disabled selected value="0">Select User Type</option>
            <option value="1">Administrator</option>
            <option value="2">Teacher</option>
            <option value="3">Student</option>
        </select>
        <br>
        <span class="button" onclick="proceed2()">Proceed</span>
        </form>
        </div>
    </div>
        <div class="content" id="content">
            <img style="top: 69px; position: absolute;" src="./img/bar.png" id="toggleButton" width="30px" onclick="toggleHeader()" >
            <center>
                <img src="img/ecss_logo.png" height="200px" alt="ECSS Logo">
                <h2 style="font-size: 40px; color: #fff;">WELCOME TO ESCUELA CATOLICA DE SAN SEBASTIAN INC.</h2>
                <p class="transparent-button" style="font-size: 30px; background-color: #00000010; width:max-content; border-radius: 15px;">&nbsp;&nbsp;ECSSians: Witnesses of God's Love and Life&nbsp;&nbsp;</p>
                <br>
                <div class="transparent-button2">
                <a href=""><b><span style="color: #f6150f; font-size: 25px;">Events</span>&nbsp; <span style="font-size: 25px; color: #fff;">And</span>&nbsp; <span style="color: #f6150f; font-size: 25px;">Updates</span></b></a>
            </div>
            </center>
        </div>
    </div>
<center>
    <h2 style="color: rgb(60, 89, 254);"> Our Social Media</h2>
    <a href="https://www.facebook.com/ecssat21.edu.ph" target="_blank">
        <img src="img/facebook.png" width="6.25%" style="background-color: #ffffff">
      </a>
</center>
<br>
<center class="spacing">
    <p style="color: #fff; font-size: 20px;"> Contact Information</p>
    <div class="transparent-button">
    <p style="color: #fff;">(+63) 8541-4254</p>
        <span>ecss.educ@yahoo.com.ph</p></span>
    </div>
</center>
<br>
<div class="footer" style="text-decoration: none; color: #fff;">
    <p><span><a href="#header">Home</a></span>&nbsp;⬤&nbsp;<span><a href="">Contact Us</a></span>&nbsp;⬤&nbsp;<span><a href="">Credits</a></span></p>
    <br>
    <br>
    <br>
    <p> &copy; Escuela Catolica de San Sebastian.&nbsp; All rights reserved.</p>
    <p>M. H. Del Pilar street, Pinagbuhatan, Pasig, Philippines</p>
</div>
<script>
/* Animation when open */

    document.addEventListener("DOMContentLoaded", function () {
      // Trigger the header animation and toggle button fade in on page load
      toggleHeader();
      fadeInToggleButton();
    });
    </script>
    <script src="script.js"></script>
</body>
</html>
