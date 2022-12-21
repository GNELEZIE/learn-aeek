<?php
class Quiz
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    // Read

    public function getAllQuiz(){
        $query = "SELECT * FROM quiz
         WHERE statut = 0 ORDER BY id_quiz DESC";
        $rs = $this->bdd->query($query);
        return $rs;
    }
    public function getQuizBySlug($slg){
        $query = "SELECT * FROM quiz
        WHERE slug = :slg ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "slg" => $slg
        ));

        return $rs;
    }
    public function getQuizById($id){
        $query = "SELECT * FROM quiz
        WHERE id_quiz = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));

        return $rs;
    }
    public function getQuizAndQuestionByQuizId($idQuiz){
        $query = "SELECT * FROM quiz
                  INNER JOIN  question ON quiz_id = id_quiz
        WHERE id_quiz = :idQuiz";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "idQuiz" => $idQuiz
        ));

        return $rs;
    }






}


// Instance
$quiz = new Quiz();