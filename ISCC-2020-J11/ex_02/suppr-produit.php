<!DOCTYPE html>
<html>
<head>
    <title>My SQL</title>
    <meta charset="utf-8">
    </head>
<body>
    <h1>Base Test 01</h1>
    <?php
    function connect_to_database()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $databasename = 'BaseTest01';
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            echo "Connexion réussie.";
            return $pdo;
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }
    $pdo = connect_to_database();
    $produit = $pdo-> query("SELECT * FROM produit")->fetchAll();
    try {
        $pdo -> exec('INSERT INTO produit(nom, desc, prix , quantité) VALUES(\'T-shirt noir\', \'T-shirt coton de couleur noire\', \'15.50\', 10\')');
        return $pdo;
    }catch (PDOException $e){
        echo 'Le produit a bien été ajouté';
    }
    ?>
    <body>
    </html>