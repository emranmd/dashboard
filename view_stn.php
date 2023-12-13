
<?php

    $hostname = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dashboardtable";

    $data_add = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);
    $sql = "SELECT * from admissiontable";
    $result = mysqli_query($data_add,$sql);

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
      <p>Admission</p>
      <table>
        <thead class="headerStyle">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody class="bodyStyle">

        <?php
            while($info=$result->fetch_assoc()){

        ?>

            <tr>
                <td><?php echo "{$info['id']}"; ?></td>
                <td><?php echo "{$info['stn_name']}"; ?></td>
                <td><?php echo "{$info['email']}"; ?></td>
                <td><?php echo "{$info['phone']}"; ?></td>
                <td><?php echo "{$info['message']}"; ?></td>
            </tr>

        <?php } ?>

        </tbody>

      </table>
    </center>
    </section>


  </body>
</html>

