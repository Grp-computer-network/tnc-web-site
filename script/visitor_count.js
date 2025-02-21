
// Function to format the visitor count with K, M, B
function formatNumber(num) {
    if (num >= 1000000000) { // Billion
        return (num / 1000000000).toFixed(1) + 'B';
    } else if (num >= 1000000) { // Million
        return (num / 1000000).toFixed(1) + 'M';
    } else if (num >= 1000) { // Thousand
        return (num / 1000).toFixed(1) + 'K';
    } else {
        return num;
    }
}

// Initialize visitor count from localStorage if available
let visitorCount = localStorage.getItem('visitorCount');

// Check if the user has visited this site during the current session
if (!sessionStorage.getItem('hasVisited')) {
    // If the user hasn't visited in the session, increment visitor count
    if (!visitorCount) {
        visitorCount = 1; // First-time visitor
    } else {
        visitorCount = parseInt(visitorCount) + 1; // Increment for a new visitor
    }

    // Store the updated visitor count in localStorage
    localStorage.setItem('visitorCount', visitorCount);

    // Mark the user as visited in the current session
    sessionStorage.setItem('hasVisited', 'true');
}

// Format and display the visitor count
document.getElementById('visitorCount').textContent = formatNumber(visitorCount);

