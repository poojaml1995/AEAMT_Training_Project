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
    <title>Feedabck - AEAMT</title>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <div class="table-bg shadow top-border mt-5 p-3 mx-2">
                                <div class="p-5">
                                    <div class="float-right">
                                        <a href="./export_feedback.php" class="btn btn-success">
                                            <i class="bi bi-download"></i> Export
                                        </a>
                                    </div>
                                    <h4 class="heading text-left fw-bold mb-3">View Feedabck Details</h4>
                                    <div class="text-reight mb-3">
                                        <table id="example" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Name</th>
                                                    <th>Company Name</th>
                                                    <th>Title</th>
                                                    <th>Course Code</th>
                                                    <th>Commencing_Date</th>
                                                    <th>Rate Overall</th>
                                                    <th>Remarks</th>
                                                    <th>Action</th>
                                                    <th>Date & Time</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <?php
                                                $query = mysqli_query($con, "SELECT * FROM feedback") or die(mysqli_error($con));
                                                if (mysqli_num_rows($query) > 0) {
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        $current_status = $row['Status'];
                                                        $accept_class = ($current_status === "Accepted") ? "btn-success" : "btn-light";
                                                        $reject_class = ($current_status === "Not Accepted") ? "btn-danger" : "btn-light";
                                            ?>
                                            <tr>
                                            <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['Name']; ?></td>
                                                    <td><?php echo $row['Company_Name']; ?></td>
                                                    <td><?php echo $row['Title']; ?></td>
                                                    <td><?php echo $row['Course_Code']; ?></td>
                                                    <td><?php echo $row['Commencing_Date']; ?></td>
                                                    <td><?php echo $row['Rate_Overall']; ?></td>
                                                    <td><?php echo $row['Remarks']; ?></td>
                                                <td> 
                                                    <div class="d-flex justify-content-around">
                                                        <form method="post" class="d-inline">
                                                            <input type="hidden" name="Feedback" value="<?php echo $row['ID']; ?>">
                                                            <input type="hidden" name="Status" value="Accepted">
                                                            <button type="submit" name="accepted" class="btn btn_guesthouse <?php echo $accept_class; ?>
                                                            <?php echo ($current_status == "Accepted" ? 'btn-status' : ''); ?>" id="acceptBtn">
                                                                <i class="bi bi-check-circle" style="font-size: 30px;"></i>
                                                            </button>
                                                        </form>
                                                        <form method="post" class="d-inline">
                                                            <input type="hidden" name="Feedback" value="<?php echo $row['ID']; ?>">
                                                            <input type="hidden" name="Status" value="Not Accepted">
                                                            <button type="submit" name="not_accepted" class="btn btn_guesthouse <?php echo $reject_class; ?>
                                                            <?php echo ($current_status == "Not Accepted" ? 'btn-status' : ''); ?>" id="rejectBtn">
                                                                <i class="bi bi-x-circle" style="font-size: 30px;"></i>
                                                            </button>
                                                        </form>
                                            
                                                        <?php
                                                            ini_set("display_errors", 0); 
                                                            date_default_timezone_set('Asia/Kolkata'); 
                                                            ini_set('log_errors', 1);
                                                            ini_set('error_log', '../error_log.txt');
                                                            ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                                            try{
                                                                if (isset($_POST['accepted'])) {
                                                                $id = mysqli_real_escape_string($con, $_POST['Feedback']);
                                                                $status = "Accepted";
                                                                
                                                                $sql = "UPDATE feedback SET Status = '$status' WHERE ID = '$id'";
                                                                if (mysqli_query($con, $sql)) {
                                                                    ?>
                                                                    <script>
                                                                        document.getElementById("AlertHeader").innerHTML = "Feedback Accepted!";
                                                                        document.getElementById("AlertHeader").classList.add("text-success");
                                                                        $("#ProceedButton").attr("href", "./view_feedback.php");
                                                                        $(document).ready(function() {
                                                                            $('#ALertModal').modal('show');
                                                                        });
                                                                    </script>
                                                                    <?php
                                                                }
                                                            } elseif (isset($_POST['not_accepted'])) {
                                                                $id = mysqli_real_escape_string($con, $_POST['Feedback']);
                                                                $status = "Not Accepted";
                                                                
                                                                $sql = "UPDATE feedback SET Status = '$status' WHERE ID = '$id'";
                                                                if (mysqli_query($con, $sql)) {
                                                                    ?>
                                                                    <script>
                                                                        document.getElementById("AlertHeader").innerHTML = "Feedback Rejcted";
                                                                        document.getElementById("AlertHeader").classList.add("text-danger");
                                                                        $("#ProceedButton").attr("href", "./view_feedback.php");
                                                                        $(document).ready(function() {
                                                                            $('#ALertModal').modal('show');
                                                                        });
                                                                    </script>
                                                                    <?php
                                                                }
                                                            }
                                                        } catch (Exception $e) {
                                                            // Catch any exceptions thrown
                                                            $errorMessage = "Caught exception: " . $e->getMessage();                        
                                                            // error_log($errorMessage . PHP_EOL, 3, "error_log.txt");
                                                            log_error($errorMessage . PHP_EOL, 3, "error_log.txt");
                                    
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
