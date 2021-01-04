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
    echo '<h2>Faites vos recherches :</h2>';
    echo'<a href="recherche.php">cliquez ici !</a><br>';
    $hote = 'localhost';
    $login = 'root';
    $pass='';
    $dbport=3307;
    $namedb = 'badoovolat';
    try {
        $connection = new PDO("mysql:host=$hote;port=$dbport;dbname=$namedb", $login, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'success in connecting to database';
        $Sqlcode="INSERT INTO Personne(nom, prenom, ville, email, categorie, type, annonce) VALUES('$nom', '$prenom', '$ville', '$email', '$categorie', '$type', '$annonce')";
        $connection->exec($Sqlcode);
    } catch (PDOException $e) {
        echo 'echec in connection:' . $e->getMessage();
    }
}
?> 
</div>
</div>
</body>
</html>