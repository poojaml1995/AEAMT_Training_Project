<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprenticeship / Internship / Final Year Project work Information.php - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <!-- Only include the necessary Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<?php include('./includes/connection.php'); ?>

<main>

                <!-- header -->

                <nav class="navbar navbar-expand-lg header-custom">
                    <div class="container-fluid d-flex align-items-center">
                        <a class="header-logo" href="./index.php">
                            <img src="assets/images/aeamt_logo.png" alt="AEAMT Logo" width="90" height="50">
                        </a>
                        <div class="mx-auto text-center">
                            <h3 class="mb-0 text-white">Central Manufacturing Technology Institute</h3>
                        </div>
                        <a class="header-logo">
                            <a href="https://cmti.res.in/" target="_blank">
                                <img src="assets/images/cmti.png" alt="CMTI Logo" width="70" height="50">
                            </a>
                        </a>
                    </div>
                </nav>
   
                <?php include('./includes/navbar.php'); ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <img src="./assets/images/Apprenticeship_Internship.jpg" alt="bg-image" style="width: 100%; height: 80%;">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col mb-4">
                            <h4>Apprenticeship / Internship / Final Year Project work Information</h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="Overview-tab" data-bs-toggle="tab" data-bs-target="#Overview" type="button" role="tab" aria-controls="Overview" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Features-tab" data-bs-toggle="tab" data-bs-target="#Features" type="button" role="tab" aria-controls="Features" aria-selected="false">Key Features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Facilities-tab" data-bs-toggle="tab" data-bs-target="#Facilities" type="button" role="tab" aria-controls="Facilities" aria-selected="false">Training Facilities</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Benefits-tab" data-bs-toggle="tab" data-bs-target="#Benefits" type="button" role="tab" aria-controls="Benefits" aria-selected="false">Benefits</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="Apply-tab" data-bs-toggle="tab" data-bs-target="#Apply" type="button" role="tab" aria-controls="Apply" aria-selected="false">How To Apply</button>
                            </li>
                        </ul>

                        <div class="tab-content mb-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                <h5>Apprenticeship</h5>
                                <p>The apprenticeship program is designed to provide practical, on-the-job training to eligible 
                                candidates in various disciplines, including engineering and general streams. This program is 
                                conducted under the Apprenticeship Act 1961 and the Apprenticeship (Amendment) Rules 2019, as 
                                amended from time to time. It aims to help participants gain industry-relevant skills and 
                                experience over the course of one year.</p>
                                <h5>Internship & Final Year Project work</h5>
                                <p>Internship opportunities are available for Pre-Final and Final Year students pursuing 
                                    Graduate and Post Graduate degrees in engineering fields such as Mechanical, Electrical, 
                                    Electronics, Computer Science, and other related disciplines. These internships are initiated 
                                    by the Ministry of Heavy Industries, Government of India, and aim to provide students with 
                                    hands-on experience to solve industry-relevant problems.</p>
                            </div>
                            <div class="tab-pane fade" id="Features" role="tabpanel" aria-labelledby="Features-tab">
                                <ul>
                                    <li>
                                        <p><strong>Eligibility : </strong></p>
                                        <ul>
                                            <li><p><strong>Apprenticeship : </strong></p>
                                               <ul>
                                                    <li>Graduate (Engineering/Technology) students in disciplines like Mechanical, 
                                                        Electrical, Electronics, Computer Science, and allied fields.</li>
                                                        <li>Diploma (Technician) students.</li>
                                                        <li>Candidates from General Streams (B.Com, B.Sc., BCA, BBA, BA, etc.).</li>
                                                </ul>
                                            </li>
                                            <li><p><strong>Internship & Final Year Project work</strong> Engineering students from Pre-Final 
                                            and Final Year (Graduate and Post Graduate) in Mechanical, Electrical, Electronics, Computer 
                                            Science, and allied fields.</p></li>
                                        </ul>
                                    </li>
                                    <li><p><strong>Internship Provider : </strong>Ministry of Heavy Industries, Government of India.</p></li>
                                    <li><p><strong>Application : </strong> Students must meet the required academic qualifications 
                                    and have a passion for industry problem-solving.</p></li>
                                    <li><p><strong>Apprenticeship Training : </strong>The Central Manufacturing Technology 
                                    Institute (CMTI) invites applications for Apprenticeship training.This program is conducted under 
                                    the Apprenticeship Act 1961 and the Apprenticeship (Amendment) Rules 2019, as amended from time 
                                    to time. It aims to help participants gain industry-relevant skills and experience over the 
                                    course of one year.</p></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="Facilities" role="tabpanel" aria-labelledby="Facilities-tab">
                            <p>The apprenticeship training is offered in partnership with CMTI under the Apprenticeship Act 1961
                                and its subsequent amendments, providing students with practical industry exposure for a period
                                of one year.</p>  
                        </div>
                        <div class="tab-pane fade" id="Benefits" role="tabpanel" aria-labelledby="Benefits-tab">
                            <ul>
                                <li><p><strong>Industry Exposure : </strong>Students will have the opportunity to work on real-world
                                problems posed by industries.</p></li>
                                <li><p><strong>Government Initiative : </strong> This is an internship program supported by the 
                                Ministry of Heavy Industries, enhancing credibility and opportunities.</p></li>
                                <li><p><strong>Apprenticeship Program : </strong>It offers a structured one-year training period, 
                                allowing students to gain practical experience and develop skills relevant to their engineering 
                                discipline.</p></li>
                                <li><p><strong>Bonafide Certificate : </strong>A certificate will be provided to students upon 
                                completion of the program.</p></li>
                            </ul> 
                        </div>
                        <div class="tab-pane fade" id="Apply" role="tabpanel" aria-labelledby="Apply-tab">
                            <ul>
                            <li>Interested and eligible students must apply through the National Apprenticeship Training 
                                Scheme (NATS) web portal : 
                                <a href="https://nats.education.gov.in/" target="_blank"><strong>https://nats.education.gov.in/</strong></a>
                            </li>
                            <li>For the latest updates and announcements regarding internships, students may also visit the 
                                CMTI's Drishti portal : 
                                <a href="https://drishti.cmti.res.in/" target="_blank"><strong>https://drishti.cmti.res.in/</strong></a>
                            </li>
                            </ul> 
                        </div>
                    </div>
                </div>
</main>

<?php include('./includes/footer.php') ?>

<!-- bootstrap 4.3.1 js -->
<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>

<!-- bootstrap 5.1.3 js -->
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>

<!-- Bootstrap and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
