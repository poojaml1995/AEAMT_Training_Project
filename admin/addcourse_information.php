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
    <title>Add Course Information - AEAMT</title>
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
                                <div class="add_info_card shadow-lg border-0 rounded-lg">
                                    <div class="add_info_card-header bg-primary text-white">
                                        <h3 class="text-center">Add Course Information</h3>
                                    </div>
                                    <div class="add_info_card-body">
                                        <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                            <div class="form-group mb-3">
                                                <label for="Title" class="font-weight-bold">Title of the Training Programme</label>
                                                <span style="color:red">*</span>
                                                <select class="custom-select d-block w-100" id="Title" name="Title" onchange="autofillCourseCode(); clearValidation('Title');" onclick="clearValidation('Title')">
                                                    <option value="Null">Choose Title of the Training Programme...</option>
                                                    <?php
                                                    $query = mysqli_query($con, "SELECT DISTINCT Title, Course_Code FROM course_details") or die(mysqli_error($con));
                                                    while ($row = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?php echo $row['Title']; ?>" data-course-code="<?php echo $row['Course_Code']; ?>">
                                                            <?php echo $row['Title']; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="validatetitle" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="CourseCode" class="font-weight-bold">Course Code</label>
                                                <input type="text" class="form-control" id="Course_Code" name="Course_Code" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Overview" class="font-weight-bold">Overview</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Overview" name="Overview" rows="2"
                                                placeholder="Please Enter Overview..."
                                                onkeypress="clearvalidateoverview()" onclick="clearvalidateoverview()"></textarea>
                                                <span id="validateoverview" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Focussed_Areas" class="font-weight-bold">Focussed Areas</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Focussed_Areas" name="Focussed_Areas" rows="2"
                                                placeholder="Please Enter Focussed Areas..."
                                                onkeypress="clearvalidatefocussed_areas()" onclick="clearvalidatefocussed_areas()"></textarea>
                                                <span id="validatefocussed_areas" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Key_Takeaways" class="font-weight-bold">Key takeaways</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Key_Takeaways" name="Key_Takeaways" rows="2"
                                                placeholder="Please Enter Key Takeaways..."
                                                onkeypress="clearvalidatekey_takeaways()" onclick="clearvalidatekey_takeaways()"></textarea>
                                                <span id="validatekey_takeaways" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Targeted_Audience" class="font-weight-bold">Targeted Audience</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Targeted_Audience" name="Targeted_Audience" rows="2"
                                                placeholder="Please Enter Targeted Audience..."
                                                onkeypress="clearvalidatetargeted_audience()" onclick="clearvalidatetargeted_audience()"></textarea>
                                                <span id="validatetargeted_audience" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Programmes_are_open_to" class="font-weight-bold">Faculty</label>
                                                <span style="color:red">*</span>
                                                <textarea class="form-control" id="Faculty" name="Faculty" rows="2"
                                                placeholder="Please Enter Faculty Information..."
                                                onkeypress="clearvalidatefaculty()" onclick="clearvalidatefaculty()"></textarea>
                                                <span id="validatefaculty" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Faculty_Name" class="font-weight-bold">Faculty Name</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Faculty_Name" name="Faculty_Name"
                                                placeholder="Please Enter Faculty Name..."
                                                onkeypress="clearvalidatefaculty_name()" onclick="clearvalidatefaculty_name()">
                                                <span id="validatefaculty_name" class="text-danger"></span>
                                            </div>
                                            <!-- <div class="form-group mb-3">
                                                <label for="Faculty_Name" class="font-weight-bold">Faculty Name2</label>
                                                <input type="text" class="form-control" name="Faculty_Name2"
                                                placeholder="Please Enter Faculty Name...">                                                
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Faculty_Name" class="font-weight-bold">Faculty Name3</label>
                                                <input type="text" class="form-control" name="Faculty_Name3"
                                                placeholder="Please Enter Faculty Name...">                                         
                                            </div> -->
                                            <div class="form-group mb-3">
                                                <label for="Faculty_Email" class="font-weight-bold">Faculty Email</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Faculty_Email" name="Faculty_Email"
                                                placeholder="Please Enter Faculty Email..."
                                                onkeypress="clearvalidatefaculty_email()" onclick="clearvalidatefaculty_email()">
                                                <span id="validatefaculty_email" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="Faculty_Mobile_No" class="font-weight-bold">Faculty Mobile Number</label>
                                                <span style="color:red">*</span>
                                                <input type="text" class="form-control" id="Faculty_Mobile_No" name="Faculty_Mobile_No"
                                                placeholder="Please Enter Faculty Mobile Number..."
                                                onkeypress="clearvalidatefaculty_mobile_no()" onclick="clearvalidatefaculty_mobile_no()">
                                                <span id="validatefaculty_mobile_no" class="text-danger"></span>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="PDFFile" class="font-weight-bold">Course Brochure</label>
                                                <input type="file" class="form-control" id="Course_Pdf_File" name="Course_Pdf_File"
                                                  accept="pdf/*">                                       
                                            </div>                                            
                                            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                                        </form>

                                        <?php
                                        ini_set("display_errors", 0);
                                        date_default_timezone_set('Asia/Kolkata');
                                        ini_set('log_errors', 1);
                                        ini_set('error_log', '../error_log.txt');
                                        ini_set('error_reporting', E_WARNING | E_ERROR | E_COMPILE_ERROR | E_CORE_ERROR);

                                        try {
                                            if (isset($_POST['submit'])) {
                                                $title = mysqli_real_escape_string($con, $_POST['Title']);
                                                $course_code = mysqli_real_escape_string($con, $_POST['Course_Code']);
                                                $overview = mysqli_real_escape_string($con, $_POST['Overview']);
                                                $focussed_areas = mysqli_real_escape_string($con, $_POST['Focussed_Areas']);
                                                $key_takeaways = mysqli_real_escape_string($con, $_POST['Key_Takeaways']);
                                                $targeted_audience = mysqli_real_escape_string($con, $_POST['Targeted_Audience']);
                                                $faculty = mysqli_real_escape_string($con, $_POST['Faculty']);
                                                $faculty_name = mysqli_real_escape_string($con, $_POST['Faculty_Name']);
                                                $faculty_email = mysqli_real_escape_string($con, $_POST['Faculty_Email']);
                                                $faculty_mobile_no = mysqli_real_escape_string($con, $_POST['Faculty_Mobile_No']);


                                                $target_dir = "../Course_Brochure/";
                                                $file_name = $_FILES["Course_Pdf_File"]["name"];
                                                $file_tmp = $_FILES["Course_Pdf_File"]["tmp_name"];
                                                $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                                                $file_path = '';

                                                // Check if the file is a PDF and try to upload
                                                if (!empty($file_name) && $file_extension === "pdf") {
                                                    $file_path = $target_dir . basename($file_name);

                                                    if (!move_uploaded_file($file_tmp, $file_path)) {
                                                        $file_path = ''; // Reset file path if upload fails
                                                    }
                                                }

                                                $sql = "INSERT INTO course_information (Title, Course_Code, Overview, Focussed_Areas, Key_Takeaways,
                                                 Targeted_Audience, Faculty, Faculty_Name, Faculty_Email, Faculty_Mobile_No, Course_Pdf_File)
                                                        VALUES ('$title', '$course_code', '$overview', '$focussed_areas', '$key_takeaways',
                                                        '$targeted_audience', '$faculty', '$faculty_name', '$faculty_email', '$faculty_mobile_no', '$file_path')";

                                                $insert = mysqli_query($con, $sql);

                                                if ($insert) {
                                                    ?>
                                                    <script>
                                                        document.getElementById('AlertHeader').innerHTML = 'Course Information Uploaded Successfully';
                                                        document.getElementById('AlertHeader').classList.add('text-success');
                                                        $('#ProceedButton').attr('href', './addcourse_information.php');
                                                        $(document).ready(function(){
                                                            $('#ALertModal').modal('show');
                                                        });
                                                    </script>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <script>
                                                        document.getElementById("AlertHeader").innerHTML = "Something went wrong";
                                                        document.getElementById("AlertHeader").classList.add("text-danger");
                                                        $("#ProceedButton").attr("href", "./addcourse_information.php");
                                                        $(document).ready(function(){
                                                            $('#ALertModal').modal('show');
                                                        });
                                                    </script>
                                                    <?php
                                                }
                                            }
                                        } catch (Exception $e) {
                                            // Catch any exceptions thrown
                                            $errorMessage = "Caught exception: " . $e->getMessage();
                                            error_log($errorMessage . PHP_EOL, 3, "error_log.txt");
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

<script src="./assets/js/addcourse_information.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
