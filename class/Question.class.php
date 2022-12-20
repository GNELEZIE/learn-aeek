<?php
class Question
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    //Read

    public function getQuestionById($quId){
        $query = "SELECT * FROM question
        WHERE quiz_id = :quId ORDER BY id_question DESC ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quId" => $quId
        ));
        return $rs;
    }

    //Count
    public function countQuestByQuizId($quzId){
        $query = "SELECT COUNT(*) as nb FROM question
        WHERE quiz_id = :quzId";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quzId" => $quzId
        ));

        return $rs;
    }



}


// Instance
$question = new Question();