<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC - Thiruthangal Nadar College</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    <link rel="stylesheet" href="css/IQAC/iqac.css">
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <link rel="stylesheet" href="css/home-content-style/popup.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="./css//IQAC//About_IQAC.css">
    </head>
    <body>
    <!--- header content-->
     <?php
     include("./reuseable_files/header.html");
     ?>    
     <!-- header-end -->
    <div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>Internal Quality Assurance Cell</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="IQAC/About_IQAC.html" class="iqac-link">About IQAC</a></li>
                <li><a href="IQAC/AQAR.html" class="iqac-link">AQAR</a></li>
                <li><a href="IQAC/Best_Practices.html" class="iqac-link">Best Practices</a></li>
                <li><a href="IQAC/Feedback.html" class="iqac-link">Feedback</a></li>
                <li><a href="IQAC/Alumni.html" class="iqac-link">Alumni</a></li>
                <li><a href="IQAC/Gallery.html" class="iqac-link">Gallery</a></li>
                <li><a href="IQAC/Institutional_Distinctiveness.html" class="iqac-link">Institutional Distinctiveness</a></li>
                <li><a href="IQAC/IQAC_Committee_Members.html" class="iqac-link">IQAC Committee Members</a></li>
                <li><a href="IQAC/IQAC_Minutes_And_ATR.html" class="iqac-link">IQAC Minutes And ATR</a></li>
                <li><a href="IQAC/Quality_Initiatives.html" class="iqac-link">Quality Initiatives</a></li>
                <li><a href="IQAC/SSR_Cycle_II_Report.html" class="iqac-link">SSR Cycle II Report</a></li>
                <li><a href="IQAC/NIRF.html" class="iqac-link">NIRF</a></li>
                <li><a href="IQAC/Templates.html" class="iqac-link">Templates</a></li>
                <li><a href="IQAC/Internal_Complaint_Committee.html" class="iqac-link">Internal Complaint Committee</a></li>
                <li><a href="IQAC/MOU's.html" class="iqac-link">MOU's</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <h2>Welcome to IQAC</h2>   <br>
            <p style="font-size: 20px;padding: 10px; text-align:justify">Welcome to the official website of the Internal Quality Assurance Cell (IQAC) of [Thiruthangal Nadar College]. 
            Our primary goal is to establish a culture of continuous improvement by ensuring that academic, administrative, and infrastructural processes meet the highest standards. We are committed to fostering a learning environment that promotes excellence in teaching, research, and overall institutional growth.
            Through our various initiatives, we seek to engage all stakeholders in the process of self-assessment and feedback, which are crucial for driving innovation and quality enhancement. The IQAC aims to be driving forces in helping the institution achieve its long-term goals, in line with national and global standards.
            We are always open to collaboration and feedback to help further our mission of quality improvement</p>
        </div>
        </section>
        <!-- footer -->
        <?php 
        include("./reuseable_files/footer.html");
        ?>
        <!-- footer-end-->

        <!--Admission Form -->
        <?php 
        include('./addmission_form/admission_form.html');  
        ?>
        <!--Form End-->
        <!-- java-scripts-files -->
        <script src="script/script.js"></script>
        <script src="script/iqac.js"></script>
        <script src="script/addmission.js"></script>
        <script src="script/fixed-nav.js"></script>
</body>
</html>
