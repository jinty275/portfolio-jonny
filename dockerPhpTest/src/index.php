<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the value of the input field
    $name = htmlspecialchars($_POST['name']);
    if (empty($name)) {
        $greeting = "Hello, Guest!";
    } else {
        $greeting = "Hello, " . $name . "!";
    }
} else {
    $greeting = "Please enter your name!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Army Finder Home</title>

    <meta charset="utf-8" />
    <meta name="description" content="40k army chooser page" />
    <meta name="keywords" content="Warhammer 40,000, warhammer 40k, which army to choose" />
    <meta name="author" content="Jinty" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

</head>
<body>

    <!-- Navigation -->
    <nav>
        <ul class="listSpec">
            <li><a href="homePage.html">Home</a></li>
            <li><a href="factions.html">Factions</a></li>
            <li><a href="rules.html">Rules</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contactUs.html">Contact us</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <div class="container">
        <div class="header-content">
            <h1>Welcome to Army Finder</h1>
            <h2>Making your army finding easier for you</h2>
            <div class="button-container">
                <button class="btn btn-dark">Begin</button>
            </div>
        </div>
    </div>

    <!-- <h2>Welcome to Army Finder</h2> -->
    <hr />
    <br><br>

    <!-- Background picture -->
    <!--<img class="bckImg" alt="dark sandy background where 2 titans and multiple space marines fighting " src="images/backgrounds/battleBegins.jpg" />
    -->
    <br><br>
    <!-- Main Content -->
    <p>
        Warhammer 40,000 has many army choices for players.
        Sometimes that makes it hard to decide what to choose or how to get into the hobby.
        Here you can select an army and get a brief introduction to what that army is about
        and will show some of the best places that you can buy the models from. No more fuss,
        but instead unlimited power at your fingertips. Click an army icon to begin your journey
    </p>

    <br>

    <h4>Imperium</h4>

    <!-- Space marine icons -->
    <div class="sMIcons">
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_DarkAngels.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_WhiteScars.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_SpaceWolves.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/Imperial_Fists_Icon.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_BloodAngels.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icon_Iron_Hands.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_UltraMarines.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_Salamanders.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_RavenGuard.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/spaceMarineIcons/GH_Icons_BlackTemplars.png" />
        </a>
    </div>

    <!-- Imperium -->
    <div class="impIcons">
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/AstraMilitarum_Icon.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/GH_Icons_Deathwatch.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/Custodes_Icon.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/GH_Icons_Adeptus_Mechanicus.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/GH_Icons_Grey_Knights.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/GH_Icons_Sisters.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/imperium/Knights.png" />
        </a>
    </div>

    <br><br>

    <!-- Xenos -->
    <h4>Xenos / Unaffiliated</h4>

    <div class="impIcons">
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/GH_Icon_Votann.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/GH_Icons_Necron.png" />
        </a>
        <a href="orks.html">
            <img class="aFIcons" src="images/xenos/GH_Icons_Orks.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/Tau_Icon.png" />
        </a>

        <!-- Aeldari -->
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/aeldari/aeldari_Icon.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/aeldari/GH_Icons_Drukhari.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/aeldari/Harleyquins.png" />
        </a>

        <!-- Hivemind -->
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/hivemind/GH_Icons_Tyranids.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/xenos/hivemind/GSC_Icon.png" />
        </a>
    </div>

    <br><br>

    <h4>Chaos</h4>
    <!-- Chaos Space Marines -->
    <div class="chaoIcons">
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_EmpChildren.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_IronWarriors.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_NightLords.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_WorldEaters.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_DeathGuard.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_ThousandSon.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_BlackLegion.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_WordBearers.png" />
        </a>
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/chaosSpaceMarinesIcons/GH_Icons_AlphaLegion.png" />
        </a>
    </div>

    <!-- Chaos -->
    <div class="chaoIcons">
        <!--<a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/GH_Icons_Daemons.png" />
        </a>-->
        <a href="dAPage.html">
            <img class="aFIcons" src="images/chaos/The_Chaos_Knights.png" />
        </a>
    </div>
    <br><br>
    <!--Footer-->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Army Picker. All rights reserved</p>

            <!--Footer Navigation-->
            <ul class="footerNav">
                <li><a href="homePage.html">Home</a></li>
                <li><a href="dAPage.html">Factions</a></li>
                <li><a href="rules.html">Rules</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contactUs.html">Contact us</a></li>
            </ul>

            <p class="footerSocial">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-discord"></i></a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
