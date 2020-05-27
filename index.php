<?php include('scripts/register.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>PHP User Registration Form</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5" style="max-width: 500px">
        <form action="" method="post">
            <h3 class="text-center mb-5">User Registeration Form</h3>

            <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>

            <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control" name="firstname" id="firstName" />

                <?php echo $emptyError1; ?>
            </div>

            <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control" name="lastname" id="lastName" />

                <?php echo $emptyError2; ?>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" />

                <?php echo $emptyError3; ?>
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobilenumber" />

                <?php echo $emptyError4; ?>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" />

                <?php echo $emptyError5; ?>
            </div>

            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">
                Register
            </button>
        </form>
    </div>

</body>

</html>