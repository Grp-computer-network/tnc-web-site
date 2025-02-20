<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department of Computer Science</title>
    <script src="https://cdn.tailwindcss.com"></script>    
    <?php 
    include('./reuseable_files/style-php.html');
    ?>
</head>
<body class="bg-gray-100">
    <?php
    include("./reuseable_files/header.html");
    ?> <br> 
    <div class="max-w-5xl mx-auto p-6">
        <!-- Department Header -->
        <div class="bg-red-600 text-white p-6 rounded-lg text-left">
            <h1 class="text-3xl font-bold">Department of Computer Science</h1>
        </div>

        <!-- Department Introduction -->
        <div class="bg-white p-6 shadow-lg mt-6 rounded-lg">
            <p class="text-gray-700 text-lg">
                The Department of Computer Science at Thiruthangal Nadar College offers cutting-edge education and research opportunities in software development, AI, cybersecurity, and more. With expert faculty, state-of-the-art labs, and industry collaborations, we equip students with the skills needed for the evolving tech landscape. Our programs emphasize problem-solving, creativity, and hands-on experience to prepare future technology leaders. Join us to innovate and shape the future of computing!
            </p>
        </div>

        <!-- Faculty Section -->
        <div class="mt-10">
            <h2 class="text-2xl font-bold text-red-600">Experienced Department Faculties</h2>
            <div class="mt-6 grid md:grid-cols-2 gap-6">
                <!-- Faculty Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center">
                    <div class="md:w-1/3">
                        <img src="https://via.placeholder.com/150" alt="Faculty Image" class="w-32 h-32 rounded-full object-cover">
                    </div>
                    <div class="md:w-2/3 md:ml-4 text-center md:text-left">
                        <h3 class="text-xl font-bold">Dr. P.T. Kasthuri Bai</h3>
                        <p class="text-gray-600">Head, Department of Computer Science<br>MCA, M.Phil., NET, Ph.D.</p>
                    </div>
                </div>

                <!-- Faculty Card 2 -->
                <div class="bg-red-600 text-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row items-center">
                    <div class="md:w-1/3">
                        <h3 class="text-xl font-bold">Staff of Computer Science</h3>
                    </div>
                    <div class="md:w-2/3 md:ml-4 text-center md:text-left">
                        <p class="mt-4 text-lg font-bold">Mr. T. Prem Kumar</p>
                        <p class="text-white">With 10+ years of experience in software development, research, and mentoring, he is dedicated to inspiring students in the field of computer science.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("./reuseable_files/footer.html");
    ?>
</body>
</html>