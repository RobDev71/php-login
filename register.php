<?php
    // Allow config file
    define('__CONFIG__', true);
    // Require the config file
    require_once "inc/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />


</head>

<body>

    <div class="uk-section uk-container uk-text-center">
        <form class="js-register">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Register</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="email" required="required" placeholder="Email" autocomplete="email-address">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" type="password" required="required" placeholder="Password" autocomplete="password">
                </div>
                <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">Register</button>

            </fieldset>
        </form>
    </div>

    <?php require_once "inc/footer.php" ?>
   
</body>

</html>