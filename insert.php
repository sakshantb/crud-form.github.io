<?php

include "conn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $address = $_POST['address'];

    $insert = mysqli_query($db,"INSERT INTO `info`(`name`, `address`) VALUES ('$name','$address')");

    if(!$insert)
    {
        echo mysqli_error();
    }  ?>
    <script>
        alert("Records updated")
        window.location.replace('index.php');
    </script>
    <?php
}
mysqli_close($db); // Close connection
?>
<?php

?>

