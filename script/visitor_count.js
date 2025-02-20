
// Initialize visitor count from localStorage if available
let visitorCount = localStorage.getItem('visitorCount');
if (!visitorCount) {
    // If not set, initialize to 1 (first time visitor)
    visitorCount = 1;
} else {
    // Increment visitor count
    visitorCount = parseInt(visitorCount) + 1;
}

// Update the visitor count in localStorage
localStorage.setItem('visitorCount', visitorCount);

// Display the visitor count in the footer
document.getElementById('visitorCount').textContent = visitorCount;
