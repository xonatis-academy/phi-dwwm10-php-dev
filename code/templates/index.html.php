<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <!-- Ecrire un formulaire contenant : -->
    <!--  2 inputs, login, et password avec un bouton pour envoyer le formulaire -->
    <!--  vers http://localhost//login.php en POST -->
    <form action="http://localhost:8888/router.php/authentifier" method="POST">
        <input type="text" name="identifiant" placeholder="Login" value="<?php echo $login; ?>" />
        <input type="password" name="mdp" placeholder="Mot de passe" value="<?php echo $password; ?>" />
        <input type="checkbox" name="remember" />
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
