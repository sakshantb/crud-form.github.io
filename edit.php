<!DOCTYPE html>
<html>
<head>
    <title>Add Records in Database</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="" method="POST">
    <?php
        include "conn.php";
        // Using database connection file here
        $ids = $_GET['id'];
        $showquery = "select * from info where id=( $ids)";
        $showdata = mysqli_query($db,$showquery);
        $arrdata = mysqli_fetch_assoc( $showdata );

        if(isset($_POST['update']))
        {		
            $idupdate = $_GET['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];

            // $insert = mysqli_query($db,"INSERT INTO `info`(`name`, `address`) VALUES ('$name','$address')");

            $update = mysqli_query($db,"UPDATE info SET id='$idupdate', name='$name',address='$address' WHERE id=$idupdate");


            if(!$update)
            {
                echo mysqli_error();
            }
            else
            {
                ?>
                    <script>
                        alert("Records updated")
                        window.location.replace('table.php');
                    </script>
                <?php
            }
        }

        mysqli_close($db); // Close connection
        
        ?>
        <form action="" method="POST">

            Name : <input type="text" name="name" id="first" value="<?php echo $arrdata['name']; ?>" placeholder="" Required>
            <br/>
            
            Address : <input type="text" name="address" value="<?php echo $arrdata['address']; ?>" placeholder="" Required>
            <br/>
            <input type="submit" name="update" value="update" id="button" >
    
        </form>
         

</body>
</html>


