<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">


    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./assets/bootsrap-5.0.0/css/bootstrap.min.css"> -->


    <!-- Only include the necessary Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Swiper CSS and js -->
    <link rel="stylesheet" href="assets/swiper_files/swiper-bundle.min.css">
    <script src="assets/swiper_files/swiper-bundle.min.js"></script>

    <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script>
    

       <!-- swiper pagination -->
       <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->


</head>
<body>

<?php include('./includes/header.php'); ?>
<?php include('./includes/connection.php'); ?>
<?php include('./includes/navbar.php'); ?>

<main>
    <section id="vertical_sidebar">
    <div id="particles-js" class="overflow-hidden">
        <!-- Carousel -->
        <!-- <div class="container-fluid"> -->
            <div class="row">
                <div class="col">
                    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            <!-- <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button> -->
                        </div> 
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="./assets/images/aeamt_image3.jpg" class="d-block carousel-img" alt="1">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./assets/images/aeamt_image2.jpg" class="d-block carousel-img" alt="2">
                            </div>                            
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="./assets/images/aeamt_image1.jpg" class="d-block carousel-img" alt="3">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="./assets/images/aeamt_image4.jpg" class="d-block carousel-img" alt="4">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="./assets/images/aeamt_image5.jpg" class="d-block carousel-img" alt="5">
                            </div>
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="./assets/images/aeamt_image6.jpg" class="d-block carousel-img" alt="6">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
        <div class="container-fluid" style="padding-left:0px;padding-right:0px"> 
            <!-- About -->
            <section id="about" data-aos="fade-up" data-aos-delay="200">
                <div class="row p-5">
                    <h1 class="text-dark text-center"></h1>
                    <div class="col-md-6 col-sm-12 text-center p-md-2">
                    <h4 class="text-center">About AEAMT</h4>
                        <p style="text-align: justify;">The need for maximizing the availability of "Industry-Ready" engineers in the Indian manufacturing sector has been viewed as a significant gap.
                            CMTI has initiated a project <b>“Academy of Excellence for Advanced Manufacturing Technology (AEAMT)”</b> to bridge this gap.<br>
                            AEAMT is a new initiative at CMTI with the objective of generating qualified human resource in advanced technologies of manufacturing domain.<br><br>
                            The academy would offer specially designed core technology programmes with a heavy focus on experiential learning through hands-on experiments,
                            participation in live industry oriented R&D projects and shop floor exposure to make the participants "Industry Ready". The existing advanced
                            manufacturing and related laboratories would form a part of the infrastructure of the Academy.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 px-md-5 text-dark mt-md-3 mt-sm-4 px-sm-5 d-flex align-items-center justify-content-center"
                        style="vertical-align : middle;">
                            <div class="lightboxContainer">
                            <video controls class="video-fluid" style="max-width: 100%; height: auto;">
                                <source src="./assets/videos/AboutCMTI.mp4" type="video/mp4">
                            </video>
                        </div>                    
                    </div>
                </div>
            </section>
        </div>
        
        <!-- training info -->
        <div class="container">
            <section id="Training_Programme">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="./assets/images/aeamt_image8.jpeg" class="card-img-top" alt="card">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Training</h5>
                                <p class="card-text; text-align: justify;">The training programmes are conducted by subject experts; 
                                    include demonstrations, hands on exercises, case studies, and exposure to the state of the art 
                                    facilities in CMTI. This Centre offers the most congenial environment for learning in an improved 
                                    modern classroom ambience with audio-visual facilities, well equipped machine shop and laboratories. 
                                    The courses conducted are well appreciated by Industry. This Centre has a technical library which 
                                    subscribes to several national and international journals, periodicals and has a vast collection of 
                                    books related to engineering and manufacturing sectors.</p>
                            </div>
                            <div class="card-footer">
                                <a href="./training_info.php" class="btn btn-primary">Known more</a>
                            </div>
                        </div>   
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="./assets/images/aeamt_image7.jpeg" class="card-img-top" alt="card">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Apprenticeship / Internship / Final Year Project work</h5>
                                <p class="card-text">CMTI invites applications from eligible candidates for Apprenticeship 
                                    training, including Graduates (Engg./Tech.), Technicians (Diploma), and General Stream 
                                    (B.Com, B.Sc, BCA, BBA, BA, etc.). Pre-final and final year students of Graduate & Post 
                                    Graduate Engineering in Mechanical, Electrical, Electronics, Computer Science, and related 
                                    fields can also apply for internships under the Ministry of Heavy Industries & Government
                                    of India.</p>
                            </div>
                            <div class="card-footer">
                                <a href="./apprenticeship_internship_info.php" class="btn btn-primary">Known more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img src="./assets/images/drishti_logo.jpeg" class="card-img-top" alt="card" width="100px" height="auto">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">DRISHTI / Finishing School</h5>
                                <p class="card-text; text-align: justify;">Drishti (Design, Research and Innovation by Harvesting Science and Technology
                                    for Industries.) is an online platform developed by CMTI that provides a 
                                    synergy between industries and young innovators to solve complex challenges.<br>
                                    "Bridging the gap between Campus-to-Industries" - Finishing School Training
                                    for Fresh Engineering Graduates of 2022-23 batches only</br></p>
                            </div>
                            <div class="card-footer"> 
                                <a href="https://drishti.cmti.res.in/" class="btn btn-primary" target="_balnk">Known more</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
        
            <!-- carasole cards -->
            <section id="Training_services">
                <div class="row p-5">
                    <h4 class="text-center">AEAMT Training Programmes</h4>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        // $query = mysqli_query($con, "SELECT * FROM course_details WHERE Commencing_from_Date <= LAST_DAY(CURDATE())") or die(mysqli_error($con));
                        $query = mysqli_query($con, "SELECT * FROM course_details WHERE MONTH(Commencing_from_Date) = 4 AND YEAR(Commencing_from_Date) = YEAR(CURDATE())") or die(mysqli_error($con));

                        $num_rows = mysqli_num_rows($query);

                        if ($num_rows > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="swiper-slide">
                                <div class="card_carasole">
                                    <div class="card-header-carasole">
                                        <img src="<?php echo str_replace("../", "./",$row['Course_Image_loc']); ?>" alt="card_image"
                                        class="card-img-top">
                                    </div>
                                    <div class="card-body-carasole text-center">
                                        <h6 class="card-title-carasole custom-color1"><?php echo ' Course Code : ' . $row['Course_Code']; ?></h6>
                                        <h6 class="card-title-carasole custom-color2"><?php echo $row['Title']; ?></h6>
                                        <h6 class="card-title-carasole custom-color3"><?php echo date('d M Y', strtotime($row['Commencing_from_Date'])) . ' - ' . date('d M Y', strtotime($row['Commencing_to_Date'])); ?></h6>
                                    </div>
                                    <div class="card-footer-carasole text-center">
                                        <a href='./course_details.php?Course_Code=<?php echo $row['Course_Code']; ?>' class="btn btn-primary">Register</a>

                                    </div>
                                </div> 
                            </div>
                        <?php
                                $i++;
                            }
                        } else {
                            echo '<div class="carousel-item active"><div class="row"><div class="col text-center"><p><strong>Training Programmes Are Not Available</strong></p></div></div></div>';
                        }
                        ?>
                    </div>
                    <!-- Swiper Navigation Buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>

           <!-- Upcoming carasole cards  -->
            <section id="Upcoming_Training">
                <div class="row p-5">
                    <h4 class="text-center">AEAMT Upcoming Training Programmes</h4>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        // $query = mysqli_query($con, "SELECT * FROM course_details WHERE Commencing_from_Date >= LAST_DAY(CURDATE())") or die(mysqli_error($con));
                        $query = mysqli_query($con, "SELECT * FROM course_details WHERE MONTH(Commencing_from_Date) >= 5 AND YEAR(Commencing_from_Date) = YEAR(CURDATE())") or die(mysqli_error($con));                     
                        $num_rows = mysqli_num_rows($query);

                        if ($num_rows > 0) {
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="swiper-slide">
                                <div class="card_carasole">
                                    <div class="card-header-carasole">
                                        <img src="<?php echo str_replace("../", "./",$row['Course_Image_loc']); ?>" alt="card_image"
                                        class="card-img-top" style="width: 100%; height: auto;">
                                    </div>
                                    <div class="card-body-carasole text-center">
                                        <h6 class="card-title-carasole custom-color1"><?php echo  ' Course Code ' . $row['Course_Code']; ?></h6>
                                        <h6 class="card-title-carasole custom-color2"><?php echo $row['Title']; ?></h6>
                                        <h6 class="card-title-carasole custom-color3"><?php echo date('d M Y', strtotime($row['Commencing_from_Date'])) . ' - ' . date('d M Y', strtotime($row['Commencing_to_Date'])); ?></h6>
                                    </div>
                                    <div class="card-footer-carasole text-center">
                                        <a href='./course_details.php?Course_Code=<?php echo $row['Course_Code']; ?>' class="btn btn-primary">Register</a>
                                    </div>
                                </div> 
                            </div>
                        <?php
                                $i++;
                            }
                        } else {
                            // Center the message using Bootstrap classes and inline styles
                            echo '<div class="carousel-item active"><div class="row"><div class="col text-center"><p><strong>Upcoming Training Programmes Are Not Available</strong></p></div></div></div>';

                        }
                        ?>
                    </div>
                    <!-- Swiper Navigation Buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>

            <!-- partners -->
            <section id="logo">
                <div class="row p-5">
                    <h4 class="heading1 text-center">Companies involved in the training</h4>
                </div>
                <div class="swiper iconSwiper p-4">
                    <div class="swiper-wrapper align-center">
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="./index.php">
                                    <img src="./assets/images/aeamt_logo.png" class="card-img-top" alt="AEAMT Logo" style="width: 40%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="https://cmti.res.in/" target="_blank">
                                    <img src="./assets/images/cmti.png" class="card-img-top" alt="CMTI Logo" style="width: 30%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="./index.php">
                                    <img src="./assets/images/aeamt_logo.png" class="card-img-top" alt="AEAMT Logo" style="width: 40%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="https://cmti.res.in/" target="_blank">
                                    <img src="./assets/images/cmti.png" class="card-img-top" alt="CMTI Logo" style="width: 30%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="./index.php">
                                    <img src="./assets/images/aeamt_logo.png" class="card-img-top" alt="AEAMT Logo" style="width: 40%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                            <a href="https://cmti.res.in/" target="_blank">
                                <img src="./assets/images/cmti.png" class="card-img-top" alt="CMTI Logo" style="width: 30%; height: auto;">
                            </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="./index.php">
                                    <img src="./assets/images/aeamt_logo.png" class="card-img-top" alt="AEAMT Logo" style="width: 40%; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_icon">
                                <a href="https://cmti.res.in/" target="_blank">
                                    <img src="./assets/images/cmti.png" class="card-img-top" alt="CMTI Logo" style="width: 30%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- </div></div> -->

            <!-- total participants -->
            <section>
                <div class="row mb-4">
                    <div class="participants_box">
                        <div class="participants_text">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <h5>Registered Users</h5>
                                    <h1 class="participants_num"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * from training_registration")); ?></h1>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h5>Companies</h5>
                                    <h1 class="participants_num"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT DISTINCT Organisation_Name FROM enrollment_form")); ?></h1>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h5>Internship / Projects</h5>
                                    <h1 class="participants_num">2</h1>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h5>Total Participants</h5>
                                    <h1 class="participants_num"><?php echo mysqli_num_rows(mysqli_query($con, "SELECT * from enrollment_form")); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- contact us -->
            <!-- Modal -->
            <div class="modal fade" id="ALertModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ALertModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ALertModalLabel"></h5>
                        </div>
                        <div class="modal-body">
                            <h5 id="AlertHeader" class="text-primary text-center my-3"></h5>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a type="button" class="btn btn-primary px-4 py-2" id="ProceedButton">OK</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-5">
                <section id="Contact">
                    <div class="row">
                        <div class="col">
                        <h4>Contact</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Location:</h5>
                                <p>Tumkur Rd, Near Peenya Metro Station, <br> Yeswanthpur,
                                    Bengaluru,<br> Karnataka 560022</p>
                            <h5>Email address:</h5>
                                <p>cmti@cmti.res.in</p>
                            <h5>Office Telephone No:</h5>
                                <p>080-22188302 / 348</p>
                            <h5>Mobile No:</h5>
                                <p>9986107099</p>
                        </div>
                        <div class="col-md-8">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0482297389535!2d77
                                        .53319981525104!3d13.03260071706196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae142984e5cddb%3A0x9ecd3a5ee583fb59!2sCentral%20Manufacturing%20Technology%20Institute!5e0!3m2!1sen!2sin!4v1678770048611!5m2!1sen!2sin"
                            class="" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Get In Touch
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="accordion-body">
                                            <form onsubmit="return validateform()" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Name" class="font-weight-bold">Name</label>
                                                            <span style="color:red">*</span>
                                                            <input type="text" class="form-control" id="Name" name="Name"
                                                                placeholder="Please Enter Name..." onkeypress="clearvalidatename()"
                                                                onclick="clearvalidatename()" />
                                                            <span id="validatename" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Mobile_No" class="font-weight-bold">Mobile Number</label>
                                                            <span style="color:red">*</span>
                                                            <input type="text" class="form-control" id="Mobile_No" name="Mobile_No"
                                                                placeholder="Please Enter Mobile Number..." 
                                                                onkeypress="clearvalidatemobile_no()" onclick="clearvalidatemobile_no()">
                                                            <span id="validatemobile_no" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>                                       
                                                <div class="form-group">
                                                    <label for="Email" class="font-weight-bold">Email address</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" name="Email" id="Email"
                                                        placeholder="Please Enter Email ID..." onkeypress="clearvalidateemail()"
                                                        onclick="clearvalidateemail()">
                                                    <span id="validateemail" class="text-danger"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Message" class="font-weight-bold">Message</label>
                                                    <span style="color:red">*</span>
                                                    <textarea class="form-control" placeholder="Leave A Message Here..." id="Message"
                                                        name="Message" onkeypress="clearvalidatemessage()"
                                                        onclick="clearvalidatemessage()"></textarea>
                                                    <span id="validatemessage" class="text-danger"></span>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" name="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
                                                </div>
                                            </form>
                                            
                                            <?php

                                                if(isset($_POST['submit'])) {
                                                    $name = mysqli_real_escape_string($con, $_POST['Name']);
                                                    $mobile_no = mysqli_real_escape_string($con, $_POST['Mobile_No']);
                                                    $email = mysqli_real_escape_string($con, $_POST['Email']);
                                                    $message = mysqli_real_escape_string($con, $_POST['Message']);

                                                    $sql = "INSERT INTO contact (Name, Mobile_No, Email, Message) VALUES ('$name', '$mobile_no', '$email', '$message')";

                                                    $insert = mysqli_query($con, $sql);
                                                    if($insert) {
                                                        ?>
                                                        <script>
                                                            document.getElementById("AlertHeader").innerHTML = "Thank you for connecting us. <br> We will reach out you shortly.</br>";
                                                            document.getElementById("AlertHeader").classList.add("text-success");
                                                            $("#ProceedButton").attr("href", "./index.php");
                                                            $(document).ready(function(){
                                                            $('#ALertModal').modal('show');
                                                            });
                                                        </script>                        
                                                        <?php
                                                            } else {
                                                        ?>
                                                        <script>
                                                            document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                                            document.getElementById("AlertHeader").classList.add("text-danger");
                                                            $("#ProceedButton").attr("href", "./index.php");
                                                            $(document).ready(function(){
                                                            $('#ALertModal').modal('show');
                                                            });
                                                        </script>      
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- feedback -->
                <section id="view_feedback">
                    <div class="row p-4">
                        <h4 class="text-center">Feedbacks</h4>
                    </div>
                    <div class="swiper feedbackSwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM feedback WHERE Status = 'Accepted'") or die(mysqli_error($con));
                            $num_rows = mysqli_num_rows($query);
                            if ($num_rows > 0) {
                                $i = 1;
                                while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <div class="swiper-slide">
                                <div class="card-feedback">
                                    <div class="card-header-feedback">
                                        <p class="card-title-feedback">Course Attended: <?php echo $row['Title']; ?></p>
                                    </div>
                                    <div class="card-body-feedback">
                                        <h6 class="card-text-feedback text-custom"><?php echo $row['Remarks']; ?></h6>
                                    </div>
                                    <div class="card-footer-feedback">
                                        <p class="card-text-feedback"><?php echo $row['Name']; ?>,</p>
                                        <p class="card-text-feedback"><?php echo $row['Company_Name']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $i++;
                                }
                            } else {
                            ?>
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                                <p class="text-center"><strong>No feedbacks found</strong></p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
    </div>           
</main>

<?php include('./includes/footer.php') ?>
<!-- bootstrap 4.3.1 js -->
<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>

<!-- bootstrap 5.1.3 js -->
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>


<script src="./assets/js/index.js"></script>
<script src="./assets/js/contact.js"></script>

<script>
  (function() {
      history.pushState(null, "", location.href);
      history.pushState(null, "", location.href);

      window.onpopstate = function() {
          history.go(0); // Forces the user to stay on the current page
      };
  })();
</script>


<!-- Bootstrap and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
