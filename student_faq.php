<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's For Students - AEAMT</title>
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
                <img src="./assets/images/FAQ_Students.jpg" alt="bg-image" style="width: 100%; height: 80%;">
                <!-- <img src="./assets/images/FAQ_Students1.jpg" alt="bg-image" style="width: 100%; height: 80%;"> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h4>FOR STUDENTS</h4>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mt-2">                           
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h6>Who is eligible to apply for internships?</h6>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The students pursuing Pre-Final & Final Year of Graduate & Post Graduate engineering in 
                                    Mechanical, Electrical, Electronics, Computer Science and few of the allied disciplines are 
                                    eligible to apply for internships.</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h6>Who is eligible to apply for the CMTI Apprenticeship training?</h6>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Candidates eligible to apply include Graduates (Engineering/Technology), Technicians 
                                    (Diploma), and General Stream graduates (B.Com, B.Sc., BCA, BBA, BA, etc.).</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h6>What is the duration of the CMTI Apprenticeship training?</h6>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The apprenticeship training duration is 1 year.</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h6>What is the primary criterion for students to be eligible for these Internships, Project work, 
                                Apprenticeship training?</h6>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Students must have the required academic background and a passion to work on problems posed
                                    by the industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h6>Where can students find the results for Internship, Project work, and Apprenticeship trainees?</h6>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Students can find the results for the MHI-CMTI Internship, Project work, and Apprenticeship
                                        trainees in the Website : <strong><a href="https://drishti.cmti.res.in/" target="_blank">DRISHTI,</a><a href="https://cmti.res.in/" target="_blank"> CMTI</a></strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
