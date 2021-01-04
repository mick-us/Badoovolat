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
    <h2>Inscription</h2>
    <form action="Target.php">
        <label for="nom" >Nom :</label><input type="text" id="nom" name="nom" placeholder="Dupond"/><br/>
        <label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom" placeholder="Jean"/><br/>
        <label for="ville">Ville :</label><input type="text" id="ville" name="ville" placeholder="Avignon"/><br/>
        <label for="email">Email :</label><input type="text" id="email" name="email" placeholder="jeandupond@squalala.com"/><br/>
        <br/>
        <label for="categorie">Catégorie :</label><br/>
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
        <label for="type">Type :</label><br/>
        <select id="type" name="type">
            <option value="">Choisir une option</option>
            <option value="demande">Cherche</option>
            <option value="offre">Offre</option>
        </select><br/><br>
        <label for="annonce">Description de l'annonce :</label><br/>
        <textarea id="annonce" name="annonce" rows="10" cols="50" placeholder="Décrivez votre offre/demande."></textarea>
        <br><br>
        <input type="reset" value="Réinitialisation">
        <input type="submit" value="Inscription"><br/>
        <br/>
    </form>
</div>
</body>
</html>