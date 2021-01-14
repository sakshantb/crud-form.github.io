<?php 
 include "conn.php";
 
        $id = $_GET['id'];

        $delete = mysqli_query($db,"DELETE FROM `info` WHERE  id= $id");

        if(!$delete)
        {
            echo mysqli_error();
        }
        else
            {
                ?>
                <script>
                    alert("Records deleted")
                    window.location.replace('table.php');
                </script>
                <?php
            }
        mysqli_close($db); // Close connection
?>


