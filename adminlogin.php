
<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    </head>


    <div class="w3-container">
        <header>
            <div class="row" style="padding-top: 20px;">
                <div class="col-5">
                    <h1 class="h1" id="logo" style="color: #f3bf9f; font-family: 'Permanent Marker', cursive;">Tourist Guide</h1>
                </div>
                <div class="col-6">
                    <ul class="nav nav-tabs" style=" border-bottom: 0px; float: right;">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="user_login.php">Log In</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="adminlogin.php">Admin Log In</a>
                        </li>    
                    </ul>
                </div>
            </div>
        </header>
    </div>

    <?php 
        include_once("includes/dbconnection.php");

        $mess ='';

        if(isset($_POST['Login'])){

            $emailid  = mysqli_escape_string($conn,$_POST['emailid']);
            $password = mysqli_escape_string($conn,$_POST['password']);

            $query = "SELECT id,name,emailid FROM admin WHERE emailid='$emailid' AND password ='$password'";

            $result = mysqli_query($conn,$query);

            $row = mysqli_fetch_assoc($result); 

            $recod = mysqli_num_rows($result);

            if($recod > 0){
                $_SESSION['fullname']    = $row['name'];
                $_SESSION['emailid'] = $row['emailid'];
                $_SESSION['id']      = $row['id'];
                $_SESSION['admin'] = "yes";
                echo "<script>window.location='admin-dashboard.php'</script>";
            } else {
                $mess = "Wrong email or password !";
            }
        }
    ?> 

<body style="background-image:url('images/background/back_final.jpg');" class="text-white">
    <div class="form" style="">

        <div class="login">   
            <h1 class="text-white" style="font-family: 'Permanent Marker', cursive;color: rgb(0, 0, 0)">Welcome Back!</h1>

            <p class="text-white" style="color: red;"><?php echo $mess;?></p>

            <form action="" method="post">

                <div class="field-wrap">
                    <input class="text-white" type="email" name="emailid" id="emailid" placeholder="Email Id" required autocomplete="off" style="color: rgb(0, 0, 0)">
                </div>

                <div class="field-wrap">
                    <input class="text-white" type="password" name="password" id="password" placeholder="Password" required autocomplete="off" style="color: rgb(0, 0, 0)">
                </div>          
                <button class="button button-block" type="submit" name="Login" style="font-family: 'Permanent Marker', cursive;" >Log In</button>

            </form>

        </div><!-- login -->

    </div> <!-- /form -->
</body>


    <?php
    include_once('includes/footer.php')
    ?>
    
</html>
