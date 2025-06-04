<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $sql = "SELECT * FROM programme_schedule WHERE ID = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $prog_schedule = $result->fetch_assoc();
        $title_value = $prog_schedule['Title'];
        $course_code_value = $prog_schedule['Course_Code'];
        $commencing_date_value = $prog_schedule['Commencing_Date'];
        $date_value = $prog_schedule['Date'];
        $from_time_value = $prog_schedule['From_Time'];
        $to_time_value = $prog_schedule['To_Time'];
        $particulars_value = $prog_schedule['Particulars'];
        $faculty_value = $prog_schedule['Faculty'];

    } else {
        echo "Programme schedule not found!";
        exit;
    }
} else {
    echo "ID not provided!";
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Programme schedule - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/bootsrap-5.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script>
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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-prog shadow-lg border-0 rounded-lg">
                        <div class="card-header-prog bg-gradient-primary text-black text-center py-4">
                            <h3 class="text-center">Edit Programme schedule</h3>
                        </div>
                        <div class="add_card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="Title" class="font-weight-bold">Title</label>
                                    <textarea class="form-control" name="Title" rows="2"><?php echo $title_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Course_Code" class="font-weight-bold">Course Code</label>
                                    <input type="text" class="form-control" name="Course_Code" 
                                    value="<?php echo $course_code_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Commencing_Date" class="font-weight-bold">Commencing Date</label>
                                    <input type="text" class="form-control" name="Commencing_Date" 
                                    value="<?php echo ($commencing_date_value); ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="date" class="font-weight-bold">Date</label>
                                    <input type="date" class="form-control" name="Date"
                                    value="<?php echo $date_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="From_Time" class="font-weight-bold">From_Time</label>
                                    <input type="time" class="form-control" name="From_Time"
                                    value="<?php echo $from_time_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="To_Time" class="font-weight-bold">To_Time</label>
                                    <input type="time" class="form-control" name="To_Time"                                         
                                    value="<?php echo $to_time_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Particulars" class="font-weight-bold">Particulars</label>
                                    <textarea class="form-control" name="Particulars" rows="2"><?php echo $particulars_value; ?>
                                    </textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty" class="font-weight-bold">Co-ordinator / Faculty</label>
                                    <input type="text" class="form-control" name="Faculty"
                                    value="<?php echo $faculty_value; ?>">
                                </div>
                                <button type="submit" name="update" class="btn btn-primary w-100">Submit</button>
                            </form>

                            <?php
                            include '../includes/connection.php';

                            if (isset($_POST['update'])) 
                            {
                                $title = $_POST['Title'];
                                $course_code = $_POST['Course_Code'];
                                $commencing_date = $_POST['Commencing_Date'];
                                $date = $_POST['Date'];
                                $from_time = $_POST['From_Time'];
                                $to_time = $_POST['To_Time'];
                                $particulars = $_POST['Particulars'];
                                $faculty = $_POST['Faculty'];

                                    $update_query = "UPDATE programme_schedule SET Title = '$title', Course_Code = '$course_code', 
                                                     Commencing_Date = '$commencing_date', Date = '$date', From_Time = '$from_time',
                                                     To_Time = '$to_time', Particulars = '$particulars',
                                                     Faculty = '$faculty' WHERE ID = '$id'";
                                if (mysqli_query($con, $update_query)) {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Programme schedule updated successfully!";
                                        document.getElementById("AlertHeader").classList.add("text-success");
                                        $("#ProceedButton").attr("href", "./view_prog_schedule.php");
                                        $(document).ready(function(){
                                            $('#ALertModal').modal('show');
                                        });
                                    </script>
                                    <?php
                                } else {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Error updating programme schedule";
                                        document.getElementById("AlertHeader").classList.add("text-danger");
                                        $("#ProceedButton").attr("href", "./edit-prog_schedule.php");
                                        $(document).ready(function(){
                                            $('#ALertModal').modal('show');
                                        });  
                                    </script>                 
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="./assets/bootstrap-4.3.1/js/bootstrap.js"></script>
    <script src="./assets/bootstrap-5.1.3/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
