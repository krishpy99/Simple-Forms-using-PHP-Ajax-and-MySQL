<?php
include "db.php";

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $Query = $db->prepare("SELECT * FROM users WHERE email = ?");
    $Query->execute([$email]);
    if($Query->rowCount() > 0 ){
    $row = $Query->fetch(PDO::FETCH_LAZY);
    $dbPassword = $row->password;
    $name = $row->name;
    $DOB = $row->DOB;
    $phone = $row->phone;
    $address = $row->address;
    if($password === $dbPassword){
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['DOB'] = $DOB;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'passwordError', 'message' => 'Your Password is wrong']);
    }
    } else {
        echo json_encode(['status' => 'emailError', 'message' => 'Your email is wrong']);
    }

}?>
