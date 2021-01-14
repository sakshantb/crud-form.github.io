<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <a href="index.php" id="new_record" style="text-decoration:none">click here to add new record</a>
        <table>
           
            <thead>
                <tr><th>id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th colspan="2" style="text-align:center">Action</th>
                </tr>
            </thead>
                        
        <?php 
        
        include "conn.php";  ?>
        <?php

            $sql = "SELECT id, name, address FROM info";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {?>
            <!-- // output data of each row -->
            <?php while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="del_btn" >Delete</a>
                    </td>
                </tr>
                            
            <?php } ?>
            <?php } ?>
            </table>
      <script>
        $('.del_btn').on('click', function() {
        var choice = confirm('Do you really want to delete this record?');
        if(choice === true) {
        return true;
       }
       return false;
       });
    </script>
</body>
</html>


   
    
