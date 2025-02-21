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
        <h1 style='font-size:23px; font-weight:bold;'>Administration</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="./Administration/leadership.html" class="iqac-link">Leadership</a></li>
                <li><a href="./Administration/committee-msg.html" class="iqac-link">Committee Members</a></li>
                <li><a href="./Administration/Academic-Leadership.html" class="iqac-link">Academics Leadership</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
    <?php
    // Check if 'page' parameter is set in URL
    if (isset($_GET['page'])) {
        $page = $_GET['page'];  
        
        // Define allowed pages to prevent security risks
        $allowed_pages = ['Academic-Leadership', 'committee-msg', 'leadership'];

        // If requested page is in the allowed list, include the corresponding HTML file
        if (in_array($page, $allowed_pages)) {
            include("Administration/$page.html");
        } else {
            echo "<h2>Invalid Section</h2><p>Sorry, the page you requested does not exist.</p>";
        }
    } else {
        // Default content when no submenu is selected
        echo '
        <header class=" text-white text-center py-5"  style="margin: 20px; background-color:#003366">
        <h1 class="text-3xl font-bold">Administration</h1>
        <p class="text-lg">Meet the Leadership of Thiruthangal Nadar College</p>
    </header>
    <br>
    <!-- Principals Message -->
    <section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-8">
        <h2 class="text-2xl font-bold text-blue-80" >Message from the Principal</h2>
        <p class="mt-4 text-gray-700">
            "Welcome to Thiruthangal Nadar College, where academic excellence meets innovation and leadership. 
            Our mission is to nurture talent, foster critical thinking, and prepare students for the dynamic world."
        </p>
        <p class="mt-2 font-semibold text-gray-900" style="margin-top: 30px;">📌 Dr. [Devi] <br> Principal</p>
    </section>
    <br>
    <!-- Administration Team -->
    <section class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold text-blue-800 text-center">Administration Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            
            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Principal</h3>
                <p class="text-gray-700">Dr.V [Devi]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 Vice Principal</h3>
                <p class="text-gray-700">Dr.K.C [Lathithabika]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 IQAC </h3>
                <p class="text-gray-700">Dr.S.B [Ninu]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg text-center">
                <h3 class="text-lg font-semibold">📌 E-Governance</h3>
                <p class="text-gray-700">Mrs.S [Sathya]</p>
            </div>
        </div>
    </section>
        <br>
    <!-- HODs Section -->
    <section class="max-w-5xl mx-auto mt-10">
        <h2 class="text-2xl font-bold text-blue-800 text-center">Heads of Departments</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <div class="bg-white p-5 shadow-md rounded-1g" >
                <h3 class="font-semibold">✅ M.Sc (Computer Science)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.A.Ambeth Raja]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ M.S.W (Social Work)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.K.Saradha Devi]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ M.Com (General)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.B.Jagadeeswaran]</p>
            </div>


            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Com (General)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.E.R.Jessie Kirubarai]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Com (Corporate Secretaryship)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.S.Anitha]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅  B.Com (Accounting and Finance)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.R.Sharmila]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Com (Computer Application)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.T.S.Rubakannan]</p>
            </div>

            
            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Com (Bank Management)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.C.Kandasamy]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Com (Information System Management)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.T.S.Rubakannan]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.B.A (Business Administration)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.B.Ravi Kumar]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.C.A (Computer Application)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.K.Somasundaram]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Computer Science)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.P.T.Kasthuri Bai]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Computer Science With AI)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.A.Yogameena]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Software Application)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.S.Lavanya]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Mathematics)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.S.Arun]</p>
            </div>

            
            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Chemisry)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.C.Karthick]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Plant Biology and Plant Bio Technology)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Dr.A.Janaki]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.Sc (Criminology and Criminal Justice Science)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.S.Jayasutha]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.A (English Literature)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.K.PammeNesakumari]</p>
            </div>

            
            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.A (English Literature)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.K.PammeNesakumari]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B.A (Tamil Literature)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mr.D.Sivakumar]</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">✅ B..S.W (Social Work)</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Prof. [Mrs.K.Saradha Devi]</p>
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
                <p class="text-gray-700" style="margin-top: 10px;">Handles syllabus design and academic policies.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Discipline Committee</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Ensures student discipline and ethical conduct.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Placement & Training Cell</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Helps students with career opportunities.</p>
            </div>

            <div class="bg-white p-5 shadow-md rounded-lg">
                <h3 class="font-semibold">📌 Research & Innovation Committee</h3>
                <p class="text-gray-700" style="margin-top: 10px;">Encourages student and faculty research projects.</p>
            </div>';
    }
    ?>
</div>

    </section>
    <br>
    
     
  <?php 
       include('./addmission_form/admission_form.html');
        ?>

<?php 
  include("./reuseable_files/footer.html");
  ?> 
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>
    <script src="script/visitor_count.js"></script>  
</body>
</html>
