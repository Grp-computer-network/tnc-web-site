function showSection(sectionId) {
    // Hide both sections
    document.getElementById('announcements').classList.add('hidden');
    document.getElementById('events').classList.add('hidden');

    // Show the selected section
    document.getElementById(sectionId).classList.remove('hidden');

    // Update tab styles
    document.getElementById('tab-announcements').classList.remove('active-tab');
    document.getElementById('tab-events').classList.remove('active-tab');

    if (sectionId === 'announcements') {
        document.getElementById('tab-announcements').classList.add('active-tab');
    } else {
        document.getElementById('tab-events').classList.add('active-tab');
    }
}
