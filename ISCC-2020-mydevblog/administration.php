<!DOCTYPE html>
<html>
    <head>
        <title>DevBlog Florian LECLERC</title>
        <link href="mep/presentation.css" rel="stylesheet">
        <meta charset="utf-8"/>
    </head>

    <?php
        include "header-blog.php"
    ?>

    <body>
        <h2>IDENTIFICATION</h2>
        <form method="post" action="traitement.php">
        <fieldset id="Login">
            <label>Identifiant</label>
            <input type="text" name="Identifiant" size="30" /><br />

            <label>Mot de passe</label>
            <input type="text" name="Mot de passe" size="30" /><br />

            <p id="buttons">
                <input type="submit" value="Envoyer" />
            </p>
        </form>
    </body><br>

    <?php
        include "footer-blog.php"
    ?>
</html>