<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';

  if (isset($_GET['Enrollment_ID'])) {
    $Enrollment_ID = $_GET['Enrollment_ID'];
    $query = mysqli_query($con, "SELECT * FROM enrollment_form WHERE Enrollment_ID='$Enrollment_ID'") or die(mysqli_error($con));
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
    <?php include('../includes/connection.php'); ?>

        <div class="container">
            <div class="row mt-5">
                <div class="bordered-form mt-5 p-3 mx-2">
                          <?php
                            if (isset($_GET['Enrollment_ID']) && !empty($results)) {
                              $i = 1;
                          ?>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                                </div> 
                                <div class="col-md-8">
                                    <h3 class="text-center">Central Manufacturing Technology Institute</h3>
                                </div> 
                                <div class="col-md-2 text-md-right">
                                    <img src="assets/images/cmti.png" alt="" width="90" height="50" class="d-inline-block align-text-top">
                                </div> 
                            </div> 
                                <p class="text-center">Tumkur Road, Bangalore - 560022 <br> Training Program <br>
                                  on <br> <strong>'<?php echo $results[0]['Title']; ?>'</strong> <br>'<?php echo $results[0]['Commencing_Date']; ?>'</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-5">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                                    <button type="button" class="btn btn-primary btn-sm" id="HideButton" onclick="window.close();">Go Back</button>
                                                        <div class="text-center w-100">
                                                            <h4 class="fw-bold mb-0">List Of Participants</h4>
                                                        </div>
                                                        <button type="button" class="btn btn-primary" id="HideButton" name="button" onclick="window.print();">
                                                            <i class="bi bi-printer"></i>
                                                        </button>
                                                    </div>
                                                  </div>
                                                </div>
                                                    <div class="table-responsive mt-3">
                                                      <table class="table download-table">
                                                          <thead>
                                                                <tr>
                                                                <th>Sl.No</th>
                                                                   <th>Organisation</th>
                                                                   <th>Names</th>
                                                                </tr>
                                                          </thead>
                                                          <tbody>
                                                                <?php
                                                                    if (isset($_GET['Enrollment_ID']) && !empty($results)) {
                                                                    $i = 1;
                                                                    foreach ($results as $row) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $i; ?></td>
                                                                    <td><?php echo $row['Organisation_Name'] . ', ' . $row['Address']; ?></td>
                                                                    <td><?php echo $row['Name']; ?></td>
                                                              </tr>
                                                              <?php
                                                                    $i++;
                                                                  }
                                                              }
                                                              ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php }
                                                    ?>
                                                    <p class="pt-4">In connection with the above programme, the faculties are requested to have lunch along with Participants on the respective dates.</p>
                                                      <div class="row">
                                                        <div class="col-md-6"></div>
                                                            <div class="col-md-6 text-md-right">
                                                               <p>Shri. Arun kumar JG <br> JD & CH - AEAMT</p>
                                                            </div>
                                            </div>
                                        </div>
                                    </div>                            
                </div>
            </div>
        </div>
 </body>
 </html>