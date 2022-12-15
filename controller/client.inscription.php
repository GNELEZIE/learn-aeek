<?php
if(isset($_POST['phone']) and isset($_POST['isoPhone']) and isset($_POST['dialPhone']) and isset($_POST['password']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
extract($_POST);
    $code = rand(100000, 999999);
    $phone = htmlentities(trim(addslashes(strip_tags($phone))));
    $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
    $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));
    $password = htmlentities(trim(addslashes($password)));
    $numero = $dialPhone.$phone;
    $result = $client->getClientByPhone($phone,$dialPhone);
    if(is_numeric($numero)){
        if($result->rowCount() > 0){
            $errors['registre'] = 'Votre numéro de téléphone existe déjà';
        }elseif(strlen($_POST['password']) < 8){
            $errors['registre'] = 'Le mot de passe est trop court, il doit faire 8 caractères minimum';
        }else{
            $options = ['cost' => 12];
            $mdpCript = password_hash($password, PASSWORD_BCRYPT, $options);
            $idClient = $client->addClient($date,$phone,$isoPhone,$dialPhone,$date,$code,$mdpCript);
            if($idClient > 0){
                $send = sendSms($numero,$code);
                $tab = array(
                    "phone"=>$phone,
                    "dialPhone"=>$dialPhone,
                    "isoPhone"=>$isoPhone,
                    "code"=>$code
                );
                $_SESSION['valid_phone'] = $tab;
                header('location:' .$domaine.'/confirmer');
            }
        }
    }






}