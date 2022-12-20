<?php
class Question_opt
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    //Read

    public function getOptionByQuestionId($quId){
        $query = "SELECT * FROM question_opt
        WHERE question_id = :quId ORDER BY id_question_opt DESC ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "quId" => $quId
        ));
        return $rs;
    }






}


// Instance
$question_opt = new Question_opt();