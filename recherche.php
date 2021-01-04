<!DOCTYPE html>
<html>
<head>
    <title>
        Badoovolat
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="header">
    <header>
        <h1><a href="index.php"><img src="logo.png"><br>BADOOVOLAT</a></h1>
    </header>
</div>
<?php
    $login_email=trim($_POST['email']);
    if(!empty($login_email)){
        $hote = 'localhost';
        $login = 'root';
        $pass='';
        $dbport=3307;
        $namedb = 'badoovolat';
        try {
            $connection = new PDO("mysql:host=$hote;port=$dbport;dbname=$namedb", $login, $pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $query=$connection->prepare("SELECT * FROM personne WHERE email='$login_email'");
            $query->execute();
            $count=$query->rowCount();
            if($count==1){
                echo"<p class='connection'>Connecté</p>";
            }
            else{
                echo"<p class='connection'>erreur de connection</p>";
            }
        }catch (PDOException $e) {
            echo 'echec in connection:' . $e->getMessage();
        }
    }
    else{
        echo"<p class='connection'>login vide veuillez vous reconnecté</p>";
    }
?>
<div class="container">
    <form action="Result.php">
    <label for="categorie">Quel catégorie cherchez vous ?</label><br>
<select id="categorie" name="categorie">
    <option value="">Choisir une option</option>
    <option value="Garde">Garde</option>
    <option value="Entretien">Entretien</option>
    <option value="Travaux">Travaux</option>
    <option value="Accompagnement">Accompagnement</option>
    <option value="Menage">Ménage</option>
    <option value="Caritatif">Caritatif</option>
    <option value="Festival">festival</option>
    <option value="EchangeDeProcedes">Échange de procédés</option>
    <option value="Covoiturage">Covoiturage</option>
    <option value="Troc">Troc</option>
</select><br/><br>
<label for="type">Est ce une offre ou une demande ?</label><br>
<select id="type" name="type">
    <option value="">Choisir une option</option>
    <option value="demande">Cherche</option>
    <option value="offre">Offre</option>
</select><br/><br>
<label for="ville">Où vous trouvez vous ?</label><br>
<select id="ville" name="ville">
    <option value="">Choisir une option</option>
    <option value="Limoges">Limoges</option>
    <option value="Paris">Paris</option>
    <option value="Bordeaux">Bordeaux</option>
    <option value="Lyon">Lyon</option>
    <option value="Strasbourg">Strasbourg</option>
</select><br><br>
<input type="submit" value="recherche">
</div>
</body>
</html>
