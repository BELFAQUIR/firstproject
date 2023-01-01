<?php
require 'conect.php';
if (isset($_POST['valider']))
{

    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['password']))
    {
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['password']))
    $data = [
        'nom' => $_POST['nom'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'password' => md5($_POST['password']),
    ];
    $query = 'INSERT INTO prescription (nom,  email, tel, password) 
                    VALUES (:nom,  :email ,:tel ,:password)';
                     $stmt= $pdo->prepare($query);

                     if ($stmt->execute($data)) {
                         echo 'succes ';
                     } else {
                         echo 'Error';
                     }
        
}
}










//    $name=htmlspecialchars($_POST['nom']);
    //    $email=htmlspecialchars($_POST['email']);
    //    $tel=htmlspecialchars($_POST['tel']);
    //    $password=md5($_POST['password']);
    // echo"hello mr <b> $name</b> <br> email: <b> $email</b> <br> tele: <b> $tel</b> <br> password: <b> $password </b>";
   
?>