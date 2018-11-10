<?php
session_start();

include_once("includes/dbconnection.php");

  if(isset($_REQUEST['id']) && $_REQUEST['act'] =="del"){
    $id= $_REQUEST['id'];
    $query = "DELETE FROM users WHERE id =".$id;
    $delstudent= mysqli_query($conn,$query);
    if($delstudent){
        echo "<script>window.location='user_list.php'</script>";
    }

    
  }

  if(isset($_REQUEST['sid']) && $_REQUEST['act'] !=""){
    $id= $_REQUEST['sid'];
    $sts = $_REQUEST['act'];
    if($sts =='Inactive'){
      $sts ='Active';
    } else{
       $sts ='Inactive';
    }

    $query = "UPDATE users SET status='$sts' WHERE id =".$id;
    $delstudent= mysqli_query($conn,$query);
    if($delstudent){
        echo "<script>window.location='user_list.php'</script>";
    }

    
  }



?>




<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
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
            <a class="nav-link" href="admin-dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="user_list.php">User List</a>
          </li>
          
          <?php 
      if(isset($_SESSION['id']) && $_SESSION['id'] !=""){
      ?>
      <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
      <?php } else{?>
    <li class="nav-item"><a class="nav-link" href="adminlogin.php">Admin Log In</a>
      </li>
      <?php }?>
          
        </ul>
      </div>
    </div>
  </header>
</div>



<body style="background-image:url('images/background/back_final.jpg');" class="text-white">
  <!-- background-color: #7bdef2 -->
   <div class="bodycontainer">
    <div class="row" style=" height: auto;">
    <div class="col-3" style="border-right: 1px solid #ccc; max-width: 20%;">

      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="admin-dashboard.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link active" id="v-pills-messages-tab" data-toggle="pill" href="user_list.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">User List</a>
      </div>
    </div>

<div class="col-9 text-white">
    <h2 class="text-white">User List</h2>   
    <div class="row">
    <div class="col-12" >
      <table class="table table-bordered text-dark" style="border-color: #000;background-color: #f8f9fa;">
        <thead>
        <tr>
          <th>S.NO.</th>
          <th>Full Name</th>
          <th>Contact No</th>
          <th>Email Id</th>            
          <th>Image</th>
          <th>Status</th>
          <th colspan="2">Action</th>         
          
        </tr>
        </thead>
        <tbody>
          <?php 
          $query = "SELECT * FROM users ORDER BY created_date DESC";
          $result = mysqli_query($conn,$query);
          $sn=1;
          while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['contactno']; ?></td>     
            <td><?php echo $row['emailid']; ?></td>
            
            <td><img src="profilepics/<?php echo $row['profilepic']?>" height='100' width='100'></td>  
            <td><a class="btn btn-info" href="user_list.php?act=<?php echo $row['status']; ?>&sid=<?php echo $row['id']?>"><?php echo $row['status']; ?></a></td>      
            
            <td><a class="btn btn-danger" href="user_list.php?act=del&id=<?php echo $row['id']?>">Delete</a></td>
          </tr>

      <?php 
        $sn++ ;
      } ?>


        </tbody>
      </table>
    </div>
  </div>
</div>
  
</div>
  

</div>
    
     
   </div>


<?php
include_once('includes/footer.php')
?>