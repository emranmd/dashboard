
<?php

    $hostname = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "teacheradd";

    $data_add = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);
    
    if(isset($_POST['thr_add'])){
        $name = $_POST['thr_name'];
        $description = $_POST['thr_description'];
        $t_image = $_FILES['thr_img']['name'];
        $tmp_name = $_FILES['thr_img']['tmp_name'];
        $t_imgbox = "./upload/".$t_image;
        $t_flie = "upload/".$t_image;
        move_uploaded_file($_FILES['thr_img']['tmp_name'],$t_imgbox);

        $sql = "INSERT INTO teachertable(t_name,description,t_img) VALUE ('$name','$description','$t_flie')";

        $result = mysqli_query($data_add,$sql);
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

    <?php 
        include "dashboardcss.php";
    ?>
  </head>
  <body>
    
    <?php 
        include "dashboard.php";
    ?>
    
    <section class="contentArea">
    <center>
        <h1>Add Teacher</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="add_thr_formContainer">
                <div class="formarea mb-3">
                    <label for="name">Teacher name :</label>
                    <input type="text" name="thr_name">
                </div>
                <div class="formarea mb-3">
                    <label for="des">Description :</label>
                    <input type="text" name="thr_description">
                </div>
                <div class="formarea mb-3">
                    <label for="img">Image :</label>
                    <input type="file" name="thr_img">
                </div>
                <div class="formbtn mt-2">
                    <input type="submit" value="Add Teacher" name="thr_add" clas="btn btn-warning">
                </div>
            </div><!-- add_thr_formContainer -->
        </form>
    </center>
    </section>


  </body>
</html>

