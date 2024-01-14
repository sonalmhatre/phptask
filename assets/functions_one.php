<?php
require_once('init.php');
function RegisterUser($registration_data)
{
    //echo "inside the function";die;
    
    global $xu, $sqlConnect;
   
    if (empty($registration_data)) {
        return false;
    }
    $registration_data['created_at'] =  date('Y-m-d H:i:s');
    $registration_data['updated_at']     =  date('Y-m-d H:i:s');
    $registration_data['password']   = password_hash($registration_data['password'], PASSWORD_DEFAULT);
    if(!empty($_FILES["profile_img"])){
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["profile_img"]["name"]);
        move_uploaded_file($_FILES["profile_img"]["tmp_name"], $target_file);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $registration_data['profile_img'] = $target_file;
    }
    $fields                              = '`' . implode('`,`', array_keys($registration_data)) . '`';
    $data                                = '\'' . implode('\', \'', $registration_data) . '\'';
   
    $query                               = mysqli_query($sqlConnect, "INSERT INTO users ({$fields}) VALUES ({$data})");
    if($query == 1) {
        header("Location:  ../source/home.php");
    } else {
        return false;
    }
}
function LoginUser($email,$password){
    global $sqlConnect;
    if (empty($email) || empty($password)) {
        return false;
    }
    $isSuccess = 0;
    $query_hash = mysqli_query($sqlConnect, "SELECT * FROM  users WHERE (`email` = '{$email}')");
    if (mysqli_num_rows($query_hash)) {
        $mysqli_hash_upgrade = mysqli_fetch_assoc($query_hash);
        if (! empty($mysqli_hash_upgrade)) {
            $hashedPassword = $mysqli_hash_upgrade["password"];
            if (password_verify($_POST["password"], $hashedPassword)) {
                $isSuccess = 1;
                $_SESSION['user_data']= $mysqli_hash_upgrade;
                $_SESSION['loggedin']= 1;
            }
        }
        if ($isSuccess == 0) {
            $message = "Invalid Username or Password!";
        } else {
            header("Location:  ../source/home.php");
        }
        echo $message;
    }
}


?>