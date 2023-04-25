<?php require_once "./conf.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/icons/fav.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
    <title>Play Dare Devil</title>
</head>

<body>
    <nav class="topMenu">
        <div class="topMenu-container">
            <a href="index.html" class="topMenu-container-imgContainer">
                <img src="./img/logo.svg" alt="Logo" width="100%" height="100%">
            </a>
            <div class="topMenu-container-options d-none d-lg-flex">
                <ul>
                    <li><a href="sportsbook.html">SPORTBOOK</a></li>
                    <li><a href="casino.html">CASINO</a></li>
                    <li><a href="racebook.html">RACEBOOK</a></li>
                    <li><a href="livebetting.html">LIVE BETTING</a></li>
                </ul>
            </div>
            <div class="topMenu-container-buttonContainer">
                <a href="login.php" class="topMenu-container-buttonContainer-button">
                    LOG IN
                </a>
            </div>
        </div>
    </nav>
    <main role="main">

        <div class="login-container mx-auto">
            <div id="loginD" class="d-none d-lg-flex flex-column mx-auto">
                <form id="login-form" name="login-form" class="d-flex flex-column justify-content-center" action="<?php echo LOGIN_URL; ?>" method="post"> <input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
                    <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>?login-error"/>
                    <div class="d-flex flex-column justify-content-center">
                        <input type="text" id="account" name="account" value="" placeholder="User" class="login-input"/>
                        <input type="password" id="password" name="password" value="" placeholder="Password" class="login-input"/>
                    </div>
                    <div class="mx-auto">
                        <button type="submit" class="login-btn" id="login-form-submit" name="login-form-submit" value="login">LOGIN</button>
                    </div>
                </form>
            </div>
            <!-- ********************************mobile************************************************ -->

            <div id="loginM" class="d-flex flex-column d-lg-none">
                <form id="login-form" name="login-form" class="d-flex flex-column justify-content-center" action="<?php echo M_LOGIN_URL; ?>" method="post"><input type="hidden" name="siteID" id="siteID" value="<?php echo DGS_SITEID; ?>" />
                    <input type="hidden" name="errorURL" value="<?php echo SITE_URL; ?>?login-error" />
                    <div class="d-flex flex-column justify-content-center">
                        <input type="text" id="account" name="account" placeholder="User" class="login-input" />
                        <input type="password" id="password" name="password" placeholder="Password" class="login-input" />
                    </div>
                    <div class="mx-auto">
                        <button type="submit" class="login-btn" id="login-form-submit" name="login-form-submit" value="login">LOGIN</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
    <div class="footerNav d-flex d-lg-none">
        <div class="topMenu-container">
            <div class="topMenu-container-options">
                <ul>
                    <li><a href="sportsbook.html">
                            <div class="icon-container"><img src="./img/icons/sports.svg" alt="sportsbook"></div>
                            SPORTBOOK
                        </a></li>
                    <li><a href="casino.html">
                            <div class="icon-container"><img src="./img/icons/casino.svg" alt="casino"></div>
                            CASINO
                        </a></li>
                    <li><a href="racebook.html">
                            <div class="icon-container horse"><img src="./img/icons/racebook.svg" alt="racebook"></div>
                            RACEBOOK
                        </a></li>
                    <li><a href="livebetting.html">
                            <div class="icon-container "><img src="./img/icons/live.svg" alt="livebetting"></div>
                            LIVE BETTING
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-list">
            <section>
                <div><a href="sportsbook.html">SPORTBOOK</a></div>
                <div><a href="livebetting.html">LIVE BETTING</a></div>
                <div><a href="racebook.html">RACEBOOK</a></div>
                <div><a href="casino.html">CASINO</a></div>
                <div><a href="houserules.html">HOUSE RULES</a></div>
                <div><a href="sportsrules.html">SPORTS RULES</a></div>
                <div><a href="horsetracks.html">HORSE TRACKS</a></div>
                <div><a href="http://agents.playdaredevil.com/">ADMIN</a></div>
                <div><a href="privacy.html">PRIVACY POLICY</a></div>
                <div><a href="termsAndConditions.html">TERMS AND CONDITIONS</a></div>
                <div><a href="responsibleGaming.html">RESPONSIBLE GAMING</a></div>
            </section>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>