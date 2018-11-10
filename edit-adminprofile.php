<?php  
    session_start();
    include_once("includes/dbconnection.php");  

    if(isset($_POST['update']) && $_POST['fullname'] !=""){
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $contactno = $_POST['contactno'];
        $emailid = $_POST['emailid'];
        $password = $_POST['password'];
        $address  = $_POST['address'];
        $profilepic = $_FILES['profilepic']['name'];

        $query = "UPDATE admin SET name='$fullname', contactno='$contactno',emailid='$emailid',password='$password',address='$address',profilepic='$profilepic' WHERE id ='$id'";

        $upd= mysqli_query($conn,$query);
        if($upd){
            echo "<script>window.location='admin-dashboard.php'</script>";
        }
    }else if(isset($_POST['back'])) {
        echo "<script>window.location='admin-dashboard.php'</script>";
    }

?>

<?php 

    if(isset($_REQUEST['id']) && $_REQUEST['id'] !=''){
        $id = $_REQUEST['id'];
        $query= "SELECT * FROM admin WHERE id='$id'";
        $result= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
    }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <style type="text/css">
    #label{
      position: static;
    }
  </style>
</head>
<div class="w3-container">
    <header>
        <div class="row" style="padding-top: 20px;">
            <div class="col-5">
                <h1 class="h1" id="logo" style="color: #f3bf9f; font-family: 'Permanent Marker', cursive;">Tourist Guide</h1>
            </div>
            <div class="col-6">
                <ul class="nav nav-tabs" style=" border-bottom: 0px; float: right;">
                    <li>
                        <a class="nav-link " href="admin-dashboard.php">Home</a>
                    </li>
                    
                    <?php 
                        if(isset($_SESSION['id']) && $_SESSION['id'] !=""){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <?php } else{?>
                        echo "<script>window.location='adminlogin.php'</script>";
                    <?php }?> 
                </ul>
            </div>
        </div>
    </header>
</div>
    
<body style="background-image:url('images/background/back_final.jpg');" class="text-white">
<!-- background-color: #7bdef2 -->
    <div class="bodycontainer">
        <div class="row" style=" height: 500px;">
            <div class="col-3" style="border-right: 1px solid #ccc;max-width: 20%;">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php 
                    if(isset($_SESSION['id']) && $_SESSION['id'] !=''){ 
                    ?>

                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="admin-dashboard.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

                    <?php } ?>
                </div>
            </div>
            <div class="col-9">
                <div class="row" style="/*background-color: #fff*/;">
                    <h1>Update Profile
                    </h1> 
                </div>
                
                <div class="row">
                    <div class="col-8">
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <table class="table table-striped ">
                            <tr>
                                <th>
                                    Fullname
                                </th>
                                <td>
                                    <input type="text" name="fullname" id="fullname" required autocomplete="off" style="color: rgb(0, 0, 0); font-size:15px;" class="text-white" value="<?php echo $row['name']?>">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Email Address
                                </th>
                                <td>
                                    <input type="email" name="emailid" id="emailid" required autocomplete="off" style="color: rgb(0, 0, 0); font-size:15px;" class="text-white" value="<?php echo $row['emailid']?>" >
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Contact No.
                                </th>
                                <td>
                                    <input type="text" name="contactno" id="contactno" style="color: rgb(0, 0, 0); font-size:15px;" class="text-white" value="<?php echo $row['contactno']?>">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Password
                                </th>
                                <td>
                                    <input type="password" name="password" id="password" required autocomplete="off" style="color: rgb(0, 0, 0); font-size:15px;" class="text-white" value="<?php echo $row['password']?>">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Address
                                </th>
                                <td>
                                    <textarea name="address" class="text-white" id="address" style="color: rgb(0, 0, 0); background: transparent; border-color: rgb(0, 0, 0); width: 80%; height: 40px; font-size:15px;"><?php echo $row['address']?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                   Profile Pic
                                </th>
                                <td>
                                    <input type="file" class="text-white" name="profilepic" id="profilepic" style="line-height: 1.15; " style="color: rgb(0, 0, 0); font-size:15px;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <input type="submit" name="update" class="btn btn-success" value="Update">
                                    <input type="submit" name="back" class="btn btn-danger" value="Cancel">
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<?php
    include_once('includes/footer.php');
  ?>
