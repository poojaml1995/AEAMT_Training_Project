<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';

if (isset($_GET['Course_Code'])) {
    $id = $_GET['Course_Code'];
    $sql = "SELECT * FROM course_details WHERE Course_Code = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
        $course_code_value = $course['Course_Code'];
        $title_value = $course['Title'];
        $no_of_days_value = $course['No_of_Days'];
        $commencing_from_date_value = $course['Commencing_from_Date'];
        $commencing_to_date_value = $course['Commencing_to_Date'];
        $course_fee_value = $course['Course_Fee'];
        $faculty_value = $course['Faculty'];
        $imagetarget_file = $course['Course_Image_loc'];

    } else {
        echo "Course not found!";
        exit;
    }
} else {        
    echo "Course ID not provided!";
    exit;
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course Details - AEAMT</title>
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

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="add_card shadow-lg border-0 rounded-lg">
                        <div class="add_card-header bg-primary text-white">
                            <h3 class="text-center">Edit Course Details</h3>
                        </div>
                        <div class="add_card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="Course_Code">Course Code</label>
                                    <input type="text" class="form-control" name="Course_Code" 
                                    value="<?php echo $course_code_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Title" class="font-weight-bold">Course Title</label>
                                    <textarea class="form-control" name="Title" rows="2"><?php echo $title_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="No_of_days">No. of days</label>
                                    <input type="text" class="form-control" name="No_of_Days"        
                                    value="<?php echo $no_of_days_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="from_date" class="font-weight-bold">Date of Commencement (From)</label>
                                    <input type="date" class="form-control" name="Commencing_from_Date"
                                    value="<?php echo $commencing_from_date_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="to_date" class="font-weight-bold">Date of Commencement (To)</label>
                                    <input type="date" class="form-control" name="Commencing_to_Date"
                                    value="<?php echo $commencing_to_date_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Course_Fee">Course Fee (Rs.)</label>
                                    <input type="text" class="form-control" name="Course_Fee"                                         
                                    value="<?php echo $course_fee_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty">Co-ordinator / Faculty</label>
                                    <input type="text" class="form-control" name="Faculty"
                                    value="<?php echo $faculty_value; ?>">
                                </div>
                                <!-- Existing Image -->
                                    <div class="mb-3">
                                        <div class="form-group row">
                                            <label for="current_image" class="col-sm-3 col-form-label">Current Image</label>
                                            <div class="col-sm-9 col-md-6">
                                                <?php
                                                // Ensure that $existing_data is properly populated
                                                if (!empty($course['Course_Image_loc'])) {
                                                    echo '<img src="' . $course['Course_Image_loc'] . '" alt="Current Image" style="width: 35%;">';
                                                } else {
                                                    echo 'No image available';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Upload Image Field -->
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="form-group row">
                                            <label for="image" class="col-sm-3 col-form-label">Upload Image</label>
                                            <div class="col-sm-9 col-md-6">
                                                <input type="file" class="form-control text-black" id="image" name="image" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary w-100">Submit</button>
                            </form>

                            <?php
                            include '../includes/connection.php';

                            if (isset($_POST['update'])) 
                            {
                                $course_code = $_POST['Course_Code'];
                                $title = $_POST['Title'];
                                $no_of_days = $_POST['No_of_Days'];
                                $commencing_from_date = $_POST['Commencing_from_Date'];
                                $commencing_to_date = $_POST['Commencing_to_Date'];
                                $course_fee = $_POST['Course_Fee'];
                                $faculty = $_POST['Faculty'];
                                $image_loc_update = "";

                                if (!empty($_FILES["image"]["name"]))
                                {
                                  $imagetarget_dir = "../Course_Image/";
                                  $imagetarget_file = $imagetarget_dir . basename($_FILES["image"]["name"]);
    
                                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagetarget_file))
                                  { 
                                    $image_loc_update = ", Course_Image_loc = '$imagetarget_file'";
                                  } else {
                                      echo "Sorry, there was an error uploading your image file.";
                                exit();
                                         }
                                }    

                                $update_query = "UPDATE course_details SET Course_Code = '$course_code', Title = '$title', 
                                No_of_Days = '$no_of_days', Commencing_from_Date = '$commencing_from_date',
                                Commencing_to_Date = '$commencing_to_date', Course_Fee = '$course_fee', Faculty = '$faculty' 
                                $image_loc_update WHERE Course_Code = '$id'";

                                if (mysqli_query($con, $update_query)) {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Course details updated successfully!";
                                        document.getElementById("AlertHeader").classList.add("text-success");
                                        $("#ProceedButton").attr("href", "./view_course_details.php");
                                        $(document).ready(function(){
                                            $('#ALertModal').modal('show');
                                        });
                                    </script>
                                    <?php
                                } else {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Error updating course details";
                                        document.getElementById("AlertHeader").classList.add("text-danger");
                                        $("#ProceedButton").attr("href", "./edit-coursedetails.php");
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
