
<?php

    $hostname = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "schooltable";

    $data_add = mysqli_connect($hostname,$dbuser,$dbpass,$dbname);

    $query = "SELECT * FROM teachertadd";
    $result = mysqli_query($data_add,$query);

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
                <h4>View Teacher</h4>
                <table>
        <thead class="headerStyle">
            <tr>
                <th>ID</th>
                <th>Teacher Name</th>
                <th>Teacher About</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="bodyStyle">
        <?php
            while($all=$result->fetch_assoc())
            {
        ?>

            <tr>
                <td><?php echo "{$all['id']}"?></td>
                <td><?php echo "{$all['t_name']}" ?></td>
                <td><?php echo "{$all['t_aboute']}" ?></td>
                <td><?php echo "{$all['t_email']}" ?></td>
            </tr>

        <?php } ?>

        </tbody>

      </table>
            </div>
        </center>
    </section>


  </body>
</html>

