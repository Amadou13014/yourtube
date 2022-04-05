<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/modifpwdback.php" ?>
<?php require_once "../phpback/modifierback.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Compte</title>
</head>

<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">
            <a class="navigationitemp" href="compte.php">Modifier votre compte<span></span></a>
            <a class="navigationitemp" href="modifpwd.php">Modifier le mot de passe<span></span></a>
            <a class="navigationitemp" href="contact.php">Contact<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">

            <form action="#" method="post" class="form_input">

            <div class="input_compte">
                    <label for="password" class="pseudoclass"><span>Password</span></label>
                    <input class="inputclass_compte" name="password" type="password" placeholder="password">
                </div>

                <div class="input_compte">
                    <label for="password" class="pseudoclass"><span>Password</span></label>
                    <input class="inputclass_compte" name="password_verif" type="password" placeholder="retape password">
                </div>
                <div class="buttonform">
                    <button class="submit_compte_maj" type="submit" name="submitpass"><span>Mettre à jour</span></button>
                </div>


            </form>

        </div>
    </div>
</main>

</html>