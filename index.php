<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php require 'vendor/autoload.php';?>
    <form action="./traitement/login.php">
        <p>E-mail</p>
        <input type= "text">
        <p>Mots de passe</p>
        <input type= "password">
        <div><button type= "submit" name= "login">Envoyer</button></div>
    </form>
    <p>Pas de compte?<a href="./src/Entity/Administration/InsertionAdministration.php">Creer un</a></p>
</body>
</html>
