<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="REZGINYS rankų darbo dirbiniai: riešinės, vytinės juostos, pintinės, megztos piršinės ir daugiau.">

    <link href="css/menu-styles.css" rel="stylesheet">
    <link href="css/article-style.css" rel="stylesheet">
    <link href="css/footer-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REZGINYS | Prisijungti</title>
</head>
<body>
    <?php include('header.php'); ?>

    <article class="main-content">
        <h1>Internetinė parduotuvė „Rezginys“.</h1>
        <h2>Rankų darbo dirbiniai su savo istorija.</h2>
        <p>Jei esate prisiregistravę, suveskite savo prisijungimo vardą ir slaptaždį.
        <svg height="5" width=100%>
        <line x1="0" y1="0" x2="1000" y2="0" style="stroke:grey;stroke-width:3"/>
        </svg>

     <?php
            echo'<div class="login-form">
            <form action="includes/login.inc.php" method="POST">
            <input type="text" name="userid" placeholder="Vartotojo vardas" />
            <input type="password" name="passw" placeholder="Slaptažodis" />
            <button id="login-button" type="submit" name="submit">Prisijungti</button>
            </form>
            </div>';

        ?>

    </article>

    <?php include('footer.php'); ?>

</body>
</html>
