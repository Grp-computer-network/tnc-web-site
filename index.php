<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiruthangal Nadar college | Academic Excellence</title>
    <link rel="icon" type="image/x-icon" href="/COLLEGE_WEB/assets//img//TNC_logo.png">
    <meta name="description" content="Thiruthangal nadar college offers quality education,holistics student development, and state-of-the-art facilities in North chennai.">
    <?php
    include('./reuseable_files/style.html');
    ?>
</head>

<body>
    <!--- header section-->
    <?php
    include("./reuseable_files/header.html");
    ?> <br>
    <!--Hero Banner-->
    <!------------------------------------------------------------------------------------------------ -->
    <!--  companies visisted -->
    <div class="counter-container">
        <div class="counter">
            <h1 class="counter-title" >Companies Visited</h1>
            <div id="companiesVisited" class="counter-value">0+</div>
        </div>
        <div class="counter">
            <h1 class="counter-title">No Of Students Placed</h1>
            <div id="studentsPlaced" class="counter-value">0+</div>
        </div>
        <div class="counter">
            <h1 class="counter-title">Students With Multiple Offers</h1>
            <div id="studentsWithOffers" class="counter-value">0+</div>
        </div>
        <div class="counter">
            <h1 class="counter-title">Highest Package For Current Year</h1>
            <div id="highestPackage" class="counter-value">0+</div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------ -->
    <!--Campus tour -->
    <div class="container-5">
        <!-- Left Section with Background Image and Video -->
        <div class="left-section">
            <video controls>
                <source src="campus-tour.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
        </div>
      
        <!-- <a href="#" class="annual-calendar-btn">Annual Academic Calendar 2024-25 →</a> -->
    </div>
    </div>
    <!------------------------------------------------------------------------------------------------ -->
    <!--Management message -->
    <div class="profile-section">
        <div class="college-info-1">
            <h2>Thiruthangal Nadar College</h2>
            <p style="text-align: justify;">Thiruthangal Nadar College, established in the year 1997 as the college for
                   men was upgraded as a co-educational institution in the year 2002 to cater to the
                   needs of the North Chennai Women and their empowerment. It is a Self-financing
                   institution affiliated to the University of Madras. It was instituted by the magnanimous
                   members of the Chennaivazh Thiruthangal Hindu Nadar Uravinmurai Dharma Fund with
                   a deep sense of generosity and compassion to the under-privileged student community.
                   The benevolent members of the Management have extended their exemplary services
                   in the field of education with an exuberant spirit of facilitating and providing wider
                   opportunities to the youth from different backgrounds. The motto of the institution
                   "Knowledge is Power" is pre-eminently enshrined to ignite and enlighten the minds of
                   the youngsters through education by dispelling the darkness of ignorance</p>
            <div class="accreditation">
                <img src="./assets/img/Naac.logo.jpg" alt="NAAC Accreditation Badge">
                <!-- <span>CGPA 2.90 - B++</span> -->
            </div>
            <h2>Vision</h2>
            <p>To disseminate knowledge and foster in our students positive and critical thinking besides intellectual skils to become empowered beings.</p>
            <h2>Mission</h2>
            <p>To provide quality and need-based education to student with faclities.</p>
        </div>
        <div class="profile-cards">

            <div class="profile-card">
                <img src="./assets/img/Thiru.A.Narayana-Murthy-Secretary.jpg" alt="Secretary">
                <h3>Secretary & Correspondent</h3>
                <p>Thiru A.Narayana Murthy<br>M. Tech.</p>
                <button onclick="secretary()">Message from Secretary</button>
            </div>
            <div class="profile-card">
                <img src="./assets/img/principal.jpeg" alt="Principal">
                <h3>Principal</h3>
                <p>Dr. V. DEVI <br>M.B.A., M.C.A., M.Phil., Ph.D.,</p>
                <button onclick=" princpal()">Message from Principal</button>
            </div>
        </div>
    </div>

    <!-- principal Modal Structure -->
    <div id="principalMessageModal" class="principal">
        <div class="principal-content">
            <span class="close" onclick="principal_close()">&times;</span>
            <h3>Message from Principal</h3>
            <p>
                Thiruthangal Nadar College is at the threshold of celebrating its Silver Jubilee.We provide holistic education in the northern part of Chennai where literacy is of less significance.Thiruthangal Nadar College is a proud mission driven community providing a classic education, celebrating the fact that each student is different, as a person and as a learner.Students are motivated to grab every opportunity that comes their way which would not only help in their holistic growth but also strengthen their belief in teamwork, which is important in this fast-paced world.
            </p>
            <p>At TNC we enable students to understand the importance of emotional balance, critical thinking, and most importantly accepting failure graciously.Pupils are empowered in such a manner that they act as representatives of a meaningful and value-based society. We have a team of fabulous faculty members who display boundless energy and intense commitment which keeps the ethos of our institution shining brightly.
            </p>
            <p>Even as we impart education to match the advancement in technology and globalization, we march our students ahead with ethos of moral values and principles. We constantly instill these qualities in our children. We pride ourselves to help them grow and develop into sensitive and responsible citizens of the future.</p>
            <p>We foster a positive spirit and believe in partnership between students, parents, teachers and support staff striving to create a milieu that sustains excellence.</p>
        </div>
    </div>

    <!-- sectretary Modal Structure -->
    <div id="SecretaryMessageModal" class="secretary">
        <div class="secretary-content">
            <span class="close" onclick="secretary_close()">&times;</span>
            <h3>Message from Secretary </h3>
            <p>Thiruthangal Nadar College has been a forerunner in recognizing the needs of the industry and integrating knowledge with professional inputs.</p>
            <p>Our college is one of the most eminent Higher Education Institutions in North Chennai today, and it is renowned for the standards of its facilities, students and alumni. By maintaining a team of core faculty members, who are constantly pushing the frontiers of knowledge, we ensure a futuristic approach that keeps pace with the changing trends in the professional world through our global perspective.</p>
            <p> Our primary commitment is to provide education to poor students and find the true potential of our students and equip them for the future, by providing them with the necessary skills, knowledge, and values. </p>
            <p> We achieve this goal through our unrelenting efforts to enhance Quality in Education and Diversity in our campus..I consider this a great opportunity, privilege, and an honour to lead such a progressive educational establishment.</p>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------ -->

    <!--Schools of excellence-->

    <div class="header-s-o-e">
        <h1>Center of Excellence</h1>
    </div>

    <div class="container-s-e-o">
        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="">
            <div class="school-content">
                <div class="school-name" style="background-color: #0fc2c0;">TNC Centre For Research</div>
                <div class="school-details">
                    <p>Dr.N.Santhana Vadivu</p>
                    <p>M.Com., M.B.A., M.Phil., Ph.D.,</p>
                    <p>Head - Research</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="./assets//center of excelence//sathya-mam.jpg" alt="Dr. J. Jayanthi">
            <div class="school-content">
                <div class="school-name" style="background-color: #0caba8;">TNC Centre for e-governance</div>
                <div class="school-details">
                    <p>Mrs.Sathya</p>
                    <p>M.C.A., M.E., NET.,</p>
                    <p>Head E-governence</p>
                </div>
            </div>
        </div>

        <div class="school-box">

            <img src="./assets//center of excelence//rajeshwari-joe-mam.jpeg" alt="Dr. K. Shanthi">
            <div class="school-content">
                <div class="school-name" style="background-color: #008f8c;">TNC Incbation Cell</div>
                <div class="school-details">
                    <p>Dr.A.J.Rajeshwari Joe</p>
                    <p>M.C.A., M.Phil., Ph.D.,</p>
                    <p>Incubation Cell </p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="./assets//center of excelence//prabakaran-sir.jpeg" alt="Dr. K. Umadevi">
            <div class="school-content">
                <div class="school-name" style="background-color:  #0fc2c0;">Placement Cell</div>
                <div class="school-details">
                    <p>Mr.K.Prabhakaran</p>
                    <p>Placement Officer.</p>
                    <p>Career Guidance and Placement Cell</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="./assets//center of excelence//rishi-sir.jpeg" alt="Dr. Shakila M.K">
            <div class="school-content">
                <div class="school-name" style="background-color:  #0caba8;">TNC Media Centre</div>
                <div class="school-details">
                    <p>Mr.Jothi Vignesh Rishi</p>
                    <p>MBA, M.Phil.</p>
                    <p>Head - TNC Media</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="./assets//center of excelence//MANGAI.jpg" alt="Dr. S. Nirmala Devi">
            <div class="school-content">
                <div class="school-name" style="background-color:  #008f8c;">Student Development Council</div>
                <div class="school-details">
                    <p>Mrs.k.Mangai</p>
                    <p>M.com.,M.B.A.,NET.,ET.,</p>
                    <p>SDC CO-oridinator</p>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------ -->

    <!--TOP Recruiters-->
    <div class="recruiters-section-1"></div>
    <center>
        <h2 style="color: #003366; font-size: 30px;">Our Top Recruiters</h2>
    </center>
    <div class="scroll-container-1">
        <div class="scroll-content-1">
            <img src="./assets/top-recuriters-img/accealtcare1.png" alt="Recruiter 1">
            <img src="./assets/top-recuriters-img/apolli1.jpg" alt="Recruiter 2">
            <img src="./assets/top-recuriters-img/cap.jpg" alt="Recruiter 3">
            <img src="./assets/top-recuriters-img/cl1.png" alt="Recruiter 4">
            <img src="./assets/top-recuriters-img/icici.jpg" alt="Recruiter 5">
            <img src="./assets/top-recuriters-img/infy.jpg" alt="Recruiter 6">
            <img src="./assets/top-recuriters-img/justdial.jpg" alt="Recruiter 7">
            <img src="./assets/top-recuriters-img/Pyroferus-Image.png" alt="Recruiter 8">
            <img src="./assets/top-recuriters-img/tcs1.png" alt="Recruiter 9">
            <img src="./assets/top-recuriters-img/tmb1.png" alt="Recruiter 10">
            <img src="./assets/top-recuriters-img/yes-300x117.png" alt="Recruiter 11">
            <!-- Add more recruiter logos here -->
        </div>
    </div>
    </div>
    <!------------------------------------------------------------------------------------------------ -->
    <!-- footer section-->
    <?php
    include("./reuseable_files/footer.html");
    ?>

    <!-- First Pop-up -->
<!-- <div id="popup1" class="modal">
  <div class="modal-content">
    <img src="assets\img\popup.jpeg" alt="First Announcement">
  </div>
  <button class="close-btn" onclick="closePopup('popup1', 'popup2')">Close</button>
</div>

 Second Pop-up -->
<!-- <div id="popup2" class="modal" style="display: none;">
  <div class="modal-content">
    <img src="second-image.jpg" alt="Second Announcement">
  </div>
    </a>
  <button class="close-btn" onclick="closePopup('popup2', null)">Close</button>
</div> --> 

    <!--------------------------------------------------------------------------------------------------->
    <!--Modal Pop-up Poster end-->
    <?php
    include('./addmission_form/admission_form.html');
    ?>
    <script>
      function showSection(section) {
            document.getElementById('announcements').style.display = (section === 'announcements') ? 'block' : 'none';
            document.getElementById('events').style.display = (section === 'events') ? 'block' : 'none';
            
            document.getElementById('tab-announcements').classList.toggle('active', section === 'announcements');
            document.getElementById('tab-events').classList.toggle('active', section === 'events');
        }
    </script>
    <!--Form End-->
    <script src="script/addmission.js"></script>
    <script src="script/fixed-nav.js"></script>
    <script src="script/principal_msg.js"></script>
    <script src="script/secretary_msg.js"></script>
    <script src="./script/script.js"></script>
    <script src="script/company-count.js"></script>
    <script src="script/visitor_count.js"></script>
    <script src="script/popup.js"></script>
</body>
</html>