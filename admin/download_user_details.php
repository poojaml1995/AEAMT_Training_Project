<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';

  if (isset($_GET['Participant_ID'])) {
    $participant_id = $_GET['Participant_ID'];
    $query = mysqli_query($con, "SELECT * FROM training_registration WHERE Participant_ID='$participant_id'") or die(mysqli_error($con));
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

    <main>

<div class="container">

    <div class="row justify-content-center mt-4">
         <div class="col-md-12">
            <div class="view-form-border bg-light rounded-lg p-5">
                    <?php
                    if (!empty($results)) {
                    ?> 
                        <div class="row">
                            <div class="col-md-2">
                                <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-center">Central Manufacturing Technology Institute</h3>
                            </div>
                            <div class="col-md-2 text-md-right">
                                <img src="assets/images/cmti.png" alt="" width="80" height="50" class="d-inline-block align-text-top">
                            </div>
                        </div>
                        <p class="text-center">
                            Tumkur Road, Bangalore - 560022 <br> Training Program <br>
                            on <br><strong><?php echo $results[0]['Title']; ?></strong> <br> 
                            <?php echo $results[0]['Commencing_Date']; ?>
                        </p>
                    <?php
                    } else {
                        echo "<p class='text-center'>No results found for the specified Course Code.</p>";
                    }
                    ?>
                    <?php foreach ($results as $row) : ?>
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <label for="Name" class="font-weight-bold">Name</label>
                                                <input type="text" class="form-control"
                                                 value="<?php echo $row['Saturation'] . '. '. $row['Name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="DOB" class="font-weight-bold">Date of Birth</label>
                                                <span style="color:red">*</span>
                                                <input type="date" class="form-control"
                                                value="<?php echo $row['DOB']; ?>" readonly>                               
                                            </div>
                                            <div class="col-md-8">
                                                <label for="Designation" class="font-weight-bold">Designation</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control"
                                                value="<?php echo $row['Designation']; ?>" readonly>
                                            </div>
                                        </div>
                                        <?php
                                        $gender = $row['Gender'];
                                         ?>
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                            <label for="Gender" class="font-weight-bold">Gender</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="Gender" value="Male" 
                                                                <?php echo ($gender == 'Male') ? 'checked' : ''; ?> disabled>                                                                        <label class="form-check-label" for="Gender1"></label>Male
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="Gender" value="Female"
                                                                <?php echo ($gender == 'Female') ? 'checked' : ''; ?> disabled>                                                                        <label class="form-check-label" for="Gender2"></label>Female
                                                       </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="Gender" value="Others"
                                                                <?php echo ($gender == 'Others') ? 'checked' : ''; ?> disabled>                                                                        <label class="form-check-label" for="Gender3"></label>Others
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <label for="image" class="col-form-label">
                                            <img src="<?php echo str_replace("./", "../", $row['image_loc']); ?>" alt="Profile Image"
                                             height="200" width="200"> 
                                        </div>
                                    </div>
                                      <div class="form-group">
                                    <label for="Organisation_Name" class="font-weight-bold">Organisation Name</label>
                                    <textarea class="form-control" rows="2" readonly><?php echo $row['Organisation_Name']; ?></textarea>
                                </div>    
                                <div class="form-group">
                                    <label for="Qualification" class="font-weight-bold">Educational Qualification</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Qualification']; ?>" readonly>
                                </div>
                                <label for="Name" class="font-weight-bold">Experience</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=col-md-6>
                                            <label for="Areas" class="font-weight">Areas:</label>
                                            <input type="text" class="form-control"value="<?php echo $row['Areas']; ?>" readonly>
                                        </div>
                                        <div class=col-md-6>
                                            <label for="Years" class="font-weight">Years:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Years']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <label for="Name" class="font-weight-bold">Address</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=col-md-6>
                                            <label for="Office_Address" class="font-weight">Office:</label>
                                            <textarea class="form-control" rows="2" readonly><?php echo $row['Office_Address']; ?></textarea>
                                        </div>
                                        <div class=col-md-6>
                                            <label for="Residential_Address" class="font-weight">Residential:</label>
                                            <textarea class="form-control" rows="2" readonly><?php echo $row['Residential_Address']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <label for="Name" class="font-weight-bold">Phone / Fax</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=col-md-6>
                                            <label for="Office_Phone" class="font-weight">Office:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Office_Phone']; ?>" readonly>
                                        </div>
                                        <div class=col-md-6>
                                            <label for="Residential_Phone" class="font-weight">Residential:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Residential_Phone']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Mobile" class="font-weight-bold">Mobile</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Mobile_Number']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="font-weight-bold">Email ID</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Email']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Purpose_of_Prog" class="font-weight-bold">Purpose of attending the Programme</label>
                                    <textarea class="form-control" rows="2" readonly><?php echo $row['Purpose_of_Prog']; ?></textarea>
                                </div>    
                                <div class="form-group">
                                    <label for="Expectations" class="font-weight-bold">Expectations from the Programme</label>
                                    <textarea class="form-control" rows="2" readonly><?php echo $row['Expectations']; ?></textarea>
                                </div>
                                <div class="row">
                                    <label for="Name" class="font-weight-bold">In case of Emergency, Whom to contact?</label>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Contact_Name" class="font-weight-bold">Name:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Contact_Name']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Contact_Relationship" class="font-weight-bold">Relationship:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Contact_Relationship']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Contact_No" class="font-weight-bold">Contact Details:</label>
                                            <input type="text" class="form-control" value="<?php echo $row['Contact_No']; ?>" readonly> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Contact_Address" class="font-weight-bold">Address:</label>
                                            <textarea class="form-control" rows="2" readonly><?php echo $row['Contact_Address']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <div class="col">
                                <button type="button" class="btn btn-primary btn-lg" id="HideButton" name="GoBack" onclick="window.close();">
                                <i class="bi bi-arrow-left" aria-hidden="true"></i>Go Back</button>
                                <!-- </div>
                                <div class="col-md-2"> -->
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