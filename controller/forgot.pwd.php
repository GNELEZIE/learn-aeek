<?php

if(isset($_POST['phone']) and isset($_POST['isoPhone']) and isset($_POST['dialPhone'])  and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
 extract($_POST);
    $code = rand(100000, 999999);
    $phone = htmlentities(trim(addslashes(strip_tags($phone))));
    $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
    $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));
    $propriete1 = 'code';
    $propriete2 = 'date_phone';

    $numero = $dialPhone.$phone;
    if(is_numeric($numero)) {
        $result = $client->getClientByPhone($phone, $dialPhone);
        if($data = $result->fetch()){
            $upd = $client->updateData2($propriete1,$code,$propriete2,$date,$data['id_client']);
            if($upd > 0){
                $send = sendSms($numero,$code);
                $tab = array(
                    "phone"=>$phone,
                    "dialPhone"=>$dialPhone,
                    "code"=>$code
                );
                $_SESSION['upd_pwd'] = $tab;
                header('location:' . $domaine . '/modification');
            }
        }else{
         $errors['pwd'] = 'Ce numéro de téléphone n\'existe pas';
        }
    }

}




