
document.addEventListener("DOMContentLoaded", function () {
  toggleHeader();
  fadeInToggleButton();
});


function toggleHeader() {
  var header = document.getElementById("header");
  var content = document.getElementById("content");
  var toggleButton = document.getElementById("toggleButton");
  var currentTransform = getComputedStyle(header).getPropertyValue('transform');

  if (currentTransform === 'matrix(1, 0, 0, 1, 0, 0)') {
      header.style.transform = 'translateY(-100%)';
      content.style.marginTop = '0';
      toggleButton.style.transform = 'translateY(-100%)';
  } else {
      header.style.transform = 'translateY(0)';
      content.style.marginTop = header.clientHeight + 'px';
      toggleButton.style.transform = 'translateY(0)';
  }
}


function fadeInToggleButton() {
  var toggleButton = document.getElementById("toggleButton");
  toggleButton.style.opacity = '1'; 
}
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function togglePopup() {
  document.getElementById("popup-1").classList.toggle("active");
}

function proceed() {
  var selectedOption = document.getElementById("student").value;
  if (selectedOption === "0") {
      alert("Please select a student type."); 
      return;
    }
    if (selectedOption === "1") {
        window.location.href = "enrollment_new_student.html"; 
    } else if (selectedOption === "2") {
        window.location.href = "enrollment_old_student.html"; 
    }
}

function togglePopup2() {
  document.getElementById("popup-2").classList.toggle("active");
}

function proceed2() {
  var selectedOption = document.getElementById("user").value;
  if (selectedOption === "0") {
      alert("Please select a user type."); 
      return;
    }
    if (selectedOption === "1") {
        window.location.href = "administrator_login.php"; 
    } else if (selectedOption === "2") {
        window.location.href = "teacher_login.php"; 
    } else if (selectedOption === "3") {
      window.location.href = "student_login.php"; 
  }
}

const scriptURL = 'https://script.google.com/macros/s/AKfycbwxrr9gY3hH186SuG@uv8nQa®NJHnmqFYqzCzrqM0w4wWDuE-B--j9r9iwch5FHZK60/exec';
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