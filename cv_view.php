<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $education = $_POST['education'];
    $birht = $_POST['birht'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $experince = $_POST['experince'];
    echo'<section class="container">';
    echo"<label>Name : {$name}</label>";
    echo "<br><br>";
    echo"<label>Education : {$education}</label>";
    echo "<br><br>";
    echo"<label>Birth Date : {$birht}</label>";
    echo "<br><br>";
    if(!empty($gender)){

    echo"<label>Gender : </label>" . $gender;
    echo "<br><br>";
    }

    
    echo"<label>Phone : {$phone}</label>";
    echo "<br><br>";
    echo"<label>Experince : {$experince}</label>";
    echo "<br><br>";
    echo'</section>';  


    ?>
</body>
</html>
