<?php 
    
    session_start();
    require_once 'connect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    
    $check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        
        $user = mysqli_fetch_assoc($check_user);
        
        $_SESSION['user'] = [
            "id" => $user['id'],
            "unique_id" => $user['unique_id'],
            "fname" => $user['fname'],
            "lname" => $user['lname'],
            "email" => $user['email'],
            "avatar" => $user['avatar']
            
        ];
        $id = $_SESSION["user"]["id"];
        $unique_id = $_SESSION['user']['unique_id'];
        $file="default.png";
        if (!is_dir("../images/users/$unique_id")){
            mkdir("../images/users/$unique_id");
            $mer = copy($_SERVER['DOCUMENT_ROOT'] . '/' . $file, $_SERVER['DOCUMENT_ROOT'] . '/images/users/'.$unique_id. '/' . $file);
            if ($mer){
                $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                $podg = mysqli_query($conn, $sql);
                $sql = "UPDATE users SET avatar = '$file' WHERE id = $id";
                $ggv = mysqli_query($conn, $sql);
                if ($ggv){
                    $_SESSION['user']['avatar'] = $file;
                }
            }
        }
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    } 