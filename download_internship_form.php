<?php
  include('./includes/connection.php');
  
  if (isset($_GET['Roll_Number'])) {
    $roll_number = $_GET['Roll_Number'];
    $query = mysqli_query($con, "SELECT * FROM internship_project_form WHERE Roll_Number='$roll_number'") or die(mysqli_error($con));
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
                            <h5 class="text-center">Central Manufacturing Technology Institute</h5>
                            <h6 class="text-center">Tumkur Road, Bangalore - 560022 <br> Application for Internship / Project <br>
                        </div>
                        <div class="col-md-2 text-md-right">
                            <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                        </div>
                    </div>
                    <?php foreach ($results as $row) : ?>
                    <div class="row">
                        <?php $application_for = $row['Application_For']; ?>
                        <div class="col">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="Application_For" class="font-weight-bold">Application For</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="MHI_Internship" name="Application_For"
                                                    <?php echo ($application_for == 'MHI_Internship') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Application_For1">MHI Internship</label>                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Non_MHI_Internship" name="Application_For"
                                                    <?php echo ($application_for == 'Non_MHI_Internship') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Application_For2">Non MHI Internship</label>                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="MHI_Project" name="Application_For"
                                                    <?php echo ($application_for == 'MHI_Project') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Application_For3">MHI Project</label>                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Non_MHI_Project" name="Application_For"
                                                    <?php echo ($application_for == 'Non_MHI_Project') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Application_For4">Non MHI Project</label>                                               
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
                                <input type="text" class="form-control"
                                value="<?php echo $row['Name'] ?>" readonly>
                            </div>
                            <div class="form-group row">
                                <?php $guardians = $row['Guardians']; ?>
                                <div class="col-md-6">
                                    <label class="font-weight-bold">Guardians</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Guardians" value="Father" 
                                                <?php echo ($guardians == 'Father') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Guardians1">Father</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Guardians" value="Mother" 
                                                <?php echo ($guardians == 'Mother') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Guardians2">Mother</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Guardians" value="Spouse_Name" 
                                                <?php echo ($guardians == 'Spouse_Name') ? 'checked' : ''; ?> disabled>
                                                <label class="form-check-label" for="Guardians3">Spouse Name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="Guardians_Name" class="font-weight-bold">Guardians Name</label>
                                    <input type="text" class="form-control"
                                    value="<?php echo $row['Guardians_Name'] ?>" readonly>                                
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                    <input type="text" class="form-control"
                                    value="<?php echo $row['DOB'] ?>" readonly> 
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
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <img src="<?php echo $row['image_loc']; ?>" height="200" width="200" 
                            class="rounded-circle" style="object-fit: cover;">
                            <label for="image" class="font-weight-bold mb-3">Profile Image</label>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="College_Name" class="font-weight-bold">College Name</label>
                                <textarea class="form-control" rows="2" readonly><?php echo $row['College_Name']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Branch" class="font-weight-bold">Branch</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Branch'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Roll_Number" class="font-weight-bold">Roll Number</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Roll_Number'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="Academic_Status" class="font-weight-bold">Current year of study & Pursuing Sem</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Academic_Status'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="font-weight-bold text-center">Internship Duration</label>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Internship_Start_Date" class="font-weight-bold">Start Date</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Internship_Start_Date'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Internship_End_Date" class="font-weight-bold">End Date</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Internship_End_Date'] ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Address" class="font-weight-bold">Address (For Correspondence)</label>
                                <textarea class="form-control" rows="10" readonly><?php echo $row['Address']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Mobile_Number" class="font-weight-bold">Mobile Number</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Mobile_Number'] ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Email" class="font-weight-bold">Email ID</label>
                                <input type="text" class="form-control"
                                value="<?php echo $row['Email'] ?>" readonly>
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
                                            <th scope="col" style="width: 5%;">SL No</th>
                                            <th scope="col" style="width: 20%;">Education Qualification</th>
                                            <th scope="col" style="width: 35%;">Institution Name, Place & Board University</th>
                                            <th scope="col" style="width: 20%;">Year of Passing</th>
                                            <th scope="col" style="width: 20%;">CGPA/Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- SSLC -->
                                        <tr>
                                            <td>a</td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['SSLC_Qualification']; ?></textarea>
                                                </td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['SSLC_School_Name']; ?></textarea>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['SSLC_Yop']; ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['SSLC_CGPA']; ?>" readonly>
                                            </td>
                                        </tr>
                                        <!-- PUC/Diploma -->
                                        <tr>
                                            <td>b</td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['PUC_Diploma_Qualification']; ?></textarea>
                                            </td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['PUC_Diploma_College_Name']; ?></textarea>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['PUC_Diploma_Yop']; ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['PUC_Diploma_CGPA']; ?>" readonly>
                                            </td>
                                        </tr>
                                        <!-- Bachelor's -->
                                        <tr>
                                            <td>c</td>
                                                <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['Bachelors_Qualification']; ?></textarea>
                                            </td>
                                            <td>
                                                <textarea class="form-control-plaintext text-center" rows="5" readonly><?php echo $row['Bachelors_College_Name']; ?></textarea>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Bachelors_Yop']; ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-plaintext text-center" value="<?php echo $row['Bachelors_CGPA']; ?>" readonly>
                                            </td>
                                            </tr>
                                            <!-- Master's -->
                                        <tr> 
                                            <td style="text-align: center;">d</td>
                                            <td style="text-align: center;">Any Other Additional Qualification</td>
                                            <td colspan="4">
                                                <textarea class="form-control" rows="5" readonly><?php echo $row['Additional_Qualification']; ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align: center; font-weight: bold;">
                                                Graduation (Up to Sem)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <input type="text" class="form-control"
                                                value="<?php echo $row['Graduation_Upto_Sem'] ?>" readonly>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between">
                                    <span style="color:red;">*Average percentage of all the semesters/years</span>
                                    <span style="color:red;">#If grades are given, equivalent percentage may be mentioned</span>
                                </div>  
                            </div>
                        </div>
                    </div>


                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Address" class="font-weight-bold">Address (For Correspondence)</label>
                                <textarea class="form-control" oninput="autoResize(this)" style="overflow:hidden; min-height:38px;" readonly><?php echo $row['Address']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <script>
                            function autoResize(textarea) {
                                textarea.style.height = "auto"; 
                                textarea.style.height = (textarea.scrollHeight) + "px"; 
                            }
                        </script> -->

                        <!-- <div class="row"> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address" class="font-weight-bold">Address (For Correspondence)</label>
                                    <textarea class="form-control" id="Address" oninput="autoResize(this)" 
                                        style="overflow:hidden;" readonly><?php echo htmlspecialchars($row['Address']); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <script>
                            function autoResize(textarea) {
                                textarea.style.height = "auto"; // Reset height to auto before calculating
                                textarea.style.height = (textarea.scrollHeight) + "px"; // Set height to scrollHeight
                            }

                            window.onload = function() {
                                var textarea = document.getElementById('Address');
                                autoResize(textarea); // Resize on page load
                            }
                        </script> -->


                    <div class="row mb-4">
                        <div class="mb-3 form-check">
                            <label for="accept1">Candidates belonging to SC/ST/OBC/EWS should enclose a photocopy of a valid 
                                    caste certificate along with the application.</label><br>
                        </div>
                        <div class="mb-3 form-check">
                            <label for="accept2">I, the undersigned, hereby declare that all the information given above
                                    is correct to the best of my knowledge and belief. Any information furnished/suppressed 
                                    above is found to be false or incorrect at a later stage, I shall be liable for termination
                                    without any notice or reason at any time</label><br>
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
                    <hr class="bg-black border-black">
                    <p style="text-decoration: underline;">For office use only</p>

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