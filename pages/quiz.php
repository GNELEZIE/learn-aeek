<?php



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
    <form  name="cd" class="multisteps_form bg-white position-relative overflow-hidden" id="wizard" method="post">
    <h2 class="text-center mt-5" style="position: relative">
        <img src="<?=$asset?>/media/watch.png" class="chrono-img" alt=""/>
        <input class="text-chrono" id="txt" readonly="true" type="text" name="disp">
        <input type="hidden" name="tim" id="tim" value="2"/>
    </h2>
        <div class="row">
            <div class="col-md-6 offset-3 avertis">

            </div>
        </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center ">
            <h1 class="animate__animated animate__fadeInRight animate_25ms font-25">Que signifie l'abreviation AEEK?</h1>
        </div>
        <div class="question_number text-center  text-white">
            <span class="rounded-pill">Question 1 sur 2</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="active step_1 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_1" type="radio" name="stp_1_select_option" value="1">
                        <label for="opt_1" class="font-17">Association des Eleveurs Europeen de Kassere</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_2" type="radio" name="stp_1_select_option" value="2">
                        <label for="opt_2" class="font-17">Association des Entrepreneurs Europeen de Kassere</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_3" type="radio" name="stp_1_select_option" value="3">
                        <label for="opt_3" class="font-17">Association des Elèves et Etudiants de Kasséré</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_4" type="radio" name="stp_1_select_option" value="4">
                        <label for="opt_4" class="font-17">Association des Elèves ou Etudiants de Kasséré</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center ">
            <h1 class="animate__animated animate__fadeInRight animate_25ms  font-25">En quelle année l'AEEK a été crée ?</h1>
        </div>
        <div class="question_number text-center  text-white">
            <span class="rounded-pill">Question 2 sur 2</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_5" type="radio" name="stp_2_select_option" value="1">
                        <label for="opt_5" class="font-17">1996</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_6" type="radio" name="stp_2_select_option" value="2">
                        <label for="opt_6" class="font-17">19960</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_7" type="radio" name="stp_2_select_option" value="3">
                        <label for="opt_7" class="font-17">2000</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_8" type="radio" name="stp_2_select_option" value="4">
                        <label for="opt_8" class="font-17">1978</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="form_btn">
        <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
        <a href="javascript:void(0);" type="button" class="prev_btn position-absolute  border-0" id="prevBtn" onclick="nextPrev(-1)"> <span><i class="fas fa-arrow-left"></i></span> Précédent</a>
        <div class="save">
            <button type="button" class="next_btn rounded-pill position-absolute  text-white" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
        </div>
    </div>
    </form>
    </div>

<?php require_once $layout.'/footer.php';?>
<script>

    $(document).ready(function(){
        $(".step_1").on('click', function(){
            $(".step_1").removeClass("active");
            $(this).addClass("active");
        });
        $(".step_2").on('click', function(){
            $(".step_2").removeClass("active");
            $(this).addClass("active");
        });
        $(".step_3").on('click', function(){
            $(".step_3").removeClass("active");
            $(this).addClass("active");
        });
        $(".step_4").on('click', function(){
            $(".step_4").removeClass("active");
            $(this).addClass("active");
        });
        $(".step_5").on('click', function(){
            $(".step_5").removeClass("active");
            $(this).addClass("active");
        });
        $(".step_6").on('click', function(){
            $(".step_6").removeClass("active");
            $(this).addClass("active");
        });

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
            $('.save').html('<button type="submit" class="next_btn rounded-pill position-absolute  text-white">Terminer</button>');
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