<?php
if(!empty($_POST['code']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']) {
    extract($_POST);
    $propriete1 = 'phone';
    $propriete2 = 'dial_phone';
    $propriete3 = 'code';

    if(is_numeric($_POST['code'])){
        $result = $client->getClientByData3($propriete1,$_SESSION['valid_phone']['phone'],$propriete2,$_SESSION['valid_phone']['dialPhone'],$propriete3,$_POST['code']);
        if ($data = $result->fetch()) {
            $dure = (strtotime(gmdate('Y-m-d H:i')) - strtotime($data['date_phone']))/60;
            if (is_numeric($dure)) {
                if ($dure < 1) {
                    $propriete = 'phone_valid';
                    if ($data['phone_valid'] != 1){
                        $verify = 1;
                        $update = $client->updateData($propriete, $verify, $data['id_client']);
                    }
                    $_SESSION['_userivoirebox3647'] = $data;
                    unset($_SESSION['valid_phone']);

                    if(isset($_GET['return'])) {
                        header('location:'.$_GET['return']);
                    }else{
                        header('location:'.$domaine.'/completer-profil');
                    }
                    exit();
                }else{
                    $errors['conn'] = 'Ce code a expiré, veuillez <a href="javascript:void(0)" class="send-link" onclick="sendMail()">cliquer pour recevoir un nouveau code</a>.';
                }
            }else{
                $errors['conn'] = 'Le code saisie n\'est pas correcte.';
            }
        }else{
            $errors['conn'] = 'Le code saisie n\'est pas correcte.';
        }

    }else{
        $errors['conn'] = 'Le code saisie doit être uniquement des chiffres.';
    }
}