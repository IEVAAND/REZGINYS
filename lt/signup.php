<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>REZGINYS | Registracija</title>
        <link rel="stylesheet" href="../css/menu-styles.css">
        <link rel="stylesheet" href="../css/footer-style.css">
        <link rel="stylesheet" href="../css/signup-style.css">
    </head>
    <body>
        <?php include('../header.php'); ?>
        <section class="main-container">
            <div class="main-wrapper-signup">
                <h2>Registracijos forma</h2>
                <p>Pateikite savo tikslius duomenis, kad gautumėte užsakytas prekes.</p>
                <form class="signup-form" action="../includes/signup.inc.php" method="POST">
                    <input name="first" placeholder="Vardas">
                    <input name="last" placeholder="Pavardė">
                    <input name="email" placeholder="E-mail">
                    <input name="userid" placeholder="Vartotojo vardas">
                    <input type="password" name="passw" placeholder="Slaptažodis">
                    <button type="submit" name="submit">Registruotis</button>
                </form>
            </div>
        </section>
        <?php include('../footer.php'); ?>
    </body>
</html>
