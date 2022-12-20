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







}


// Instance
$quiz = new Quiz();