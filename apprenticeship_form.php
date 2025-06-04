
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprenticeship Registration Form - AEAMT</title>
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
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <img src="assets/images/aeamt_logo.png" alt="AEAMT Logo" width="100" height="60" class="d-inline-block align-text-top">
                            </div>
                            <div class="text-center flex-grow-1">
                                <h3 class="p-4 mb-4">Apprenticeship Registration Form</h3>
                            </div>
                            <div>
                                <img src="assets/images/cmti.png" alt="CMTI Logo" width="80" height="50" class="d-inline-block align-text-top">
                            </div>
                        </div>
                    </div>
                    
                    <form onsubmit="return validateform()" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="Qualification_Type" class="font-weight-bold">Qualification</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Engineering_Graduate" name="Qualification_Type" id="Qualification_Type1"
                                                    onkeypress="clearRadioValidation('Qualification_Type')" onclick="clearRadioValidation('Qualification_Type')" checked/>
                                                    <label class="form-check-label" for="Qualification_Type1"></label>Engineering Graduate
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Diploma" name="Qualification_Type" id="Qualification_Type2"
                                                    onkeypress="clearRadioValidation('Qualification_Type')" onclick="clearRadioValidation('Qualification_Type')" /> 
                                                    <label class="form-check-label" for="Qualification_Type2"></label>Diploma
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="General_Stream" name="Qualification_Type" id="Qualification_Type3"
                                                    onkeypress="clearRadioValidation('Qualification_Type')" onclick="clearRadioValidation('Qualification_Type')" />  
                                                    <label class="form-check-label" for="Qualification_Type3"></label>General Stream
                                                </div>
                                            </div>
                                        </div>
                                        <span id="validatequalification_type" class="text-danger"></span>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="Enrolment_No_Of_Student" class="font-weight-bold">Enrolment No. of Student</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Number_Of_Student" name="Enrolment_No_Of_Student"
                                        placeholder="Please Enter Enrolment No. of Student..." 
                                        onkeypress="clearvalidate_number_of_student()" onclick="clearvalidate_number_of_student()">
                                    <span id="validate_number_of_student" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Stream" class="font-weight-bold">Discipline / Stream</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Stream" name="Stream" 
                                        placeholder="Please Enter Discipline / Stream..." 
                                        onkeypress="clearvalidatestream()" onclick="clearvalidatestream()">
                                        <span id="validatestream" class="text-danger"></span>
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
                                    <label for="Name" class="font-weight-bold">Name of the Apprentice</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Please Enter Name..." 
                                        onkeypress="clearvalidatename()" onclick="clearvalidatename()">
                                        <span id="validatename" class="text-danger"></span>
                                    <div id="name" class="form-text">Block Letters</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="Guardians" class="font-weight-bold">Guardians</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Father" name="Guardians" id="Guardians1"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" checked/>
                                                    <label class="form-check-label" for="Guardians1"></label>Father
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Mother" name="Guardians" id="Guardians2"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" /> 
                                                    <label class="form-check-label" for="Guardians2"></label>Mother
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Spouse Name" name="Guardians" id="Guardians3"
                                                    onkeypress="clearRadioValidation('Guardians')" onclick="clearRadioValidation('Guardians')" />  
                                                    <label class="form-check-label" for="Guardians3"></label>Spouse Name
                                                </div>
                                            </div>
                                        </div>
                                        <span id="validateguardians" class="text-danger"></span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Guardians_Name" class="font-weight-bold">Guardians Name</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Guardians_Name" name="Guardians_Name"
                                        placeholder="Please Enter Guardians Name..." 
                                        onkeypress="clearvalidateguardians_name()" onclick="clearvalidateguardians_name()">
                                    <span id="validateguardians_name" class="text-danger"></span>
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
                                        onkeypress="clearvalidateadhaar_number()" onclick="clearvalidateadhaar_number()">
                                    <span id="validateadhaar_number" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address" class="font-weight-bold">Communication Address of the Apprentice</label>
                                    <span style="color:red">*</span>
                                    <textarea class="form-control" id="Address" name="Address" rows="5"
                                        placeholder="Please Enter Address..." 
                                        onkeypress="clearvalidateaddress()" onclick="clearvalidateaddress()"></textarea>
                                    <span id="validateaddress" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email" class="font-weight-bold">Email ID</label>
                                    <span style="color:red">*</span>
                                    <input type="email" class="form-control" id="Email" name="Email"  placeholder="Please Enter Email ID..." 
                                        onkeypress="clearvalidateemail()" onclick="clearvalidateemail()">
                                    <span id="validateemail" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                    <span style="color:red">*</span>
                                    <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Please Enter Date of Birth..." 
                                        onkeypress="clearvalidatedob()" onclick="clearvalidatedob()">
                                    <span id="validatedob" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
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
                            <div class="col-md-12">
                            <label for="Eligibility" class="font-weight-bold">Education Qualification considered eligible for apprenticeship training under the Act:</label>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-bordered-custom">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name of the Institution / Collage and University</th>
                                                <th scope="col">Qualification</th>
                                                <th scope="col">Period of Course (Yrs.)</th>
                                                <th scope="col">Year of Passing</th>
                                                <th scope="col">% Marks / CGPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="College_Name" name="College_Name" rows="5" placeholder="Please Enter College Name..." 
                                                            onkeypress="clearvalidatecollege_name()" onclick="clearvalidatecollege_name()"></textarea>
                                                        <span id="validatecollege_name" class="text-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="Qualification" name="Qualification" rows="5" placeholder="Please Enter Qualification..." 
                                                            onkeypress="clearvalidatequalification()" onclick="clearvalidatequalification()"></textarea>
                                                        <span id="validatequalification" class="text-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="Course_Period" name="Course_Period" rows="5" placeholder="Please Enter Course Period..." 
                                                            onkeypress="clearvalidatecourse_period()" onclick="clearvalidatecourse_period()"></textarea>
                                                        <span id="validatecourse_period" class="text-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="Passed_Out" name="Passed_Out" rows="5" placeholder="Please Enter Passed Out..." 
                                                            onkeypress="clearvalidatepassed_out()" onclick="clearvalidatepassed_out()"></textarea>
                                                        <span id="validatepassed_out" class="text-danger"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="Marks" name="Marks" rows="5" placeholder="Please Enter Marks..." 
                                                            onkeypress="clearvalidatemarks()" onclick="clearvalidatemarks()"></textarea>
                                                        <span id="validatemarks" class="text-danger"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-bordered-custom">
                                        <thead>
                                            <tr>
                                                <th scope="col">Semester</th>
                                                <th scope="col">I</th>
                                                <th scope="col">II</th>
                                                <th scope="col">III</th>
                                                <th scope="col">IV</th>
                                                <th scope="col">V</th>
                                                <th scope="col">VI</th>
                                                <th scope="col">VII</th>
                                                <th scope="col">VIII</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Marks Obtained</strong></td>
                                                <td><input type="text" class="form-control" name="Sem1_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem2_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem3_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem4_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem5_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem6_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem7_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Sem8_Marks_Obtained"></td>
                                                <td><input type="text" class="form-control" name="Marks_Obtained_Total"></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total Marks</strong></td>
                                                <td><input type="text" class="form-control" name="Sem1_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem2_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem3_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem4_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem5_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem6_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem7_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Sem8_Total_Marks"></td>
                                                <td><input type="text" class="form-control" name="Total_Marks_Total"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CGPA_Formula" class="font-weight-bold">CGPA Conversion Formula</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="CGPA_Formula" name="CGPA_Formula" placeholder="Please Enter CGPA Conversion Formula..." 
                                        onkeypress="clearvalidatecgpa_formula()" onclick="clearvalidatecgpa_formula()">
                                     <span id="validatecgpa_formula" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Bank_Name" class="font-weight-bold">Bank Name and Branch (Aadhaar Linked)</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Bank_Name" name="Bank_Name"
                                    placeholder="Please Enter Bank Name and Branch..." 
                                        onkeypress="clearvalidatebank_name()" onclick="clearvalidatebank_name()">
                                    <span id="validatebank_name" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="AccountNumber" class="font-weight-bold">Bank Account Number</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="Account_Number" name="Account_Number"
                                    placeholder="Please Enter Bank Account Number..." 
                                        onkeypress="clearvalidateaccount_number()" onclick="clearvalidateaccount_number()">
                                    <span id="validateaccount_number" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="IFSCCode" class="font-weight-bold">IFSC Code of the Branch</label>
                                    <span style="color:red">*</span>
                                    <input type="text" class="form-control" id="IFSC_Code" name="IFSC_Code"
                                    placeholder="Please Enter IFSC Code of the Branch..." 
                                        onkeypress="clearvalidateifsc_code()" onclick="clearvalidateifsc_code()">
                                    <span id="validateifsc_code" class="text-danger"></span>
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
                                    <label for="PDF_File4" class="font-weight-bold">Upload PDC</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File4" name="PDC" class="form-control" accept="pdf/*"
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
                                    <label for="PDF_File6" class="font-weight-bold">Upload Bank Passbook</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File6" name="Bank_Passbook" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation6()" onclick="clearfilevalidation6()" />
                                    <span id="validatefile6" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File7" class="font-weight-bold">Upload Caste Certificate</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File7" name="Caste_Certificate" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation7()" onclick="clearfilevalidation7()" />
                                    <span id="validatefile7" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File8" class="font-weight-bold">Upload Aadhaar Card</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File8" name="Aadhaar_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation8()" onclick="clearfilevalidation8()" />
                                    <span id="validatefile8" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PDF_File9" class="font-weight-bold">Upload Pan Card / DL</label>
                                    <span class="text-danger">*</span>
                                    <input type="file" id="PDF_File9" name="Pan_Card" class="form-control" accept="pdf/*"
                                    onkeypress="clearfilevalidation9()" onclick="clearfilevalidation9()" />
                                    <span id="validatefile9" class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept1"
                                    onkeypress="clearvalidateacceptcheckbox1()" onclick="clearvalidateacceptcheckbox1()">   
                                <label for="accept1">I hereby declare that we have read the Apprentices Act, 1961 and the  
                                    Apprenticeship Rules, 1992 and amendment made time to time regarding the contract of apprenticeship
                                    training including obligations and agree to abide by all the provisions made there under.</label><br>
                                <span id="validateacceptcheckbox1" class="text-danger"></span>
                            </div>
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept2"
                                    onkeypress="clearvalidateacceptcheckbox2()" onclick="clearvalidateacceptcheckbox2()">
                                    <label for="accept2">I, the undersigned, hereby declare that all the information given above is
                                    correct to the best of my knowledge and belief. Any information furnished / suppressed
                                    above is found to be false or incorrect at a later stage, I shall be liable for termination 
                                    without any notice or reason at any time.</label><br>
                                <span id="validateacceptcheckbox2" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <p>
                                    <a href="./assets/pdf_files/Declaration_form.pdf" target="_blank">
                                        <i class="fas fa-file-pdf text-danger" style="font-size: 30px;"></i>
                                        <strong> Download Declaration Form</strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="Yes" id="accept3"
                                    onkeypress="clearvalidateacceptcheckbox3()" onclick="clearvalidateacceptcheckbox3()">
                                    <label for="accept3">I have downloaded the form</label><br>
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
                        if(isset($_POST['submit']))
                        {                            

                        $qualification_type = mysqli_real_escape_string($con, $_POST['Qualification_Type']);
                        $enrolment_no_of_student = mysqli_real_escape_string($con, $_POST['Enrolment_No_Of_Student']);
                        $stream = mysqli_real_escape_string($con, $_POST['Stream']);
                        $name = mysqli_real_escape_string($con, $_POST['Name']);
                        $guardians = mysqli_real_escape_string($con, $_POST['Guardians']);
                        $guardians_name = mysqli_real_escape_string($con, $_POST['Guardians_Name']);
                        $aadhaar_number = mysqli_real_escape_string($con, $_POST['Aadhaar_Number']);
                        $address = mysqli_real_escape_string($con, $_POST['Address']); 
                        $email = mysqli_real_escape_string($con, $_POST['Email']);
                        $dob = mysqli_real_escape_string($con, $_POST['DOB']);
                        $mobile_number = mysqli_real_escape_string($con, $_POST['Mobile_Number']);
                        $gender = mysqli_real_escape_string($con, $_POST['Gender']);
                        $category = mysqli_real_escape_string($con, $_POST['Category']);
                        $college_name = mysqli_real_escape_string($con, $_POST['College_Name']);
                        $qualification = mysqli_real_escape_string($con, $_POST['Qualification']);
                        $course_period = mysqli_real_escape_string($con, $_POST['Course_Period']);
                        $passed_out = mysqli_real_escape_string($con, $_POST['Passed_Out']);
                        $marks = mysqli_real_escape_string($con, $_POST['Marks']);
                        $sem1_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem1_Marks_Obtained']);
                        $sem2_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem2_Marks_Obtained']);
                        $sem3_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem3_Marks_Obtained']);
                        $sem4_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem4_Marks_Obtained']);
                        $sem5_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem5_Marks_Obtained']);
                        $sem6_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem6_Marks_Obtained']);
                        $sem7_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem7_Marks_Obtained']);
                        $sem8_marks_obtained = mysqli_real_escape_string($con, $_POST['Sem8_Marks_Obtained']); 
                        $marks_obtained_total = mysqli_real_escape_string($con, $_POST['Marks_Obtained_Total']);
                        $sem1_total_marks = mysqli_real_escape_string($con, $_POST['Sem1_Total_Marks']);
                        $sem2_total_marks = mysqli_real_escape_string($con, $_POST['Sem2_Total_Marks']);
                        $sem3_total_marks = mysqli_real_escape_string($con, $_POST['Sem3_Total_Marks']);
                        $sem4_total_marks = mysqli_real_escape_string($con, $_POST['Sem4_Total_Marks']);
                        $sem5_total_marks = mysqli_real_escape_string($con, $_POST['Sem5_Total_Marks']);
                        $sem6_total_marks = mysqli_real_escape_string($con, $_POST['Sem6_Total_Marks']);
                        $sem7_total_marks = mysqli_real_escape_string($con, $_POST['Sem7_Total_Marks']);
                        $sem8_total_marks = mysqli_real_escape_string($con, $_POST['Sem8_Total_Marks']);
                        $total_marks_total = mysqli_real_escape_string($con, $_POST['Total_Marks_Total']);
                        $cgpa_formula = mysqli_real_escape_string($con, $_POST['CGPA_Formula']);
                        $bank_name = mysqli_real_escape_string($con, $_POST['Bank_Name']);
                        $account_number = mysqli_real_escape_string($con, $_POST['Account_Number']);
                        $ifsc_code = mysqli_real_escape_string($con, $_POST['IFSC_Code']);


                        $image_target_dir = "./apprenticeship_profileimages/";
                        $form_target_dir = "./apprenticeship_forms/";

                        $image_target_file = $image_target_dir . basename($_FILES["image"]["name"]);
                        move_uploaded_file($_FILES["image"]["tmp_name"], $image_target_file);

                        $filelocation1 = "";
                        $filelocation2 = "";
                        $filelocation3 = "";
                        $filelocation4 = "";
                        $filelocation5 = "";
                        $filelocation6 = "";
                        $filelocation7 = "";
                        $filelocation8 = "";
                        $filelocation9 = "";

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

                        $file_ext4 = strtolower(pathinfo($_FILES["PDC"]["name"], PATHINFO_EXTENSION));
                        $target_file4 = $form_target_dir . $name . "_PDC.pdf";

                        if ($file_ext4 == $allowed_ext && move_uploaded_file($_FILES["PDC"]["tmp_name"], $target_file4)) {
                            $filelocation4 = $target_file4;
                        }

                        $file_ext5 = strtolower(pathinfo($_FILES["Resume"]["name"], PATHINFO_EXTENSION));
                        $target_file5 = $form_target_dir . $name . "_Resume.pdf";

                        if ($file_ext5 == $allowed_ext && move_uploaded_file($_FILES["Resume"]["tmp_name"], $target_file5)) {
                            $filelocation5 = $target_file5;
                        }
                        
                        $file_ext6 = strtolower(pathinfo($_FILES["Bank_Passbook"]["name"], PATHINFO_EXTENSION));
                        $target_file6 = $form_target_dir . $name . "_Bank_Passbook.pdf";
                                
                        if ($file_ext6 == $allowed_ext && move_uploaded_file($_FILES["Bank_Passbook"]["tmp_name"], $target_file6)) {
                            $filelocation6 = $target_file6;
                        }

                        $file_ext7 = strtolower(pathinfo($_FILES["Caste_Certificate"]["name"], PATHINFO_EXTENSION));
                        $target_file7 = $form_target_dir . $name . "_Caste_Certificate.pdf";
                        
                        if ($file_ext7 == $allowed_ext && move_uploaded_file($_FILES["Caste_Certificate"]["tmp_name"], $target_file7)) {
                            $filelocation7 = $target_file7;
                        }
                        
                        $file_ext8 = strtolower(pathinfo($_FILES["Aadhaar_Card"]["name"], PATHINFO_EXTENSION));
                        $target_file8 = $form_target_dir . $name . "_Aadhaar_Card.pdf";
                        
                        if ($file_ext8 == $allowed_ext && move_uploaded_file($_FILES["Aadhaar_Card"]["tmp_name"], $target_file8)) {
                            $filelocation8 = $target_file8;
                        }
                    
                        $file_ext9 = strtolower(pathinfo($_FILES["Pan_Card"]["name"], PATHINFO_EXTENSION));
                        $target_file9 = $form_target_dir . $name . "_Pan_Card.pdf";
                        
                        if ($file_ext9 == $allowed_ext && move_uploaded_file($_FILES["Pan_Card"]["tmp_name"], $target_file9)) {
                            $filelocation9 = $target_file9;
                        }

                        $fileuploaded = ($filelocation1 && $filelocation2 && $filelocation3 && $filelocation4 && $filelocation5 && $filelocation6 && $filelocation7 && $filelocation8 && $filelocation9);

                        $sql = "INSERT INTO apprenticeship_form(Qualification_Type,Enrolment_No_Of_Student,Stream,Name,Guardians,
                                Guardians_Name,Aadhaar_Number,Address,Email,DOB,Mobile_Number,Gender,Category,College_Name,
                                Qualification,Course_Period,Passed_Out,Marks,Sem1_Marks_Obtained,Sem2_Marks_Obtained,
                                Sem3_Marks_Obtained,Sem4_Marks_Obtained,Sem5_Marks_Obtained,Sem6_Marks_Obtained,
                                Sem7_Marks_Obtained,Sem8_Marks_Obtained,Marks_Obtained_Total,Sem1_Total_Marks,Sem2_Total_Marks,
                                Sem3_Total_Marks,Sem4_Total_Marks,Sem5_Total_Marks,Sem6_Total_Marks,Sem7_Total_Marks,Sem8_Total_Marks,
                                Total_Marks_Total,CGPA_Formula,Bank_Name,Account_Number,IFSC_Code,image_loc,
                                10th_Marks_Card,12th_Marks_Card,Degree_Marks_Card,PDC,Resume,Bank_Passbook,Caste_Certificate,
                                Aadhaar_Card,Pan_Card)
                        VALUES ('$qualification_type','$enrolment_no_of_student','$stream','$name','$guardians','$guardians_name',
                                '$aadhaar_number','$address','$email','$dob','$mobile_number','$gender','$category','$college_name',
                                '$qualification','$course_period','$passed_out','$marks','$sem1_marks_obtained',
                                '$sem2_marks_obtained','$sem3_marks_obtained','$sem4_marks_obtained','$sem5_marks_obtained',
                                '$sem6_marks_obtained','$sem7_marks_obtained','$sem8_marks_obtained','$marks_obtained_total',
                                '$sem1_total_marks','$sem2_total_marks','$sem3_total_marks','$sem4_total_marks','$sem5_total_marks',
                                '$sem6_total_marks','$sem7_total_marks','$sem8_total_marks','$total_marks_total',
                                '$cgpa_formula','$bank_name','$account_number','$ifsc_code','$image_target_file',
                                '$filelocation1','$filelocation2','$filelocation3','$filelocation4','$filelocation5',
                                '$filelocation6','$filelocation7','$filelocation8','$filelocation9')";
                                $insert=mysqli_query($con,$sql);

                            if($insert && $fileuploaded)
                            {
                                ?>
                                    <script>

                                    var enrolment_no_of_student = "<?php echo $enrolment_no_of_student; ?>";
                                    var redirectURL = "./download_apprenticeship_form.php?Enrolment_No_Of_Student=" + enrolment_no_of_student;

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
                                        $("#ProceedButton").attr("href", "./apprenticeship_form.php");
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

<script src="./assets/js/apprenticeship_form.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>