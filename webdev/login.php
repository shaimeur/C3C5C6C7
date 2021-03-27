<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>

    <form action="enregistrement.php" method="post">
    
        <p>email:<input type="email" required name="email"></p>
        <p>mot de passe:<input type="password" required name="password"></p>
        <p><input type="submit" VALUE="VALIDER"></p>
    </form>

    <?php
    include_once"./cnx.php";


    
    
    ?>
</body>
</html>