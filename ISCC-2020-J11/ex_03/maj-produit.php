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
        $pdo -> exec('UPDATE produit SET quantité=5, quantité=1  WHERE id=4');
        }catch (PDOException $e){
            echo 'Erreur lors du changement de la quantité du produit';
        }
 ?>
<body>
 </html>