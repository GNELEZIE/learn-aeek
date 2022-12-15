<?php
if(isset($_POST['phone']) and isset($_POST['isoPhone']) and isset($_POST['dialPhone']) and isset($_POST['password']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $code = rand(100000, 999999);
    $phone = htmlentities(trim(addslashes(strip_tags($phone))));
    $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
    $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));
    $password = htmlentities(trim(addslashes($password)));
    $numero = $dialPhone.$phone;

    if(is_numeric($numero)){
        $result = $client->getClientByPhone($phone,$dialPhone);
        if($data = $result->fetch()){
            if(password_verify($password,$data['mot_de_passe'])){
                if($data['bloquer'] == 0){
                    $_SESSION['_userivoirebox3647'] = $data;
                    if($data['phone_valid'] == 1){
                        if(isset($_POST['remember'])){
                            setcookie('_cookieivoirebox3647',$user,time()+60*60*24*30,'/',$cookies_domaine,true,true);
                        }
                        if(isset($_GET['return'])) {
                            header('location:' . str_replace('-', '+', my_decrypt($_GET['return'])));
                        }else{
                            header('location:' . $domaine . '/dashboard');
                        }
                    }else{
                        $send = sendSms($numero,$code);
                        $propriete1 ='date_phone';
                        $propriete2 ='code';
                        $upd = $client->updateData2($propriete2,$code,$propriete1,$date,$_SESSION['_userivoirebox3647']['id_client']);
                        if (isset($_GET['return'])) {
                            header('location:' . str_replace('-', '+', my_decrypt($_GET['return'])));
                        }else{
                            header('location:' . $domaine . '/dashboard');
                        }
                    }
                }else{
                    $errors['connect'] = 'Votre compte a été bloqué';
                }

            }else{
                $errors['connect'] = 'Numéro ou mot de passe incorrecte';
            }
        }else{
            $errors['connect'] = 'Numéro ou mot de passe incorrecte';
        }
    }else{
        $errors['connect'] = 'Votre numéro de téléphone n\'est pas correcte.';
    }








}