<?php
if(isset($_POST['quiz_id']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']) {
    extract($_POST);

    $quiz_id = htmlentities(trim(addslashes(strip_tags($quiz_id))));

    $lists = $question->getQuestionById($quiz_id);
    $total = $question->getSommePointByQuestId($quiz_id)->fetch();
    $usersId = 1;
    $addQuiz = $reponse->addRep($date,$usersId ,$quiz_id);

    if($addQuiz > 0){
        while($dtQuestion = $lists->fetch()){
            $questId = 'qt'.$dtQuestion['id_question'];
            $postedIdquest = $_POST[$questId];
            $optionPoint = $question_opt->getOptionById($postedIdquest)->fetch();
            $add = $reponse_detail->addReponseDetail($dtQuestion['id_question'],$addQuiz,$postedIdquest,$optionPoint['opt_point'],$optionPoint['is_right']);
        }
        $note = $reponse_detail->getSommePointByDetailId($addQuiz)->fetch();
        $updNote = $reponse->udateNote($note['sm'],$addQuiz);
    }





    $tabs = array(
        'quiz_id' => $quiz_id,
        'total' => $total['sm'],
        'note_final' => $note['sm']
    );

    $_SESSION['note'] = $tabs;

    header('location:' . $domaine .'/result');



}