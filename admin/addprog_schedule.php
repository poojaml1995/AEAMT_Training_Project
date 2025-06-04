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
    <title>Add Programme Schedule - AEAMT</title>
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
                                    <div class="card card-prog shadow-lg border-0 rounded-lg">
                                        <div class="card-header-prog bg-gradient-primary text-black text-center py-4">
                                            <h3 class="mb-0">Add Programme Schedule</h3>
                                        </div>
                                        <div class="card-body p-4">
                                            <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label for="Title" class="font-weight-bold">Title of the Training Programme</label>
                                                <span style="color:red">*</span>
                                                <select class="custom-select d-block w-100" id="Title" name="Title" onchange="autofillCourseCode(); clearValidation('Title');" onclick="clearValidation('Title')">
                                                    <option value="Null">Choose Title of the Training Programme...</option>
                                                    <!-- <php
                                                        $currentMonth = date('Y-m');
                                                        $query = mysqli_query($con, "SELECT DISTINCT Title, Course_Code, Commencing_from_Date, 
                                                        Commencing_to_Date FROM course_details WHERE DATE_FORMAT(Commencing_from_Date, '%Y-%m')
                                                        = '$currentMonth'") or die(mysqli_error($con));
                                                        while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<php echo $row['Title']; ?>" 
                                                        data-course-code="<php echo $row['Course_Code']; ?>"
                                                        data-commencing-date="<php echo date('d-m-Y', strtotime($row['Commencing_from_Date'])) . ' to ' . date('d-m-Y', strtotime($row['Commencing_to_Date'])); ?>"> -->

                                                    <?php
                                                        $currentMonth = date('Y-m');
                                                        $query = mysqli_query($con, "SELECT DISTINCT Title, Course_Code, Commencing_from_Date, 
                                                        Commencing_to_Date FROM course_details") or die(mysqli_error($con));
                                                        while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?php echo $row['Title']; ?>" 
                                                        data-course-code="<?php echo $row['Course_Code']; ?>"
                                                        data-commencing-date="<?php echo date('d-m-Y', strtotime($row['Commencing_from_Date'])) . ' to ' . date('d-m-Y', strtotime($row['Commencing_to_Date'])); ?>"> 
                                                    <?php echo $row['Title']; ?>
                                                </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="validatetitle" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="CourseCode" class="font-weight-bold">Course Code</label>
                                                <input type="text" class="form-control" id="Course_Code" name="Course_Code" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Commencing_Date" class="font-weight-bold">Commencing Date</label>
                                                <input type="text" class="form-control" id="Commencing_Date" name="Commencing_Date" readonly>
                                            </div>
                                                <div class="form-group mb-3">
                                                    <label for="Date" class="font-weight-bold">Programme schedule Date</label>
                                                    <span style="color:red">*</span>
                                                    <input type="date" class="form-control" id="Date" name="Date"
                                                    placeholder="Select Date" onkeypress="clearvalidatedate()" onclick="clearvalidatedate()">
                                                    <span id="validatedate" class="text-danger"></span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="From_Time" class="font-weight-bold">From Time</label>
                                                    <span style="color:red">*</span>
                                                    <input type="time" class="form-control" id="From_Time" name="From_Time"
                                                    placeholder="Select From Time" onkeypress="clearvalidatefrom_time()" onclick="clearvalidatefrom_time()">
                                                    <span id="validatefrom_time" class="text-danger"></span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="To_Time" class="font-weight-bold">To Time</label>
                                                    <span style="color:red">*</span>
                                                    <input type="time" class="form-control" id="To_Time" name="To_Time"
                                                    placeholder="Select To Time" onkeypress="clearvalidateto_time()" onclick="clearvalidateto_time()">
                                                    <span id="validateto_time" class="text-danger"></span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="Particulars" class="font-weight-bold">Particulars</label>
                                                    <span style="color:red">*</span>
                                                    <textarea class="form-control" id="Particulars" name="Particulars" rows="2"
                                                    placeholder="Please Enter Particulars..."
                                                    onkeypress="clearvalidateparticulars()"  onclick="clearvalidateparticulars()"></textarea>
                                                    <span id="validateparticulars" class="text-danger"></span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="Faculty" class="font-weight-bold">Faculty</label>
                                                    <span style="color:red">*</span>
                                                        <input type="text" class="form-control" id="Faculty" name="Faculty"                                         
                                                        placeholder="Please Enter Faculty Name..."
                                                        onkeypress="clearvalidatefaculty()" onclick="clearvalidatefaculty()">
                                                    <span id="validatefaculty" class="text-danger"></span>
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
                                                    $title=mysqli_real_escape_string($con,$_POST['Title']);
                                                    $course_code = mysqli_real_escape_string($con, $_POST['Course_Code']);
                                                    $commencing_date = mysqli_real_escape_string($con, $_POST['Commencing_Date']);
                                                    $date=mysqli_real_escape_string($con,$_POST['Date']);
                                                    $from_time=mysqli_real_escape_string($con,$_POST['From_Time']);
                                                    $to_time=mysqli_real_escape_string($con,$_POST['To_Time']);
                                                    $particulars=mysqli_real_escape_string($con,$_POST['Particulars']);
                                                    $faculty=mysqli_real_escape_string($con,$_POST['Faculty']);                                                

                                                    $sql="INSERT INTO programme_schedule(Title,Course_Code,Commencing_Date,Date,From_Time,To_Time,Particulars,Saturation,Faculty)
                                                    VALUES('$title','$course_code','$commencing_date','$date','$from_time','$to_time','$particulars','$saturation','$faculty')";
                                                        $insert=mysqli_query($con,$sql);
                                                        if($insert){
                                                            ?>
                                                            <script>
                                                                document.getElementById("AlertHeader").innerHTML = "Programme Schedule Uploaded Successfully";
                                                                document.getElementById("AlertHeader").classList.add("text-success");
                                                                $("#ProceedButton").attr("href", "./addprog_schedule.php");
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
                                                                $("#ProceedButton").attr("href", "./addprog_schedule.php");
                                                                $(document).ready(function(){
                                                                    $('#ALertModal').modal('show');
                                                                });
                                                            </script>  
                                                            <?php
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

<script src="./assets/js/addprog_schedule.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
