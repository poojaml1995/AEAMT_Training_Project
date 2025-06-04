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
    <title>View Payment Details - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <?php include('./includes/header.php') ?>
    <?php include('./includes/sidebar.php') ?>

    <main class="main-content">
        <div class="pt-4 mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <div class="table-bg shadow top-border mt-5 p-3 mx-2">
                                <div class="p-5">
                                    <div class="float-right">
                                        <a href="./export_payment_details.php" class="btn btn-success">
                                            <i class="bi bi-download"></i> Export
                                        </a>
                                    </div>
                                    <h4 class="heading text-left fw-bold mb-3">Payment Details</h4>
                                    <div class="text-reight mb-3">
                                        <table id="example" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Enrollment ID</th>
                                                    <th>Course Code</th>
                                                    <th>Title</th>
                                                    <th>Contact Name</th>
                                                    <th>NCPI/UPI Ref No</th>
                                                    <th>QR Image</th>
                                                    <th>Cheque/DD No</th>
                                                    <th>NEFT Transaction Id</th>
                                                    <th>Bank Name</th>
                                                    <th>Payment Status</th>
                                                    <th>Date & Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = mysqli_query($con, "SELECT * FROM payments") or die(mysqli_error($con));
                                                if (mysqli_num_rows($query) > 0) {
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['Enrollment_ID']; ?></td>
                                                    <td><?php echo $row['Course_Code']; ?></td>
                                                    <td><?php echo $row['Title']; ?></td>
                                                    <td><?php echo $row['Contact_Name']; ?></td>
                                                    <td><?php echo $row['NCPI_UPI_Ref_No']; ?></td>
                                                    <td>
                                                        <?php
                                                        $qrImagePath = str_replace("./", "../", $row["QR_image_loc"]);
                                                        if (!empty($row["QR_image_loc"]) && file_exists($qrImagePath)): ?>
                                                            <a href="<?php echo $qrImagePath; ?>" download="<?php echo basename($qrImagePath); ?>">
                                                                <img src="<?php echo $qrImagePath; ?>" height="80" width="80" alt="QR Code">
                                                            </a>
                                                        <?php else: ?>
                                                            <span>The payment is made either by Cheque/DD or by NEFT</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo $row['Cheque_DD_No']; ?></td>
                                                    <td><?php echo $row['NEFT_Transaction_Id']; ?></td>
                                                    <td><?php echo $row['Bank_Name']; ?></td>
                                                    <td><?php echo $row['Payment_Status']; ?></td>
                                                    <td><?php echo $row['Date_Time']; ?></td>
                                                </tr>
                                                <?php
                                                        $i++;
                                                    }
                                                } else {
                                                    echo "<p>No participants found.</p>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
