<?php
if(isset($_SESSION['valid_phone'])){

    $phone = $_SESSION['valid_phone']['phone'];
    $dialPhone = $_SESSION['valid_phone']['dialPhone'];
    $code = rand(100000, 999999);
    $numero = $dialPhone.$phone;
    $propriete1 = 'phone';
    $propriete2 = 'date_phone';
    $propriete3 = 'dial_phone';
    $propriete4 = 'code';


    $result = $client->getClientByData3($propriete1,$_SESSION['valid_phone']['phone'],$propriete3,$_SESSION['valid_phone']['dialPhone'],$propriete4,$_SESSION['valid_phone']['code']);
    if ($data = $result->fetch()) {
        $upd = $client->updateData2($propriete4,$code,$propriete2,$date,$data['id_client']);
        if($upd > 0){
            $send = sendSms($numero,$code);
            $tab = array(
                "phone"=>$phone,
                "dialPhone"=>$dialPhone,
                "code"=>$code
            );
            $_SESSION['valid_phone'] = $tab;
            echo 'ok';
        }
    }
}




