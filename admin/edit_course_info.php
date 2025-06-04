<?php
session_start();
if(!(isset($_SESSION['admin_id'])))
{
    header('Location:index.php');
}
include '../includes/connection.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $sql = "SELECT * FROM course_information WHERE ID = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $course_info = $result->fetch_assoc();
        $title_value = $course_info['Title'];
        $course_code_value = $course_info['Course_Code'];
        $overview_value = $course_info['Overview'];
        $focussed_areas_value = $course_info['Focussed_Areas'];
        $key_takeaways_value = $course_info['Key_Takeaways'];
        $targeted_audience_value = $course_info['Targeted_Audience'];
        $faculty_value = $course_info['Faculty'];
        $faculty_name_value = $course_info['Faculty_Name'];
        $faculty_email_value = $course_info['Faculty_Email'];
        $faculty_mobile_no_value = $course_info['Faculty_Mobile_No'];
        $pdffiletarget_file = $course_info['Course_Pdf_File'];

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
    <title>Edit Course Information - AEAMT</title>
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
                    <div class="add_info_card shadow-lg border-0 rounded-lg">
                        <div class="add_info_card-header bg-primary text-white">
                            <h3 class="text-center">Edit Course Details</h3>
                        </div>
                        <div class="add_info_card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label for="Title" class="font-weight-bold">Course Title</label>
                                    <textarea type="text" class="form-control" name="Title" rows="2"><?php echo $title_value; ?></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="Course_Code" class="font-weight-bold">Course Code</label>
                                    <input type="text" class="form-control" name="Course_Code" 
                                    value="<?php echo $course_code_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Introduction" class="font-weight-bold">Overview</label>
                                    <textarea type="text" class="form-control" name="Overview" rows="5"><?php echo $overview_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Focussed_Areas" class="font-weight-bold">Focussed Areas</label>
                                    <textarea type="text" class="form-control" name="Focussed_Areas" rows="2"><?php echo $focussed_areas_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Key_Takeaways" class="font-weight-bold">Key Takeaways</label>
                                    <textarea type="text" class="form-control" name="Key_Takeaways" rows="2"><?php echo $key_takeaways_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Targeted_Audience" class="font-weight-bold">Targeted Audience</label>
                                    <textarea type="text" class="form-control" name="Targeted_Audience" rows="2"><?php echo $targeted_audience_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty" class="font-weight-bold">Faculty</label>
                                    <textarea type="text" class="form-control" name="Faculty" rows="2"><?php echo $faculty_value; ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty_Name" class="font-weight-bold">Faculty Name</label>
                                    <input type="text" class="form-control" name="Faculty_Name" 
                                    value="<?php echo $faculty_name_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty_Email" class="font-weight-bold">Faculty Email</label>
                                    <input type="text" class="form-control" name="Faculty_Email" 
                                    value="<?php echo $faculty_email_value; ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Faculty_Mobile_No" class="font-weight-bold">Faculty Mobile No</label>
                                    <input type="text" class="form-control" name="Faculty_Mobile_No" 
                                    value="<?php echo $faculty_mobile_no_value; ?>">
                                </div>


                                <!-- Existing PDF File -->
                                    <div class="form-group mb-3">
                                        <label for="current_pdf" class="font-weight-bold">Current PDF : </label>
                                            <?php
                                            // Check if a PDF file exists
                                            if (!empty($course_info['Course_Pdf_File'])) {
                                                echo '<a href="' . $course_info['Course_Pdf_File'] . '" target="_blank">View PDF</a>';
                                            } else {
                                                echo 'No PDF available';
                                            }
                                            ?>
                                    </div>

                                    <!-- Upload PDF File -->
                                            <div class="form-group mb-3">
                                                <label for="PDFFile" class="font-weight-bold">Upload PDF</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control text-black" id="pdffile" name="pdffile" accept=".pdf"
                                                    value="<?php echo $pdffiletarget_file; ?>">
                                                </div>
                                            </div>

                                <button type="submit" name="update" class="btn btn-primary w-100">Submit</button>
                            </form>

                            <?php
                            include '../includes/connection.php';

                            if (isset($_POST['update'])) 
                            {
                                $title = $_POST['Title'];
                                $course_code = $_POST['Course_Code'];
                                $overview = $_POST['Overview'];
                                $focussed_areas = $_POST['Focussed_Areas'];
                                $key_takeaways = $_POST['Key_Takeaways'];
                                $targeted_audience = $_POST['Targeted_Audience'];
                                $faculty = $_POST['Faculty'];
                                $faculty_name = $_POST['Faculty_Name'];
                                $faculty_email = $_POST['Faculty_Email'];
                                $faculty_mobile_no = $_POST['Faculty_Mobile_No'];

                                $course_pdf_file_update = "";


                                if (!empty($_FILES["pdffile"]["name"]))
                                {
                                  $pdffiletarget_dir = "../Course_Brochure/";
                                  $pdffiletarget_file = $pdffiletarget_dir . basename($_FILES["pdffile"]["name"]);
    
                                  if (move_uploaded_file($_FILES["pdffile"]["tmp_name"], $pdffiletarget_file))
                                   {
                                     $course_pdf_file_update = ", Course_Pdf_File = '$pdffiletarget_file'";
                                   } else {
                                        echo "Sorry, there was an error uploading your PDF file.";
                                exit();
                                          }
                                }
    
                                $update_query = "UPDATE course_information SET Title = '$title', Course_Code = '$course_code', 
                                Overview = '$overview', Focussed_Areas = '$focussed_areas', Key_Takeaways = '$key_takeaways',
                                Targeted_Audience = '$targeted_audience', Faculty = '$faculty', Faculty_Name = '$faculty_name',
                                Faculty_Email = '$faculty_email', Faculty_Mobile_No = '$faculty_mobile_no'
                                 $course_pdf_file_update WHERE ID = '$id'";

                                if (mysqli_query($con, $update_query)) {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Course information updated successfully!";
                                        document.getElementById("AlertHeader").classList.add("text-success");
                                        $("#ProceedButton").attr("href", "./view_course_information.php");
                                        $(document).ready(function(){
                                            $('#ALertModal').modal('show');
                                        });
                                    </script>
                                    <?php
                                } else {
                                    ?>
                                    <script>
                                        document.getElementById("AlertHeader").innerHTML = "Error updating course information";
                                        document.getElementById("AlertHeader").classList.add("text-danger");
                                        $("#ProceedButton").attr("href", "./edit_course_info.php");
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
