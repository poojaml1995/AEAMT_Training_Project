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
    <title>Home - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <!-- Include Bootstrap Icons via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    
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
        <div class="pb-4 mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card dashboard-card">
                            <div class="card-header dashboard-card-header">
                                <span class="dashboard-icon-round"><i class="bi bi-person-check"></i></span>
                                <h6 class="card-title dashboard-card-title">Registered Users : <?php echo mysqli_num_rows(mysqli_query($con,"SELECT * from training_registration")); ?></h6>                           
                            </div>
                            <div class="card-footer dashboard-card-footer">
                               <a href="./view_user_details.php" class="btn btn-dashboard btn-sm">Registered Users</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card dashboard-card">
                            <div class="card-header dashboard-card-header">
                                <span class="dashboard-icon-round"><i class="bi bi-building"></i></span>
                                <h6 class="card-title">Companies : <?php echo mysqli_num_rows(mysqli_query($con,"SELECT DISTINCT Organisation_Name FROM enrollment_form")); ?></h6>
                            </div>
                            <div class="card-footer dashboard-card-footer">
                               <a href="./view_companies_names.php" class="btn btn-dashboard btn-sm">Registered Companies</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dashboard-card">
                            <div class="card-header dashboard-card-header">
                                <span class="dashboard-icon-round"><i class="bi bi-briefcase"></i></span></h6>
                                <h6 class="card-title">Internship / Projects
                            </div>
                            <div class="card-footer dashboard-card-footer">
                               <a href="#" class="btn btn-dashboard btn-sm">Internship / Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dashboard-card">
                            <div class="card-header dashboard-card-header">
                                <span class="dashboard-icon-round"><i class="bi bi-person"></i></span></h6>
                                <h6 class="card-title">Apprenticeship Training
                            </div>
                            <div class="card-footer dashboard-card-footer">
                               <a href="#" class="btn btn-dashboard btn-sm">Apprentice</a>
                            </div>
                        </div>
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
                                <h4 class="heading text-left mb-3 fw-bold">Contact Us</h4>
                                <div class="text-reight mb-3">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Date / Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM contact") or die(mysqli_error($con));
                                    if (mysqli_num_rows($query) > 0) {
                                        
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['Name']; ?></td>
                                            <td><?php echo $row['Mobile_No']; ?></td>
                                            <td><?php echo $row['Email']; ?></td>
                                            <td><?php echo $row['Message']; ?></td>
                                            <td><?php echo $row['Date_Time']; ?></td>
                                        </tr>
                                        <?php
                                                $i++;
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

</body>
</html>