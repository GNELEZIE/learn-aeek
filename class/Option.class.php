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
    public function getOptionByQuestionId($quId){
        $query = "SELECT * FROM question_opt
        WHERE question_id = :quId ORDER BY id_question_opt DESC ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quId" => $quId
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