<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminstration</title>
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
        <h1 style='font-size:23px; font-weight:bold;'>Adminstration</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="./Administration//leadership.html" class="iqac-link">Leadership</a></li>
                <li><a href="./Administration//committee-msg.html" class="iqac-link">Committee Members</a></li>
                <li><a href="./Administration//Academic-Leadership.html" class="iqac-link">Academics Leadership</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
        <header class=" text-white text-center py-5"  style="margin: 20px; background-color:#003366">
        <h1 class="text-3xl font-bold">Administration</h1>
        <p class="text-lg">Meet the Leadership of Thiruthangal Nadar College</p>
    </header>
    <br>
    <!-- Principal's Message -->
    <section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-8">
        <h2 class="text-2xl font-bold text-blue-80" >Message from the Principal</h2>
        <p class="mt-4 text-gray-700">
            "Welcome to Thiruthangal Nadar College, where academic excellence meets innovation and leadership. 
            Our mission is to nurture talent, foster critical thinking, and prepare students for the dynamic world."
        </p>
        <p class="mt-2 font-semibold text-gray-900">📌 Dr. [Devi] <br> Principal</p>
    </section>
    <br>
    <!-- Administration Team -->
    <section class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold text-blue-800 text-center">Administration Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            
            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Principal</h3>
                <p class="text-gray-700">Dr. [Devi]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Vice Principal</h3>
                <p class="text-gray-700">Prof. [Asaithambi]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Vice principal</h3>
                <p class="text-gray-700">Mr./Ms. [Lathithabika]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Controller of Examinations</h3>
                <p class="text-gray-700">Dr. [Name]</p>
            </div>
        </div>
    </section>
        <br>
    <!-- HODs Section -->
    <section class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold text-blue-800 text-center">Heads of Departments</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ Computer Science</h3>
                <p class="text-gray-700">Prof. [Name]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ Commerce</h3>
                <p class="text-gray-700">Prof. [Name]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ Management Studies</h3>
                <p class="text-gray-700">Prof. [Name]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ Science (Physics, Chemistry, Mathematics)</h3>
                <p class="text-gray-700">Prof. [Name]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ Humanities</h3>
                <p class="text-gray-700">Prof. [Name]</p>
            </div>
        </div>
    </section>
    <br>
    <!-- College Committees -->
    <section class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold  text-center">College Committees</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-6">
            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Academic Council</h3>
                <p class="text-gray-700">Handles syllabus design and academic policies.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Discipline Committee</h3>
                <p class="text-gray-700">Ensures student discipline and ethical conduct.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Placement & Training Cell</h3>
                <p class="text-gray-700">Helps students with career opportunities.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Research & Innovation Committee</h3>
                <p class="text-gray-700">Encourages student and faculty research projects.</p>
            </div>
        </div>
    </section>
    <br>
    <!-- Contact Information -->
    <section class="max-w-4xl mx-auto  text-white text-center py-6 mt-10 rounded-lg  " style="background-color: #003366;">
        <h2 class="text-2xl font-bold text-white" style="color:#fff">Contact Information</h2>
        <p class="mt-4">📌 Thiruthangal Nadar College, Selavoyal, Chennai - 600051, Tamil Nadu, India.</p>
        <p class="mt-2">📧 Email: <a href="mailto:admin@tncollege.edu" class="underline">admin@tncollege.edu</a></p>
        <p class="mt-2">📞 Phone: +91 XXXXXXXXXX</p>
        <p class="mt-2">🕘 Office Hours: Monday - Saturday | 9:00 AM - 5:00 PM</p>
        </section> <br>
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