<?php

if($_SESSION['note']['note_final'] <10){
    $imag = 'fach.png';
    $color = 'text-danger';
}elseif($_SESSION['note']['note_final'] < 12){
    $imag = 'pasc.png';
    $color = 'text-success';
}
else{
    $imag = 'sourire.png';
    $color = 'text-success';
}

require_once $layout.'/header.php';
?>
<head>
    <style>

        .form_items li.active label {
           kground bac: #008000;
        }
        .form_items li.active label {
            color: #008000;
        }

    </style>

</head>

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
        <?php

        if(isset($doc[0]) and !isset($doc[1])){
            $quizDt = $quiz->getQuizById($_SESSION['note']['quiz_id'])->fetch();
        ?>
        <div class="row">
            <div class="col-md-4 offset-4">
                <div class="box-correction text-center py-3">
                    <h2 class="pt-3">Notre obtenue</h2>
                    <img src="<?=$asset?>/media/<?=$imag?>" class="w-icon-reaction" alt=""/>
                    <h2 class="py-3 <?=$color?>"><span><?=$_SESSION['note']['note_final'].'/'.$_SESSION['note']['total']?></span></h2>
                    <div class="d-flex">
                        <div class="w-50">
                            <a href="<?=$domaine?>/result/<?=$quizDt['slug']?>" class="btn-green-transparent w-85">Correction</a>
                        </div>
                        <div class="w-50">
                            <a href="<?=$domaine?>/quiz/<?=$quizDt['slug']?>" class="btn-blue-transparent w-85">Refaire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } else{
            $quizData = $quiz->getQuizAndByQuizId($_SESSION['note']['reponsId'])->fetch();
//            $quizData = $quiz->getQuizBySlug($doc[1])->fetch();
        ?>
            <form  name="cd" class="myFeuille bg-white position-relative overflow-hidden p-5" method="post">
                <h2 class="text-center " style="position: relative">
                    <span class="text-chrono px-3">Note : <?=$_SESSION['note']['note_final'].'/'.$_SESSION['note']['total']?></span>
                </h2>
                <h1 class="animate__animated animate__fadeInRight animate_25ms font-25 text-center pt-4"><?=html_entity_decode(stripslashes($quizData['title'])) ?></h1>
                <p class="animate__animated animate__fadeInRight animate_25ms font-17 text-center"><?=html_entity_decode(stripslashes($quizData['description'])) ?></p>
                <?php
                $nQ = 0;
                $lst = $question->getOptByQuesId($quizData['id_quiz']);
                while($qtData = $lst->fetch()){
                    $nQ ++;
                    $optList = $question_opt->getOptionByQuestionId($qtData['id_question']);
                    if($qtData['type_question'] == 0){
                        ?>
                        <fieldset class="pb-3">
                            <?=$nQ .' - '.html_entity_decode(stripslashes($qtData['question'])) ?>
                            <?php
                            while($optData = $optList->fetch()){
                                echo $qtData['id_question_opt'] .'=='. $optData['id_question_opt'];
                                   if($qtData['id_question_opt'] == $optData['id_question_opt']){
                                       $valid = 'checked';
                                      if($quizData['is_right'] == 1){
                                          $col = 'text-success';
                                      }else{
                                          $col = 'text-danger';
                                      }
                                   }else{
                                       $valid = '';
                                       $col = '';
                                   }

                                if($optData['is_right'] == 1){
                                    $col = 'text-success';
                                }

                                ?>
                                <div class="form-group">
                                    <input type="radio" name="qt<?=$qtData['id_question']?>" id="q<?=$optData['id_question_opt']?>" value="<?=$optData['id_question_opt']?>" <?=$valid?> disabled/>
                                    <label class="<?=$col?>" for="q<?=$optData['id_question_opt']?>"><?=html_entity_decode(stripslashes($optData['option']))?></label>
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
                        <a href="" class="next_btn rounded-pill text-white">Imprimer</a>
                    </div>
                </div>

            </form>
        <?php
        }
        ?>
    </div>

<?php require_once $layout.'/footer.php';?>
<script>

    $(document).ready(function(){
        // =====================Progress Increment====================
        $(document).on( 'click', '#nextBtn', function(){
            var $progressbar = $('.count_progress');
            for (var i = 1; i<4; i++) {
                var className = 'clip-'+i;
                if ($progressbar.hasClass(className)) {
                    $progressbar.removeClass(className).addClass('clip-'+(i+1));
                    break;
                }
            }
        });

        // =====================Progress Decrement====================

        $(document).on( 'click', '#prevBtn', function(){
            var $progressbar = $('.count_progress');
            for (var i = 1; i<4; i++) {
                var className = 'clip-'+i;
                if ($progressbar.hasClass(className)) {
                    $progressbar.removeClass(className).addClass('clip-'+(i+1));
                    break;
                }
            }
        });


    });

    // Progress bar counter ======================
    function animateValue(obj, start, end, duration) {
        var startTimestamp = null;
        const step = function(timestamp) {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 5);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const obj = document.getElementById("value");
    animateValue(obj, 100, 0, 90000);



    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("multisteps_form_panel");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Terminer";
        } else {
            document.getElementById("nextBtn").innerHTML = "Suivant";
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("multisteps_form_panel");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("wizard").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("multisteps_form_panel");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }


</script>