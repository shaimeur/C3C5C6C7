<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cible</title>
</head>
<body>
<?php
        
        include_once"./cnx.php";
        if(isset($_POST['submit'])){
            $req = $bdd->prepare("INSERT INTO technos(html,cgi,js,ajax,php) VALUES (:html,:cgi,:js,:ajax,:php)");
            $req->bindParam(':html',$_POST['html'],PDO::PARAM_STR);
            $req->bindParam(':cgi',$_POST['cgi'],PDO::PARAM_STR);
            $req->bindParam(':js',$_POST['js'],PDO::PARAM_STR);
            $req->bindParam(':ajax',$_POST['ajax'],PDO::PARAM_STR);
            $req->bindParam(':php',$_POST['php'],PDO::PARAM_STR);

            if($req ->execute()){
                echo "Skills added successfully";
            }else{
                echo "error";
            }
    }else{
        echo "error";
    }
    ?>    

</body>
</html>