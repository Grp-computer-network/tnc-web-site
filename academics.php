<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    </head>
    <?php 
    include('reuseable_files/style-php.html');
    ?>
<body> 
<?php
include("reuseable_files/header.html");
?>    
<div class="title-iqac">
    <h1 style='font-size:23px; font-weight:bold;'>Academics</h1>
</div>
<!-- IQAC Section -->
<section id="iqac-container">
    <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="./academics/Course_offered.html" class="iqac-link">Cousre Offered</a></li>
            <li><a href="./academics/E-content.html" class="iqac-link">E-Content</a></li>
            <li><a href="./academics/academics-calender.html" class="iqac-link">Aacdemics  Calender</a></li>
            <li><a href="./academics/academics-collabration.html" class="iqac-link">Aacdemics Collabration</a></li>
            <li><a href="./academics/statutes.html" class="iqac-link">Statutes</a></li>
            <li><a href="./academics/libary.html" class="iqac-link">Libary</a></li>
        </ul>
    </nav>

    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content">
    <?php
    // Check if 'page' parameter is set in URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];  
        
        // Define allowed pages to prevent security risks
        $allowed_pages = ['academics-calender', 'academics-collabration', 'academics-leadership', 'Course_offered', 'E-content', 'libary', 'statutes'];

        // If requested page is in the allowed list, include the corresponding HTML file
        if (in_array($page, $allowed_pages)) {
            include("academics/$page.html");
        } else {
            echo "<h2>Invalid Section</h2><p>Sorry, the page you requested does not exist.</p>";
        }
    } else {
        // Default content when no submenu is selected
        echo '
        <h2>Academics</h2>
        <hr>
        <p style="font-size: 1.3rem; text-align:justify" >
        At Thiruthangal Nadar College, we are committed to fostering academic excellence and holistic development. Our diverse range of undergraduate (UG) and postgraduate (PG) programs are designed to meet industry demands while nurturing students intellectual and personal growth.  
        </p>
        <p style="font-size: 1.3rem; text-align:justify">
            The college was founded by the *Chennaivazh Thiruthangal Hindu Nadar Uravinmurai Dharma Fund, driven by a mission to support the underprivileged student community. The dedicated management is committed to providing accessible education, fostering students intellectual and personal growth through the college’s motto, <b> "Knowledge is Power."</b>Our primary focus is to ignite the minds of students, dispelling ignorance and promoting enlightenment through a comprehensive educational experience.
        </p>
        <h2>Academic Programs</h2> <hr>
        <p style="font-size: 1.3rem; text-align:justify">
            We offer a variety of <b> undergraduate (UG) and postgraduate (PG) </b> programs in the arts and sciences. These programs are designed to equip students with the knowledge, skills, and values necessary for personal and professional success. Accredited with a *B++* rating, Thiruthangal Nadar College has earned recognition for its commitment to academic excellence.
        </p>
        <h2>Student Life and Extracurricular Activities</h2><hr>
        <p style="font-size: 1.3rem; text-align:justify">
            We believe in holistic development, and students are encouraged to participate in various clubs and organizations, including the *Eco Club, **Student Development Council (SDC), **National Service Scheme (NSS), and **National Cadet Corps (NCC)*. These activities promote leadership, environmental awareness, and civic responsibility.
        </p>';
    }
    ?>
</div>

</section>
  <?php 
  include("./reuseable_files/footer.html");
  ?>     
             <!-- ----------------------- admission pop-up     -------------------------------------->
              
             <?php 
        include('./addmission_form/admission_form.html');
        ?>
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>  
    <script src="script/visitor_count.js"></script>
</body>
</html>
