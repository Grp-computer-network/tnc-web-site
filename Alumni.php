<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php 
    include('reuseable_files/style.html');
    ?>
</head>
<body>
  <?php
  include("reuseable_files/header.html");
  ?>
  <br>

    <div class="container mx-auto py-8 px-4">
        <!-- Featured Image -->
        <div class="p-6 bg-gray-100">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
              <h2 class="text-2xl font-bold text-center text-blue-700 border-b-2 border-blue-700 py-4">Alumni Members</h2>
              <table class="table-auto w-full border-collapse border border-gray-300">
                <thead class="bg-blue-700 text-white">
                  <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Designation</th>
                  </tr>
                </thead>
                <tbody class="bg-gray-50">
                  <tr class="hover:bg-blue-100">
                    <td class="border border-gray-300 px-4 py-2">Dr.V.Devi</td>
                    <td class="border border-gray-300 px-4 py-2">Principal</td>
                  </tr>
                  <tr class="hover:bg-blue-100">
                    <td class="border border-gray-300 px-4 py-2">Mr.K.ShanmugaRajan</td>
                    <td class="border border-gray-300 px-4 py-2">Vice President</td>
                  </tr>
                  <tr class="hover:bg-blue-100">
                    <td class="border border-gray-300 px-4 py-2">Mr.K.Somasundaram</td>
                    <td class="border border-gray-300 px-4 py-2">Secretary</td>
                  </tr>
                  <tr class="hover:bg-blue-100">
                    <td class="border border-gray-300 px-4 py-2">Mr.S.Arun</td>
                    <td class="border border-gray-300 px-4 py-2">Assistant Secretary</td>
                  </tr>
                  <tr class="hover:bg-blue-100">              
                    <td class="border border-gray-300 px-4 py-2">Mr.T.Premkumar</td>
                    <td class="border border-gray-300 px-4 py-2">Treasurer</td>
                  </tr>
                  <tr class="hover:bg-blue-100">    
                    <td class="border border-gray-300 px-4 py-2">Mrs.R.EmmimmalRajathi</td>
                    <td class="border border-gray-300 px-4 py-2">Member</td>
                  </tr>
                  <tr class="hover:bg-blue-100">                 
                    <td class="border border-gray-300 px-4 py-2">Mrs.Sandhya Sabu</td>
                    <td class="border border-gray-300 px-4 py-2">Member</td>
                  </tr>
                  <tr class="hover:bg-blue-100"> 
                    <td class="border border-gray-300 px-4 py-2">Ms.P. Harini</td>
                    <td class="border border-gray-300 px-4 py-2">Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>

    <h1 class="text-2xl font-bold text-center mt-6">Alumni Photos</h1><br>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 bg-white rounded-lg shadow-md p-3 mt-3">
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img1.jpeg" alt="Image 1">
      </div>
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img2.jpeg" alt="Image 2">
      </div>
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img5.jpeg" alt="Image 4">
      </div>
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img6.jpeg" alt="Image 5">
      </div>
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img7.jpeg" alt="Image 6">
      </div>
      <div class="flex justify-center">
          <img class="h-64 w-full object-cover rounded-lg" src="./assets/alumni_img/alumni_img4.jpeg" alt="Image 3">
      </div>
    </div>



    <h1 class="text-2xl font-bold text-center mt-6">Alumni Interface</h1><br>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4 bg-white rounded-lg shadow-md p-4 mt-3">
    <div class="flex justify-center items-center space-x-4">
        <img class="h-64 w-auto sm:w-4/5 md:w-3/4 lg:w-1/2 object-cover rounded-lg" src="./assets/alumni_img/alumni_interface1.jpg" alt="Alumni Interface 1">
        <img class="h-64 w-auto sm:w-4/5 md:w-3/4 lg:w-1/2 object-cover rounded-lg" src="./assets/alumni_img/alumni_interface2.jpg" alt="Alumni Interface 2">
    </div>
</div>


<div class="bg-white py-4 px-6 md:px-8">
    <h2 class="text-center text-3xl font-bold text-gray-800 mb-8">
        <a href="#">Alumni Report</a>
    </h2>

    <div class="flex flex-col md:flex-row gap-4">
        <a href="../COLLEGE_WEB/IQAC reports/alumni_files/Alumni_Society.pdf" target="_blank" class="bg-red-700 text-white flex items-center justify-between py-3 px-4 rounded shadow hover:bg-red-800 text-xl w-full md:w-1/3">
            Alumni Society
            <span class="ml-2 text-white"><i aria-hidden="true" class="fas fa-file-pdf"></i></span>
        </a>

        <a href="../COLLEGE_WEB/IQAC reports/alumni_files/Alumni_Meet_Report_2024.pdf" target="_blank" class="bg-red-700 text-white flex items-center justify-between py-3 px-4 rounded shadow hover:bg-red-800 text-xl w-full md:w-1/3">
            Alumni Report 2024
            <span class="ml-2 text-white"><i aria-hidden="true" class="fas fa-file-pdf"></i></span>
        </a>

        <a href="../COLLEGE_WEB/IQAC reports/alumni_files/Alumni_Meet_Report_2023.pdf" target="_blank" class="bg-red-700 text-white flex items-center justify-between py-3 px-4 rounded shadow hover:bg-red-800 text-xl w-full md:w-1/3">
            Alumni Report 2023
            <span class="ml-2 text-white"><i aria-hidden="true" class="fas fa-file-pdf"></i></span>
        </a>
    </div>
</div>



    <?php
       include("reuseable_files/footer.html");
     ?>
        <script src="script/fixed-nav.js"></script> 
        <script src="script/visitor_count.js"></script>  
</body>
</html>