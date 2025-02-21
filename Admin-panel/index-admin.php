

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements & Events</title>
    <link rel="stylesheet" href="admin-pages-style.css">
    <script>
        function showSection(section) {
            document.getElementById('announcements').style.display = (section === 'announcements') ? 'block' : 'none';
            document.getElementById('events').style.display = (section === 'events') ? 'block' : 'none';
            
            document.getElementById('tab-announcements').classList.toggle('active', section === 'announcements');
            document.getElementById('tab-events').classList.toggle('active', section === 'events');
        }
    </script>
</head>
<body>

    <div class="right-section">
        <div class="tabs">
            <button id="tab-announcements" onclick="showSection('announcements')" class="tab-link active">ANNOUNCEMENTS</button>
            <button id="tab-events" onclick="showSection('events')" class="tab-link">EVENTS</button>
        </div>

        <div id="announcements">
            <div class="scroll-container">
                <div class="scroll-content">
                    <?php while ($row = $announcements_result->fetch_assoc()) { ?>
                        <p class="announcement">📢 <?php echo $row['title']; ?> - <?php echo $row['date']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div id="events" class="hidden">
            <div class="scroll-container">
                <div class="scroll-content">
                    <?php while ($row = $events_result->fetch_assoc()) { ?>
                        <p class="event">🎉 <?php echo $row['title']; ?> - <?php echo $row['date']; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
