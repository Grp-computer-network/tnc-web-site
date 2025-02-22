<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student_life</title>
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
<!------------------------------------------------------------------------------------------------ -->
<div class="title-iqac">
    <h1 style='font-size:23px; font-weight:bold;'>Student Life</h1>
</div>
<!-- IQAC Section -->
<section id="iqac-container">
    <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="./student_life/sports.html" class="iqac-link">Sports</a></li>
            <li><a href="./student_life/NCC.HTML" class="iqac-link">NCC</a></li>
            <li><a href="./student_life/NSS.html" class="iqac-link">NSS</a></li>
            <li><a href="./student_life/ombudsperson.html" class="iqac-link">Ombudsperson</a></li>
            <li><a href="./student_life/internal_complaint_committee.html" class="iqac-link">Internal Complaint Committee</a></li>
            <li><a href="./student_life/anti-ragging-cell.html" class="iqac-link">Anti Ragging Committee</a></li>
            <li><a href="./student_life/equal_opportunities.html" class="iqac-link">Equal Opportunity Cell</a></li>
            <li><a href="./student_life/student_grivenace.html" class="iqac-link">Student Grievenace Redressal</a></li>
            <li><a href="./student_life/Health-facilities.html" class="iqac-link">Health Facilities</a></li>
            <li><a href="./student_life/diff-able.html" class="iqac-link">Facilities For Differently Abled</li>
    </nav>        

    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content">
    <?php
    // Check if 'page' parameter is set in URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];  
        
        // Define allowed pages to prevent security risks
        $allowed_pages = ['anti-ragging-cell', 'diff-able', 'equal_opportunities', 'Health-facilities', 'internal_complaint_committee', 'NCC', 'NSS','ombudsperson','sports','student_grivenace'];

        // If requested page is in the allowed list, include the corresponding HTML file
        if (in_array($page, $allowed_pages)) {
            include("student_life/$page.html");
        } else {
            echo "<h2>Invalid Section</h2><p>Sorry, the page you requested does not exist.</p>";
        }
    } else {
        // Default content when no submenu is selected
        echo '
        <section class="relative bg-green-500 text-white">
    <div class="container mx-auto text-center py-16">
      <h2 class="text-2xl font-semibold mb-4">Explore the Vibrant Student Life</h2>
      <p class="text-lg mb-6" style="color:black">Learn, grow, and thrive in an environment that nurtures talent and inspires excellence.</p>
      <a href="#features" class="bg-white text-green-600 px-6 py-3 rounded-lg shadow-lg font-semibold hover:bg-gray-200 transition">Discover More</a>
    </div>
    <div class="absolute inset-0 bg-green-700 bg-opacity-20"></div>
  </section>

  <!-- Features Section -->
  <section id="features" class="container mx-auto py-12">
    <h3 class="text-3xl font-bold text-center mb-8">Why Students Love Our College</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <div class="mb-4">
          <svg class="w-16 h-16 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.042 12.042 0 0112 14z" />
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-2">State-of-the-Art Facilities</h4>
        <p class="text-gray-600">Access modern labs, libraries, and recreational areas to enhance your learning experience.</p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <div class="mb-4">
          <svg class="w-16 h-16 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v8M3 13a4 4 0 008 0m-6 6h12m-6-6V6" />
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-2">Thriving Campus Life</h4>
        <p class="text-gray-600">Participate in clubs, cultural fests, and competitions to discover your hidden talents.</p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <div class="mb-4">
          <svg class="w-16 h-16 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4m16 0l-4-4m4 4l-4 4M4 12l4-4m-4 4l4 4" />
          </svg>
        </div>
        <h4 class="text-xl font-bold mb-2">Supportive Community</h4>
        <p class="text-gray-600">Learn and grow with supportive peers and faculty who are committed to your success.</p>
      </div>
    </div>
  </section>';
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

