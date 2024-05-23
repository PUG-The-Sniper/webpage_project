function showSlide(index) {
    if (index < 0) {
      currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
      currentSlide = 0;
    } else {
      currentSlide = index;
    }
  
    const transformValue = -currentSlide * 100 + '%';
    document.getElementById('slider').style.transform = 'translateX(' + transformValue + ')';
  }
  
function changeSlide(n) {
    showSlide(currentSlide + n);
  }
  
  // Automatic slide change every 3 seconds (adjust as needed)
  setInterval(() => {
    changeSlide(1);
  }, 5000);
  
