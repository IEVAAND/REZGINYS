<?php
    session_start();
    if (isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $userid = mysqli_real_escape_string($mysqli, $_POST['userid']);
        $passw = mysqli_real_escape_string($mysqli, $_POST['passw']);

        if (empty($userid) || empty($passw)) {
            header("Location: ../index.php?login=empty");
            exit();
        } else {
            $query = "SELECT * FROM users WHERE user_userid = '$userid';";
            $result = mysqli_query($mysqli, $query);
            $resulCheck = mysqli_num_rows($result);
            if ($resulCheck < 1) {
                header("Location: ../index.php?login=error");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)) {
                    $hashPwd = password_verify($passw, $row['user_passw']);
                    if ($hashPwd == false) {
                        header("Location: ../index.php?login=no");
                        exit();
                    } elseif ($hashPwd == true) {
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_userid'] = $row['user_userid'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }
        }

    }
else {
        header("Location: ../index.php?login=error");
        exit();
    }
