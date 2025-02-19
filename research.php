<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>research</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    <?php 
    include('./reuseable_files/style-php.html');
    ?>
    <link rel="stylesheet" href="css/tailwind.css">
</head>
<body>
    <?php 
    include('./reuseable_files/header.html');
    ?>
    <div class="title-iqac">
            <h1 style='font-size:23px; font-weight:bold;'>Research</h1>
    </div>

    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="research/research_guidelines.html" class="iqac-link">Research Guidelines</a></li>
                <li><a href="research/phd_admission_guidelines.html" class="iqac-link">Ph.d Admission Guidelines</a></li>
                <li><a href="research/central_facilities.html" class="iqac-link">Central Facilities</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>

        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <header class="bg-[#a30000] text-white text-center py-6">
                <h1 class="text-3xl font-bold">About Research Cell</h1>
            </header><br>
            <hr>

            <main class="container mx-auto px-4 py-8">
                <!-- Introduction Section -->
                <section class="p-6 mb-8">
                    <p class="text-lg leading-relaxed" style="font-size: 20px; text-align:justify">The college has Research Cell which creates and encourages Research Culture among the Teaching faculties and students. It Organizes Seminars, Conferences, Training Programs and Workshops in Research Methodology and Research Topics. It Ensures Research Quality, Integrity and Ethics to Publish quality Research Papers. The research committee is constituted under IQAC to monitor and address issues related to research.</p>
                </section>

                <!-- Objectives Section -->
                <section class="bg-green-100 py-10">
                    <div class="container mx-auto px-4">
                        <h2 class="text-2xl font-semibold mb-6 text-center text-green-600">Objectives Of Research Cell</h2>
                        <div class="flex flex-wrap justify-center gap-8">
                            <div class="bg-white shadow-md rounded-lg p-6 w-96">
                                <p class="text-gray-600 mt-2">To encourage , maintain and support research activities in the college.</p>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-6 w-96">
                                <p class="text-gray-600 mt-2">To evaluate research proposals for research grants.</p>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-6 w-96">
                                <p class="text-gray-600 mt-2">Advise the college library on recent journals and publications.</p>
                            </div>
                            <div class="bg-white shadow-md rounded-lg p-6 w-96">
                                <p class="text-gray-600 mt-2">To ensure and maintain ethical standards of research in the college.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>

    <?php 
    include("./reuseable_files/footer.html");
    ?>

     <!-- admission pop-up-->
    <?php 
    include('./addmission_form/admission_form.html');  
    ?>
    
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>
</body>
</html>