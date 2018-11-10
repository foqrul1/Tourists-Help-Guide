<?php 

session_start();
include_once("includes/dbconnection.php");

if(!isset($_SESSION['id'])){
    echo "<script>window.location='user_login.php'</script>";
}

 $id = $_SESSION['id'];
$_SESSION['count'] = 1; 
$_SESSION['table_name'] = "question";
$_SESSION['table_no'] = 0;
$_SESSION['sea'] = 0;
$_SESSION['forest'] = 0;
$_SESSION['river'] = 0;
$_SESSION['historical'] = 0;
$_SESSION['recom'] = "empty";
$_SESSION['distance'] = 50;
$_SESSION['rw_count'] = 0;




$query= "SELECT * FROM users WHERE id='$id'";
$result= mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
// print_r($row);
// exit();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
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
                        <a class="nav-link active" href="user_dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Recommendation</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['id']) && $_SESSION['id'] !=""){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <?php } else{?>
                        echo "<script>window.location='user_login.php'</script>";
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
            <div class="col-3" style="border-right: 1px solid #ccc; max-width: 20%;">

                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="user_dashboard.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>

                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php 
                    if(isset($_SESSION['id']) && $_SESSION['id'] !=''){ 
                    ?>

                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="information.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Recommendation</a>

                    <?php } ?>
                </div>
            </div>
            <div class="col-9"> 
                <div class="row" style="/*background-color: #fff*/;">
                    <h1>Welcome <?php echo $_SESSION['fullname']?></h1> 
                </div>
                <div class="row">
                    <div class="col-8">
                        <table class="table table-striped ">
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['name'];?></td>
                            </tr>
                            <tr>
                                <th>Email Id</th>
                                <td><?php echo $row['emailid'];?></td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td><?php echo $row['contactno'];?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo $row['address'];?></td>
                            </tr>
                            <tr>
                                <th>Date Of Join</th>
                                <td><?php echo $row['created_date'];?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php echo $row['status'];?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <a href="edit_userprofile.php?id=<?php echo $row['id']?>" class="btn btn-info">Edit Profile</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-4" style="text-align: right;">
                        <img src="profilepics/<?php echo $row['profilepic']?>" height='200' width='200'>
                    </div>

                </div>

            </div>
        </div>

    </div>
</body>


<?php
include_once('includes/footer.php')
?>