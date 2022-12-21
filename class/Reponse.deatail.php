<?php
class Reponse_detail
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    public function addReponseDetail($questionId,$reponsId,$optionId,$point,$isRight){
        $query = "INSERT INTO reponse_detail(quest_id,reponse_id,option_id,point,is_right)
            VALUES (:questionId,:reponsId,:optionId,:point,:isRight)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "questionId" => $questionId,
            "reponsId" => $reponsId,
            "optionId" => $optionId,
            "point" => $point,
            "isRight" => $isRight
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }
//Read
    public function getPointByOptId($quId){
        $query = "SELECT * FROM reponse_detail
        WHERE option_id = :quId ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quId" => $quId
        ));
        return $rs;
    }
    //    Count
    public function getSommePointByDetailId($id){
        $query = "SELECT SUM(point) as sm FROM reponse_detail
        WHERE reponse_id = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }





}


// Instance
$reponse_detail = new Reponse_detail();