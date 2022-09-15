<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>tp</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>

    <ul class="navigation">
        <?php if (isset($_SESSION['nom'])) {

        ?>
        <p class="salutation"><?php echo "Bonjour " . $_SESSION['nom']  ?></p>
        <?php } ?>
        <li><a href="?module=base&action=index">Accueil</a></li>


        <?php if (isset($_SESSION['nom'])) {

        ?>
        <li><a href="?module=post&action=create"> Nouvel article</a></li>
        <li><a href="?module=post&action=index"> Mes articles</a></li>
        <li><a href="?module=user&action=logout">Déconnecter</a></li>
        <?php } else { ?>
        <li><a href="?module=user&action=create">Créer un compte</a></li>
        <li><a href="?module=user&action=login">Connexion</a></li>
        <?php }
        ?>
    </ul>

    <div class="container">
        <?php echo $content; ?>
    </div>

</body>

</html>