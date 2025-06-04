<?php
session_start();
if(isset($_SESSION['admin_id']))
{
    header('Location:./home.php');
}
include '../includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - AEAMT</title>
    <link rel="icon" href="assets/images/cmti.png" type="image/png" sizes="30x30">

    <link rel="stylesheet" href="./assets/bootstrap-4.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootsrap-5.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <script src="./assets/bootsrap-5.0.0/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <main>

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
            <div class="row">
                <div class="col">
                    <div class="login-box">
                        <div class="login-snip">
                            <h4 class="text-center">Admin login</h4>
                            <form onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="UserName">Username</label>
                                        <input type="text" id="UserName" name="UserName" class="form-control"
                                            onclick="clearvalidateusername()"
                                            onkeypress="clearvalidateusername()"/>
                                        <span class="text-danger" id="validateusername"></span>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="form3Example4">Password</label>
                                        <input type="password" id="Password" name="Password" class="form-control"
                                            onclick="clearvalidatepassword()"
                                            onkeypress="clearvalidatepassword()"/>
                                        <span class="text-danger" id="validatepassword"></span>
                                    </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
                                </form>

                                <?php
                                    if (isset($_POST['submit'])) {
                                        $username = mysqli_real_escape_string($con, $_POST['UserName']);
                                        $password = mysqli_real_escape_string($con, $_POST['Password']);
                                        
                                        $sql = "SELECT admin_id, UserName FROM admin WHERE UserName='$username'
                                                AND Password='$password'";
                                        
                                        $query = mysqli_query($con, $sql) or die(mysqli_error($con));

                                        if (mysqli_num_rows($query)) {
                                            $fetch = mysqli_fetch_array($query);
                                            $_SESSION['admin_id'] = $fetch['admin_id'];
                                            $_SESSION['UserName'] = $fetch['UserName'];

                                            ?>
                                            <script>
                                                document.getElementById("AlertHeader").innerHTML = "Admin Logged in successfully";
                                                document.getElementById("AlertHeader").classList.add("text-success");
                                                $("#ProceedButton").attr("href", "./home.php");
                                                $(document).ready(function(){
                                                    $('#ALertModal').modal('show');
                                                });
                                            </script>
                                            <?php
                                        } else {
                                            ?>
                                            <script>
                                                document.getElementById("AlertHeader").innerHTML = "Invalid login attempt";
                                                document.getElementById("AlertHeader").classList.add("text-danger");
                                                $("#ProceedButton").attr("href", "./index.php");
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

<script src="./assets/js/admin.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>