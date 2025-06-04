<?php
  include('./includes/connection.php');

  if (isset($_GET['Course_Code'])) {
    $course_code = $_GET['Course_Code'];
    $query = mysqli_query($con, "SELECT * FROM course_information WHERE Course_Code='$course_code'") or die(mysqli_error($con));
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details - AEAMT</title>
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
                        <div class="col banner_image">
                            <img src="./assets/images/Course_details.jpg" alt="bg-image" style="width: 100%; height: 80%;">
                        </div>
                    </div>
                </div>

                <?php
                    if (!empty($results)) {
                    ?> 

                <div class="container">
                    <div class="row mb-5">
                        <div class="col text-center card_details">
                            <h1><?php echo $results[0]['Title']; ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="custom-card card_details">
                                <h4>INTRODUCTION</h4>
                                <p><?php echo $results[0]['Overview']; ?></br></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <a href="./enrollment_form.php" class="btn btn-register">Click Here For Registration
                                    <i class="bi bi-hand-index" style="color: black; font-size: 30px;"></i></a>
                            </div>
                            <div class="mb-3">   
                                 <?php
                                if (!empty($results[0]["Course_Pdf_File"])) {
                                    $pdfFilePath = str_replace("../", "./", $results[0]["Course_Pdf_File"]);
                                    if (file_exists($pdfFilePath)):
                                     ?>
                                        <div class="mb-3">
                                            <a href="<?php echo $pdfFilePath; ?>" target="_blank" class="btn btn-pdf btn-lg">
                                            Download Brochure
                                            <i class="bi bi-file-earmark-pdf" style="color: red; font-size: 25px;"></i>
                                            </a>
                                        </div>
                                    <?php endif; 
                                }
                                ?>
                                <!-- <div class="mb-3">
                                    <a href="#" class="btn btn-pdf btn-lg">
                                    Download Brochure
                                    <i class="bi bi-file-earmark-pdf" style="color: red; font-size: 25px;"></i>
                                    </a>
                                </div> -->

                            </div> 
                            <div class="p-3">     
                                <h6>For More Details Contact</h6>
                                <p>Shri. Arun kumar JG <br>
                                Programme Coordinator <br>
                                Phone : 080-22188367 <br>
                                Email : training@cmti.res.in </br></br></br>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col mt-2">                           
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Focussed Areas
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <?php 
                                                    // Split Objectives text by periods
                                                    $focussed_areas = explode('.', $results[0]['Focussed_Areas']);
                                                    foreach ($focussed_areas as $Focussed_Areas) {
                                                        // Trim whitespace and check if not empty (to avoid empty list items)
                                                        $Focussed_Areas = trim($Focussed_Areas);
                                                        if (!empty($Focussed_Areas)) {
                                                            echo "<li>" . $Focussed_Areas . "</li>";
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>  
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Key takeaways
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <ul>
                                                <?php 
                                                    // Split Course_Content text by periods
                                                    $key_takeaways = explode('.', $results[0]['Key_Takeaways']);
                                                    foreach ($key_takeaways as $Key_Takeaways) {
                                                        // Trim whitespace and check if not empty (to avoid empty list items)
                                                        $Key_Takeaways = trim($Key_Takeaways);
                                                        if (!empty($Key_Takeaways)) {
                                                            echo "<li>" . $Key_Takeaways . "</li>";
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Targeted Audience
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <?php 
                                                    // Split Programmes_are_open_to text by periods
                                                    $targeted_audience = explode('.', $results[0]['Targeted_Audience']);
                                                    foreach ($targeted_audience as $Targeted_Audience) {
                                                        // Trim whitespace and check if not empty (to avoid empty list items)
                                                        $Targeted_Audience = trim($Targeted_Audience);
                                                        if (!empty($Targeted_Audience)) {
                                                            echo "<li>" . $Targeted_Audience . "</li>";
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Faculty
                                    </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <?php 
                                                    $facultyDetails = explode("->", $results[0]['Faculty']); // Split text at '->'
                                                    foreach ($facultyDetails as $detail) {
                                                        if (!empty(trim($detail))) { // Check if text is not empty
                                                            echo "<li>" . trim($detail) . "</li>"; // Display as a list item
                                                        }
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    } else {
                        echo "<p class='text-center'>No results found for the specified Course Code.</p>";
                    }
                    ?>
                    <!-- <div class="row mt-2">
                        <div class="col mb-4">
                           <p><strong>REGISTRATION :</strong>Prior registration with an online advance payment is must.</p>
                        </div>
                    </div> -->
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
