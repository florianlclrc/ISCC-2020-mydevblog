<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="mep/presentation.css" rel="stylesheet">
        <title>Articles</title>
    </head>

    <?php
        include "header-blog.php"
    ?>

    <body>
        <h2>Voici la liste de tous les articles déposés sur le site :</h2>
        <p>
            <ul>
                <img src="marketing.jpg" width="100"><li><nav><a href="http://localhost:8888/ISCC-2020-mydevblog/marketing-c.php">Le marketing c to c</a></nav></li><br>
                <img src="luxe.jpg" width="100"><li>L'histoire du Luxe</li><br>
                <img src="annecy.jpg" width="50"><li>Le festival international du film d'Annecy</li><br>
                <img src="conspiracy.jpg" width="50"><li>La conspiracy palette porte-elle bien son nom ?</li><br>
                <img src="lockdown.jpg"  width="100"><li>Lockdown's article</li><br>
                <img src="transhumanism.jpg" width="100"><li>Transhumanism, good or bad thing ?</li><br>
                <img src="métier.jpg" width="100"><li>Présentation du métier de Chef de Marque</li><br>
                <img src="storytelling.jpg" width="100"><li>Qu'est-ce que le Storytelling en marketing ?</li><br>
                <img src="impression.jpg" width="100"><li>Les différentes techniques d'impression</li><br>
                <img src="versace.png" width="100"><li>Analyse du sens des logos : Versace</li>
            </ul>
        </p>
    </body>

    <?php
        include "footer-blog.php"
    ?>

<?php
    function connect_to_database(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "MyDevBlog";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connexion réussie";
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection échouée: " . $e->getMessage();
        }
    }

    $pdo = connect_to_database();

    $article= $pdo->prepare("SELECT * FROM 'articles' WHERE 'id' =?");
    $article=$articles->execute(array ($_GET['id]']))->fetch();
    echo $article['titre']
    ?>

</html>