<?php
class Reponse
{

    public function __construct()
    {
        $this->bdd = bdd();
    }

    //Cerate
    public function addRep($repDate,$usersId ,$quizId){
        $query = "INSERT INTO reponse(date_reponse,users_id,quiz_id)
            VALUES (:repDate,:usersId,:quizId)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "repDate" => $repDate,
            "usersId" => $usersId,
            "quizId" => $quizId
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }
    public function addReponse($repDate,$usersId ,$quizId ,$questionId,$optId,$correct){
        $query = "INSERT INTO reponse(date_reponse,users_id,quiz_id,quest_id,opt_id,is_right)
            VALUES (:repDate,:usersId,:quizId,:questionId,:optId,:correct)";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "repDate" => $repDate,
            "usersId" => $usersId,
            "quizId" => $quizId,
            "questionId" => $questionId,
            "optId" => $optId,
            "correct" => $correct
        ));

        $nb = $rs->rowCount();

        if($nb > 0){
            $r = $this->bdd->lastInsertId();
            return $r;
        }
    }

    public function udateNote($note,$id){
        $query = "UPDATE reponse
            SET note_finl = :note
            WHERE id_reponse = :id ";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "note" => $note,
            "id" => $id
        ));

        $nb = $rs->rowCount();
        return $nb;

    }




}


// Instance
$reponse = new Reponse();