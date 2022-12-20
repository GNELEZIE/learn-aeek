<?php

if(isset($doc[1]) and !isset($doc[2])){
    $lis = $quiz->getQuizBySlug($doc[1]);
    if($quizData = $lis->fetch()){
    }else{
        header('location:'.$domaine.'/error');
        exit();
    }
}else{
    header('location:'.$domaine.'/error');
}

require_once $controller.'/quiz.save.php';



$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
require_once $layout.'/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="logo_area pt-5 ps-5">
                <a href="#">
                    <img src="<?=$asset?>/media/logol.png" alt="image-not-found">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form  name="cd" class="myFeuille bg-white position-relative overflow-hidden p-5" method="post">
        <h2 class="text-center " style="position: relative">
            <img src="<?=$asset?>/media/watch.png" class="chrono-img" alt=""/>
            <input class="text-chrono" id="txt" readonly="true" type="text" name="disp">
            <input type="hidden" name="tim" id="tim" value="<?=$quizData['duree']?>"/>
        </h2>
        <h1 class="animate__animated animate__fadeInRight animate_25ms font-25 text-center pt-4"><?=html_entity_decode(stripslashes($quizData['title'])) ?></h1>
        <p class="animate__animated animate__fadeInRight animate_25ms font-17 text-center"><?=html_entity_decode(stripslashes($quizData['description'])) ?></p>
        <?php
        $nQ = 0;
        $lst = $question->getQuestionById($quizData['id_quiz']);
        while($qtData = $lst->fetch()){
            $nQ ++;
            $optList = $question_opt->getOptionByQuestionId($qtData['id_question']);
            if($qtData['type_question'] == 0){
                ?>
                <fieldset class="pb-3">
                    <?=$nQ .' - '.html_entity_decode(stripslashes($qtData['question'])) ?>
                    <?php
                    while($optData = $optList->fetch()){
                        $nQ ++;
                        ?>
                        <div class="form-group">
                            <input type="radio" name="qt<?=$qtData['id_question']?>" id="q<?=$optData['id_question_opt']?>"/>
                            <label for="q<?=$optData['id_question_opt']?>"><?=html_entity_decode(stripslashes($optData['option']))?></label>
                        </div>
                    <?php
                    }
                    ?>
                </fieldset>
            <?php
            }else if($qtData['type_question'] == 1){
                ?>

            <?php
            }else{
                ?>
            <?php
            }
        }
        ?>

        <div class="row pt-3">
            <div class="col-md-4 offset-4">
                <button class="next_btn rounded-pill text-white">Terminer</button>
            </div>
        </div>

    </form>
</div>

<?php require_once $layout.'/footer.php';?>

<script language="javascript">

    var mins;
    var secs;
    const tim = String($('#tim').val());
    function cd() {
        mins = 1 * m(tim); // changer les minutes ici
        secs = 0 + s(":01"); // changez les secondes ici (ajoutez toujours une seconde supplémentaire à votre total)
        redo();
    }

    function m(obj) {
        for(var i = 0; i < obj.length; i++) {
            if(obj.substring(i, i + 1) == ":")
                break;
        }
        return(obj.substring(0, i));
    }

    function s(obj) {
        for(var i = 0; i < obj.length; i++) {
            if(obj.substring(i, i + 1) == ":")
                break;
        }
        return(obj.substring(i + 1, obj.length));
    }

    function dis(mins,secs) {
        var disp;
        if(mins <= 9) {
            disp = " 0";
        } else {
            disp = " ";
        }
        disp += mins + ":";
        if(secs <= 9) {
            disp += "0" + secs;
        } else {
            disp += secs;
        }
        return(disp);
    }

    function redo() {
        secs--;
        if(secs == -1) {
            secs = 59;
            mins--;
        }
        document.cd.disp.value = dis(mins,secs); // setup additional displays here.
        if((mins == 0) && (secs == 0)) {
            window.alert("Time is up. Press OK to continue."); // change timeout message as required
            window.location = "<?=$domaine?>/result"; // redirects to specified page once timer ends and ok button is pressed
        }else {
            cd = setTimeout("redo()",1000);
        }
        if((mins == 1) && (secs == 0)) {
            $('.avertis').html('<div class="alert alert-danger m-0"> <p class="m-0 font-15">Il vous reste moins <b>d\'une minute</b> pour terminer !</p> </div>');
            cd = setTimeout("redo()",1000);
        }
    }

    function init() {
        cd();
    }
    window.onload = init;
</script>