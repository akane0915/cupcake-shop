<?php
    $first_name = $_GET["first_name"];
    $last_name = $_GET["last_name"];
    $full_name = $first_name . " " . $last_name;

    $number = $_GET["number"];
    $double_the_number = 2 * $number;
?>

<!DOCTYPE>
<html>
    <head>
        <title>Cupcakes!</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1><?php echo $full_name; ?>'s Cupcakes</h1>
        <h2 class="flashy">Welcome to Asia's Cupcake Shope - Home of the famous carrot cupcake</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <img src="img/carrot.jpg" alt="carrot cupcake">
        <p>Red Velvet Cupcake</p>
        <p>Vanilla Buttercream Cupcake</p>
        <p class="best">Carrot Cupcake</p>
        <p>Price: <?php echo $double_the_number; ?></p>
        <a class="flashy" href="http://cookdiary.net/carrot-cake-cupcakes/">Order Here</a>
    </body>
</html>
