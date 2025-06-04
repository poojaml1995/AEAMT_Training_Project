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
    <title>Guest house Details - AEAMT</title>
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

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>

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
        <div class="pt-4 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <div class="table-bg shadow top-border mt-5 p-3 mx-2">
                                <div class="p-5">
                                    <div class="float-right">
                                        <a href="./export_guest_house_details.php" class="btn btn-success"><i class="bi bi-download"></i>
                                            Export</a>
                                    </div>           
                                <div class="p-5">
                                <h4 class="heading text-left mb-3 fw-bold">User Details</h4>
                                <div class="text-reight mb-3">
                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Enrollment ID</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Contact Email</th>
                                                <th>Organisation Name</th>
                                                <th>Check-in Date</th>
                                                <th>Check-out Date</th>
                                                <th>Number of Members Requiring Accommodation</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                                <th>Date & Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = mysqli_query($con, "SELECT * FROM enrollment_form WHERE Accommodation = 'Yes'") or die(mysqli_error($con));
                                                if (mysqli_num_rows($query) > 0) {
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $current_status = $row['Guest_House_Status'];
                                                        $accept_class = ($current_status === "Available") ? "btn-success" : "btn-light";
                                                        $reject_class = ($current_status === "Not Available") ? "btn-danger" : "btn-light";
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['Enrollment_ID']; ?></td>
                                                <td><?php echo $row['Contact_Name']; ?></td>
                                                <td><?php echo $row['Contact_Number']; ?></td>
                                                <td><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['Organisation_Name']; ?></td>
                                                <td><?php echo $row['checkinDate']; ?></td>
                                                <td><?php echo $row['checkoutDate']; ?></td>
                                                <td><?php echo $row['Accommodation_Members']; ?></td>
                                                <td><?php echo $row['Remarks']; ?></td>
                                                <td> 
                                                    <div class="d-flex justify-content-around">
                                                        <form method="post" class="d-inline">
                                                            <input type="hidden" name="Guest_House" value="<?php echo $row['Enrollment_ID']; ?>">
                                                            <input type="hidden" name="Guest_House_Status" value="Available">
                                                            <button type="submit" name="available" class="btn btn_guesthouse <?php echo $accept_class; ?> <?php echo ($current_status == "Available" ? 'btn-status' : ''); ?>" id="acceptBtn">
                                                                <i class="bi bi-check-circle" style="font-size: 30px;"></i>
                                                            </button>
                                                        </form>
                                                        <form method="post" class="d-inline">
                                                            <input type="hidden" name="Guest_House" value="<?php echo $row['Enrollment_ID']; ?>">
                                                            <input type="hidden" name="Guest_House_Status" value="Not Available">
                                                            <button type="submit" name="not_available" class="btn btn_guesthouse <?php echo $reject_class; ?> <?php echo ($current_status == "Not Available" ? 'btn-status' : ''); ?>" id="rejectBtn">
                                                                <i class="bi bi-x-circle" style="font-size: 30px;"></i>
                                                            </button>
                                                        </form>
                                                    </div>                                            
                                                    <?php
                                                        ini_set("display_errors", 0);
                                                        date_default_timezone_set('Asia/Kolkata');
                                                        ini_set('log_errors', 1);
                                                        ini_set('error_log', '../error_log.txt');
                                                        ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                                        try {
                                                            if (isset($_POST['available'])) {
                                                                $enrollment_id = mysqli_real_escape_string($con, $_POST['Guest_House']);
                                                                $status = "Available";

                                                                $sql = "UPDATE enrollment_form SET Guest_House_Status = '$status' WHERE Enrollment_ID = '$enrollment_id'";
                                                                if (mysqli_query($con, $sql)) {
                                                                    // Send email
                                                                    require '../assets/phpmailer/class.phpmailer.php';
                                                                    require '../assets/phpmailer/class.smtp.php';
                                                                    $mail = new PHPMailer(true);
                                                                    $email = "preranap606@gmail.com";

                                                                    $contact_email = $row['Email'];
                                                                    $contact_name = $row['Contact_Name'];
                                                                    $Email_Message = "Dear Sir/Madam,<br><br>Guest house details are:<br><b>Name:</b> $contact_name<br><b>Email:</b> $contact_email<br><b>Enrollment ID:</b> $enrollment_id<br><br>
                                                                    <b>Note:</b> AEAMT Admin has been Accepted.<br><br>With Regards,<br>AEAMT Admin";
                                                                
                                                                    try {
                                                                        $mail->isSMTP();
                                                                        $mail->Host = "smtp.gmail.com";
                                                                        $mail->SMTPAuth = true;
                                                                        $mail->Username = "donotreplyaeamttraining@gmail.com";
                                                                        $mail->Password = "azie xzbe dtim lsze";
                                                                        $mail->SMTPSecure = "tls";
                                                  
                                                                        $mail->Port = 587;
                                                                        $mail->setFrom('donotreplyaeamttraining@gamil.com', 'CMTI');
                                                                        $mail->addAddress($email);
                                                                        $mail->isHTML(true);
                                                                        $mail->Subject = 'Guest House Request Accepted form AEAMT';
                                                                        $mail->Body = $Email_Message;

                                                                        if ($mail->Send()) {
                                                                            ?>
                                                                            <!-- <script>
                                                                                document.getElementById("AlertHeader").innerHTML = "Guest House Accepted!";
                                                                                document.getElementById("AlertHeader").classList.add("text-success");
                                                                                $("#ProceedButton").attr("href", "./view_guesthouse.php");
                                                                                $(document).ready(function() {
                                                                                    $('#ALertModal').modal('show');
                                                                                });
                                                                            </script> -->
                                                                            <script>
                                                                                alert("Guest House Accepted");
                                                                                window.location='./view_guesthouse.php';
                                                                            </script>

                                                                            <?php
                                                                        } else {
                                                                            error_log("Mailer Error: " . $mail->ErrorInfo);
                                                                        }
                                                                    } catch (Exception $e) {
                                                                        error_log("PHPMailer Exception: " . $e->getMessage());
                                                                    }
                                                                }
                                                            } elseif (isset($_POST['not_available'])) {
                                                                $enrollment_id = mysqli_real_escape_string($con, $_POST['Guest_House']);
                                                                $status = "Not Available";

                                                                $sql = "UPDATE enrollment_form SET Guest_House_Status = '$status' WHERE Enrollment_ID = '$enrollment_id'";
                                                                if (mysqli_query($con, $sql)) {
                                                                    require '../assets/phpmailer/class.phpmailer.php';
                                                                    require '../assets/phpmailer/class.smtp.php';
                                                                    $mail_admin = new PHPMailer(true);

                                                                    $email = $row['Email'];
                                                                    $name = $row['Contact_Name'];
                                                                    $Email_Message_Admin = "Dear Sir/Madam,<br><br>We regret to inform you that the guest house room is not available for a moment, We will let u know once available.<br><br>With Regards,<br>CMTI-AEAMT";

                                                                    try {
                                                                        $mail_admin->isSMTP();
                                                                        $mail_admin->Host = "smtp.gmail.com";
                                                                        $mail_admin->SMTPAuth = true;
                                                                        $mail_admin->Username = "donotreplyaeamttraining@gmail.com";
                                                                        $mail_admin->Password = "azie xzbe dtim lsze";
                                                                        $mail_admin->SMTPSecure = "tls";
                                                                        $mail_admin->Port = 587;
                                                                        $mail_admin->setFrom('donotreplyaeamttraining@gmail.com', 'CMTI');
                                                                        $mail_admin->addAddress($email);
                                                                        $mail_admin->isHTML(true);
                                                                        $mail_admin->Subject = 'Guest House Request Status';
                                                                        $mail_admin->Body = $Email_Message_Admin;

                                                                        if ($mail_admin->Send()) {
                                                                        ?>
                                                                        <script>
                                                                                alert("Guest House Rejected");
                                                                                window.location="./view_guesthouse.php";
                                                                            </script>;
                                                                            <?php
                                                                        } else {
                                                                            error_log("Mailer Error: " . $mail_admin->ErrorInfo);
                                                                        }
                                                                    } catch (Exception $e) {
                                                                        error_log("PHPMailer Exception: " . $e->getMessage());
                                                                    }
                                                                }
                                                            }
                                                        } catch (Exception $e) {
                                                            error_log("Caught exception: " . $e->getMessage());
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                                <td><?php echo $row['Date_Time']; ?></td>
                                            </tr>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <div>
                <div>    
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

</body>
</html>
