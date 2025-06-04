<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./assets/bootsrap-5.0.0/css/bootstrap.min.css"> -->


    <!-- Only include the necessary Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script> -->

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
                            <img src="./assets/images/feedback.jpg" alt="bg-image" style="width: 100%; height: 80%;">
                        </div>
                    </div>
                </div>

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
                            <div class="modal-footer">
                                <a type="button" class="btn feedback-btn" id="ProceedButton">OK</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="heading">
                            <h4>Feedback</h4>
                            </div>
                                <div class="feedback_card shadow-lg border-0 rounded-lg">
                                    <div class="feedback_card-body">
                                        <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Name" class="font-weight-bold">Name</label>
                                                        <span style="color:red">*</span>
                                                        <input type="text" class="form-control" id="Name" name="Name" 
                                                        placeholder="Please Enter Name..." onkeypress="clearvalidatename()"
                                                        onclick="clearvalidatename()">
                                                        <span id="validatename" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Company_Name" class="font-weight-bold">Company Name</label>
                                                        <span style="color:red">*</span>
                                                        <input type="text" class="form-control" id="Company_Name" name="Company_Name"        
                                                        placeholder="Please Enter Company_Name..."
                                                        onkeypress="clearvalidatecompany_name()" onclick="clearvalidatecompany_name()">
                                                        <span id="validatecompany_name" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="Title" class="font-weight-bold">Title of the Training Programme</label>
                                                        <span style="color:red">*</span>
                                                        <select class="custom-select d-block w-100" id="Title" name="Title" onchange="autofillCourseCode()"
                                                            onchange="clearvalidatetitle()" onclick="clearvalidatetitle()">
                                                            <option value="Null">Choose...</option>
                                                            <!-- <php
                                                            $currentMonth = date('Y-m');
                                                            $query = mysqli_query($con, "SELECT DISTINCT Title, Course_Code, Commencing_from_Date, 
                                                            Commencing_to_Date FROM course_details WHERE DATE_FORMAT(Commencing_from_Date, '%Y-%m')
                                                            = '$currentMonth'") or die(mysqli_error($con));
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?> -->
                                                            <?php
                                                            $query = mysqli_query($con, "SELECT * FROM course_details") or die(mysqli_error($con));
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="CourseCode" class="font-weight-bold">Course Code</label>
                                                        <input type="text" class="form-control" id="Course_Code" name="Course_Code" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Commencing_Date" class="font-weight-bold">Commencing Date</label>
                                                        <input type="text" class="form-control" id="Commencing_Date" name="Commencing_Date" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Program_Relavent" class="font-weight-bold">The training program is relavent to present scenario</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Program_Relavent" id="Program_Relavent5"
                                                                    onkeypress="clearRadioValidation('Program_Relavent')"
                                                                    onclick="clearRadioValidation('Program_Relavent')" />
                                                                <label class="form-check-label" for="Program_Relavent5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Program_Relavent" id="Program_Relavent4"
                                                                    onkeypress="clearRadioValidation('Program_Relavent')"
                                                                    onclick="clearRadioValidation('Program_Relavent')" />
                                                                <label class="form-check-label" for="Program_Relavent4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Program_Relavent" id="Program_Relavent3"
                                                                    onkeypress="clearRadioValidation('Program_Relavent')"
                                                                    onclick="clearRadioValidation('Program_Relavent')" />
                                                                <label class="form-check-label" for="Program_Relavent3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Program_Relavent" id="Program_Relavent2"
                                                                    onkeypress="clearRadioValidation('Program_Relavent')"
                                                                    onclick="clearRadioValidation('Program_Relavent')" />
                                                                <label class="form-check-label" for="Program_Relavent2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Program_Relavent" id="Program_Relavent1"
                                                                    onkeypress="clearRadioValidation('Program_Relavent')"
                                                                    onclick="clearRadioValidation('Program_Relavent')" />
                                                                <label class="form-check-label" for="Program_Relavent1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validateprogram_relavent" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Schedule_Time" class="font-weight-bold">The program was schedule at a mentioned time</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Schedule_Time" id="Schedule_Time5"
                                                                    onkeypress="clearRadioValidation('Schedule_Time')"
                                                                    onclick="clearRadioValidation('Schedule_Time')" />
                                                                <label class="form-check-label" for="Schedule_Time5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Schedule_Time" id="Schedule_Time4"
                                                                    onkeypress="clearRadioValidation('Schedule_Time')"
                                                                    onclick="clearRadioValidation('Schedule_Time')" />
                                                                <label class="form-check-label" for="Schedule_Time4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Schedule_Time" id="Schedule_Time3"
                                                                    onkeypress="clearRadioValidation('Schedule_Time')"
                                                                    onclick="clearRadioValidation('Schedule_Time')" />
                                                                <label class="form-check-label" for="Schedule_Time3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Schedule_Time" id="Schedule_Time2"
                                                                    onkeypress="clearRadioValidation('Schedule_Time')"
                                                                    onclick="clearRadioValidation('Schedule_Time')" />
                                                                <label class="form-check-label" for="Schedule_Time2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Schedule_Time" id="Schedule_Time1"
                                                                    onkeypress="clearRadioValidation('Schedule_Time')"
                                                                    onclick="clearRadioValidation('Schedule_Time')" />
                                                                <label class="form-check-label" for="Schedule_Time1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validateschedule_time" class="text-danger"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Facility_Satisfactory" class="font-weight-bold">The program facilities and location were appropriate and satisfactory</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Facility_Satisfactory" id="Facility_Satisfactory5"
                                                                    onkeypress="clearRadioValidation('Facility_Satisfactory')"
                                                                    onclick="clearRadioValidation('Facility_Satisfactory')" />
                                                                <label class="form-check-label" for="Facility_Satisfactory5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Facility_Satisfactory" id="Facility_Satisfactory4"
                                                                    onkeypress="clearRadioValidation('Facility_Satisfactory')"
                                                                    onclick="clearRadioValidation('Facility_Satisfactory')" />
                                                                <label class="form-check-label" for="Facility_Satisfactory4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Facility_Satisfactory" id="Facility_Satisfactory3"
                                                                    onkeypress="clearRadioValidation('Facility_Satisfactory')"
                                                                    onclick="clearRadioValidation('Facility_Satisfactory')" />
                                                                <label class="form-check-label" for="Facility_Satisfactory3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Facility_Satisfactory" id="Facility_Satisfactory2"
                                                                    onkeypress="clearRadioValidation('Facility_Satisfactory')"
                                                                    onclick="clearRadioValidation('Facility_Satisfactory')" />
                                                                <label class="form-check-label" for="Facility_Satisfactory2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Facility_Satisfactory" id="Facility_Satisfactory1"
                                                                    onkeypress="clearRadioValidation('Facility_Satisfactory')"
                                                                    onclick="clearRadioValidation('Facility_Satisfactory')" />
                                                                <label class="form-check-label" for="Facility_Satisfactory1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validatefacility_satisfactory" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Registration" class="font-weight-bold">Registration on the Training day was smooth</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Registration" id="Registration5"
                                                                    onkeypress="clearRadioValidation('Registration')"
                                                                    onclick="clearRadioValidation('Registration')" />
                                                                <label class="form-check-label" for="Registration5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Registration" id="Registration4"
                                                                    onkeypress="clearRadioValidation('Registration')"
                                                                    onclick="clearRadioValidation('Registration')" />
                                                                <label class="form-check-label" for="Registration4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Registration" id="Registration3"
                                                                    onkeypress="clearRadioValidation('Registration')"
                                                                    onclick="clearRadioValidation('Registration')" />
                                                                <label class="form-check-label" for="Registration3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Registration" id="Registration2"
                                                                    onkeypress="clearRadioValidation('Registration')"
                                                                    onclick="clearRadioValidation('Registration')" />
                                                                <label class="form-check-label" for="Registration2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Registration" id="Registration1"
                                                                    onkeypress="clearRadioValidation('Registration')"
                                                                    onclick="clearRadioValidation('Registration')" />
                                                                <label class="form-check-label" for="Registration1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validateregistration" class="text-danger"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Sessions_Effective" class="font-weight-bold">Training sessions were adequate and effective</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Sessions_Effective" id="Sessions_Effective5"
                                                                    onkeypress="clearRadioValidation('Sessions_Effective')"
                                                                    onclick="clearRadioValidation('Sessions_Effective')" />
                                                                <label class="form-check-label" for="Sessions_Effective5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Sessions_Effective" id="Sessions_Effective4"
                                                                    onkeypress="clearRadioValidation('Sessions_Effective')"
                                                                    onclick="clearRadioValidation('Sessions_Effective')" />
                                                                <label class="form-check-label" for="Sessions_Effective4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Sessions_Effective" id="Sessions_Effective3"
                                                                    onkeypress="clearRadioValidation('Sessions_Effective')"
                                                                    onclick="clearRadioValidation('Sessions_Effective')" />
                                                                <label class="form-check-label" for="Sessions_Effective3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Sessions_Effective" id="Sessions_Effective2"
                                                                    onkeypress="clearRadioValidation('Sessions_Effective')"
                                                                    onclick="clearRadioValidation('Sessions_Effective')" />
                                                                <label class="form-check-label" for="Sessions_Effective2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Sessions_Effective" id="Sessions_Effective1"
                                                                    onkeypress="clearRadioValidation('Sessions_Effective')"
                                                                    onclick="clearRadioValidation('Sessions_Effective')" />
                                                                <label class="form-check-label" for="Sessions_Effective1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validatesessions_effective" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Visit" class="font-weight-bold">Industrial visit was informative, adequate and useful</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Visit" id="Visit5"
                                                                    onkeypress="clearRadioValidation('Visit')"
                                                                    onclick="clearRadioValidation('Visit')" />
                                                                <label class="form-check-label" for="Visit5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Visit" id="Visit4"
                                                                    onkeypress="clearRadioValidation('Visit')"
                                                                    onclick="clearRadioValidation('Visit')" />
                                                                <label class="form-check-label" for="Visit4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Visit" id="Visit3"
                                                                    onkeypress="clearRadioValidation('Visit')"
                                                                    onclick="clearRadioValidation('Visit')" />
                                                                <label class="form-check-label" for="Visit3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Visit" id="Visit2"
                                                                    onkeypress="clearRadioValidation('Visit')"
                                                                    onclick="clearRadioValidation('Visit')" />
                                                                <label class="form-check-label" for="Visit2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Visit" id="Visit4"
                                                                    onkeypress="clearRadioValidation('Visit')"
                                                                    onclick="clearRadioValidation('Visit')" />
                                                                <label class="form-check-label" for="Visit4">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validatevisit" class="text-danger"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Workshop_Session" class="font-weight-bold">Workshop session were well organized</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Workshop_Session" id="Workshop_Session5"
                                                                    onkeypress="clearRadioValidation('Workshop_Session')"
                                                                    onclick="clearRadioValidation('Workshop_Session')" />
                                                                <label class="form-check-label" for="Workshop_Session5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Workshop_Session" id="Workshop_Session4"
                                                                    onkeypress="clearRadioValidation('Workshop_Session')"
                                                                    onclick="clearRadioValidation('Workshop_Session')" />
                                                                <label class="form-check-label" for="Workshop_Session4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Workshop_Session" id="Workshop_Session3"
                                                                    onkeypress="clearRadioValidation('Workshop_Session')"
                                                                    onclick="clearRadioValidation('Workshop_Session')" />
                                                                <label class="form-check-label" for="Workshop_Session3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Workshop_Session" id="Workshop_Session2"
                                                                    onkeypress="clearRadioValidation('Workshop_Session')"
                                                                    onclick="clearRadioValidation('Workshop_Session')" />
                                                                <label class="form-check-label" for="Workshop_Session2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Workshop_Session" id="Workshop_Session1"
                                                                    onkeypress="clearRadioValidation('Workshop_Session')"
                                                                    onclick="clearRadioValidation('Workshop_Session')" />
                                                                <label class="form-check-label" for="Workshop_Session1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validateworkshop_session" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Hospitality" class="font-weight-bold">Hospitality was good</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Hospitality" id="Hospitality5"
                                                                    onkeypress="clearRadioValidation('Hospitality')"
                                                                    onclick="clearRadioValidation('Hospitality')" />
                                                                <label class="form-check-label" for="Hospitality5">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Hospitality" id="Hospitality4"
                                                                    onkeypress="clearRadioValidation('Hospitality')"
                                                                    onclick="clearRadioValidation('Hospitality')" />
                                                                <label class="form-check-label" for="Hospitality4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Hospitality" id="Hospitality3"
                                                                    onkeypress="clearRadioValidation('Hospitality')"
                                                                    onclick="clearRadioValidation('Hospitality')" />
                                                                <label class="form-check-label" for="Hospitality3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Hospitality" id="Hospitality2"
                                                                    onkeypress="clearRadioValidation('Hospitality')"
                                                                    onclick="clearRadioValidation('Hospitality')" />
                                                                <label class="form-check-label" for="Hospitality2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Hospitality" id="Hospitality1"
                                                                    onkeypress="clearRadioValidation('Hospitality')"
                                                                    onclick="clearRadioValidation('Hospitality')" />
                                                                <label class="form-check-label" for="Hospitality1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validatehospitality" class="text-danger"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Accommodation" class="font-weight-bold">Accommodation arrangements were good</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Agree"
                                                                    name="Accommodation" id="Accommodation5"
                                                                    onkeypress="clearRadioValidation('Accommodation')"
                                                                    onclick="clearRadioValidation('Accommodation')" />
                                                                <label class="form-check-label" for="Accommodation">5</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Agree"
                                                                    name="Accommodation" id="Accommodation4"
                                                                    onkeypress="clearRadioValidation('Accommodation')"
                                                                    onclick="clearRadioValidation('Accommodation')" />
                                                                <label class="form-check-label" for="Accommodation4">4</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Neutral"
                                                                    name="Accommodation" id="Accommodation3"
                                                                    onkeypress="clearRadioValidation('Accommodation')"
                                                                    onclick="clearRadioValidation('Accommodation')" />
                                                                <label class="form-check-label" for="Accommodation3">3</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Disagree" name="Accommodation" id="Accommodation2"
                                                                    onkeypress="clearRadioValidation('Accommodation')"
                                                                    onclick="clearRadioValidation('Accommodation')" />
                                                                <label class="form-check-label" for="Accommodation2">2</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Strongly Disagree"
                                                                    name="Accommodation" id="Accommodation1"
                                                                    onkeypress="clearRadioValidation('Accommodation')"
                                                                    onclick="clearRadioValidation('Accommodation')" />
                                                                <label class="form-check-label" for="Accommodation1">1</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">5-Strongly Agree, 4-Agree, 3-Neutral,
                                                                2-Disagree 1-Strongly Disagree</p>
                                                            <span id="validateaccommodation" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Rate_Overall" class="font-weight-bold">How do you rate the overall training program?</label>
                                                        <div class="col">

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Excellent"
                                                                    name="Rate_Overall" id="Rate_Overall5"
                                                                    onkeypress="clearRadioValidation('Rate_Overall')"
                                                                    onclick="clearRadioValidation('Rate_Overall')" />
                                                                <label class="form-check-label" for="Rate_Overall5">Excellent</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Very Good"
                                                                    name="Rate_Overall" id="Rate_Overall4"
                                                                    onkeypress="clearRadioValidation('Rate_Overall')"
                                                                    onclick="clearRadioValidation('Rate_Overall')" />
                                                                <label class="form-check-label" for="Rate_Overall4">Very Good</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Good"
                                                                    name="Rate_Overall" id="Rate_Overall3"
                                                                    onkeypress="clearRadioValidation('Rate_Overall')"
                                                                    onclick="clearRadioValidation('Rate_Overall')" />
                                                                <label class="form-check-label" for="Rate_Overall3">Good</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    value="Average" name="Rate_Overall" id="Rate_Overall2"
                                                                    onkeypress="clearRadioValidation('Rate_Overall')"
                                                                    onclick="clearRadioValidation('Rate_Overall')" />
                                                                <label class="form-check-label" for="Rate_Overall2">Average</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" value="Poor"
                                                                    name="Rate_Overall" id="Rate_Overall1"
                                                                    onkeypress="clearRadioValidation('Rate_Overall')"
                                                                    onclick="clearRadioValidation('Rate_Overall')" />
                                                                <label class="form-check-label" for="Rate_Overall1">Poor</label>
                                                            </div>

                                                        </div>
                                                        <div class="col">
                                                            <p class="small">Excellent, Very Good, Good,
                                                            Average, Poor</p>
                                                            <span id="validaterate_overall" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="Remarks" class="font-weight-bold">Remarks</label>
                                                        <span style="color:red">*</span>
                                                        <textarea class="form-control" id="Remarks" name="Remarks" rows="2"
                                                        placeholder="Please Enter Remarks..."
                                                        onkeypress="clearvalidateremarks()" onclick="clearvalidateremarks()"></textarea>
                                                        <span id="validateremarks" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="Suggestions" class="font-weight-bold">Any other suggstions</label>
                                                        <span style="color:red">*</span>
                                                        <textarea class="form-control" name="Suggestions" rows="2"
                                                        placeholder="Please Enter Any Other Suggstions..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" name="submit" class="btn feedback-btn w-50">Submit</button>
                                            </div>
                                            <!-- <button type="submit" name="submit" class="btn feedback-btn">Submit</button> -->
                                        </form>

                                        <?php

                                            ini_set("display_errors", 0); 
                                            date_default_timezone_set('Asia/Kolkata'); 
                                            // ini_set('error_reporting', E_ALL);
                                            ini_set('log_errors', 1);
                                            ini_set('error_log', 'error_log.txt');
                                            ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                            try {
                                            if(isset($_POST['submit']))
                                            {    
                
                                                $name=mysqli_real_escape_string($con,$_POST['Name']);
                                                $company_name=mysqli_real_escape_string($con,$_POST['Company_Name']);
                                                $title=mysqli_real_escape_string($con,$_POST['Title']);                                                
                                                $course_code=mysqli_real_escape_string($con,$_POST['Course_Code']);
                                                $commencing_date=mysqli_real_escape_string($con,$_POST['Commencing_Date']);
                                                $program_relavent=mysqli_real_escape_string($con,$_POST['Program_Relavent']);
                                                $schedule_time=mysqli_real_escape_string($con,$_POST['Schedule_Time']);
                                                $facility_satisfactory=mysqli_real_escape_string($con,$_POST['Facility_Satisfactory']);
                                                $registration=mysqli_real_escape_string($con,$_POST['Registration']);
                                                $sessions_effective=mysqli_real_escape_string($con,$_POST['Sessions_Effective']);
                                                $visit=mysqli_real_escape_string($con,$_POST['Visit']);
                                                $workshop_session=mysqli_real_escape_string($con,$_POST['Workshop_Session']);                                                
                                                $hospitality=mysqli_real_escape_string($con,$_POST['Hospitality']);
                                                $accommodation=mysqli_real_escape_string($con,$_POST['Accommodation']);
                                                $rate_overall=mysqli_real_escape_string($con,$_POST['Rate_Overall']);                                                
                                                $remarks=mysqli_real_escape_string($con,$_POST['Remarks']);
                                                $suggestions=mysqli_real_escape_string($con,$_POST['Suggestions']);

                                                $sql="INSERT INTO feedback(Name,Company_Name,Title,Course_Code,Commencing_Date,Program_Relavent,
                                                      Schedule_Time,Facility_Satisfactory,Registration,Sessions_Effective,Visit,Workshop_Session,
                                                      Hospitality,Accommodation,Rate_Overall,Remarks,Suggestions)
                                                VALUES('$name','$company_name','$title','$course_code','$commencing_date','$program_relavent',
                                                       '$schedule_time','$facility_satisfactory','$registration','$sessions_effective','$visit',
                                                       '$workshop_session','$hospitality','$accommodation','$rate_overall','$remarks','$suggestions')";
                                                    $insert=mysqli_query($con,$sql);

                                                    if($insert){
                                                        ?>
                                                        <script>
                                                            document.getElementById("AlertHeader").innerHTML = "Thankyou For Your Valueable Feedback";
                                                            document.getElementById("AlertHeader").classList.add("text-success");
                                                            $("#ProceedButton").attr("href", "./index.php");
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
                                                            $("#ProceedButton").attr("href", "./feedback.php");
                                                            $(document).ready(function(){
                                                                $('#ALertModal').modal('show');
                                                            });
                                                        </script>  
                                                        <?php
                                                    }
                                                    } 
                                                } catch (Exception $e) {
                                                    // Catch any exceptions thrown
                                                    static $error_count = 2;
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

<?php include('./includes/footer.php') ?>

<!-- bootstrap 4.3.1 js -->
<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>

<!-- bootstrap 5.1.3 js -->
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>

<script src="./assets/js/feedback.js"></script>


<!-- Bootstrap and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
