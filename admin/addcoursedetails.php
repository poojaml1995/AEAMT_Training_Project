<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course Details - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

     <!-- bootstrap 4.3.1 css -->
     <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">

    <!-- bootstrap 5.1.3 css -->
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/bootsrap-5.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php include('./includes/header.php') ?>
    <?php include('./includes/sidebar.php') ?>

    <main class="main-content">

            <div class="modal fade" id="ALertModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ALertModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ALertModalLabel"></h5>
                        </div>
                        <div class="modal-body">
                            <h5 id="AlertHeader" class="text-primary text-center my-3"></h5>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-primary" id="ProceedButton">OK</a>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="container mb-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="add_card shadow-lg border-0 rounded-lg">
                                    <div class="add_card-header bg-primary text-white">
                                        <h3 class="text-center">Add Course Details</h3>
                                    </div>
                                    <div class="add_card-body">
                                        <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label for="Course_Code" class="font-weight-bold">Course Code</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Course_Code" name="Course_Code" 
                                                 placeholder="Please Enter Course Code..." onkeypress="clearvalidatecourse_code()"
                                                 onclick="clearvalidatecourse_code()">
                                                <span id="validatecourse_code" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Title" class="font-weight-bold">Course Title</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Title" name="Title" rows="2"
                                                placeholder="Please Enter Course Title..."
                                                onkeypress="clearvalidatetitle()" onclick="clearvalidatetitle()"></textarea>
                                                <span id="validatetitle" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="No_of_days" class="font-weight-bold">No.of days</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="No_of_Days" name="No_of_Days"        
                                                placeholder="Please Enter No.of days..."
                                                onkeypress="clearvalidateno_of_days()" onclick="clearvalidateno_of_days()">
                                                <span id="validateno_of_days" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="from_date" class="font-weight-bold">Date of Commencement (From)</label>
                                                <span style="color:red">*</span>
                                                <input type="date" class="form-control" id="Commencing_from_Date" name="Commencing_from_Date"
                                                placeholder="Select start date" onkeypress="clearvalidatecommencing_from_date()"
                                                onclick="clearvalidatecommencing_from_date()">
                                                <span id="validatecommencing_from_date" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="to_date" class="font-weight-bold">Date of Commencement (To)</label>
                                                <span style="color:red">*</span>
                                                <input type="date" class="form-control" id="Commencing_to_Date" name="Commencing_to_Date"
                                                placeholder="Select end date" onkeypress="clearvalidatecommencing_to_date()"
                                                 onclick="clearvalidatecommencing_to_date()">
                                                <span id="validatecommencing_to_date" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Course_Fee" class="font-weight-bold">Course Fee (Rs.)</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Course_Fee" name="Course_Fee"                                         
                                                placeholder="Please Enter Course Fee..."
                                                onkeypress="clearvalidatecourse_fee()" onclick="clearvalidatecourse_fee()">
                                                <span id="validatecourse_fee" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Faculty" class="font-weight-bold">Co-ordinator / Faculty</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Faculty" name="Faculty"
                                                placeholder="Please Enter Course Code..."
                                                onkeypress="clearvalidatefaculty()" onclick="clearvalidatefaculty()">
                                                <span id="validatefaculty" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="image" class="font-weight-bold">Course Images</label>
                                                <span style="color:red">*</span>
                                                <input type="file" class="form-control" id="Course_Image" name="Course_Image"
                                                  accept="image/*" onchange="clearvalidatecourse_image()" onclick="clearvalidatecourse_image()" />                                       
                                                <span id="validatecourse_image" class="text-danger"></span>
                                            </div>
                                            
                                            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                                        </form>

                                        <?php

                                            ini_set("display_errors", 0); 
                                            date_default_timezone_set('Asia/Kolkata'); 
                                            ini_set('log_errors', 1);
                                            ini_set('error_log', '../error_log.txt');
                                            ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                            try {
                                            if(isset($_POST['submit']))
                                            {    
                                                $imagetarget_dir = "../Course_Image/";
                                                $imagetarget_file = $imagetarget_dir . basename($_FILES["Course_Image"]["name"]);    
                
                                                $course_code=mysqli_real_escape_string($con,$_POST['Course_Code']);
                                                $title=mysqli_real_escape_string($con,$_POST['Title']);
                                                $no_of_days=mysqli_real_escape_string($con,$_POST['No_of_Days']);
                                                $commencing_from_date=mysqli_real_escape_string($con,$_POST['Commencing_from_Date']);
                                                $commencing_to_date=mysqli_real_escape_string($con,$_POST['Commencing_to_Date']);                                                
                                                $course_fee=mysqli_real_escape_string($con,$_POST['Course_Fee']);
                                                $faculty=mysqli_real_escape_string($con,$_POST['Faculty']);
                                                
                                                $sql="INSERT INTO course_details(Course_Code,Title,No_of_Days,Commencing_from_Date,Commencing_to_Date,Course_Fee,Faculty,Course_Image_loc)
                                                VALUES('$course_code','$title','$no_of_days','$commencing_from_date','$commencing_to_date ','$course_fee','$faculty','$imagetarget_file')";
                                                    $insert=mysqli_query($con,$sql);

                                                    if(move_uploaded_file($_FILES["Course_Image"]["tmp_name"], $imagetarget_file) ) 
                                                    {  

                                                    if($insert){
                                                        ?>
                                                        <script>
                                                            document.getElementById("AlertHeader").innerHTML = "Course Details Uploaded Successfully";
                                                            document.getElementById("AlertHeader").classList.add("text-success");
                                                            $("#ProceedButton").attr("href", "./addcoursedetails.php");
                                                            $(document).ready(function(){
                                                            $('#ALertModal').modal('show');
                                                            });
                                                        </script>                                                        
                                                        <?php
                                                    }
                                                    else
                                                    {                                            
                                                        ?> 
                                                        <script>
                                                            document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                                            document.getElementById("AlertHeader").classList.add("text-danger");
                                                            $("#ProceedButton").attr("href", "./addcoursedetails.php");
                                                            $(document).ready(function(){
                                                                $('#ALertModal').modal('show');
                                                            });
                                                        </script>  
                                                        <?php
                                                    }
                                                    } 
                                                } 
                                            } catch (Exception $e) {
                                                // Catch any exceptions thrown
                                                $errorMessage = "Caught exception: " . $e->getMessage();                        
                                                error_log($errorMessage . PHP_EOL, 3, "error_log.txt");
                                            }                    
                                                        ?>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>

<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>

<script src="./assets/js/addcoursedetails.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
