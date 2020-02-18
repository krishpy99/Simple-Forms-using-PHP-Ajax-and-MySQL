<?php
include "db.php";


if(isset($_POST['DOB']) && isset($_POST['phone']) && isset($_POST['address'])){

    $name = trim($_POST['name']);
    $DOB = trim($_POST['DOB']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $email = $_SESSION['email'];

    
    
     $Query2 = $db->prepare("UPDATE users 
                            SET name= ?, DOB = ?, phone = ?, address = ?
                            WHERE email = ?");
     $Query2->execute([$name, $DOB , $phone, $address, $email]);
     if($Query2){
         $_SESSION['name'] = $name;
         $_SESSION['email'] = $email;
         $_SESSION['DOB'] = $DOB;
         $_SESSION['phone'] = $phone;
         $_SESSION['address'] = $address;
         $_SESSION['updated'] = "Your account has been updated successfully";
         echo json_encode(['status' => 'updated']);
     }
    

}?>