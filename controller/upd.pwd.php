<?php

if(isset($_SESSION['upd_pwd']) and isset($_POST['code'])  and isset($_POST['password'])  and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $password = htmlentities(trim(addslashes(strip_tags($password))));
    $code = htmlentities(trim(addslashes(strip_tags($code))));

    $propriete1 = 'phone';
    $propriete2 = 'dial_phone';
    $propriete3 = 'code';

    $result = $client->getClientByPhone($_SESSION['upd_pwd']['phone'],$_SESSION['upd_pwd']['dialPhone']);

    if($data = $result->fetch()){
        if($data['code'] == $code){
            $options = ['cost' => 12];
            $mdpCript = password_hash($password,PASSWORD_BCRYPT,$options);
            $update = $client->updatePassword($mdpCript,$data['id_client']);
            if($update > 0){
                $_SESSION['_userivoirebox3647'] = $data;
                unset($_SESSION['upd_pwd']);
                header('location:' . $domaine . '/dashboard');
            }else{
                $errors['connect'] = 'Une erreur s\'est produite lors du traitement des données !';
            }

        }else{
            $errors['connect'] = 'Le code saisie n\'est pas correcte !';
        }
    }else{
        $errors['connect'] = 'Une erreur s\'est produite lors du traitement des données !';
    }

}




