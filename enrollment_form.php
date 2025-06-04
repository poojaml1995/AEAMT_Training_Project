<?php
// session_start();
// if(isset($_SESSION['enrollment_id']))
// {
//     header('Location:index.php');
// }
// include '../includes/connection.php';
session_start();
unset($_SESSION['enrollment_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrolment Form - AEAMT</title>
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
    <link rel="stylesheet" href="./assets/css/index.css">


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script>

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
        <div class="row justify-content-center  mb-4">
            <div class="col-md-12">
                <div class="form-border rounded-lg">
                    <div class="row">
                        <div class="col">
                            <!-- <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top"> -->
                        </div> 
                        <div class="col text-center">
                            <h3 class="p-4 mb-4">Enrollment Form</h3>
                        </div> 
                        <div class="col">
                        <!-- <img src="assets/images/cmti.png" alt="" width="80" height="50" class="d-inline-block align-text-top"> -->
                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Center Head - AEAMT <br>
                                Central Manufacturing Technology Center <br>
                                Tumkur Road <br>
                                Bangalore - 560022
                            </p> 
                        </div> 
                        <div class="col-md-6 text-md-right">
                            <p>
                                Fax : 080 - 2337 0428 <br>
                                Email: training@cmti.res.in <br>
                                Mob: 0944984 2686 <br>
                                0944984 2678
                            </p>
                        </div> 
                    </div>  
                    <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">                        
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-bordered-custom" id="participantTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">SL No</th>
                                                <th scope="col">Name of the Participant</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Email ID</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i = 1; $i <= 20; $i++): ?>
                                                <tr id="participantRow<?php echo $i; ?>" style="display: <?php echo $i == 1 ? 'table-row' : 'none'; ?>;">
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <input type="text" class="form-control" name="Name[]" id="Name<?php echo $i; ?>" placeholder="Please Enter Name..."
                                                        onkeypress="clearvalidatename(<?php echo $i; ?>)" onclick="clearvalidatename(<?php echo $i; ?>)">
                                                        <span id="validatename<?php echo $i; ?>" class="text-danger"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="Designation[]" id="Designation<?php echo $i; ?>"
                                                        placeholder="Please Enter Designation..."
                                                        onkeypress="clearvalidatedesignation(<?php echo $i; ?>)" onclick="clearvalidatedesignation(<?php echo $i; ?>)">
                                                        <span id="validatedesignation<?php echo $i; ?>" class="text-danger"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="Contact_Number[]" id="Contact_Number<?php echo $i; ?>"
                                                        placeholder="Please Enter Contact Number..."
                                                        onkeypress="clearvalidatecontact_number(<?php echo $i; ?>)" onclick="clearvalidatecontact_number(<?php echo $i; ?>)">
                                                        <span id="validatecontact_number<?php echo $i; ?>" class="text-danger"></span>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="Contact_Email[]" id="Contact_Email<?php echo $i; ?>"
                                                        placeholder="Please Enter Email ID..."
                                                        onkeypress="clearvalidatecontact_email(<?php echo $i; ?>)" onclick="clearvalidatecontact_email(<?php echo $i; ?>)">
                                                        <span id="validatecontact_email<?php echo $i; ?>" class="text-danger"></span>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm me-1 rounded-end"
                                                        id="addButton<?php echo $i; ?>" onclick="addRow(<?php echo $i; ?>)">Add</button>
                                                        <?php if($i > 1): ?>
                                                        <button type="button" class="btn btn-danger btn-sm" id="removeButton<?php echo $i; ?>"
                                                        onclick="removeRow(<?php echo $i; ?>)">Remove</button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="Organisation" class="font-weight-bold">Organisation</label>
                                    <span style="color:red">*</span>
                                    <select class="custom-select d-block w-100" id="Organisation" name="Organisation" 
                                        onchange="toggleFileRequirement()"
                                        onchange="clearvalidateorganisation()" onclick="clearvalidateorganisation()">
                                        <option value="Null">Choose Organisation...</option>
                                        <option value="Government">Government</option>
                                        <option value="Non Government">Non Government</option>
                                    </select>
                                        <span id="validateorganisation" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="Organisation_Name" class="font-weight-bold">Organisation Name</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Organisation_Name" name="Organisation_Name"
                                    placeholder="Please Enter Organisation Name..."                                          
                                        onchange="clearvalidateorganisation_name()" onclick="clearvalidateorganisation_name()">
                                        <span id="validateorganisation_name" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="GSTNumber" class="font-weight-bold">GST Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="GST_Number" name="GST_Number"
                                        placeholder="Please Enter GST Number..." 
                                        onkeypress="clearvalidategstnumber()" onclick="clearvalidategstnumber()">
                                        <span id="validategstnumber" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Organisation_Type" class="font-weight-bold">Organisation Type</label>
                                    <span style="color:red">*</span>
                                    <select class="custom-select d-block w-100" id="Organisation_Type" name="Organisation_Type"
                                            onchange="toggleCappSection()"
                                            onchange="clearvalidateorganisation_type()" onclick="clearvalidateorganisation_type()">
                                        <option value="Null">Choose Organisation Type...</option>
                                        <option value="CAAP">CAAP</option>
                                        <option value="Academic">Academic</option>
                                    </select>
                                    <span id="validateorganisation_type" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6" id="capp-section" style="display: none;">
                                <div class="form-group">
                                    <label for="CAAP_Member" class="font-weight-bold">Do you have a CAAP membership?
                                    <a href="./assets/pdf_files/caap.pdf" target="_blank" class="text-primary">Know more...</a>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Yes" name="CAAP_Member" checked/>
                                                <label class="form-check-label" for="CAAP_Member1">Yes</label>
                                                <span style="color:red">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="No" name="CAAP_Member" />
                                                <label class="form-check-label" for="CAAP_Member2">No</label>
                                                <span style="color:red">*</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address" class="font-weight-bold">Address</label>
                                    <span style="color:red">*</span>
                                    <textarea class="form-control" id="Address" name="Address" rows="2" 
                                        placeholder="Please Enter Address..." 
                                        onkeypress="clearvalidateaddress()" onclick="clearvalidateaddress()"></textarea>
                                        <span id="validateaddress" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Contact_Name" class="font-weight-bold">Contact Person Name</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Contact_Name" name="Contact_Name" 
                                        placeholder="Please Enter Contact Person Name..." 
                                        onkeypress="clearvalidatecontact_name()" onclick="clearvalidatecontact_name()">
                                        <span id="validatecontact_name" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Contact_Designation" class="font-weight-bold">Contact Person Designation</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Contact_Designation" name="Contact_Designation"
                                        placeholder="Please Enter Designation..." 
                                        onkeypress="clearvalidatecontact_designation()" onclick="clearvalidatecontact_designation()">
                                        <span id="validatecontact_designation" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Contact_Mobile_No" class="font-weight-bold">Contact Person Mobile Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Contact_Mobile_No" name="Contact_Mobile_No"
                                        placeholder="Please Enter Mobile Number..." 
                                        onkeypress="clearvalidatecontact_mobile_no()" onclick="clearvalidatecontact_mobile_no()">
                                        <span id="validatecontact_mobile_no" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email" class="font-weight-bold">Contact Person Email</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Email" name="Email"    
                                        placeholder="Please Enter Email ID..." 
                                        onkeypress="clearvalidateemail()" onclick="clearvalidateemail()">
                                        <span id="validateemail" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Fax" class="font-weight-bold">Fax</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Fax" name="Fax" 
                                        placeholder="Please Enter Fax No..." 
                                        onkeypress="clearvalidatefax()" onclick="clearvalidatefax()">
                                        <span id="validatefax" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="po_file" class="font-weight-bold">Purchase Order File</label>
                                <input type="file" id="po_file" name="PO_File" class="form-control" accept=".doc,.docx,.pdf,image/*">
                                <span id="po_file_error" class="text-danger" style="display:none;">PO File is required for Non Government organizations.</span>    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Accommodation" class="font-weight-bold">Is Guest House Required</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Yes" name="Accommodation"
                                                id="Accommodation1" onclick="toggleGuestHouseInput(true)" />
                                                <label class="form-check-label" for="Accommodation1">Yes</label>
                                                <span style="color:red">*</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="No" name="Accommodation"
                                                    id="Accommodation2" onclick="toggleGuestHouseInput(false)" checked />
                                                <label class="form-check-label" for="Accommodation2">No</label>
                                                <span style="color:red">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="validateaccommodation" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6" id="guestHouseDetails" style="display: none;">
                                <div class="form-group">
                                    <label for="checkinDate" class="font-weight-bold">Check-In Date and Time</label>
                                    <input type="datetime-local" class="form-control" name="checkinDate"
                                    placeholder="Please Select Check-In Date and Time..." />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Accommodation_Members" class="font-weight-bold">Number of Members Requiring Accommodation</label>
                                    <input type="text" class="form-control" name="Accommodation_Members"
                                    placeholder="Please Enter Number of Members Requiring Accommodation..." />
                                </div>
                            </div>
                            <div class="col-md-6" id="guestHouseDetails" style="display: none;">
                                <div class="form-group">
                                    <label for="checkoutDate" class="font-weight-bold">Check-Out Date and Time</label>
                                    <input type="datetime-local" class="form-control" name="checkoutDate"
                                        placeholder="Please Select Check-Out Date and Time..." />
                                </div>
                            </div>
                            <div class="col-md-12" id="guestHouseDetails" style="display: none;">
                                <div class="form-group">
                                    <label for="Remarks" class="font-weight-bold">Remarks</label>
                                    <textarea class="form-control" name="Remarks" rows="2" placeholder="Please Enter Remarks..."></textarea>
                                </div>
                                <span style="color:red; font-size:14px;">* Guest house available based on availability.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Source" class="font-weight-bold">How did you get to known about Training</label>
                                        <span style="color:red">*</span>
                                        <select class="custom-select d-block w-100" id="Source" name="Source"
                                        onchange="clearvalidatesource()" onclick="clearvalidatesource()">
                                        <option value="Null">Choose How did you get to known about Training?</option>
                                        <option value="Email">Email</option>
                                        <option value="Phone call">Phone call</option>
                                        <option value="Facebook / Linkedin / Twiter">Facebook / Linkedin / Twiter</option>
                                        </select>
                                    <span id="validatesource" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PaymentDetails" class="font-weight-bold">Payment Details : (Via NCPI/UPI, Cheque/DD, NEFT)
                                    <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="Payment_Details" name="Payment_Details"                                        
                                        placeholder="Please Enter Payment Details..." 
                                        onkeypress="clearvalidatepayment_details()" onclick="clearvalidatepayment_details()">
                                        <span id="validatepayment_details" class="text-danger"></span>
                                </div>
                            </div>
                        </div>            
                        <div class = "text-center mt-3">
                            <button type="submit" name="submit" class="btn btn-primary" style="width: 150px;">Next</button>
                        <div>
                    </form>
                    <?php

                        ini_set("display_errors", 0); 
                        date_default_timezone_set('Asia/Kolkata'); 
                        ini_set('log_errors', 1);
                        ini_set('error_log', './error_log.txt');
                        ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                        try {
                        if (isset($_POST['submit'])) {
                            $currentDate = date('Ymd');
                            $query = mysqli_query($con, "SELECT MAX(CAST(SUBSTRING(Enrollment_ID, LENGTH('EID{$currentDate}') + 1)
                                AS UNSIGNED)) AS max_id FROM enrollment_form WHERE Enrollment_ID LIKE 'EID{$currentDate}%'");
                            $row = mysqli_fetch_assoc($query);
                            $nextId = ($row['max_id'] ? $row['max_id'] + 1 : 1);
                            $nextIdFormatted = str_pad($nextId, 3, '0', STR_PAD_LEFT);
                            $enrollment_id = "EID{$currentDate}{$nextIdFormatted}";

                            $pofile_dir = "./PO_upload_files/";
                            $pofile_file = $pofile_dir . basename($_FILES["PO_File"]["name"]);
                            
                            $title = mysqli_real_escape_string($con, $_POST['Title']);
                            $course_code = mysqli_real_escape_string($con, $_POST['Course_Code']);
                            $commencing_date = mysqli_real_escape_string($con, $_POST['Commencing_Date']);
                            $organisation = mysqli_real_escape_string($con, $_POST['Organisation']);
                            $organisation_name = mysqli_real_escape_string($con, $_POST['Organisation_Name']);
                            $gst_number = mysqli_real_escape_string($con, $_POST['GST_Number']);
                            $organisation_type = mysqli_real_escape_string($con, $_POST['Organisation_Type']);
                            $caap_member = mysqli_real_escape_string($con, $_POST['CAAP_Member']);
                            $address = mysqli_real_escape_string($con, $_POST['Address']);
                            $contact_name = mysqli_real_escape_string($con, $_POST['Contact_Name']);
                            $contact_designation = mysqli_real_escape_string($con, $_POST['Contact_Designation']);
                            $contact_mobile_no = mysqli_real_escape_string($con, $_POST['Contact_Mobile_No']);
                            $email = mysqli_real_escape_string($con, $_POST['Email']);
                            $fax = mysqli_real_escape_string($con, $_POST['Fax']);
                            $accommodation = mysqli_real_escape_string($con, $_POST['Accommodation']);
                            $checkindate = mysqli_real_escape_string($con, $_POST['checkinDate']);
                            $checkoutdate = mysqli_real_escape_string($con, $_POST['checkoutDate']);
                            $accommodation_members = mysqli_real_escape_string($con, $_POST['Accommodation_Members']);
                            $remarks = mysqli_real_escape_string($con, $_POST['Remarks']);
                            $source = mysqli_real_escape_string($con, $_POST['Source']);
                            $payment_details = mysqli_real_escape_string($con, $_POST['Payment_Details']);
                            
                            $names = $_POST['Name'];
                            $designations = $_POST['Designation'];
                            $contact_numbers = $_POST['Contact_Number'];
                            $contact_emails = $_POST['Contact_Email'];
                            
                            $query = "INSERT INTO enrollment_form (Enrollment_ID, Title, Course_Code, Commencing_Date, Name, 
                                        Designation, Contact_Number,Contact_Email, Organisation, Organisation_Name, GST_Number, 
                                        Organisation_Type, CAAP_Member, Address, Contact_Name, Contact_Designation, Contact_Mobile_No, 
                                        Email, Fax, Accommodation, checkinDate, checkoutDate, Accommodation_Members, Remarks, Source, Payment_Details";

                            if (($organisation === "Non Government" && !empty($_FILES["PO_File"]["name"])) || ($organisation === "Government" && $_FILES["PO_File"]["error"] === 0)) {
                                $query .= ", PO_file_loc";
                            }

                            $query .= ") VALUES ";

                            $values = [];
                            for ($i = 0; $i < count($names); $i++) {
                                $name = mysqli_real_escape_string($con, $names[$i]);
                                $designation = mysqli_real_escape_string($con, $designations[$i]);
                                $contact_number = mysqli_real_escape_string($con, $contact_numbers[$i]);
                                $contact_email = mysqli_real_escape_string($con, $contact_emails[$i]);

                                if (!empty($name) && !empty($designation) && !empty($contact_number) && !empty($contact_email)) {
                                    $value = "('$enrollment_id', '$title', '$course_code', '$commencing_date', '$name', '$designation', 
                                    '$contact_number', '$contact_email', '$organisation', '$organisation_name', '$gst_number', 
                                    '$organisation_type', '$caap_member', '$address', '$contact_name', '$contact_designation', 
                                    '$contact_mobile_no', '$email', '$fax', '$accommodation', '$checkindate', '$checkoutdate', 
                                    '$accommodation_members', '$remarks', '$source', '$payment_details'";
                                    
                                    if (($organisation === "Non Government" && !empty($_FILES["PO_File"]["name"])) || ($organisation === "Government" && $_FILES["PO_File"]["error"] === 0)) {
                                        $value .= ", '$pofile_file'";
                                    }

                                    $value .= ")";
                                    $values[] = $value;
                                }
                            }

                            if ($organisation === "Non Government") {
                                if (isset($_FILES['PO_File']) && $_FILES['PO_File']['error'] === 0) {
                                    if (move_uploaded_file($_FILES["PO_File"]["tmp_name"], $pofile_file)) {
                                        $file_uploaded = true;
                                    } else {
                                        echo "Error in uploading PO File.";
                                        exit();
                                    }
                                } else {
                                    echo "PO File is required for Non Government organizations.";
                                    exit();
                                }
                            }
                            
                            if ($organisation === "Government" && isset($_FILES['PO_File']) && $_FILES['PO_File']['error'] === 0) {
                                move_uploaded_file($_FILES["PO_File"]["tmp_name"], $pofile_file);
                            }

                            if (!empty($values)) {
                                $final_query = $query . implode(", ", $values);
                                $insert = mysqli_query($con, $final_query);

                                if ($insert) {
                                    echo '<script>window.location.href = "./payment.php?enrollment_id=' . ($enrollment_id) . '";</script>';
                                    exit();
                                } else {
                                    echo '<script>window.location.href = "./enrollment_form.php?message=error";</script>';
                                    exit();
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
</main>

<?php include('./includes/footer.php') ?>
<!-- bootstrap 4.3.1 js -->
<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>

<!-- bootstrap 5.1.3 js -->
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>

<script src="./assets/js/enroolmentform.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>