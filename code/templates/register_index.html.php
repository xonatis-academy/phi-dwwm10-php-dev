<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
    <form action="http://localhost:8888/router.php/inscription/creer" method="POST">
        <input type="email" placeholder="Votre email" name="reg-email" /><br />
        <input type="password" placeholder="Votre MDP" name="reg-mdp" /><br />
        <input type="text" placeholder="Votre pseudo" name="reg-pseudo" /><br />
        <button type="submit">S'inscrire</button>
    </form>

</body>
</html>
