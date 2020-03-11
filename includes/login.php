<?php

if (isset($_POST['login-submit'])) {

    require 'connection.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("location: ../index.php?error=emptyfields".$mailuid);
        exit();
        }

    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror".$mailuid);
            exit();

        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['pwdUsers']);
                if ($passwordCheck == false) {
                    header("Location: ../index.php?error=WrongPassword");
                    exit();
                }
                else if ($passwordCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("Location: ../index.php?login=success");
                    exit();

                }
                else {
                    header("Location: ../index.php?error=WrongPassword");
                    exit();
                }
            }
            else {
                header("location: ../index.php?error=nouser");
                exit();

            }

        }
    }
}

else {
    header("location: ../index.html");
    exit();
}