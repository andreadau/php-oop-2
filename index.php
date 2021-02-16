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
            <?php foreach ($users as $user) {?>
                <div class="user">
                    <p class="name">Nome : <?php echo $user->name ?></p>
                    <p class="surname">Surname : <?php echo $user->surname ?></p>
                    <p class="userName">Username: <?php echo $user->username ?></p>
                    <p class="email">Email: <?php echo $user->email ?></p>
                    <p class="password">Password: <?php echo $user->password?></p>
                    <br>
                </div>
            <?php }?>
    </div>
</body>
</html>