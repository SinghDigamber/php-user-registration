<?php
   
    // Database connection
    include('config/db.php');
    
    // Error & success messages
    global $success_msg, $email_exist, $emptyError1, $emptyError2, $emptyError3, $emptyError4, $emptyError5;
    

    if(isset($_POST["submit"])) {
        $firstname     = $_POST["firstname"];
        $lastname      = $_POST["lastname"];
        $email         = $_POST["email"];
        $mobile        = $_POST["mobile"];
        $password      = $_POST["password"];

        // verify if email exists
        $emailCheck = $connection->query( "SELECT * FROM users WHERE email = '{$email}' ");
        $rowCount = $emailCheck->fetchColumn();

        // PHP validation
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile) && !empty($password)){
            
            // check if user email already exist
            if($rowCount > 0) {
                $email_exist = '
                    <div class="alert alert-danger" role="alert">
                        User with email already exist!
                    </div>
                ';
            } else {

            // Password hash
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = $connection->query("INSERT INTO users (firstname, lastname, email, mobile, password, date_time) 
            VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$mobile}', '{$password_hash}', now())");
            
                if(!$sql){
                    die("MySQL query failed!" . mysqli_error($connection));
                } else {
                    $success_msg = '<div class="alert alert-success">
                        User registered successfully!
                </div>';
                }
            }
        } else {
            if(empty($firstname)){
                $emptyError1 = '<div class="alert alert-danger">
                    First name is required.
                </div>';
            }
            if(empty($lastname)){
                $emptyError2 = '<div class="alert alert-danger">
                    Last name is required.
                </div>';
            }
            if(empty($email)){
                $emptyError3 = '<div class="alert alert-danger">
                    Email is required.
                </div>';
            }
            if(empty($mobile)){
                $emptyError4 = '<div class="alert alert-danger">
                    Mobile number is required.
                </div>';
            }
            if(empty($password)){
                $emptyError5 = '<div class="alert alert-danger">
                    Password is required.
                </div>';
            }            
        }
    }
?>