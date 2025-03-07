<?php 
    session_start();
    require_once 'connect.php';
    
    $unique_id = $_SESSION["user"]["unique_id"];
    
    $validTypes = ["image/jpeg", "image/png"];
    $maxSize = 1;
    if(!is_dir("../images/users/$unique_id")){
        mkdir("../images/users/$unique_id");
    }
    
    $image = $_FILES["avatar"];
    $size = $image["size"] / 1000000;
    
    if ($size > $maxSize) {
        echo "Error upload file";
        die();
    }
    
    if (!in_array($image["type"], $validTypes) || $size > $maxSize) {
        echo "Error upload file";
        die();
    }
    
    $ext = pathinfo($image["name"], PATHINFO_EXTENSION);
    $id = $_SESSION["user"]["id"];
    $filename = uniqid() . ".$ext";
    if (move_uploaded_file($image["tmp_name"], "../images/users/$unique_id/$filename")){
        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
        $podg = mysqli_query($conn, $sql);
        $sql = "UPDATE users SET avatar = '$filename' WHERE id = $id";
        $ggg = mysqli_query($conn, $sql);
        if ($ggg){
            $_SESSION['user']['avatar'] = $filename;
        }
        header("Location: ../index.php");
    }
    
    