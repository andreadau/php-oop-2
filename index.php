<?php
// DB 
include "db.php";
// /DB 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-oop-2</title>
</head>
<body>
    <div id="users">
            <?php foreach ($profiles as $profile) {?>
                <div class="user">
                    <p class="userName">Username: <?php echo $profile->username ?></p>
                    <p class="email">Email: <?php echo $profile->email ?></p>
                    <p class="password">Password: <?php echo $profile->password?></p>
                    <p class="name">Nome : <?php echo $profile->name ?></p>
                    <p class="surname">Surname : <?php echo $profile->surname ?></p>
                    <p class="dob">Date of birth: <?php echo $profile->dob ?></p>
                    <p class="genre">Genre: <?php echo $profile->genre ?></p>
                    <br>
                </div>
            <?php }?>
    </div>
</body>
</html>