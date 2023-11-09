<?php
include 'dbconnect.php';
$showalert = false;
$showerr = false;
//$exist = false ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $contact = $_POST['contact'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM project WHERE uname = '$uname'";
    $result = mysqli_query($conn, $existsql);
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        //$exist = true ;
        $showerr = "User already exist";
    } else {
        if ($password == $cpassword) {
            //$hash = password_hash($password, PASSWORD_DEFAULT);
            //$sql = "INSERT INTO `project` (`username`, `password`, `dt`) VALUES ('$uname', '$password', current_timestamp());";
            $sql = "INSERT INTO project (`fname`, `contact`, `uname`, `email`, `password`) VALUES ('$fname', '$contact', '$uname', '$email', '$password');";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showalert = true;
            }
        } else {
            $showerr = "Password dose not matches!!!";
        }
    }
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>sign up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pages/style.css">
</head>

<body>
    <div class="center">
        <?php
        if ($showalert) {

            echo '
            <br><br><div class="alert col-md-12 alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have sucessfully created an account. Click here to login <a href="login.php">Login</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
        }
        if ($showerr) {

            echo '<br><br><div class="alert col-md-12 alert-danger alert-dismissible fade show" role="alert">
        <strong>Try again</strong> ' .  $showerr .
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
        }
        ?>
        <h1>SignUP</h1>
        <form method="post" action="signup.php">
            <div class="txt_field">
                <input type="text" name="fname" required>
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="number" name="contact" required>
                <span></span>
                <label>Contact Number</label>
            </div>
            <div class="txt_field">
                <input type="text" name="uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" name="cpassword" required>
                <span></span>
                <label>Confirm-Password</label>
            </div>
            
            <input type="submit" value="Signup">
            <div class="signup_link">
                Already a member? <a href="login.php">login</a>
                <span></span>
            </div>

        </form>
    </div>


    <div>	
    
     <button class="button button-28" style="height:10px;width:80px; padding: none;" ><a href="home1.php"> <center> HOME </center></a></button>
        
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>