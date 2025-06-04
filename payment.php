<?php
session_start();
if(isset($_SESSION['enrollment_id']))
{
    header('Location:payment.php');
}
include './includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - AEAMT</title>
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

    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/style.css">


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

    <?php
        if (isset($_GET['enrollment_id'])) {
            $enrollment_id = mysqli_real_escape_string($con, $_GET['enrollment_id']);

            $query = mysqli_query($con, "SELECT ef.*, cd.Course_Fee FROM enrollment_form ef
                LEFT JOIN course_details cd ON ef.Course_Code = cd.Course_Code
                WHERE ef.Enrollment_ID = '$enrollment_id'") or die(mysqli_error($con));

            $count_query = mysqli_query($con, "SELECT COUNT(*) AS num_of_people FROM enrollment_form WHERE
            Enrollment_ID = '$enrollment_id'") or die(mysqli_error($con));
            $count_result = mysqli_fetch_assoc($count_query);
            $num_of_people = $count_result['num_of_people'];

            if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_array($query);
                $course_fee = $row['Course_Fee'];
                $course_fee = str_replace(',', '', $course_fee);
                $course_fee = floatval($course_fee);
                $total = $num_of_people * $course_fee;

                $ApplicableGST = 18;
                $gst_amount = ($total * $ApplicableGST) / 100; 
                $total_amount = ($total + $gst_amount);                                 
    ?>

    <div class="container">
        <div class="training-form-border">
            <h3 class="text-center mb-4">Registration Details</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <h5 class="list-group-item list-group-item-action active text-center">Company Details</h5>
                        <li class="list-group-item"><strong>Company Name:</strong> <?php echo $row['Organisation_Name']; ?></li>
                        <li class="list-group-item"><strong>Designation:</strong> <?php echo $row['Contact_Designation']; ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?php echo $row['Email']; ?></li>
                        <li class="list-group-item"><strong>Phone:</strong> <?php echo $row['Contact_Mobile_No']; ?></li>
                        <li class="list-group-item"><strong>Address:</strong> <?php echo $row['Address']; ?></li>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group">
                        <h5 class="list-group-item list-group-item-action active text-center">Programme Details</h5>
                        <li class="list-group-item"><strong>Programme:</strong> <?php echo $row['Title']; ?></li>
                        <li class="list-group-item"><strong>Venue:</strong> CMTI</li>
                        <li class="list-group-item"><strong>No. of Delegates:</strong> <?php echo $num_of_people; ?></li>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-group">
                        <h5 class="list-group-item list-group-item-action active text-center">Fee Structure</h5>
                        <li class="list-group-item"><strong>Total Payable (Before GST):</strong> ₹<?php echo number_format($total, 2); ?></li>
                        <li class="list-group-item"><strong>GST:</strong> 18%</li>
                        <li class="list-group-item"><strong>Total Payable (After GST):</strong> ₹<?php echo number_format($total_amount, 2); ?></li>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-lg-6 mx-auto">
                    <h3 class="text-center mb-4">Payment Details</h3>
                        <div class="payment-tab text-center mb-4">
                            <button id="qrCodeBtn" class="btn btn-secondary active">NCPI/UPI Payment</button>
                            <button id="chequeBtn" class="btn btn-secondary">Cheque / DD</button>
                            <button id="neftBtn" class="btn btn-secondary">NEFT</button>
                        </div>
                        <!-- QR Code Payment Section -->
                        <form onsubmit="return validateForm1()" method="POST" enctype="multipart/form-data">
                            <div id="qrCodeSection" class="payment-section active-section">
                                <div class="card-payment">
                                    <div class="card-body-payment">
                                        <h4 class="card-title-payment text-center">NCPI/UPI Payment</h4>
                                        <p><strong><?php echo 'Total Course Fee: ₹' . $total_amount; ?></strong></p>
                                        <div class="text-center mt-4">
                                            <img src="./assets/images/qr_code.png" alt="QR Code" style="width: 50%; height: auto;">
                                        </div>
                                        <button type="button" id="nextButton" class="btn btn-success mt-3" onclick="showPaymentDetails()">Next</button>
                                    </div>
                                </div>
                            </div>
                            <div id="paymentDetailsSection" class="payment-section" style="display: none;">
                                <div class="card-payment">
                                    <div class="card-body-payment">
                                        <div class="form-group mb-3">
                                            <label for="NCPI_UPI_Ref_No" class="font-weight-bold">NCPI/UPI Ref. No</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" id="NCPI_UPI_Ref_No" name="NCPI_UPI_Ref_No"
                                                placeholder="Enter NCPI/UPI Ref. No..." onkeypress="clearvalidatencpi_upi_ref_no()" 
                                                onclick="clearvalidatencpi_upi_ref_no()">
                                            <span id="validatencpi_upi_ref_no" class="text-danger"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="QR_Image" class="font-weight-bold">QR Code Scanned Screenshot</label>
                                            <span style="color:red">*</span>
                                            <input type="file" class="form-control" id="QR_Image" name="QR_Image"
                                                placeholder="Add QR Code Scanned Screenshot..."
                                                onkeypress="clearvalidateqr_image()" onclick="clearvalidateqr_image()">
                                            <span id="validateqr_image" class="text-danger"></span>
                                        </div>
                                        <button type="submit" name="submit1" class="btn btn-success mt-3">Submit</button>
                                    </div>
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

                        if (isset($_POST['submit1'])) {

                            $enrollment_id = mysqli_real_escape_string($con, $_GET['enrollment_id']);

                            $course_query = mysqli_query($con, "SELECT Enrollment_ID, Course_Code, Title, Commencing_Date, Contact_Name FROM enrollment_form WHERE Enrollment_ID = '$enrollment_id'");
                            $course_row = mysqli_fetch_assoc($course_query);
                            
                            $enrollment_id = mysqli_real_escape_string($con, $_GET['enrollment_id']);
                            $imagetarget_dir = "./payment/QR_code_image/";
                            $imageFileType = strtolower(pathinfo($_FILES["QR_Image"]["name"], PATHINFO_EXTENSION));
                            $imagetarget_file = $imagetarget_dir . $enrollment_id . "." . $imageFileType;

                            $ncpi_upi_ref_no = mysqli_real_escape_string($con, $_POST['NCPI_UPI_Ref_No']);

                            $sql = "INSERT INTO payments(Enrollment_ID,Course_Code,Title,Commencing_Date,Contact_Name,NCPI_UPI_Ref_No,QR_image_loc)
                                     VALUES('{$course_row['Enrollment_ID']}','{$course_row['Course_Code']}','{$course_row['Title']}',
                                     '{$course_row['Commencing_Date']}','{$course_row['Contact_Name']}','$ncpi_upi_ref_no','$imagetarget_file')";
                            $insert = mysqli_query($con, $sql);

                            if(move_uploaded_file($_FILES["QR_Image"]["tmp_name"], $imagetarget_file) ) 
                            {
                            if ($insert) {

                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Successful' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status);
                                ?>
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Payment Made Successfully";
                                    document.getElementById("AlertHeader").classList.add("text-success");
                                    $("#ProceedButton").attr("href", "./index.php");
                                    $(document).ready(function(){
                                        $('#ALertModal').modal('show');
                                    });
                                </script>                                                         
                                <?php
                            } else {   

                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Failed' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status); 
                                                                        
                                ?> 
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                    document.getElementById("AlertHeader").classList.add("text-danger");
                                    $("#ProceedButton").attr("href", "./payment.php");
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

                    <!-- Cheque/DD Payment Section -->
                    <form onsubmit="return validateForm2()" method="POST" enctype="multipart/form-data">
                        <div id="chequeSection" class="payment-section" style="display: none;">
                            <div class="card-payment mb-3">
                                <div class="card-body-payment">
                                    <h4 class="card-title-payment text-center">Cheque / DD</h4>
                                    <p><strong><?php echo 'Total Course Fee: ₹' . $total_amount; ?></strong></p>
                                        <div class="form-group mb-3">
                                            <label for="Cheque_DD_No" class="font-weight-bold">Cheque/DD No</label>
                                            <span style="color:red">*</span>
                                            <input type="text" class="form-control" id="Cheque_DD_No" name="Cheque_DD_No"
                                                placeholder="Enter Cheque/DD No..."
                                            onkeypress="clearvalidatecheque_dd_no()" onclick="clearvalidatecheque_dd_no()">
                                            <span id="validatecheque_dd_no" class="text-danger"></span>
                                        </div>
                                    <div class="form-group mb-3">
                                        <label for="Bank_Name" class="font-weight-bold">Bank Name</label>
                                        <span style="color:red">*</span>
                                        <input type="text" class="form-control" id="Bank_Name1" name="Bank_Name"
                                        placeholder="Enter Bank Name..."
                                        onkeypress="clearvalidatebank_name1()" onclick="clearvalidatebank_name1()">
                                        <span id="validatebank_name1" class="text-danger"></span>
                                    </div>
                                    <button type="submit" name="submit2" class="btn btn-success mt-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php

                            ini_set("display_errors", 0); 
                            date_default_timezone_set('Asia/Kolkata'); 
                            ini_set('log_errors', 1);
                            ini_set('error_log', './error_log.txt');
                            ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                            $enrollment_id = mysqli_real_escape_string($con, $_GET['enrollment_id']);

                            $course_query = mysqli_query($con, "SELECT	Enrollment_ID, Course_Code, Title, Commencing_Date, Contact_Name FROM enrollment_form WHERE Enrollment_ID = '$enrollment_id'");
                            $course_row = mysqli_fetch_assoc($course_query);

                        try {
                        if (isset($_POST['submit2'])) {    
                            $cheque_dd_no = mysqli_real_escape_string($con, $_POST['Cheque_DD_No']);
                            $bank_name = mysqli_real_escape_string($con, $_POST['Bank_Name']);

                            $sql = "INSERT INTO payments(Enrollment_ID, Course_Code, Title, Commencing_Date, Contact_Name, Cheque_DD_No, Bank_Name)
                            VALUES('{$course_row['Enrollment_ID']}', '{$course_row['Course_Code']}', '{$course_row['Title']}',
                            '{$course_row['Commencing_Date']}', '{$course_row['Contact_Name']}', '$cheque_dd_no', '$bank_name')";
                            $insert = mysqli_query($con, $sql);
                            if ($insert) {

                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Successful' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status);

                                ?>
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Payment Made Successfully";
                                    document.getElementById("AlertHeader").classList.add("text-success");
                                    $("#ProceedButton").attr("href", "./index.php");
                                    $(document).ready(function(){
                                        $('#ALertModal').modal('show');
                                    });
                                </script>                                                         
                                <?php
                            } else {  
                                
                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Failed' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status);                                         
                                          
                                ?> 
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                    document.getElementById("AlertHeader").classList.add("text-danger");
                                    $("#ProceedButton").attr("href", "./payment.php");
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

                        <!-- NEFT Payment Section -->
                    <form onsubmit="return validateForm3()" method="POST" enctype="multipart/form-data">
                        <div id="neftSection" class="payment-section" style="display: none;">
                            <div class="card-payment mb-3">
                                <div class="card-body-payment">
                                    <h4 class="card-title-payment text-center">NEFT</h4>
                                    <p><strong><?php echo 'Total Course Fee: ₹' . $total_amount; ?></strong></p>
                                    
                                    <div class="form-group mb-3">
                                        <label for="NEFT_Transaction_Id" class="font-weight-bold">NEFT Transaction Id</label>
                                        <span style="color:red">*</span>
                                        <input type="text" class="form-control" id="NEFT_Transaction_Id" name="NEFT_Transaction_Id"
                                            placeholder="Enter NEFT Transaction Id..."
                                            onkeypress="clearvalidateneft_transaction_id()" onclick="clearvalidateneft_transaction_id()">
                                        <span id="validateneft_transaction_id" class="text-danger"></span>
                                    </div>                                        
                                    <div class="form-group mb-3">
                                        <label for="Bank_Name" class="font-weight-bold">Bank Name</label>
                                        <span style="color:red">*</span>
                                        <input type="text" class="form-control" id="Bank_Name2" name="Bank_Name"
                                            placeholder="Enter Bank Name..."
                                            onkeypress="clearvalidatebank_name2()" onclick="clearvalidatebank_name2 ()">
                                        <span id="validatebank_name2" class="text-danger"></span>
                                    </div>                                       
                                    <button type="submit" name="submit3" class="btn btn-success mt-3">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php

                            ini_set("display_errors", 0); 
                            date_default_timezone_set('Asia/Kolkata'); 
                            ini_set('log_errors', 1);
                            ini_set('error_log', './error_log.txt');
                            ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                        $enrollment_id = mysqli_real_escape_string($con, $_GET['enrollment_id']);

                        $course_query = mysqli_query($con, "SELECT Enrollment_ID, Course_Code, Title, Commencing_Date, Contact_Name FROM enrollment_form WHERE Enrollment_ID = '$enrollment_id'");
                        $course_row = mysqli_fetch_assoc($course_query);

                        try {
                        if (isset($_POST['submit3'])) {    
                            $neft_transaction_id = mysqli_real_escape_string($con, $_POST['NEFT_Transaction_Id']);
                            $bank_name = mysqli_real_escape_string($con, $_POST['Bank_Name']);

                            $sql = "INSERT INTO payments(Enrollment_ID,Course_Code,Title,Commencing_Date,Contact_Name,NEFT_Transaction_Id,Bank_Name)
                             VALUES('{$course_row['Enrollment_ID']}','{$course_row['Course_Code']}','{$course_row['Title']}',
                                     '{$course_row['Commencing_Date']}','{$course_row['Contact_Name']}','$neft_transaction_id','$bank_name')";
                            $insert = mysqli_query($con, $sql);
                            if ($insert) {

                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Successful' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status);

                                ?>
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Payment Made Successfully";
                                    document.getElementById("AlertHeader").classList.add("text-success");
                                    $("#ProceedButton").attr("href", "./index.php");
                                    $(document).ready(function(){
                                        $('#ALertModal').modal('show');
                                    });
                                </script>                                                         
                                <?php 
                            } else {  

                                $update_status = "UPDATE payments SET Payment_Status = 'Payment Failed' WHERE Enrollment_ID = '$enrollment_id'";
                                mysqli_query($con, $update_status);                                         
                                          
                                ?> 
                                <script>
                                    document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                    document.getElementById("AlertHeader").classList.add("text-danger");
                                    $("#ProceedButton").attr("href", "./payment.php");
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
            <?php
        } 
    }
    ?>
</main>

<?php include('./includes/footer.php') ?>

<!-- bootstrap 4.3.1 js -->
<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>

<!-- bootstrap 5.1.3 js -->
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>

<script src="./assets/js/payment.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>