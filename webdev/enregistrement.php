<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enregistrement</title>
</head>
<body>
    <form action="cible.php" method="post">
    <p>
        <label for="html">HTML:</label>
        <select name="html" id="html"> 
            <option value="html">niveau</option>
            <option value="-1">-1</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        </p>

        <p>
            <label for="cgi">CGI:</label>
            <select name="cgi" id="cgi"> 
                <option value="cgi">niveau</option>
                <option value="-1">-1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>

        <p>
            <label for="js">JS:</label>
            <select name="js" id="js"> 
                <option value="js">niveau</option>
                <option value="-1">-1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>

        <p>
            <label for="ajax">AJAX:</label>
            <select name="ajax" id="ajax"> 
                <option value="ajax">niveau</option>
                <option value="-1">-1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>   
        <p>
            <label for="php">PHP:</label>
            <select name="php" id="php"> 
                <option value="php">niveau</option>
                <option value="-1">-1</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>

        
        <p><input type="submit" name="submit" VALUE="VALIDER"></p>

    <?php
        
        include_once"./cnx.php";
        if(isset($_POST['submit'])){
            $req = $bdd->prepare("INSERT INTO developpeurs (`nom`,`prenom`,`email`,`password`) VALUES (:nom,:prenom,:email,:password)");
            $req->bindParam(':nom',$_POST['nom'],PDO::PARAM_STR);
            $req->bindParam(':prenom',$_POST['prenom'],PDO::PARAM_STR);
            $req->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
            $req->bindParam(':password',$_POST['password'],PDO::PARAM_STR);
            if($req ->execute()){
                echo "Devlopper added successfully";
            }else{
                echo "error";
            }
        // $req = $bdd->prepare("INSERT INTO technos(html,cgi,js,ajax,php) VALUES (:html,:cgi,:js,:ajax,:php)");
        // $req ->execute(array(
        //         'html' =>$_POST['html'],
        //         'cgi' =>$_POST['cgi'],
        //         'js' =>$_POST['js'],
        //         'ajax' =>$_POST['ajax'],
        //         'php' =>$_POST['php']
        // ));  
    }
    ?>
    
    
    
    </form>
</body>
</html>