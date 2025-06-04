<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Course Information - AEAMT</title>
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

    </head>
    <body>
        
    <?php include('../includes/connection.php') ?>

        <!-- Modal -->
        <div class="modal fade" id="ALertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="ALertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ALertModalLabel"> </h5>
                    </div>
                    <div class="modal-body">
                        <h5 id="AlertHeader" class="text-primary text-center my-3"></h5>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-primary" id="ProceedButton">Delete</a>
                    </div>
                </div>
            </div>
        </div>
<?php
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];

    // Delete the product from the database
    $delete_query = "DELETE FROM course_information WHERE ID = '$id'";
    $delete_result = mysqli_query($con, $delete_query);

    if ($delete_result) {

            ?>
                <script>
                    document.getElementById("AlertHeader").innerHTML = "Selected Course Information Deleted Successfully";
                    document.getElementById("AlertHeader").classList.add("text-success");
                    $("#ProceedButton").attr("href", "./view_course_information.php");
                    $(document).ready(function(){
                    $('#ALertModal').modal('show');
                    });
                </script>
            <?php
                }
                else
                {
                
            ?>
                <script>
                    document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                    document.getElementById("AlertHeader").classList.add("text-danger");
                    $("#ProceedButton").attr("href", "./view_course_information.php");
                    $(document).ready(function(){
                    $('#ALertModal').modal('show');
                    });
                </script>
            <?php
                                                
    }
       }  
        ?>

<script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>
<script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </body>
    </html>