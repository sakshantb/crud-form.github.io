<?php include 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Records in Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <form action="insert.php" method="POST">
        Name : <input type="text" id="first" name="name" placeholder="Enter Full Name" Required>
        <br/>
        Address : <input type="text" name="address" placeholder="Enter your address" Required>
        <br/>
       <input type="submit" name="submit" value="Submit">
        
        <a href="table.php" id="checkform" style="text-decoration: none; ">Check Form</a>
    </form>
    
</body>
</html>


