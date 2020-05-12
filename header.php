<?php
    session_start();
?>
<header>
    <div>
        <svg height="50" width="100">

        <polyline points="5,30 7,33.5 11,36.5" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <polyline points="7,44.25 15.5,35 16.5,36 7,44.25" stroke="black" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/>

        <polyline points="27.5,23.25 45,2.5 49.5,0 49.5,1.25 47.5,3.75 46.25,3.75 43.75,6.25 43.75,7 28.75,24.25 27.5,23.25" stroke="black" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 48,6.25 s 10,5 15,15 s 2.5,20 20,25" stroke="#c9f0d4" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 37.5,2.5 c -27.5,2.5 -27.5,37.5 0,40 " stroke="#c9f0d4" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 37.5,42.5 c 8.75,-2.5 12.25,-5.25 12.5,-15" stroke="#c9f0d4" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 32.5,27.5 c 2.5,-11.25 15,-11.25 17.5,0" stroke="#c9f0d4" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 16.25,41.25 c 7,6.8 7,5.8 21.25,6.25" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 37.5,10 c 25,2.5 25,35 0,37.5" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>


        <path d="M 37.5,10 c -17.5,2.5 -17.5,25 0,27.5" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 37.5,37.5 c 7,-0.75 8,-6.25 7.5,-10" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        <path d="M 37.5,27.5 c 1.25,-7 6.25,-7 7.5,0" stroke="#6718a3" stroke-width="4" fill="none" stroke-linejoin="round" stroke-linecap="round"/>

        </svg>
        <span id="title">REZGINYS</span><br>
    </div>
    <div class="menu">

        <a class="menu-item" href="index.php">Pagrindinis</a>
        <a class="menu-item" href="eshop.php">E. parduotuvė</a>
        <a class="menu-item" href="artisans.php">Amatininkai</a>
        <a class="menu-item" href="contacts.html">Kontaktai</a>

        <?php
        if (!isset($_SESSION['u_id'])){
            echo '<a class="menu-item" href="signup.php">Registruotis</a>

            <div class="login-form">
            <form action="../includes/login.inc.php" method="POST">
            <input type="text" name="userid" placeholder="Vartotojo vardas" />
            <input type="password" name="passw" placeholder="Slaptažodis" />
            <button id="login-button" type="submit" name="submit">Prisijungti</button>
            </form>
            </div>';
        }else{
            echo'<div class="loguot-form">
            <form action="../includes/logout.inc.php" method="POST">
            <button id="logout-button" type="submit" name="submit">Atsijungti</button></form>
            </div>';
        }
        ?>
    </div>
</header>
