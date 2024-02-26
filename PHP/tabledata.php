<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Insert an Image into the databse using PHP</h1>
    
        <form action="" method="post" enctype="multipart/form-data">
            <label>Name of Planet/star</label><br>
            <input type="text" name="name"><br>
            
            <label>Choose an Image</label><br>
            <input type="file" name="image" id="image"><br>
            
            <label>Write Description</label><br>
            <input type="text" name="desc"><br>
            
            <label>Choose an Image</label><br>
            <input type="submit" name="insert" value="insert"><br>
        </form>
    </center>
</body>
</html>

<?php
    $conn= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($conn,"displayplanet");

    if(isset($_POST['']))
?>