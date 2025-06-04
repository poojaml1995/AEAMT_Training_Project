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
    <title>Detention Certificate - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <?php include('../includes/connection.php') ?>


    <main>

    <div class="container">
    <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-8 mb-5">
            <!-- Buttons Row -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary btn-sm" id="HideButton" onclick="window.close();">Go Back</button>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary" id="HideButton" name="button" onclick="window.print();">
                        <i class="bi bi-printer"></i>
                    </button>
                </div>
            </div>

            <!-- Card Section -->
            <div class="card bg-light p-5">
                <div class="row">
                    <div class="col-md-2">
                        <img src="assets/images/aeamt_logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                    </div>
                    <div class="col-md-8">
                        <!-- <h3 class="text-center">Central Manufacturing Technology Institute</h3> -->
                    </div>
                    <div class="col-md-2 text-md-right">
                        <img src="assets/images/cmti.png" alt="" width="80" height="50" class="d-inline-block align-text-top">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-4 text-start">
                        <p>
                            Fax: (080) 2337 0428 <br>
                            Mob: 09449842678 / 86 <br>
                            E-mail: training@cmti.res.in
                        </p>
                    </div>
                    <div class="col-md-8 text-end">
                        <h5>Central Manufacturing Technology Institute</h5>
                        <p>
                            Tumkar Road, Bangalore 560022, India
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5 class="text-center mb-4">DETENTION CERTIFICATE</h5>
                    </div>
                </div>

                <?php if (!empty($results)) { ?> 

                <div class="row">
                    <div class="col">
                        <p>This is to certify that <strong><?php echo $results[0]['Saturation'] .' '. $results[0]['Name']; ?></strong>, of 
                        <strong><?php echo $results[0]['Organisation_Name']; ?></strong> was detained from <?php echo $results[0]['Commencing_Date']; ?> 
                        for attending Training Programme on <strong>"<?php echo $results[0]['Title']; ?>"</strong>, held from <strong><?php echo $results[0]['Commencing_Date']; ?></strong> 
                        conducted at CMTI. Since the programme was non-residential, no free accommodation, transport, or food was provided to the participants. 
                        The participant (if Non Local) was advised to reach Bangalore the previous day (evening/night) of commencement of the course.</p>
                    </div>
                </div>

                <?php } else { echo "<p class='text-center'>No results found for the specified Course Code.</p>"; } ?>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <p>Place: Bangalore <br> Date: <?php echo date("d-m-Y"); ?></p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>Shri. Arun kumar JG <br> JD & CH - AEAMT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
