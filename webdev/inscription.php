<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>

          <form action="enregistrement.php" method="post">
               <p>nom:<input type="text" required name="nom"></p>
               <p>prénom:<input type="text" required name="prenom"></p>
               <p>email:<input type="email" required name="email"></p>
               <p>mot de passe:<input type="password" required name="password"></p>
               <p>confirme mot de passe:<input type="password" required ></p>
               <p><input type="submit" name="submit" value="VALIDER"></p>          
          </form>

    <?php
    include_once"./cnx.php";
    // if(isset($_POST['submit'])){
    //     $req = $bdd->prepare("INSERT INTO developpeurs (`nom`,`prenom`,`email`,`password`) VALUES (:nom,:prenom,:email,:password)");
    //     $req->bindParam(':nom',$_POST['nom'],PDO::PARAM_STR);
    //     $req->bindParam(':prenom',$_POST['prenom'],PDO::PARAM_STR);
    //     $req->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
    //     $req->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
    //     if($req ->execute()){
    //         echo "Devlopper added successfully";
    //     }else{
    //         echo "error";
    //     }
        // $req ->execute(array(
        //         'nom'=>$_POST['nom'],
        //         'prenom'=>$_POST['prenom'],
        //         'email'=>$_POST['email'],
        //         'password1'=>$_POST['password']

        // ));
    // }
    
    
    ?>
</body>
</html>













