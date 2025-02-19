<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/IQAC/iqac.css">
    <link rel="stylesheet" href="./css/home-content-style/styles.css">
    <link rel="stylesheet" href="./css/home-content-style/footer.css">
    <link rel="stylesheet" href="./css/home-content-style/addmission.css">
    <link href="./css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php 
    include('./reuseable_files/header.html');
    ?>
<br>
    <header class="bg-[#a30000] text-white text-center py-6" >
        <h1 class="text-3xl font-bold">Contact Us</h1>
    </header><br>


    <div class="container mx-auto px-4 py-16">
        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-red-600">Get in Touch</h1>
            <p class="text-lg text-gray-600 mt-2">We'd love to hear from you. Please reach out with any questions or concerns!</p>
        </header>

        <!-- Help Desk Section -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">
                Need Assistance? <span class="text-red-600">Our Help Desk</span> Is Here for You!
            </h2>
            <div class="bg-[#003366] text-white rounded-xl shadow-2xl p-10 relative overflow-hidden">
                <!-- Content Block -->
                <div class="relative text-center">
                    <h3 class="text-2xl font-extrabold mb-4 flex items-center justify-center space-x-2">
                        <i class="fas fa-user-tie text-yellow-300 text-3xl"></i>
                        <span>Mr. S. Bernard Selvam, B.A.</span>
                    </h3>
                    
                    <p class="text-lg font-medium mb-4 flex items-center justify-center space-x-3">
                        <i class="fas fa-phone-alt text-yellow-300"></i>
                        <span>Contact:</span>
                        <span class="font-semibold">8667882141</span>,
                        <span class="font-semibold">8608768629</span>
                    </p>
                    
                    <p class="text-md italic">
                        "Feel free to reach out for assistance or queries regarding college activities and services."
                    </p>
                </div>
            </div>
        </section>


        <!-- Grievance Form Section -->
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Grievance Form</h2>
            <div class="flex justify-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfehcLL8eLfyH3js6URpelSvQZzvqxfGQbUC1fRHadLkW4_wA/viewform" target="_blank">
                    <button class="px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                        Submit Grievance
                    </button>
                </a>
            </div>
        </section>

        <!-- Contact Information Section -->
        <section class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-gray-800">Phone</h3>
                    <p class="text-gray-600 mt-2">044 – 25941717 / 044 – 25942525</p>
                </div>
                <div class="text-center bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                    <p class="text-gray-600 mt-2">principal@thiruthangalnadarcollege.edu.in</p>
                </div>
                <div class="text-center bg-white p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                    <h3 class="text-lg font-semibold text-gray-800">Address</h3>
                    <p class="text-gray-600 mt-2">Thiruthangal Nadar College Selavayal, Near Kannadasan Nagar, Chennai</p>
                </div>
            </div>
        </section>

        <!-- Google Maps Section -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Our Location</h2>
            <div class="w-full h-64 sm:h-96 md:h-96 lg:h-96 rounded-lg overflow-hidden shadow-lg">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.2621807748387!2d80.25333067425431!3d13.145855287185736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52656b148ae53b%3A0x8b690a8f30f89ea7!2sThiruthangal%20Nadar%20College!5e0!3m2!1sen!2sin!4v1726242371858!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
    </div>

    <?php 
    include("./reuseable_files/footer.html");
    ?>

    <!-- Admission pop-up -->
    <?php 
    include('./addmission_form/admission_form.html');  
    ?>

    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
    <script src="script/fixed-nav.js"></script>
</body>
</html>
