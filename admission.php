<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission</title>
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
        <h1 style='font-size:23px; font-weight:bold;'>ADMISSION</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="admission/programme_offered.html" class="iqac-link">Programme Offered</a></li>
                <li><a href="admission/admission_guidelines.html" class="iqac-link">Guideliness For Admission</a></li>
                <li><a href="admission/online_application.html" class="iqac-link">Online Application & Prospectus</a></li>
                <li><a href="admission/fee_refund.html" class="iqac-link">Fee Refund Policy</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <main class="container mx-auto px-4 py-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Image Section -->
                        <div class="flex justify-center items-center p-8">
                            <img class="w-[600px] h-[600px]" src="/COLLEGE_WEB/assets/img/college-view(4).jpeg" alt="Admission Image">
                        </div>


                        <!-- Content Section -->
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-indigo-700">Join Our College</h2>
                            <p class="text-gray-600 mt-4">
                                Our college offers world-class education, modern facilities, and a supportive learning environment. Applications are now open for the 2024 academic session.
                            </p>
                            <ul class="list-disc list-inside mt-4 text-gray-600">
                                <li class="p-6"><strong>Eligibility:</strong> Check the criteria for undergraduate and postgraduate programs.</li>
                                <li class="p-6"><strong>Mandatory:</strong> Email Id and Phone Number are mandatory  for online application</li>
                                <li class="p-6"><strong>Application Process:</strong> Fill out the online form and submit required documents.</li>
                                <li class="p-6"><strong>Deadlines:</strong> Apply before <span class="text-indigo-700 font-semibold">June 30, 2024</span>.</li>
                                <li class="p-6"><strong>Scholarships:</strong> Explore our merit-based scholarships and financial aid options.</li>
                            </ul>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSccNidp2x3yYwGcqOmU1esIykH9Dw5yLbom4QV6oGcxfK1JoQ/viewform?pli=1" class="bg-green-600 text-gray px-6 py-3 rounded-lg text-lg font-semibold shadow-md hover:bg-indigo-700 text-white focus:outline-none focus:ring-4 focus:ring-indigo-300">Apply Now</a>
                        </div>
                    </div>
                </div>
            </main>

            <!-- FAQ Section -->
            <section class="container mx-auto px-4 py-8">
                <h2 class="text-2xl font-bold text-center text-gray-800">Frequently Asked Questions</h2>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- FAQ 1 -->
                    <div class="bg-white shadow-md p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-700">What programs are offered?</h3>
                        <p class="text-gray-600 mt-2">We offer undergraduate and postgraduate across various disciplines.</p>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="bg-white shadow-md p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-700">What are the application requirements?</h3>
                        <p class="text-gray-600 mt-2">Submit your transcripts, proof of identity, and any additional required documents.</p>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="bg-white shadow-md p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-700">Can international students apply?</h3>
                        <p class="text-gray-600 mt-2">Yes, we welcome applications from international students worldwide.</p>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <?php 
    include('./reuseable_files/footer.html');
    ?>

    <!--Admission Form -->
    <?php 
       include('./addmission_form/admission_form.html'); 
    ?>
    <!--Form End-->  

    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>  
</body>
</html>
