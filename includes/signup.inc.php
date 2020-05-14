<?php
    if (isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $first = mysqli_real_escape_string($mysqli, $_POST['first']);
        $last = mysqli_real_escape_string($mysqli, $_POST['last']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $userid = mysqli_real_escape_string($mysqli, $_POST['userid']);
        $passw = mysqli_real_escape_string($mysqli, $_POST['passw']);

        if (empty($first) || empty($last) || empty($email) || empty($userid) || empty($passw)) {
            header("Location: ../signup.php?signup=empty");
            exit();
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../signup.php?signup=invalidnameorlastname");
                exit();
            } else {
                 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                     header("Location: ../signup.php?signup=invalidemail");
                     exit();
                 } else {
                     $query = "SELECT * FROM users WHERE user_userid = '$userid';";
                     $result = mysqli_query($mysqli, $query);
                     $resulCheck = mysqli_num_rows($result);

                     if ($resulCheck > 0) {
                         header("Location: ../signup.php?signup=usernameistaken");
                     } else {
                         $hashedPwd = password_hash($passw, PASSWORD_DEFAULT);
                         $query = "INSERT INTO users (user_first, user_last, user_email, user_userid, user_passw) VALUES('$first', '$last', '$email', '$userid', '$hashedPwd');";
                         mysqli_query($mysqli, $query);
                         header("Location: ../signup.php?signup=success");
                         exit();
                     }
                 }
            }
        }

    } else {
        header("Location: ../lt/signup.php");
        exit();
    }
