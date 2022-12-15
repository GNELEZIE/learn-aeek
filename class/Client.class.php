<?php
class Client {

    public function __construct(){
        $this->bdd = bdd();
    }

    //Cerate
    public function addClient($clientDate,$phone,$iso_phone,$dial_phone,$date_phone,$code,$mot_de_passe){
        $query = "INSERT INTO client(date_client,phone,iso_phone,dial_phone,date_phone,code,mot_de_passe)
            VALUES (:clientDate,:phone,:iso_phone,:dial_phone,:date_phone,:code,:mot_de_passe)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "clientDate" => $clientDate,
            "phone" => $phone,
            "iso_phone" => $iso_phone,
            "dial_phone" => $dial_phone,
            "date_phone" => $date_phone,
            "code" => $code,
            "mot_de_passe" => $mot_de_passe
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    // Read
    public function getClientById($id){

        $query = "SELECT * FROM client
        WHERE id_client = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }
    public function getClientByPhone($phone,$dialPhone){

        $query = "SELECT * FROM client
        WHERE phone = :phone AND dial_phone = :dialPhone";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "phone" => $phone,
            "dialPhone" => $dialPhone
        ));

        return $rs;
    }
    public function getClientByData3($propriete1,$val1,$propriete2,$val2,$propriete3,$val3){
        $query = "SELECT * FROM client
        WHERE $propriete1 = :val1 and $propriete2 = :val2 and $propriete3 = :val3";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3
        ));

        return $rs;
    }
    public function getClientByData4($propriete1,$val1,$propriete2,$val2,$propriete3,$val3,$propriete4,$val4){
        $query = "SELECT * FROM client
        WHERE $propriete1 = :val1, $propriete2 = :val2, $propriete3 = :val3, $propriete4 = :val4";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3,
            "val4" => $val4
        ));

        return $rs;
    }

    // Update
    public function updateData($propriete,$val,$id){
        $query = "UPDATE client
            SET $propriete = :val
            WHERE id_client = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;
    }
    // Update MP
    public function updatePassword($password,$id){
        $query = "UPDATE client
            SET mot_de_passe = :password
            WHERE id_client = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "password" => $password,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }



    public function updateData2($propriete1,$val1,$propriete2,$val2,$id){
        $query = "UPDATE client
            SET $propriete1 = :val1, $propriete2 = :val2
            WHERE id_client  = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;
    }

    public function updateData7($propriete1,$val1,$propriete2,$val2,$propriete3,$val3,$propriete4,$val4,$propriete5,$val5,$propriete6,$val6,$propriete7,$val7,$id){
        $query = "UPDATE client
            SET $propriete1 = :val1, $propriete2 = :val2, $propriete3 = :val3, $propriete4 = :val4, $propriete5 = :val5, $propriete6 = :val6, $propriete7 = :val7
            WHERE id_client  = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3,
            "val4" => $val4,
            "val5" => $val5,
            "val6" => $val6,
            "val7" => $val7,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;
    }

    public function updateData11($propriete1,$val1,$propriete2,$val2,$propriete3,$val3,$propriete4,$val4,$propriete5,$val5,$propriete6,$val6,$propriete7,$val7,$propriete8,$val8,$propriete9,$val9,$propriete10,$val10,$propriete11,$val11,$id){
        $query = "UPDATE client
            SET $propriete1 = :val1, $propriete2 = :val2, $propriete3 = :val3, $propriete4 = :val4, $propriete5 = :val5, $propriete6 = :val6, $propriete7 = :val7, $propriete8 = :val8, $propriete9 = :val9, $propriete10 = :val10, $propriete11 = :val11
            WHERE id_client = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val1" => $val1,
            "val2" => $val2,
            "val3" => $val3,
            "val4" => $val4,
            "val5" => $val5,
            "val6" => $val6,
            "val7" => $val7,
            "val8" => $val8,
            "val9" => $val9,
            "val10" => $val10,
            "val11" => $val11,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;
    }


}

// Instance

$client = new Client();