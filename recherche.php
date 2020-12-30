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
    <header>
    <h1><a href="index.php"><img src="logo.png"><br>BADOOVOLAT</a></h1>
</header>
<div class="container">
    <form action="">
    <label for="categorie">Quel catégorie cherchez vous ?</label><br>
<select id="categorie" name="categorie">
    <option value="">Choisir une option</option>
    <option value="garde">Garde</option>
    <option value="entretien">Entretien</option>
    <option value="travaux">Travaux</option>
    <option value="accompagnement">Accompagnement</option>
    <option value="menage">Ménage</option>
    <option value="caritatif">Caritatif</option>
    <option value="festival">festival</option>
    <option value="echangeDeProcedes">Échange de procédés</option>
    <option value="covoiturage">Covoiturage</option>
    <option value="troc">Troc</option>
</select><br/>
<label for="type">est ce une offre ou une demande ?</label><br>
<select id="type" name="type">
    <option value="">Choisir une option</option>
    <option value="cherche">Cherche</option>
    <option value="offre">Offre</option>
</select><br/>
<label for="ville">Où vous trouvez vous ?</label><br>
<select id="ville" name="ville">
    <option value="">Choisir une option</option>
    <option value="Limoges">Limoges</option>
    <option value="Paris">Paris</option>
    <option value="Bordeaux">Bordeaux</option>
    <option value="Lyon">Lyon</option>
    <option value="Strasbourg">Strasbourg</option>
</select><br>
<input type="submit" value="recherche">
</div>
</body>
</html>
