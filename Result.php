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
    <?php
        $cat=$_GET['categorie'];
        $type=$_GET['type'];
        $ville=$_GET['ville'];
        $hote = 'localhost';
        $login = 'root';
        $pass='';
        $dbport=3307;
        $namedb = 'badoovolat';
        try {
            $connection = new PDO("mysql:host=$hote;port=$dbport;dbname=$namedb", $login, $pass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $query=$connection->query("SELECT * FROM personne WHERE categorie='$cat' AND type='$type' AND ville='$ville'");
            if($query===false){
                die("Erreur");
            }
        }catch (PDOException $e) {
            echo 'echec in connection:' . $e->getMessage();
        }
    ?>
    <div class="container">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Annonce</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$query->fetch()) : ?>
                <tr>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['prenom']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['annonce']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    </div>
</body>
</html>