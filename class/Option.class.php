<?php
class Question_opt
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    //Read

    public function getOptionById($id){
        $query = "SELECT * FROM question_opt
        WHERE id_question_opt = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));
        return $rs;
    }

    public function getOptionByQuestionIdAndRep($repId){
        $query = "SELECT * FROM question_opt
        INNER JOIN  reponse_detail ON quest_id = question_id
        WHERE reponse_id = :repId";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "repId" => $repId
        ));
        return $rs;
    }

     public function getOptionByQuestionId($quId){
        $query = "SELECT * FROM question_opt
        WHERE question_id = :quId ORDER BY id_question_opt DESC ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quId" => $quId
        ));
        return $rs;
    }



    public function getOpt($idQuiz){
        $query = "SELECT * FROM question_opt
                  INNER JOIN  reponse_detail ON option_id = id_question_opt
        WHERE id_question_opt = :idQuiz";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "idQuiz" => $idQuiz
        ));

        return $rs;
    }


    //Count
    public function getSommePointByOptionId($id){
        $query = "SELECT SUM(point) as sm FROM question_opt
        WHERE id_question_opt  = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }




}


// Instance
$question_opt = new Question_opt();