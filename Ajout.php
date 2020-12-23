<!DOCTYPE html>
<html>
<head>
    <title>Badoovolat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <header>
        <div>
            <h1><a href="index.php"><img src="logo.png">BADOOVOLAT</a></h1>
        </div>
        <a href="ajout.php">Inscription</a>
    </header>
    <br/>
    <h2>Inscription</h2>
    <form action="Target.php">
        <label for="nom" >Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Dupond"><br/>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Jean"><br/>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" placeholder="Avignon"><br/>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email" placeholder="jeandupond@squalala.com"><br/>
        <br/>
        <label for="categorie">Catégorie :</label><br/>
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
        <label for="type">Type :</label><br/>
        <select id="type" name="type">
            <option value="">Choisir une option</option>
            <option value="cherche">Cherche</option>
            <option value="offre">Offre</option>
        </select><br/>
        <label for="annonce">Description de l'annonce :</label><br/>
        <textarea id="annonce" name="annonce" rows="10" cols="50" placeholder="Décrivez votre offre/demande."></textarea>
        <br>
        <input type="reset" value="Réinitialisation">
        <input type="submit" value="Inscription"><br/>
        <br/>
    </form>
</body>
</html>