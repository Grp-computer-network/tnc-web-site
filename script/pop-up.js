// Show the first pop-up on page load
window.onload = function () {
    document.getElementById("popup1").style.display = "flex";
  };
  
  // Function to close current pop-up and show the next one
  function closePopup(currentPopup, nextPopup) {
    document.getElementById(currentPopup).style.display = "none";
    
    // If there's a next pop-up, show it
    if (nextPopup) {
      document.getElementById(nextPopup).style.display = "flex";
    }
  }
  