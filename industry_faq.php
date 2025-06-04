<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's For Industry - AEAMT</title>
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
                <img src="./assets/images/FAQ_INDUSTRY_PROFESSIONALS.jpg" alt="bg-image" style="width: 100%; height: 80%;">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h4>FOR INDUSTRY PROFESSIONALS</h4>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col mt-2">                           
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h6>What is the primary aim of the Centre for Skill Development at CMTI?</h6>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The primary aim of the Centre for Skill Development at CMTI is to enhance the knowledge 
                                    and skills of practicing engineers, create job-ready engineers for the Indian Manufacturing 
                                    sector, and bridge the gap between industry and academia.</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h6>What types of training programmes are offered by the Centre for Skill Development?</h6>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The Centre offers short-term corporate training programmes (Scheduled, Customised & On-site), 
                                    workshops, seminars, conferences, and joint Post Graduate programmes in collaboration with prestigious 
                                    institutions. It also provides internships, apprenticeships (under the NATS scheme of MHRD), and 
                                    real-life industrial projects for Post Graduate Engineering students.</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h6>Who conducts the training programmes at the Centre, and what teaching methods are used?</h6>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The training programmes are conducted by subject experts and include demonstrations, hands-on exercises, case studies, 
                                    and exposure to state-of-the-art facilities at CMTI.</p>
                            </div>
                        </div>  
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h6> What discounts are available for the course fee, and under what conditions?</h6>
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>A 10% rebate on course fees is given to organizations nominating 3 or more participants, 
                                        provided the payment is made 10 days before the course commencement.</li>
                                    <li>A 30% rebate is offered to academic faculty, and a 50% rebate is offered to full-time 
                                        students.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <h6>What accommodation options are available for participants?</h6>
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Limited accommodation is available at the CMTI Guest House on a sharing basis, subject to 
                                    availability. Accommodation is for participants only and must be paid in cash.</p>
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
