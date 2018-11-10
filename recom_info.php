<?php 

session_start();
include_once("includes/dbconnection.php");

if(!isset($_SESSION['id'])){
    echo "<script>window.location='user_login.php'</script>";
}

$id = $_SESSION['id'];


//if (isset($_POST['submit'])) {
    $place = $_POST['place'];
    $sn = $_POST['SL'];
    $img1 = "images/places/".$_POST['img1'];
    $img2 = "images/places/".$_POST['img2'];
//    echo "img1: ".$img1."<br>";
//    echo "img2: ".$img2."<br>";
//    echo "Place: ".$place."<br>";
//    echo "SL: ".$sn."<br>";
//}


?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $place ?></title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker" >
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  
</head>

<div class="w3-container text-white">
  <header>
    <div class="row" style="padding-top: 20px;">
      <div class="col-5">
        <h1 class="h1" id="logo" style="color: #f3bf9f; font-family: 'Permanent Marker', cursive;">Tourist Guide</h1>
      </div>
      <div class="col-6">
        <ul class="nav nav-tabs" style="color: #000000; border-bottom: 0px; float: right;">
          <li class="nav-item">
            <a class="nav-link active" href="user_dashboard.php">Home</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link text-secondary" href="information.php">Recommendation</a>
          </li>
          <?php 
            if(isset($_SESSION['id']) && $_SESSION['id'] !=""){
          ?>
            <li class="nav-item"><a class="nav-link text-secondary" href="logout.php">Log out</a></li>
          <?php } else{?>
            echo "<script>window.location='user_login.php'</script>";
          <?php }?>
          
        </ul>
      </div>
    </div>
  </header>
</div>

<body style="background-image:url('images/background/back_final.jpg');" class="text-white">
    <div class="bodycontainer">
        <div class="row" style="">
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
                <h3 class="text-uppercase font-weight-bold">
                <strong>
                    <?php echo $place; ?>
                </strong>
            </h3>
            <?php
                if($img1!="") echo "<div class=''><img src='".$img1."' alt='".$place."' width=70% height=70%>";
                if($img2!="") echo "<div class=''><img src='".$img2."' alt='".$place."' width=70% height=70%></div>";
            ?>
            </div>
        </div>
    </div>
</body>

<?php
    include_once('includes/footer.php');
?>

