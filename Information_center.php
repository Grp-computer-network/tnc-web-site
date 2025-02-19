<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Center</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    <?php 
    include('./reuseable_files/style-php.html');
    ?>
   <link rel="stylesheet" href="css/tailwind.css">
</head>
<body>
<?php
include("./reuseable_files/header.html");
?>    
  <div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>Information Center</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="./information_center//ciruclar-notices.html" class="iqac-link">Circular & Notices</a></li>
                <li><a href="./information_center//newsletters.html" class="iqac-link">News Letter</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <h2>Welcome to IQAC</h2>   <br>
            <p style="font-size: 20px;padding: 10px;">IQAC would be looked upon as the prime quality sustenance measure.

                As providing quality education, adopting innovative teaching-learning methods, and assessing them is a continuous process, IQAC will be working with the HEI to support them throughout their teaching-learning journey.
                
                Let’s understand the concept of IQAC & how it can help institutions.</p>
        </div>
        </section>
  
<?php 
  include("./reuseable_files/footer.html");
  ?>     
  <?php 
       include('./addmission_form/admission_form.html');
        ?>
        
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
<script src="script/fixed-nav.js"></script>  
</body>
</html>