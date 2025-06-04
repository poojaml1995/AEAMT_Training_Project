
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">
    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</head>
<body>

    <?php include('./includes/connection.php') ?>

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
                            <a type="button" class="btn btn-primary" id="ProceedButton">OK</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-12">
                        <div class="training-form-border bg-light rounded-lg">
                                <div class="row">
                                    <div class="col">
                                        <!-- <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top"> -->
                                    </div>
                                    <div class="col text-center">
                                        <h3 class="p-4 mb-4">Registration Form</h3>
                                    </div>
                                    <div class="col">
                                        <!-- <img src="assets/images/cmti.png" alt="" width="80" height="50" class="d-inline-block align-text-top"> -->
                                    </div>
                                </div>
                                
                                    <form onsubmit="return validateform()" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Title" class="font-weight-bold">Title of the Training Programme</label>
                                        <span style="color:red">*</span>
                                        <select class="custom-select d-block w-100" id="Title" name="Title" onchange="autofillCourseCode()"
                                            onchange="clearvalidatetitle()" onclick="clearvalidatetitle()">
                                            <option value="Null">Choose Title of the Training Programme...</option>
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
                                        <div class="row mb-4">
                                            <div class="col-md-8">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label for="Saturation" class="font-weight-bold">Saturation</label>
                                                        <span style="color:red">*</span>
                                                        <select class="custom-select" id="Saturation" name="Saturation"
                                                         onchange="clearvalidatesaturation()" onclick="clearvalidatesaturation()">
                                                            <option value="Null">Select Saturation...</option>
                                                            <option value="Mr">Mr.</option>
                                                            <option value="Ms">Ms.</option>
                                                            <option value="Mrs">Mrs.</option>
                                                            <option value="Dr">Dr.</option>
                                                            <option value="Others">Other</option>
                                                        </select>
                                                        <span id="validatesaturation" class="text-danger"></span>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <label for="Name" class="font-weight-bold">Name</label>
                                                        <span style="color:red">*</span>
                                                        <input type="text" class="form-control" id="Name" name="Name"
                                                            placeholder="Please Enter Name..." 
                                                            onkeypress="clearvalidatename()" onclick="clearvalidatename()">
                                                        <span id="validatename" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                                        <span style="color:red">*</span>
                                                        <input type="date" class="form-control" id="DOB" name="DOB"
                                                           onkeypress="clearvalidatedob()" onclick="clearvalidatedob()">
                                                        <span id="validatedob" class="text-danger"></span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="Designation" class="font-weight-bold">Designation</label>
                                                        <span style="color:red">*</span>
                                                        <input type="text" class="form-control" id="Designation" name="Designation"
                                                            placeholder="Please Enter Designation..." 
                                                            onkeypress="clearvalidatedesignation()" onclick="clearvalidatedesignation()">
                                                        <span id="validatedesignation" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                       <label for="Gender" class="font-weight-bold">Gender</label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Male" name="Gender" id="Gender1"
                                                                        onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" checked/>
                                                                        <label class="form-check-label" for="Gender1"></label>Male
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Female" name="Gender" id="Gender2"
                                                                        onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" /> 
                                                                        <label class="form-check-label" for="Gender2"></label>Female
                                                               </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                        <input class="form-check-input" type="radio" value="Others" name="Gender" id="Gender3"
                                                                        onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" />  
                                                                        <label class="form-check-label" for="Gender3"></label>Others
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <span id="validategender" class="text-danger"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                <div class="text-center">
                                                    <label for="image" class="col-form-label">
                                                        <img class="img-account-profile rounded-circle mt-2" src="./assets/images/Profile.png" width="200" height="200" alt="Profile Picture" id="profilePreview">
                                                    </label>
                                                    <div class="mt-2">
                                                        <input type="file" class="form-control text-black" id="image" name="image" accept="image/*" 
                                                        onkeypress="clearvalidateimage()" onclick="clearvalidateimage()" />
                                                        <span id="validateimage" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div> 
                                        <div class="form-group">
                                            <label for="Organisation_Name" class="font-weight-bold">Organisation Name</label>
                                            <span style="color:red">*</span>
                                            <textarea class="form-control" id="Organisation_Name" name="Organisation_Name" rows="2"
                                            placeholder="Please Enter Organisation Name..." 
                                            onkeypress="clearvalidateorganisation_name()" onclick="clearvalidateorganisation_name()"></textarea>
                                            <span id="validateorganisation_name" class="text-danger"></span>
                                        </div>    
                                        <div class="form-group">
                                            <label for="Qualification" class="font-weight-bold">Educational Qualification</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" id="Qualification" name="Qualification"
                                            placeholder="Please Enter Educational Qualification..." 
                                            onkeypress="clearvalidatequalification()" onclick="clearvalidatequalification()">
                                            <span id="validatequalification" class="text-danger"></span>
                                        </div>
                                        <label for="Name" class="font-weight-bold">Experience</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class=col-md-6>
                                                    <label for="Areas" class="font-weight">Areas:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Areas" name="Areas"
                                                    placeholder="Please Enter Areas..." 
                                                    onkeypress="clearvalidateareas()" onclick="clearvalidateareas()">
                                                    <span id="validateareas" class="text-danger"></span>
                                                </div>
                                                <div class=col-md-6>
                                                    <label for="Years" class="font-weight">Years:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Years" name="Years"
                                                    placeholder="Please Enter Years..." 
                                                    onkeypress="clearvalidateyears()" onclick="clearvalidateyears()">
                                                    <span id="validateyears" class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="Name" class="font-weight-bold">Address</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class=col-md-6>
                                                    <label for="Office_Address" class="font-weight">Office Address:</label>
                                                    <span style="color:red">*</span>
                                                    <textarea class="form-control" id="Office_Address" name="Office_Address" rows="2"
                                                    placeholder="Please Enter Office Address..." 
                                                    onkeypress="clearvalidateofficeadd()" onclick="clearvalidateofficeadd()"></textarea>
                                                    <span id="validateofficeadd" class="text-danger"></span>
                                                </div>
                                                <div class=col-md-6>
                                                    <label for="Residential_Address" class="font-weight">Residential Address:</label>
                                                    <span style="color:red">*</span>
                                                    <textarea class="form-control" id="Residential_Add" name="Residential_Address"
                                                    rows="2" placeholder="Please Enter Residential Address..." 
                                                    onkeypress="clearvalidateresidentialadd()" onclick="clearvalidateresidentialadd()"></textarea>
                                                    <span id="validateresidentialadd" class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="Name" class="font-weight-bold">Phone / Fax</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class=col-md-6>
                                                    <label for="Office_Phone" class="font-weight">Office Phone No:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Office_Phone" name="Office_Phone"
                                                    placeholder="Please Enter Office Phone No..." 
                                                    onkeypress="clearvalidateofficeph()" onclick="clearvalidateofficeph()">
                                                    <span id="validateofficeph" class="text-danger"></span>
                                                </div>
                                                <div class=col-md-6>
                                                    <label for="Years" class="font-weight">Residential Phone No:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Residential_Phone" name="Residential_Phone"
                                                    placeholder="Please Enter Residential Phone No..." 
                                                    onkeypress="clearvalidateresidentialph()" onclick="clearvalidateresidentialph()">
                                                    <span id="validateresidentialph" class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Mobile" class="font-weight-bold">Mobile No</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" id="Mobile" name="Mobile_Number"
                                            placeholder="Please Enter Mobile No..." 
                                            onkeypress="clearvalidatemobile()" onclick="clearvalidatemobile()">
                                            <span id="validatemobile" class="text-danger"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="font-weight-bold">Email ID</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" id="Email" name="Email"
                                            placeholder="Please Enter Email ID..." 
                                            onkeypress="clearvalidateemail()" onclick="clearvalidateemail()">
                                            <span id="validateemail" class="text-danger"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Purpose_of_Prog" class="font-weight-bold">Purpose of attending the Programme</label>
                                            <span style="color:red">*</span>
                                            <textarea class="form-control" id="Purpose_of_Prog" name="Purpose_of_Prog" rows="2"
                                            placeholder="Please Enter Purpose of attending the Programme..." 
                                            onkeypress="clearvalidatepurpose_of_prog()" onclick="clearvalidatepurpose_of_prog()"></textarea>
                                            <span id="validatepurpose_of_prog" class="text-danger"></span>
                                        </div>    
                                        <div class="form-group">
                                            <label for="Expectations" class="font-weight-bold">Expectations from the Programme</label>
                                            <span style="color:red">*</span>
                                            <textarea class="form-control" id="Expectations" name="Expectations"
                                            placeholder="Please Enter Expectations from the Programme..." 
                                            onkeypress="clearvalidateexpectations()" onclick="clearvalidateexpectations()"></textarea>
                                            <span id="validateexpectations" class="text-danger"></span>
                                        </div>
                                        <div class="row">
                                            <label for="Name" class="font-weight-bold">In case of Emergency, Whom to contact?</label>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Contact_Name" class="font-weight-bold">Name:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Contact_Name" name="Contact_Name"
                                                    placeholder="Please Enter Emergency Contact Name..." 
                                                    onkeypress="clearvalidatecontact_name()" onclick="clearvalidatecontact_name()">
                                                    <span id="validatecontact_name" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Contact_Relationship" class="font-weight-bold">Relationship:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Contact_Relationship" name="Contact_Relationship"
                                                    placeholder="Please Enter Emergency Contact Relationship..." 
                                                    onkeypress="clearvalidatecontact_relationship()" onclick="clearvalidatecontact_relationship()">
                                                    <span id="validatecontact_relationship" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Contact_No" class="font-weight-bold">Contact Details:</label>
                                                    <span style="color:red">*</span>
                                                    <input type="text" class="form-control" id="Contact_No" name="Contact_No"
                                                    placeholder="Please Enter Emergency Contact Details..." 
                                                    onkeypress="clearvalidatecontactno()" onclick="clearvalidatecontactno()">
                                                    <span id="validatecontactno" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="Contact_Address" class="font-weight-bold">Contact Address:</label>
                                                    <span style="color:red">*</span>
                                                    <textarea class="form-control" id="Contact_Address" name="Contact_Address"
                                                    placeholder="Please Enter Emergency Contact Address..." 
                                                    onkeypress="clearvalidatecontact_address()" onclick="clearvalidatecontact_address()"></textarea>
                                                    <span id="validatecontact_address" class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "col text-center mt-3">
                                           <button type="submit" name="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
                                        <div>

                                    </form> 
                                    <?php 

                                    ini_set("display_errors", 0); 
                                    date_default_timezone_set('Asia/Kolkata'); 
                                    ini_set('log_errors', 1);
                                    ini_set('error_log', './error_log.txt');
                                    ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                    try {
                                    if(isset($_POST['submit']))
                                    {                            

                                    $currentDate = date('Ymd');
                                    $query = mysqli_query($con, "SELECT MAX(CAST(SUBSTRING(Participant_ID, LENGTH('PID{$currentDate}')
                                     + 1) AS UNSIGNED)) AS max_id FROM training_registration WHERE Participant_ID LIKE 'PID{$currentDate}%'");
                                    $row = mysqli_fetch_assoc($query);
                                    $nextId = ($row['max_id'] ? $row['max_id'] + 1 : 1);
                                    $nextIdFormatted = str_pad($nextId, 1, '0', STR_PAD_LEFT);
                                    $participant_id = "PID{$currentDate}{$nextIdFormatted}";

                                    $imagetarget_dir = "./profileimages/";
                                    $imagetarget_file = $imagetarget_dir . basename($_FILES["image"]["name"]);

                                    $title = mysqli_real_escape_string($con, $_POST['Title']);
                                    $course_code = mysqli_real_escape_string($con, $_POST['Course_Code']);
                                    $commencing_date = mysqli_real_escape_string($con, $_POST['Commencing_Date']);
                                    $saturation = mysqli_real_escape_string($con, $_POST['Saturation']);
                                    $name = mysqli_real_escape_string($con, $_POST['Name']);
                                    $dob = mysqli_real_escape_string($con, $_POST['DOB']);
                                    $designation = mysqli_real_escape_string($con, $_POST['Designation']);
                                    $gender = mysqli_real_escape_string($con, $_POST['Gender']); 
                                    $organisation_name = mysqli_real_escape_string($con, $_POST['Organisation_Name']);
                                    $qualification = mysqli_real_escape_string($con, $_POST['Qualification']);
                                    $areas = mysqli_real_escape_string($con, $_POST['Areas']);
                                    $years = mysqli_real_escape_string($con, $_POST['Years']);
                                    $office_address = mysqli_real_escape_string($con, $_POST['Office_Address']);
                                    $residential_address = mysqli_real_escape_string($con, $_POST['Residential_Address']);
                                    $office_phone = mysqli_real_escape_string($con, $_POST['Office_Phone']);
                                    $residential_phone = mysqli_real_escape_string($con, $_POST['Residential_Phone']);
                                    $mobile_number = mysqli_real_escape_string($con, $_POST['Mobile_Number']);
                                    $email = mysqli_real_escape_string($con, $_POST['Email']);
                                    $purpose_of_prog = mysqli_real_escape_string($con, $_POST['Purpose_of_Prog']);
                                    $expectations = mysqli_real_escape_string($con, $_POST['Expectations']);
                                    $contact_name = mysqli_real_escape_string($con, $_POST['Contact_Name']);
                                    $contact_relationship = mysqli_real_escape_string($con, $_POST['Contact_Relationship']);
                                    $contact_no = mysqli_real_escape_string($con, $_POST['Contact_No']);
                                    $contact_address = mysqli_real_escape_string($con, $_POST['Contact_Address']);
    
                                    $sql = "INSERT INTO training_registration(Participant_ID,Title,Course_Code,Commencing_Date,Saturation,
                                            Name,DOB,Designation,Gender,Organisation_Name,Qualification,Areas,Years,Office_Address,Residential_Address,
                                            Office_Phone,Residential_Phone,Mobile_Number,Email,Purpose_of_Prog,Expectations,Contact_Name,
                                            Contact_Relationship,Contact_No,Contact_Address,image_loc)
                                    VALUES ('$participant_id','$title','$course_code','$commencing_date','$saturation','$name','$dob','$designation',
                                            '$gender','$organisation_name','$qualification','$areas','$years','$office_address','$residential_address',
                                            '$office_phone','$residential_phone','$mobile_number','$email','$purpose_of_prog','$expectations',
                                            '$contact_name','$contact_relationship','$contact_no','$contact_address','$imagetarget_file')";
                                     $insert=mysqli_query($con,$sql);
                                    
                                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget_file)) 
                                    {
                                        if($insert)
                                        {
                                            ?>
                                                <script>
                                                    document.getElementById("AlertHeader").innerHTML = "Registration Form Uploaded Successfully";
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
                                                    $("#ProceedButton").attr("href", "./registration_form.php");
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
                                error_log($errorMessage . PHP_EOL, 3, "./error_log.txt");
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

<script src="./assets/js/registration_form.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>