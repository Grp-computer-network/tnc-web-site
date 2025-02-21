<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    <?php 
    include('./reuseable_files/style-php.html');
    ?>
   </head>
   <body>
   <?php
   include("./reuseable_files/header.html");
   ?>    
   <!------------------------------------------------------------------------------------------------ -->
   <div class="title-iqac">
       <h1 style='font-size:23px; font-weight:bold;'>About us</h1>
   </div>
   <!-- IQAC Section -->
   <section id="iqac-container">
       <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="about/history.html" class="iqac-link">History</a></li>
            <li><a href="about/instutuional-development.html" class="iqac-link">Institutional Development Plan</a></li>
            <li><a href="about/committee-msg.html" class="iqac-link">Committee of Management</a></li>
            <li><a href="about/insitution-polices.html" class="iqac-link">Institution Policies</a></li>
            <li><a href="about/organogram.html" class="iqac-link">Organogram</a></li>
            <li><a href="about/annual-reports.html" class="iqac-link">Annual Reports</a></li>
            <li><a href="about/accreditation.html" class="iqac-link">Accreditation</a></li>
        </ul>
    </nav>

    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content" class="about">
    <?php
    // Check if 'page' parameter is set in URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];  
        
        // Define allowed pages to prevent security risks
        $allowed_pages = ['history', 'instutuional-development', 'committee-msg', 'insitution-polices', 'organogram', 'annual-reports', 'accreditation'];

        // If requested page is in the allowed list, include the corresponding HTML file
        if (in_array($page, $allowed_pages)) {
            include("about/$page.html");
        } else {
            echo "<h2>Invalid Section</h2><p>Sorry, the page you requested does not exist.</p>";
        }
    } else {
        // Default content when no submenu is selected
        echo '
        <h2>About us</h2>
        <hr>
        <p style="font-size: 1.3rem;text-align: justify;">   
        <b>Thiruthangal Nadar College</b>, established in 1997, is a leading co-educational private institution affiliated with the University of Madras. Initially founded as a men’s college, it transitioned to a co-educational institution in 2002, empowering women in North Chennai by providing them with quality education and expanding opportunities.
        </p>
        <p style="font-size: 1.3rem;text-align: justify;">
            The college was founded by the Chennaivazh Thiruthangal Hindu Nadar Uravinmurai Dharma Fund, driven by a mission to support the underprivileged student community. The dedicated management is committed to providing accessible education, fostering students intellectual and personal growth through the college’s motto, <b>"Knowledge is Power."</b> Our primary focus is to ignite the minds of students, dispelling ignorance and promoting enlightenment through a comprehensive educational experience.</p>
        
        <h2>Academic Programs</h2> <hr>
        <p style="font-size: 1.3rem;text-align: justify;">
            We offer a variety of <b>undergraduate (UG)</b> and <b>postgraduate (PG)</b> programs in the arts and sciences. These programs are designed to equip students with the knowledge, skills, and values necessary for personal and professional success. Accredited with a <b>B++</b> rating, Thiruthangal Nadar College has earned recognition for its commitment to academic excellence.
        </p>
        <h2>Student Life and Extracurricular Activities</h2><hr>
        <p style="font-size: 1.3rem;text-align: justify;">
            We believe in holistic development, and students are encouraged to participate in various clubs and organizations, including the <b>Eco Club,Student Development Council (SDC),National Service Scheme (NSS),</b>  and <b>National Cadet Corps (NCC)</b>. These activities promote leadership, environmental awareness, and civic responsibility.
        </p></p>';
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
     <!-- javascript-files-->   
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>
    <script src="script/visitor_count.js"></script>  
</body>
</html>