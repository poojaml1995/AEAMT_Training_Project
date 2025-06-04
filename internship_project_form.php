
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship/Project Form - AEAMT</title>
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
                <div class="training-form-border bg-light rounded-lg p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <img src="assets/images/aeamt_logo.png" alt="AEAMT Logo" width="100" height="60" class="d-inline-block align-text-top">
                        </div>
                        <div class="text-center flex-grow-1">
                            <h3 class="p-4 mb-4">Internship / Project Form</h3>
                        </div>
                        <div>
                            <img src="assets/images/cmti.png" alt="CMTI Logo" width="80" height="50" class="d-inline-block align-text-top">
                        </div>
                    </div>
                    
                    <form onsubmit="return validateform()" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="Application_For" class="font-weight-bold">Application For</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="MHI_Internship" name="Application_For" id="Application_For1"
                                                    onkeypress="clearRadioValidation('Application_For')" onclick="clearRadioValidation('Application_For')" checked/>
                                                    <label class="form-check-label" for="Application_For1"></label>MHI Internship
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Non_MHI_Internship" name="Application_For" id="Application_For2"
                                                    onkeypress="clearRadioValidation('Application_For')" onclick="clearRadioValidation('Application_For')" /> 
                                                    <label class="form-check-label" for="Application_For2"></label>Non MHI Internship
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="MHI_Project" name="Application_For" id="Application_For3"
                                                    onkeypress="clearRadioValidation('Application_For')" onclick="clearRadioValidation('Application_For')" />  
                                                    <label class="form-check-label" for="Application_For3"></label>MHI Project
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Non_MHI_Project" name="Application_For" id="Application_For4"
                                                    onkeypress="clearRadioValidation('Application_For')" onclick="clearRadioValidation('Application_For')" />  
                                                    <label class="form-check-label" for="Application_For4"></label>Non MHI Project
                                                </div>
                                            </div>
                                        </div>
                                        <span id="validateapplication_for" class="text-danger"></span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="Name" class="font-weight-bold">Candidate Name</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Please Enter Name..." 
                                        onkeypress="clearvalidatename()" onclick="clearvalidatename()">
                                    <span id="validatename" class="text-danger">Note: Name to be printed on the Certificate</span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="font-weight-bold">Guardians</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Father" name="Guardians" id="Guardians1"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" checked/>
                                                    <label class="form-check-label" for="Guardians1">Father</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Mother" name="Guardians" id="Guardians2"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" /> 
                                                    <label class="form-check-label" for="Guardians2">Mother</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Spouse_Name" name="Guardians" id="Guardians3"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" /> 
                                                    <label class="form-check-label" for="Guardians3">Spouse Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <span id="validateguardians" class="text-danger"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Guardians_Name" class="font-weight-bold">Guardians Name</label>
                                        <span style="color:red">*</span>
                                        <input type="text" class="form-control" id="Guardians_Name" name="Guardians_Name"
                                            placeholder="Please Enter Guardians Name..." 
                                            onkeypress="clearvalidateguardians_name()" onclick="clearvalidateguardians_name()">
                                        <span id="validateguardians_name" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                        <span style="color:red">*</span>
                                        <input type="date" class="form-control" id="DOB" name="DOB" 
                                            onkeypress="clearvalidatedob()" onclick="clearvalidatedob()">
                                        <span id="validatedob" class="text-danger"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Gender" class="font-weight-bold">Gender</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Male" name="Gender" id="Gender1"
                                                    onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" checked/>
                                                    <label class="form-check-label" for="Gender1">Male</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Female" name="Gender" id="Gender2"
                                                    onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" /> 
                                                    <label class="form-check-label" for="Gender2">Female</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Others" name="Gender" id="Gender3"
                                                    onkeypress="clearRadioValidation('Gender')" onclick="clearRadioValidation('Gender')" />  
                                                    <label class="form-check-label" for="Gender3">Others</label>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="College_Name" class="font-weight-bold">College Name</label>
                                    <span style="color:red">*</span>
                                    <textarea class="form-control" id="College_Name" name="College_Name" rows="2" 
                                        placeholder="Please Enter College Name..." 
                                        onkeypress="clearvalidatecollege_name()" 
                                        onclick="clearvalidatecollege_name()"></textarea>
                                    <span id="validatecollege_name" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Branch" class="font-weight-bold">Branch</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Branch" name="Branch"
                                        placeholder="Please Enter Branch..." 
                                        onkeypress="clearvalidatebranch()" onclick="clearvalidatebranch()">
                                    <span id="validatebranch" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Roll_Number" class="font-weight-bold">Roll Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Roll_Number" name="Roll_Number" 
                                        placeholder="Please Enter Roll Number..." 
                                        onkeypress="clearvalidateroll_number()" onclick="clearvalidateroll_number()">
                                    <span id="validateroll_number" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label for="Academic_Status" class="font-weight-bold">Current year of study & Pursuing Sem</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Academic_Status" name="Academic_Status" 
                                        placeholder="Please Enter Academic Status..." 
                                        onkeypress="clearvalidateacademic_status()" onclick="clearvalidateacademic_status()">
                                    <span id="validateacademic_status" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="font-weight-bold text-center">Internship Duration (Tentative)</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Internship_Start_Date" class="font-weight-bold">Start Date</label>
                                    <span style="color:red">*</span>
                                    <input type="date" class="form-control" id="Internship_Start_Date" name="Internship_Start_Date"
                                     placeholder="Please Enter Internship Start Date..." 
                                        onkeypress="clearvalidateinternship_start_date()" onclick="clearvalidateinternship_start_date()">
                                    <span id="validateinternship_start_date" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Internship_End_Date" class="font-weight-bold">End Date</label>
                                    <span style="color:red">*</span>
                                    <input type="date" class="form-control" id="Internship_End_Date" name="Internship_End_Date"
                                     placeholder="Please Enter Internship End Date..." 
                                        onkeypress="clearvalidateinternship_end_date()" onclick="clearvalidateinternship_end_date()">
                                    <span id="validateinternship_end_date" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address" class="font-weight-bold">Address (For Correspondence)</label>
                                    <span style="color:red">*</span>
                                    <textarea class="form-control" id="Address" name="Address" rows="5"
                                        placeholder="Please Enter Address..."
                                        onkeypress="clearvalidateaddress()" onclick="clearvalidateaddress()"></textarea>
                                    <span id="validateaddress" class="text-danger"></span>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address" class="font-weight-bold">Address (For Correspondence)</label>
                                    <span style="color:red">*</span>
                                    <textarea class="form-control" id="Address" name="Address" rows="1" 
                                        placeholder="Please Enter Address..." 
                                        oninput="autoResize(this)" 
                                        onkeypress="clearvalidateaddress()" 
                                        onclick="clearvalidateaddress()" 
                                        style="overflow:hidden; min-height:38px;"></textarea>
                                    <span id="validateaddress" class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                        <script>
                            function autoResize(textarea) {
                                textarea.style.height = "auto"; 
                                textarea.style.height = (textarea.scrollHeight) + "px"; 
                            }
                        </script>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Mobile_Number" class="font-weight-bold">Mobile Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Mobile_Number" name="Mobile_Number" placeholder="Please Enter Mobile Number..." 
                                        onkeypress="clearvalidatemobile_number()" onclick="clearvalidatemobile_number()">
                                    <span id="validatemobile_number" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email" class="font-weight-bold">Email ID</label>
                                    <span style="color:red">*</span>
                                    <input type="email" class="form-control" id="Email" name="Email"  placeholder="Please Enter Email ID..." 
                                        onkeypress="clearvalidateemail()" onclick="clearvalidateemail()">
                                    <span id="validateemail" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">     
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Aadhaar_Number" class="font-weight-bold">Aadhaar Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Aadhaar_Number" name="Aadhaar_Number"
                                        placeholder="Please Enter Aadhaar Number..." 
                                        onkeypress="clearvalidateaadhaar_number()" onclick="clearvalidateaadhaar_number()">
                                    <span id="validateaadhaar_number" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="Category" class="font-weight-bold">Category</label>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="SC" name="Category" id="Category1"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')" checked/>
                                                    <label class="form-check-label" for="Category1"></label>SC
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="ST" name="Category" id="Category2"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')" /> 
                                                    <label class="form-check-label" for="Category2"></label>ST
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="OBC" name="Category" id="Category3"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')" />  
                                                    <label class="form-check-label" for="Category3"></label>OBC
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="PWD" name="Category" id="Category4"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')"/>
                                                    <label class="form-check-label" for="Category4"></label>PWD
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="GEN" name="Category" id="Category5"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')" /> 
                                                    <label class="form-check-label" for="Category5"></label>GEN
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="EWS" name="Category" id="Category6"
                                                    onkeypress="clearRadioValidation('Category')" onclick="clearRadioValidation('Category')" />  
                                                    <label class="form-check-label" for="Category6"></label>EWS
                                                </div>
                                            </div>
                                        </div>
                                        <span id="validatecategory" class="text-danger"></span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <label class="font-weight-bold text-center">Qualification</label>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-bordered-custom">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 5%;">SL No</th>
                                                <th scope="col">Education Qualification</th>
                                                <th scope="col">Institution Name, Place & Board/University</th>
                                                <th scope="col" style="width: 15%;">Year of Passing</th>
                                                <th scope="col" style="width: 15%;">CGPA/Percentage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">a</td>
                                                <td>
                                                    <textarea class="form-control"  id="SSLC_Qualification" name="SSLC_Qualification" rows="4"
                                                    placeholder="Please Enter Your SSLC Qualification..." onkeypress="clearvalidatesslc_qualification()"
                                                        onclick="clearvalidatesslc_qualification()"></textarea>
                                                    <span id="validatesslc_qualification" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="SSLC_School_Name" name="SSLC_School_Name" rows="4"
                                                    placeholder="Please Enter The Full Name of The Institution..." onkeypress="clearvalidatesslc_school_name()"
                                                        onclick="clearvalidatesslc_school_name()"></textarea>
                                                    <span id="validatesslc_school_name" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="SSLC_Yop" name="SSLC_Yop" rows="4"
                                                    placeholder="Please Enter The Year of SSLC" onkeypress="clearvalidatesslc_yop()"
                                                        onclick="clearvalidatesslc_yop()"></textarea>
                                                    <span id="validatesslc_yop" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="SSLC_CGPA" name="SSLC_CGPA" rows="4"
                                                    placeholder="CGPA/Percentage" onkeypress="clearvalidatesslc_cgpa()"
                                                        onclick="clearvalidatesslc_cgpa()"></textarea>
                                                    <span id="validatesslc_cgpa" class="text-danger"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">b</td>
                                                <td>
                                                    <textarea class="form-control"  id="PUC_Diploma_Qualification" name="PUC_Diploma_Qualification" rows="4"
                                                    placeholder="Please Enter your PUC / Diploma qualification..." onkeypress="clearvalidatepuc_diploma_qualification()"
                                                        onclick="clearvalidatepuc_diploma_qualification()"></textarea>
                                                    <span id="validatepuc_diploma_qualification" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="PUC_Diploma_College_Name" name="PUC_Diploma_College_Name" rows="4"
                                                    placeholder="Please Enter The Full Name of The Institution..." onkeypress="clearvalidatepuc_diploma_college_name()"
                                                        onclick="clearvalidatepuc_diploma_college_name()"></textarea>
                                                    <span id="validatepuc_diploma_college_name" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="PUC_Diploma_Yop" name="PUC_Diploma_Yop" rows="4"
                                                    placeholder="Please Enter The Year of PUC" onkeypress="clearvalidatepuc_diploma_yop()"
                                                        onclick="clearvalidatepuc_diploma_yop()"></textarea>
                                                    <span id="validatepuc_diploma_yop" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="PUC_Diploma_CGPA" name="PUC_Diploma_CGPA" rows="4"
                                                    placeholder="CGPA/Percentage" onkeypress="clearvalidatepuc_diploma_cgpa()"
                                                        onclick="clearvalidatepuc_diploma_cgpa()"></textarea>
                                                    <span id="validatepuc_diploma_cgpa" class="text-danger"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">c</td>
                                                <td>
                                                    <textarea class="form-control"  id="Bachelors_Qualification" name="Bachelors_Qualification" rows="4"
                                                    placeholder="Please Enter Your Bachelor's Degree Qualification and Field of Study..." onkeypress="clearvalidatebachelors_qualification()"
                                                        onclick="clearvalidatebachelors_qualification()"></textarea>
                                                    <span id="validatebachelors_qualification" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="Bachelors_College_Name" name="Bachelors_College_Name" rows="4"
                                                    placeholder="Please Enter The Full Name of The Institution..." onkeypress="clearvalidatebachelors_college_name()"
                                                        onclick="clearvalidatebachelors_college_name()"></textarea>
                                                    <span id="validatebachelors_college_name" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="Bachelors_Yop" name="Bachelors_Yop" rows="4"
                                                    placeholder="Enter the Year of Graduation" onkeypress="clearvalidatebachelors_yop()"
                                                        onclick="clearvalidatebachelors_yop()"></textarea>
                                                    <span id="validatebachelors_yop" class="text-danger"></span>
                                                </td>
                                                <td>
                                                    <textarea class="form-control"  id="Bachelors_CGPA" name="Bachelors_CGPA" rows="4"
                                                    placeholder="CGPA/Percentage" onkeypress="clearvalidatebachelors_cgpa()"
                                                        onclick="clearvalidatebachelors_cgpa()"></textarea>
                                                    <span id="validatebachelors_cgpa" class="text-danger"></span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td style="text-align: center;">d</td>
                                                    <td style="text-align: center;">Any Other Additional Qualification</td>
                                                <td colspan="4">
                                                    <textarea class="form-control" name="Additional_Qualification" rows="4"
                                                    placeholder="Please Enter Any Other Additional Qualification..."></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: center; font-weight: bold;">
                                                    Graduation (Up to Sem)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <input type="text" class="form-control" name="Graduation_Upto_Sem" 
                                                     placeholder="Please Enter Graduation Up To Sem..."> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mb-4">
                                        <span style="color:red;">*Average percentage of all the semesters/years</span>
                                        <span style="color:red;">#If grades are given, equivalent percentage may be mentioned</span>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File1" class="font-weight-bold">Upload 10th Marks Card</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File1" name="10th_Marks_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation1()" onclick="clearfilevalidation1()" />
                                    <span id="validatefile1" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File2" class="font-weight-bold">Upload 12th/Diploma Marks Card</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File2" name="12th_Marks_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation2()" onclick="clearfilevalidation2()" />
                                    <span id="validatefile2" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File3" class="font-weight-bold">Upload Bachelors Degree Marks Card</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File3" name="Degree_Marks_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation3()" onclick="clearfilevalidation3()" />
                                    <span id="validatefile3" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File4" class="font-weight-bold">Upload Collage ID</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File4" name="Collage_ID" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation4()" onclick="clearfilevalidation4()" />
                                    <span id="validatefile4" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File5" class="font-weight-bold">Upload Resume</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File5" name="Resume" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation5()" onclick="clearfilevalidation5()" />
                                    <span id="validatefile5" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File6" class="font-weight-bold">Upload Aadhaar Card</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File6" name="Aadhaar_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation6()" onclick="clearfilevalidation6()" />
                                    <span id="validatefile6" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept1"
                                    onkeypress="toggleFileUpload()" onclick="toggleFileUpload()">   
                                <label for="accept1">Candidates belonging to SC/ST/OBC/EWS should enclose a photocopy of a valid 
                                    caste certificate along with the application</label><br>
                                <!-- <span id="validateacceptcheckbox1" class="text-danger"></span> -->
                            </div>
                            <div class="mb-4" id="fileUploadContainer" style="display: none;">
                                <label for="PDF_File7" class="font-weight-bold">Upload Caste Certificate (PDF Only)</label>
                                <input type="file" class="form-control" id="PDF_File7" name="Caste_Certificate" accept="pdf/*">
                            </div>
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept2"
                                    onkeypress="clearvalidateacceptcheckbox2()" onclick="clearvalidateacceptcheckbox2()">
                                    <label for="accept2">I, the undersigned, hereby declare that all the information given above
                                    is correct to the best of my knowledge and belief. Any information furnished/suppressed 
                                    above is found to be false or incorrect at a later stage, I shall be liable for termination
                                    without any notice or reason at any time.</label><br>
                                <span id="validateacceptcheckbox2" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col-md-6">
                                <p>
                                    <a href="./assets/pdf_files/declaration_form.pdf" target="_blank">
                                        <i class="fas fa-file-pdf text-danger" style="font-size: 30px;"></i>
                                        <strong> Download Declaration Form</strong>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <a href="./assets/pdf_files/Bonafide_Template.pdf" target="_blank">
                                        <i class="fas fa-file-pdf text-danger" style="font-size: 30px;"></i>
                                        <strong> Download Bonafide Template</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept3" 
                                    onkeypress="clearvalidateacceptcheckbox3()" onclick="clearvalidateacceptcheckbox3()">
                                <label for="accept3">I have downloaded both forms</label><br>
                                <span id="validateacceptcheckbox3" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>

                    <?php 
                        ini_set("display_errors", 0); 
                        date_default_timezone_set('Asia/Kolkata'); 
                        ini_set('log_errors', 1);
                        ini_set('error_log', './error_log.txt');
                        ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                        try {
                            if(isset($_POST['submit'])) { 


                                $application_for = mysqli_real_escape_string($con, $_POST['Application_For']);
                                $name = mysqli_real_escape_string($con, $_POST['Name']);
                                $guardians = mysqli_real_escape_string($con, $_POST['Guardians']);
                                $guardians_name = mysqli_real_escape_string($con, $_POST['Guardians_Name']);
                                $dob = mysqli_real_escape_string($con, $_POST['DOB']);
                                $gender = mysqli_real_escape_string($con, $_POST['Gender']);
                                $college_name = mysqli_real_escape_string($con, $_POST['College_Name']);
                                $branch = mysqli_real_escape_string($con, $_POST['Branch']);
                                $roll_number = mysqli_real_escape_string($con, $_POST['Roll_Number']);
                                $academic_status = mysqli_real_escape_string($con, $_POST['Academic_Status']);
                                $internship_start_date = mysqli_real_escape_string($con, $_POST['Internship_Start_Date']);
                                $internship_end_date = mysqli_real_escape_string($con, $_POST['Internship_End_Date']);
                                $address = mysqli_real_escape_string($con, $_POST['Address']); 
                                $mobile_number = mysqli_real_escape_string($con, $_POST['Mobile_Number']);
                                $email = mysqli_real_escape_string($con, $_POST['Email']);
                                $aadhaar_number = mysqli_real_escape_string($con, $_POST['Aadhaar_Number']);
                                $category = mysqli_real_escape_string($con, $_POST['Category']);
                                $sslc_qualification = mysqli_real_escape_string($con, $_POST['SSLC_Qualification']);
                                $sslc_school_name = mysqli_real_escape_string($con, $_POST['SSLC_School_Name']);
                                $sslc_yop = mysqli_real_escape_string($con, $_POST['SSLC_Yop']);
                                $sslc_cgpa = mysqli_real_escape_string($con, $_POST['SSLC_CGPA']);
                                $puc_diploma_qualification = mysqli_real_escape_string($con, $_POST['PUC_Diploma_Qualification']);
                                $puc_diploma_college_name = mysqli_real_escape_string($con, $_POST['PUC_Diploma_College_Name']);
                                $puc_diploma_yop = mysqli_real_escape_string($con, $_POST['PUC_Diploma_Yop']);
                                $puc_diploma_cgpa = mysqli_real_escape_string($con, $_POST['PUC_Diploma_CGPA']);
                                $bachelors_qualification = mysqli_real_escape_string($con, $_POST['Bachelors_Qualification']);
                                $bachelors_college_name = mysqli_real_escape_string($con, $_POST['Bachelors_College_Name']);
                                $bachelors_yop = mysqli_real_escape_string($con, $_POST['Bachelors_Yop']);
                                $bachelors_cgpa = mysqli_real_escape_string($con, $_POST['Bachelors_CGPA']);
                                $additional_qualification = mysqli_real_escape_string($con, $_POST['Additional_Qualification']);
                                $graduation_upto_sem = mysqli_real_escape_string($con, $_POST['Graduation_Upto_Sem']);

                                $image_target_dir = "./internship_project_profileimages/";
                                $form_target_dir = "./internship_project_forms/";

                                $image_target_file = $image_target_dir . basename($_FILES["image"]["name"]);
                                move_uploaded_file($_FILES["image"]["tmp_name"], $image_target_file);

                                $filelocation1 = "";
                                $filelocation2 = "";
                                $filelocation3 = "";
                                $filelocation4 = "";
                                $filelocation5 = "";
                                $filelocation6 = "";
                                $filelocation7 = "";
                                $fileuploaded = false;

                                $allowed_ext = "pdf";

                                $file_ext1 = strtolower(pathinfo($_FILES["10th_Marks_Card"]["name"], PATHINFO_EXTENSION));
                                $target_file1 = $form_target_dir . $name . "_10th.pdf";

                                if ($file_ext1 == $allowed_ext && move_uploaded_file($_FILES["10th_Marks_Card"]["tmp_name"], $target_file1)) {
                                    $filelocation1 = $target_file1;
                                }

                                $file_ext2 = strtolower(pathinfo($_FILES["12th_Marks_Card"]["name"], PATHINFO_EXTENSION));
                                $target_file2 = $form_target_dir . $name . "_12th.pdf";

                                if ($file_ext2 == $allowed_ext && move_uploaded_file($_FILES["12th_Marks_Card"]["tmp_name"], $target_file2)) {
                                    $filelocation2 = $target_file2;
                                }

                                $file_ext3 = strtolower(pathinfo($_FILES["Degree_Marks_Card"]["name"], PATHINFO_EXTENSION));
                                $target_file3 = $form_target_dir . $name . "_Degree.pdf";
                                
                                if ($file_ext3 == $allowed_ext && move_uploaded_file($_FILES["Degree_Marks_Card"]["tmp_name"], $target_file3)) {
                                    $filelocation3 = $target_file3;
                                }

                                $file_ext4 = strtolower(pathinfo($_FILES["Collage_ID"]["name"], PATHINFO_EXTENSION));
                                $target_file4 = $form_target_dir . $name . "_Collage_ID.pdf";

                                if ($file_ext4 == $allowed_ext && move_uploaded_file($_FILES["Collage_ID"]["tmp_name"], $target_file4)) {
                                    $filelocation4 = $target_file4;
                                }

                                $file_ext5 = strtolower(pathinfo($_FILES["Resume"]["name"], PATHINFO_EXTENSION));
                                $target_file5 = $form_target_dir . $name . "_Resume.pdf";

                                if ($file_ext5 == $allowed_ext && move_uploaded_file($_FILES["Resume"]["tmp_name"], $target_file5)) {
                                    $filelocation5 = $target_file5;
                                }
                                
                                $file_ext6 = strtolower(pathinfo($_FILES["Aadhaar_Card"]["name"], PATHINFO_EXTENSION));
                                $target_file6 = $form_target_dir . $name . "_Aadhaar_Card.pdf";
                                
                                if ($file_ext6 == $allowed_ext && move_uploaded_file($_FILES["Aadhaar_Card"]["tmp_name"], $target_file6)) {
                                    $filelocation6 = $target_file6;
                                }
                                
                                $file_ext7 = strtolower(pathinfo($_FILES["Caste_Certificate"]["name"], PATHINFO_EXTENSION));
                                $target_file7 = $form_target_dir . $name . "_Caste_Certificate.pdf";
                                
                                if ($file_ext7 == $allowed_ext && move_uploaded_file($_FILES["Caste_Certificate"]["tmp_name"], $target_file7)) {
                                    $filelocation7 = $target_file7;
                                }


                                $fileuploaded = ($filelocation1 && $filelocation2 && $filelocation3 && $filelocation4 && $filelocation5 && $filelocation6 && $filelocation7);

                                $sql = "INSERT INTO internship_project_form (
                                            Application_For, Name, Guardians, Guardians_Name, DOB, Gender,
                                            College_Name, Branch, Roll_Number, Academic_Status, Internship_Start_Date,
                                            Internship_End_Date, Address, Mobile_Number, Email, Aadhaar_Number, Category,
                                            SSLC_Qualification, SSLC_School_Name, SSLC_Yop, SSLC_CGPA, PUC_Diploma_Qualification,
                                            PUC_Diploma_College_Name, PUC_Diploma_Yop, PUC_Diploma_CGPA, Bachelors_Qualification,
                                            Bachelors_College_Name, Bachelors_Yop, Bachelors_CGPA, Additional_Qualification,
                                            Graduation_Upto_Sem, image_loc, 10th_Marks_Card, 12th_Marks_Card, Degree_Marks_Card,
                                            Collage_ID, Resume, Aadhaar_Card, Caste_Certificate)
                                            VALUES ('$application_for', '$name', '$guardians', '$guardians_name', '$dob', '$gender',
                                            '$college_name', '$branch', '$roll_number', '$academic_status', '$internship_start_date',
                                            '$internship_end_date', '$address', '$mobile_number', '$email', '$aadhaar_number', '$category',
                                            '$sslc_qualification', '$sslc_school_name', '$sslc_yop', '$sslc_cgpa', '$puc_diploma_qualification',
                                            '$puc_diploma_college_name', '$puc_diploma_yop', '$puc_diploma_cgpa', '$bachelors_qualification',
                                            '$bachelors_college_name', '$bachelors_yop', '$bachelors_cgpa', '$additional_qualification',
                                            '$graduation_upto_sem', '$image_target_file', '$filelocation1', '$filelocation2',
                                            '$filelocation3', '$filelocation4', '$filelocation5', '$filelocation6', '$filelocation7')";

                                $insert = mysqli_query($con, $sql);

                                if ($insert && $fileuploaded) {
                                    ?>
                                    <script>

                                    var roll_number = "<?php echo $roll_number; ?>";
                                    var redirectURL = "./download_internship_form.php?Roll_Number=" + roll_number;

                                    document.getElementById("AlertHeader").innerHTML = "Registration Successful. Please Download The Application Form";
                                    document.getElementById("AlertHeader").classList.add("text-success");
                                    $("#ProceedButton").attr("href", redirectURL);

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
                                    $("#ProceedButton").attr("href", "./internship_project_form.php");
                                    $(document).ready(function(){
                                        $('#ALertModal').modal('show');
                                    });
                                </script>            <?php
                                }
                            }
                        } catch (Exception $e) {
                            error_log("Caught exception: " . $e->getMessage() . PHP_EOL, 3, "./error_log.txt");
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

<script src="./assets/js/internship_project_form.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>