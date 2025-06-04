<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Information - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <!-- Only include the necessary Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
                <img src="./assets/images/Training_details.jpg" alt="bg-image" style="width: 100%; height: 80%;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <h4>Training Information</h4>
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
                    <button class="nav-link" id="Accommodation-tab" data-bs-toggle="tab" data-bs-target="#Accommodation" type="button" role="tab" aria-controls="Accommodation" aria-selected="false">Accommodation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Payment-tab" data-bs-toggle="tab" data-bs-target="#Payment" type="button" role="tab" aria-controls="Payment" aria-selected="false">Payment / Fee Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Contact-tab" data-bs-toggle="tab" data-bs-target="#Contact" type="button" role="tab" aria-controls="Contact" aria-selected="false">Contact Information</button>
                </li>
            </ul>
            <div class="tab-content mb-4" id="myTabContent">
                <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                    <p>Centre for Skill Development, is a flagship initiative of CMTI, aims to enhance the knowledge and 
                       skills of practicing engineers, create job ready engineers to the Indian Manufacturing 
                       sector and to bridge the gap between industry and academia.<br><br>
                       It was instrumental in absorbing and assimilating various advanced technologies through short term 
                       corporate training programmes (Scheduled, Customised & On-site) for practicing engineers and organising 
                       Workshops, Seminars & Conferences on latest advancements in relevant fields. It also offers Joint Post Graduate 
                       programmes in collaboration with various prestigious institutions and  offers internships, apprenticeships 
                       (under NATS scheme of MHRD) and real life industrial projects for Post Graduate Engineering students.<br><br>
                       The training programmes are conducted by subject experts; include demonstrations, hands on exercises, case studies, 
                       and exposure to the state of the art facilities in CMTI. This Centre offers the most congenial environment for 
                       learning in an improved modern classroom ambience with audio-visual facilities, well equipped machine shop and 
                       laboratories. The courses conducted are well appreciated by Industry. This Centre has a technical library which 
                       subscribes to several national and international journals,periodicals and has a vast collection of books related to 
                       engineering and manufacturing sectors.</p>
                       <h5 class="text-left">CMTI's focused areas are:</h5>
                        <li>Ultra Precision Machine Tools</li> 
                        <li>Sensors & Controllers</li>
                        <li>Textile Machinery</li>
                        <li>Micro-Nano Manufacturing</li>
                        <li>Precision Metrology</li>
                        <li>Aerospace Line Replacement Units and Test Rigs</li>
                        <li>Special Purpose Machines</li>
                        <li>Skilling & Re-skilling</li>
                        <li>Surface Engineering & Laser Processing</li>              
                </div>
                <div class="tab-pane fade" id="Features" role="tabpanel" aria-labelledby="Features-tab">
                    <h4><b>Our Vision</b></h4>
                    <p><i>HR initiatives to ensure Globally Competitive and Qualified “Industry Ready Engineers” trained and developed to take up
                        Applied R&D activities and address Advanced Manufacturing Technology Issues</i></p>
                    <h5>CMTI offers training programmes in the following areas:</h5>
                        <ul>
                            <li>Advances in Manufacturing Technology</li>
                            <li>Geometric Dimensioning &Tolerancing</li>
                            <li>Precision Engineering</li>
                            <li>Metrology & Calibration</li>
                            <li>Additive Manufacturing & Rapid Tooling</li>
                            <li>Mechatronics & Manufacturing Automation</li>
                            <li>Quality System Standards</li>
                            <li>Nano Technology</li>
                            <li>Industry 4.0 & Smart Manufacturing</li>
                    </ul>
                                            
                </div>
                <div class="tab-pane fade" id="Facilities" role="tabpanel" aria-labelledby="Facilities-tab">
                <h5>Highlights of CMTI Training Programmes:</h5>    
                    <li>Subject Experts as faculty</li>
                    <li>Lecture supported by Demos / Practical / Hands-on</li>
                    <li>Experience sharing: new R & D Projects / Live Case Studies etc.</li>
                    <li>Well equipped laboratories with state of art equipments for practical exposure</li>
                    <li>Presentations supported with well structured coursematerial covering latest trends</li>
                    <li>Improved classroom ambience with audio-visual facilities</li>
                    <li>Provides a platform for interaction with our experts</li>
                    <li>More than Three decades of experience in designing and delivering training programmes</li> 
                </div>
                <div class="tab-pane fade" id="Benefits" role="tabpanel" aria-labelledby="Benefits-tab">
                    <ul>
                        <li>The training programmes are conducted by subject experts; include demonstrations, hands on exercises, case studies, 
                            and exposure to the state of the art facilities in CMTI.</li>
                        <li>This Centre offers the most congenial environment for learning in an improved modern classroom ambience with audio-visual facilities, 
                            well equipped machine shop and laboratories.</li>
                        <li>This Centre has a technical library which subscribes to several national and international journals, periodicals and has a vast collection 
                            of books related to engineering and manufacturing sectors.</li>
                        
                    </ul> 
                </div>
                <div class="tab-pane fade" id="Payment" role="tabpanel" aria-labelledby="Payment-tab">
                    <ul>
                        <li># Course fee is per person & is Exclusive of taxes (Taxes& other Levis will be charged at applicable rates at the time of Billing).</li>
                        <li>A 10% rebate on course fee will be given to organizations nominating 3 or more participants for each programme, only if payment is made in advance, ten days before the commencement of the course.</li>
                        <li>A rebate on course fee will be given to participants from Academia, 30% for Faculty & 50% for Full Time Students.</li>
                        <li>Course Fee includes Program Kit, Mid-Session Tea & Lunch.</li>
                        <li>Course Fee can be paid through NEFT / RTGS / Demand Draft.</li>
                        <li>GST No. to be shared while sending your nomination / Registration.</li>
                        <li>Demand Draft to be drawn in favor of “Central Manufacturing Technology Institute”, payable at Bangalore and should reach CMTI one week before the actual date of commencement of the course.</li>
                        <li>Please note that Course fee once paid will not be refunded. However, change in nomination will be permitted.</li>
                        <h5 class="text-left">Beneficiary for RTGS/NEFT:</h5>    
                            <ul>
                                <li>Name : <b>Central Manufacturing Technology Institute</b></li>
                                <li>Account No : <b>10521862015</b></li>
                                <li>Bank Name & Branch : <b>State Bank of India, Yeshwanthpur Branch</b> </li>
                                <li>IFSC Code : <b>SBIN0003297</b></li>
                                <li>MICR Code :	<b>560002055</b></li>
                                <li>GST NO : <b>29AAATC2085K1ZJ</b></li>
                            </ul>
                    </ul> 
                </div>
                <div class="tab-pane fade" id="Accommodation" role="tabpanel" aria-labelledby="Accommodation-tab">
                    <ul>
                        <li>Limited accommodation is available at CMTI Guest House on sharing basis, subject to availability and on payment basis.</li>
                        <li>Accommodation is provided only for the participants and not to their spouse/ friends.</li>
                        <li>Accommodation fee to be paid by cash only.</li>                     
                    </ul> 
                </div>
                <div class="tab-pane fade" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                    <p>For further enquiries / registration / nominations, please contact:</p>  
                    <h6 class="mt-4">Shri. Arun kumar JG, Joint Director & Centre Head - AEAMT,</h6>
                    <p>Central Manufacturing Technology Institute, <br>Tumkur Road, Bangalore - 560 022 
                    <br>+91-9449842686 Fax: +91-80-23370428
                    <h6 class="contact_tab_section">
                        <a href="mailto: training@cmti.res.in"><i class='bx bx-envelope'></i></a>
                        <span>training@cmti.res.in</span>
                        <a href="mailto: arunjg@cmti.res.in"><i class='bx bx-envelope'></i></a>  
                        <span>arunjg@cmti.res.in</span>  
                    </h6>                          
                    </br></br></br></p>
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
