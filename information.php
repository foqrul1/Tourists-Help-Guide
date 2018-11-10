<?php 

session_start();

if(!isset($_SESSION['id'])){
    echo "<script>window.location='user_login.php'</script>";
}

$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Questionnaire</title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker" >
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
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="logout.php">Log out</a>
                    </li>
                    <?php } else{?>
                        echo "<script>window.location='user_login.php'</script>";
                    <?php }?>
                </ul>
            </div>
        </div>
    </header>
</div>


<?php
    include_once('includes/dbconnection.php');
    $tables = array("question","for_forest","for_hp","for_river","for_sea");
    
    if(isset($_POST['reset'])) {
        $_SESSION['count'] = 1;
        $_SESSION['forest'] = 0;
        $_SESSION['historical'] = 0;
        $_SESSION['river'] = 0;
        $_SESSION['sea'] = 0;
        $_SESSION['table_no'] = 0;
        $_SESSION['recom'] = "empty";
    }
    
    if (isset($_POST['question'])) {
        $ans = $_POST['answer'];
        $qtype = $_POST['type'];
        //echo "answer: ".$ans."<br>";
        //echo "type: ".$qtype."<br>";
        
        if($ans == "Forest"){//} || ($ans=="Yes" && $qtype==1)) {
            $_SESSION['table_no'] = 1;
            $_SESSION['count'] = 1;
            $_SESSION['forest'] = 1;
        }else if($ans == "Historical"){//} || ($ans=="Yes" && $qtype==2)) {
            $_SESSION['table_no'] = 2;
            $_SESSION['count'] = 1;
            $_SESSION['historical'] = 1;
        }else if($ans == "River"){//} || ($ans=="Yes" && $qtype==3)) {
            $_SESSION['table_no'] = 3;
            $_SESSION['count'] = 1;
            $_SESSION['river'] = 1;
        }else if($ans == "Sea"){//} || ($ans=="Yes" && $qtype==4)) {
            $_SESSION['table_no'] = 4;
            $_SESSION['count'] = 1;
            $_SESSION['sea'] = 1;
        }else if($ans=="No" && $qtype==1) {
            $_SESSION['forest'] = 0;
        }else if($ans=="No" && $qtype==2) {
            $_SESSION['historical'] = 0;
        }else if($ans=="No" && $qtype==3) {
            $_SESSION['river'] = 0;
        }else if($ans=="No" && $qtype==4) {
            $_SESSION['sea'] = 0;
        }else if($ans=="Yes" && $qtype==1) {
            $_SESSION['forest'] = 1;
        }else if($ans=="Yes" && $qtype==2) {
            $_SESSION['historical'] = 1;
        }else if($ans=="Yes" && $qtype==3) {
            $_SESSION['river'] = 1;
        }else if($ans=="Yes" && $qtype==4) {
            $_SESSION['sea'] = 1;
        }
        
        if($_SESSION['table_no']==0) {
            if($ans=="< 50km") {
                $_SESSION['distance'] = 50;
            }else if($ans=="> 100km") {
                $_SESSION['distance'] = 199;
            }else if($ans=="> 200km") {
                $_SESSION['distance'] = 399;
            }else if($ans=="> 400km") {
                $_SESSION['distance'] = 1000;
            }
        }
    }
        
//    echo "forest: ".$_SESSION['forest']."<br>";
//    echo "historical: ".$_SESSION['historical']."<br>";
//    echo "river: ".$_SESSION['river']."<br>";
//    echo "sea: ".$_SESSION['sea']."<br>";
//    echo "recommendation: ".$_SESSION['recom']."<br>";
    
    
    
    
    $table_no = $_SESSION['table_no'];
    //echo "count: ".$_SESSION['count'];
    $count = $_SESSION['count'];
    
    
    if($_SESSION['forest']==1 && $_SESSION['historical']==0 && $_SESSION['river']==0 && $_SESSION['sea']==0) {
//        echo "forest";
        $_SESSION['recom'] = "forest";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==1 && $_SESSION['river']==0 && $_SESSION['sea']==0) {
//        echo "historical";
        $_SESSION['recom'] = "historical";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==0 && $_SESSION['river']==1 && $_SESSION['sea']==0) {
//        echo "river";
        $_SESSION['recom'] = "river";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==0 && $_SESSION['river']==0 && $_SESSION['sea']==1) {
//        echo "sea";
        $_SESSION['recom'] = "sea";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==0 && $_SESSION['river']==0 && $_SESSION['sea']==1) {
//        echo "forest sea";
        $_SESSION['recom'] = "sea_forest";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==0 && $_SESSION['river']==1 && $_SESSION['sea']==1) {
//        echo "river sea";
        $_SESSION['recom'] = "sea_river";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==1 && $_SESSION['river']==0 && $_SESSION['sea']==1) {
//        echo "historical sea";
        $_SESSION['recom'] = "sea_historical";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==0 && $_SESSION['river']==1 && $_SESSION['sea']==0) {
//        echo "forest river";
        $_SESSION['recom'] = "forest_river";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==1 && $_SESSION['river']==0 && $_SESSION['sea']==0) {
//        echo "forest historical";
        $_SESSION['recom'] = "forest_historical";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==1 && $_SESSION['river']==1 && $_SESSION['sea']==0) {
//        echo "historical river";
        $_SESSION['recom'] = "historical_river";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==0 && $_SESSION['river']==1 && $_SESSION['sea']==1) {
//        echo "forest river sea";
        $_SESSION['recom'] = "sea_forest_river";
        
    }else if($_SESSION['forest']==0 && $_SESSION['historical']==1 && $_SESSION['river']==1 && $_SESSION['sea']==1) {
//        echo "historical river sea";
        $_SESSION['recom'] = "sea_river_historical";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==1 && $_SESSION['river']==1 && $_SESSION['sea']==0) {
//        echo "forest historical river";
        $_SESSION['recom'] = "forest_river_historical";
        
    }else if($_SESSION['forest']==1 && $_SESSION['historical']==1 && $_SESSION['river']==0 && $_SESSION['sea']==1) {
//        echo "forest historical sea";
        $_SESSION['recom'] = "sea_forest_historical";
        
    }
    
    
    $query = "SELECT COUNT(*) AS cp FROM ".$tables[$table_no];
    $rc_res = mysqli_query($conn, $query);
    $rc_res = mysqli_fetch_assoc($rc_res);
    //echo "row count: ".$rc_res['cp'];
//    echo "table no: ".$table_no;
?>
    
<body style="background-image:url('images/background/back_final.jpg');" class="text-white">
    <div class="bodycontainer">
        <div class="row">
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
                <div class="row">
                    <div class="col-8 table-wrapper-scroll-y">
                        <table class='table table-bordered table-striped'>
                            <tbody>
                            <?php

                            $query = "SELECT * FROM ".$tables[$table_no]." WHERE SL=".$count;
                            $results = mysqli_query($conn, $query);
                            $result = mysqli_fetch_assoc($results);


                            ?>
                            <tr>
                                <th>
                                    Questions:
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                //                    $result = mysqli_fetch_assoc($results);

                                    if($_SESSION['count'] <= $rc_res['cp']) {
                                        $_SESSION['count'] = $count+1;
                                        echo $result['ques'];
                                    }else if($_SESSION['count'] > $rc_res['cp']) {
                                        echo "Empty";
                                        $result = "";
                                    }
                //                    echo $result['ques'];
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form method="post">
                                        <?php
                                        if($result!="") {
                                            echo "<input type='hidden' id='type' name='type' value='".$result['type']."'>";

                                            if($result['ans1']!=""){
                                                echo "<input type='radio' name='answer' value='".$result['ans1']."' checked>"." ".$result['ans1']."<br>";
                    //                            echo "<input type='hidden' name='ans_type' value=1>";
                                            }
                                            if($result['ans2']!=""){
                                                echo "<input type='radio' name='answer' value='".$result['ans2']."'>"." ".$result['ans2']."<br>";
                    //                            echo "<input type='hidden' name='ans_type' value=2>";
                                            }
                                            if($result['ans3']!="") {
                                                echo "<input type='radio' name='answer' value='".$result['ans3']."'>"." ".$result['ans3']."<br>";
                    //                            echo "<input type='hidden' name='ans_type' value=3>";
                                            }
                                            if($result['ans4']!="") {
                                                echo "<input type='radio' name='answer' value='".$result['ans4']."'>"." ".$result['ans4']."<br><br>";
                    //                            echo "<input type='hidden' name='ans_type' value=4>";
                                            }
                                            echo "<input class='btn btn-primary' type='submit' value='Submit' name='question'>";
                                            //echo "<input type='submit' value='Reset' name='reset' class='btn btn-danger'>";
                                        }
                                        echo "<span align='right'><input type='submit' value='Reset' name='reset' class='btn btn-danger'></span>";
                                        ?>

                                    </form> 
                                </td>
                            </tr>
                            </tbody>
                          </table>

                          <table class='table table-bordered table-striped'>
                            <tbody>
                            <tr>
                                <th>Recommendations:</th>
                            </tr>
                            <?php
                            $recom_table = $_SESSION['recom'];
                            $query = "SELECT * FROM ".$recom_table;//." WHERE `distance` < `".$_SESSION['distance']."`";
                            $results = mysqli_query($conn, $query);

                            foreach($results as $result) {
                            echo "<tr>";
                                echo "<td>";
                                    //echo "<a href='recom_info.php' class='text-primary'>".$result['places']."</a>";

                                    echo "<form method='post' action='recom_info.php'>";
                                    echo "<input type='hidden' value='".$recom_table."' name='recom_table'>";
                                    echo "<input type='hidden' value='".$result['SL']."' name='SL'>";
                                    echo "<input type='hidden' value='".$result['img1']."' name='img1'>";
                                    echo "<input type='hidden' value='".$result['img2']."' name='img2'>";
                                    echo "<input type='hidden' value='".$result['places']."' name='place'>";
                                    echo "<input type='submit' value='".$result['places']."' name='submit' class='btn btn-primary'>";
                                    echo "</form>";

                                echo "</td>";
                            echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
    include_once('includes/footer.php');
?>

