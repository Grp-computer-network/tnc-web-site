<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information-Center</title>
    <?php 
    include('./reuseable_files/style.html');
    ?>
    <link rel="stylesheet" href="./css//IQAC//iqac.css">
</head>
<body>
  <?php
  include("./reuseable_files/header.html");
  ?>
     <!-- header-end -->
     <div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>Extension Activity</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="./Extension-Activity/RRC.html" class="iqac-link">RRC</a></li>
                <li><a href="./Extension-Activity/YRCLeoClub.html" class="iqac-link">YRC LEO CLUB</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content" >
    <?php
    // Check if 'page' parameter is set in URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];  
        
        // Define allowed pages to prevent security risks
        $allowed_pages = ['RRC', 'YRCLeoClub'];

        // If requested page is in the allowed list, include the corresponding HTML file
        if (in_array($page, $allowed_pages)) {
            include("Extension-Activity/$page.html");
        } else {
            echo "<h2>Invalid Section</h2><p>Sorry, the page you requested does not exist.</p>";
        }
    } else {
        // Default content when no submenu is selected
        echo '
        <h2>Welcome to IQAC</h2>   <br>
            <p style="font-size: 20px;padding: 10px;">IQAC would be looked upon as the prime quality sustenance measure.

                As providing quality education, adopting innovative teaching-learning methods, and assessing them is a continuous process, IQAC will be working with the HEI to support them throughout their teaching-learning journey.
                
                Let’s understand the concept of IQAC & how it can help institutions.</p>';
    }
    ?>
</div>

        </section>
    <?php
       include("./reuseable_files/footer.html");
     ?>
      <script src="script/script.js"></script>
        <script src="script/iqac.js"></script>
        <script src="script/addmission.js"></script>
        <script src="script/fixed-nav.js"></script>
        <script src="script/visitor_count.js"></script>
</body>
</html>

