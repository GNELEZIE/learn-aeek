<?php
class Reponse_detail
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    public function addReponseDetail($questionId,$reponsId,$optionId,$point){
        $query = "INSERT INTO reponse_detail(quest_id,reponse_id,option_id,point)
            VALUES (:questionId,:reponsId,:optionId,:point)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "questionId" => $questionId,
            "reponsId" => $reponsId,
            "optionId" => $optionId,
            "point" => $point
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
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