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

    public function getOptByQuesId($idQuiz){
        $query = "SELECT * FROM question
                  INNER JOIN question_opt ON question_id = id_question
        WHERE quiz_id = :idQuiz";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "idQuiz" => $idQuiz
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
    public function getSommePointByQuestId($id){
        $query = "SELECT SUM(point) as sm FROM question
        WHERE quiz_id = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }



}


// Instance
$question = new Question();