<?php
if (isset($_POST["edit"]))
{
    session_start();

    $username = $_SESSION["username"];
    $id = $_SESSION["id"];

    echo $username;
    include_once('functions.inc.php');
    include_once('db.inc.php');
    unset($_SESSION["profileimage"]);
    $uploaddir = "/uploads/";
    $profileimage_name = $_FILES['profileimage']['name'];
    $profileimage_tmp = $_FILES['profileimage']['tmp_name'];
    $profileimage_size = $_FILES['profileimage']['size'];
    $profileimage_name_new = $id . '_' . $profileimage_name; 
    $_SESSION["profileimage"] = $uploaddir . $profileimage_name_new;
    $uploadedfile = $uploaddir . $profileimage_name_new;

    if($profileimage_size >= 3000000){
        header("Location: ../profile.php?error=bigsize");
        exit();
    }
    else
    { 
    rename($profileimage_name, $profileimage_name_new);
    move_uploaded_file($profileimage_tmp,"../".$uploaddir.$profileimage_name_new);
    profileEdit($username,$uploadedfile,$connection);
    }

}   

?>
