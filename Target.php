<!DOCTYPE html>
<html>
<head>
    <title>Badoovolat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="header">
    <header>
        <h1><a href="index.php"><img src="logo.png"><br>BADOOVOLAT</a></h1>
    </header>
</div>
<div class="container">
    <div class="target">
<?php
$motif="^[[:alnum:]]+@[[:alpha:]]+\.[[:alpha:]]{2,3}$";
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$ville=$_GET['ville'];
$email=$_GET['email'];
$categorie=$_GET['categorie'];
$type=$_GET['type'];
$annonce=$_GET['annonce'];
if(empty($nom)||empty($prenom)||empty($ville)||empty($email)/*||ereg($motif, $email)==0*/||empty($categorie)||empty($type)||empty($annonce))
{
    echo'<h2>Champs invalides !</h2>Cliquez ici :<a href="ajout.php">Page d\'Inscription</a>';
}
else {
    print("<h2> Vos informations :<br></h2>");
    print("$nom<br>$prenom<br>$ville<br>$email<br>$categorie<br>$type<br>$annonce<br>");
    echo'<br><a href="recherche.php">recherche</a><br>';
}
$hote = 'localhost';
$login = 'root';
$pass='';
$namedb = 'badoovolat';
try {
    $connection = new PDO("mariadb:host=$hote;dbname=$namedb", $login, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'success in connecting to database';
    $Sqlcode="INSERT INTO Personne(nom,prenom,email,categorie,type,annonce) VALUES('$nom','$prenom','$email','$categorie','$type','$annonce')";
    $connection->exec($Sqlcode);
} catch (PDOException $e) {
    echo 'echec in connection:' . $e->getMessage();
}
?> 
</div>
</div>
</body>
</html>