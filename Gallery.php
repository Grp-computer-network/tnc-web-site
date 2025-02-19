<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="icon" type="image/x-icon" href="./assets//img//TNC_logo.png">
    <?php 
    include('./reuseable_files/style-php.html');
    ?>
   <link rel="stylesheet" href="css/tailwind.css">
   </head>
<body>
    <?php
    include("./reuseable_files/header.html");
    ?> <br>
  <header class="bg-[#a30000] text-white py-4">
    <div class="container mx-auto text-center">
      <h1 class="text-2xl font-bold" style="font-size: 30px;">Gallery</h1>
    </div>
  </header><br>
    <!-- Buttons for categories -->
    <div class="flex justify-center space-x-4 mb-6">
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="cultural">
            UKTI 2K24
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="sports">
            Sports DAY
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="freshers">
            Freshers Day
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="events">
            KAMARAJAR BIRTH-DAY
        </button>
    </div>

    <!-- Carousel -->
    <div class="relative max-w-4xl mx-auto overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
            <!-- Default images (Cultural) -->
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+1" alt="Cultural 1" class="rounded shadow-md" />
            </div>
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+2" alt="Cultural 2" class="rounded shadow-md" />
            </div>
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+3" alt="Cultural 3" class="rounded shadow-md" />
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-[#a30000] text-white p-2 rounded-full shadow-md z-10"
            id="prev">
            &larr;
        </button>
        <button
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#a30000] text-white p-2 rounded-full shadow-md z-10"
            id="next">
            &rarr;
        </button>
    </div>
</div>
<br>
<?php
    include('./reuseable_files/footer.html');
    ?>

    <!--Admission form-->
    <?php 
        include('./addmission_form/admission_form.html');  
    ?>
<script src="./script//gallery.js"></script>
<script src="script/fixed-nav.js"></script>  
<script src="./script/addmission.js"></script>
</body>
</html>