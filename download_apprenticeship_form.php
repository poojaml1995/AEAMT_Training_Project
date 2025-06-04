<?php
  include('./includes/connection.php');
  
  if (isset($_GET['Enrolment_No_Of_Student'])) {
    $enrolment_no_of_student = $_GET['Enrolment_No_Of_Student'];
    $query = mysqli_query($con, "SELECT * FROM apprenticeship_form WHERE Enrolment_No_Of_Student='$enrolment_no_of_student'") or die(mysqli_error($con));
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Form - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</head>
<body>
    <?php include('./includes/connection.php'); ?>

<main>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="form-border-download bg-light rounded-lg p-5">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/images/cmti.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                        </div>
                        <div class="col-md-8">
                            <!-- <h6 class="text-center">Central Manufacturing Technology Institute</h6>
                            <h6 class="text-center">Tumkur Road, Bangalore - 560022 <br> Application for Internship / Project <br></h6>  -->
                            <h5 class="text-center">Central Manufacturing Technology Institute</h5>
                            <h6 class="text-center">Tumkur Road, Bangalore - 560022 <br> Application for Internship / Project <br>
                        </div>
                        <div class="col-md-2 text-md-right">
                            <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                        </div>
                    </div>
                    <?php foreach ($results as $row) : ?>
                    <div class="row">
                        <?php $qualification_type = $row['Qualification_Type']; ?>
                        <div class="col-md-8">
                            <label for="Qualification_Type" class="font-weight-bold">Qualification</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Engineering_Graduate" name="Qualification_Type"
                                        <?php echo ($qualification_type == 'Engineering_Graduate') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Qualification_Type1">Engineering Graduate</label>                                               
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Diploma" name="Qualification_Type"
                                        <?php echo ($qualification_type == 'Diploma') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Qualification_Type2"></label>Diploma
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="General_Stream" name="Qualification_Type"     
                                        <?php echo ($qualification_type == 'General_Stream') ? 'checked' : ''; ?> disabled> 
                                        <label class="form-check-label" for="Qualification_Type3"></label>General Stream
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Enrolment_No_Of_Student" class="font-weight-bold">Enrolment No. of Student</label>
                                <input type="text" class="form-control" value="<?php echo $row['Enrolment_No_Of_Student'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Stream" class="font-weight-bold">Discipline / Stream</label>
                                <input type="text" class="form-control" value="<?php echo $row['Stream'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column align-items-center">
                            <img src="<?php echo $row['image_loc']; ?>" height="200" width="200" 
                            class="rounded-circle" style="object-fit: cover;">
                            <label for="image" class="font-weight-bold mb-3">Profile Image</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Name" class="font-weight-bold">Name of the Apprentice</label>
                                <input type="text" class="form-control" value="<?php echo $row['Name'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $guardians = $row['Guardians']; ?>
                        <div class="col-md-6">
                            <label for="Guardians" class="font-weight-bold">Guardians</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Guardians" value="Father" 
                                            <?php echo ($guardians == 'Father') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Guardians1">Father</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Guardians" value="Mother" 
                                            <?php echo ($guardians == 'Mother') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Guardians2">Mother</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Guardians_Name" class="font-weight-bold">Guardians Name</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Guardians_Name'] ?>" readonly>                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Aadhaar_Number" class="font-weight-bold">Aadhaar Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['Aadhaar_Number'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Address" class="font-weight-bold">Communication Address of the Apprentice</label>
                                <textarea class="form-control" rows="10" readonly><?php echo $row['Address']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email" class="font-weight-bold">Email ID</label>
                                <input type="text" class="form-control" value="<?php echo $row['Email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                <input type="text" class="form-control" value="<?php echo $row['DOB'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Mobile_Number" class="font-weight-bold">Mobile Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['Mobile_Number'] ?>" readonly>
                            </div>
                        </div>
                        <?php $gender = $row['Gender']; ?>
                        <div class="col-md-6">
                            <label for="Gender" class="font-weight-bold">Gender</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Gender" value="Male" 
                                            <?php echo ($gender == 'Male') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Gender1">Male</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Gender" value="Female"
                                            <?php echo ($gender == 'Female') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Gender2">Female</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Gender" value="Others"
                                            <?php echo ($gender == 'Others') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Gender3">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $category = $row['Category']; ?>
                        <div class="col-md-12">
                            <label for="Category" class="font-weight-bold">Category</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="SC" 
                                            <?php echo ($category == 'SC') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category1">SC</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="ST" 
                                        <?php echo ($category == 'ST') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category2">ST</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="OBC" 
                                        <?php echo ($category == 'OBC') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category3">OBC</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="PWD" 
                                        <?php echo ($category == 'PWD') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category4">PWD</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="GEN" 
                                        <?php echo ($category == 'GEN') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category5">GEN</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Category" value="EWS" 
                                        <?php echo ($category == 'EWS') ? 'checked' : ''; ?> disabled>
                                        <label class="form-check-label" for="Category6">EWS</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-bordered-custom text-center">
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
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['College_Name']; ?></textarea>
                                            </td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['Qualification']; ?></textarea>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Course_Period']; ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Passed_Out']; ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Marks']; ?>" readonly>
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
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem1_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem2_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem3_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem4_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem5_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem6_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem7_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem8_Marks_Obtained']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Marks_Obtained_Total']; ?>" readonly></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total Marks</strong></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem1_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem2_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem3_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem4_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem5_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem6_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem7_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Sem8_Total_Marks']; ?>" readonly></td>
                                            <td><input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Total_Marks_Total']; ?>" readonly></td>
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
                                <input type="text" class="form-control" value="<?php echo $row['CGPA_Formula'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Bank_Name" class="font-weight-bold">Bank Name and Branch (Aadhaar Linked)</label>
                                <input type="text" class="form-control" value="<?php echo $row['Bank_Name'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="AccountNumber" class="font-weight-bold">Bank Account Number</label>
                                <input type="text" class="form-control" value="<?php echo $row['Account_Number'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="IFSCCode" class="font-weight-bold">IFSC Code of the Branch</label>
                                <input type="text" class="form-control" value="<?php echo $row['IFSC_Code'] ?>" readonly>
                            </div>
                        </div>
                    </div>




                    <div class="row mb-4">
                        <div class="mb-3 form-check">
                            <label for="accept1">I hereby declare that we have read the Apprentices Act, 1961 and the  
                            Apprenticeship Rules, 1992 and amendment made time to time regarding the contract of apprenticeship
                            training including obligations and agree to abide by all the provisions made there under.</label><br>
                        </div>
                        <div class="mb-3 form-check">
                            <label for="accept2">I, the undersigned, hereby declare that all the information given above is
                            correct to the best of my knowledge and belief. Any information furnished / suppressed
                            above is found to be false or incorrect at a later stage, I shall be liable for termination 
                            without any notice or reason at any time.</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="fw-bold">Place:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="fw-bold">Date:</label>
                        </div>
                        <div class="col-md-6 text-right">
                            <label class="fw-bold d-block">Signature of Candidate</label>
                        </div>
                    </div>               
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-primary btn-lg" id="HideButton" name="GoBack" onclick="window.close();">
                            <i class="bi bi-arrow-left" aria-hidden="true"></i>Go Back</button>
                            <button type="button" class="btn btn-primary btn-lg" id="PrintButton" name="button" onclick="window.print();">
                            <i class="bi bi-printer"  aria-hidden="true"></i>Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>                                   
</body>
</html>