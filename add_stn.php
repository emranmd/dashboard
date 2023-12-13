
<?php

    $hostname = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "addstudent";

    $data_add = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

    if(isset($_POST['submitbtn'])){

        $stn_name = $_POST['stn_name'];
        $stn_email = $_POST['stn_email'];
        $stn_phone = $_POST['stn_phone'];
        $stn_password = $_POST['password'];

        $query ="INSERT INTO studenttable(name,email,phone,password) VALUES ('$stn_name','$stn_email','$stn_phone','$stn_password')";

        $tabledata = mysqli_query($data_add,$query);
        if($tabledata){
            echo "<script type='text/javascript'>
                alert('data upload success');
            </script>";
        } else{
            echo "arror";
        }

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
            <div class="tittle">
                <h4>Add Student</h4>
                <form action="" method="POST">
                    <div class="formcontainer">
                        <div class="formArea mb-3">
                            <label for="name">User-Name :</label>
                            <input type="text" name="stn_name">
                        </div>
                        <div class="formArea mb-3">
                            <label for="email">Email :</label>
                            <input type="email" name="stn_email">
                        </div>
                        <div class="formArea mb-3">
                            <label for="number">Phone :</label>
                            <input type="number" name="stn_phone">
                        </div>
                        <div class="formArea mb-3">
                            <label for="password">Password :</label>
                            <input type="password" name="password">
                        </div>
                        <div class="btnarea">
                            <input type="submit" name="submitbtn" value="Add Student">
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </section>


  </body>
</html>

