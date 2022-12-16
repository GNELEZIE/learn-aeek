<?php
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
    <form  name="cd" class="multisteps_form bg-white position-relative overflow-hidden" id="wizard" method="POST" action="https://www.jthemes.net/themes/html/quizo/thankyou/index-3.html">
   <h2 class="text-center mt-5" style="position: relative">
           <img src="<?=$asset?>/media/watch.png" class="chrono-img" alt=""/>
           <input class="text-chrono" id="txt" readonly="true" type="text" name="disp">
           <input type="hidden" name="tim" id="tim" value="01"/>


   </h2>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms font-27">What kind of services you are quiz?</h1>
        </div>
        <div class="question_number text-center text-uppercase text-white">
            <span class="rounded-pill">Question 1 to 5</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="active step_1 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_1" type="radio" name="stp_1_select_option" value="Well organized and Easy">
                        <label for="opt_1">Well organized and Easy</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_2" type="radio" name="stp_1_select_option" value="Transition Between Two">
                        <label for="opt_2">Transition Between Two</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_3" type="radio" name="stp_1_select_option" value="Transitions are Shown">
                        <label for="opt_3">Transitions are Shown</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_1 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_4" type="radio" name="stp_1_select_option" value="Generate a nice Color">
                        <label for="opt_4">Generate a nice Color</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms">The iron ore mined at Bailadila is mostly</h1>
        </div>
        <div class="question_number text-center text-uppercase text-white">
            <span class="rounded-pill">Question 2 to 5</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_5" type="radio" name="stp_2_select_option" value="haematite">
                        <label for="opt_5">haematite</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_6" type="radio" name="stp_2_select_option" value="limonite">
                        <label for="opt_6">limonite</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_7" type="radio" name="stp_2_select_option" value="siderite">
                        <label for="opt_7">siderite</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_2 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_8" type="radio" name="stp_2_select_option" value="magnetic">
                        <label for="opt_8">magnetic</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms">The leading state in producing paper is</h1>
        </div>
        <div class="question_number text-center text-uppercase text-white">
            <span class="rounded-pill">Question 3 to 5</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_3 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_9" type="radio" name="stp_3_select_option" value="West Bengal">
                        <label for="opt_9">West Bengal</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_3 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_10" type="radio" name="stp_3_select_option" value="Kerala">
                        <label for="opt_10">Kerala</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_3 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_11" type="radio" name="stp_3_select_option" value="Bihar">
                        <label for="opt_11">Bihar</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_3 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_12" type="radio" name="stp_3_select_option" value="Orissa">
                        <label for="opt_12">Orissa</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms">The largest dune files are found in</h1>
        </div>
        <div class="question_number text-center text-uppercase text-white">
            <span class="rounded-pill">Question 4 to 5</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_4 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_13" type="radio" name="stp_4_select_option" value="West Bengal">
                        <label for="opt_13">West Bengal</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_4 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_14" type="radio" name="stp_4_select_option" value="Kerala">
                        <label for="opt_14">Kerala</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_4 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_15" type="radio" name="stp_4_select_option" value="Bihar">
                        <label for="opt_15">Bihar</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_4 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_16" type="radio" name="stp_4_select_option" value="Orissa">
                        <label for="opt_16">Orissa</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms">The least explosive type of volcano is called</h1>
        </div>
        <div class="question_number text-center text-uppercase text-white">
            <span class="rounded-pill">Question 5 to 5</span>
        </div>
        <div class="row pt-5 mt-4 form_items">
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_5 animate__animated animate__fadeInRight animate_50ms">
                        <input id="opt_17" type="radio" name="stp_5_select_option" value="Basalt plateau">
                        <label for="opt_17">Basalt plateau</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_5 animate__animated animate__fadeInRight animate_100ms">
                        <input id="opt_18" type="radio" name="stp_5_select_option" value="Cinder cone">
                        <label for="opt_18">Cinder cone</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_5 animate__animated animate__fadeInRight animate_150ms">
                        <input id="opt_19" type="radio" name="stp_5_select_option" value="Shield volcanoes">
                        <label for="opt_19">Shield volcanoes</label>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="list-unstyled p-0">
                    <li class="step_5 animate__animated animate__fadeInRight animate_200ms">
                        <input id="opt_20" type="radio" name="stp_5_select_option" value="Composite volcanoes">
                        <label for="opt_20">Composite volcanoes</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form_btn">
        <button type="button" class="prev_btn position-absolute text-uppercase border-0" id="prevBtn" onclick="nextPrev(-1)"> <span><i class="fas fa-arrow-left"></i></span> Back</button>
        <button type="button" class="next_btn rounded-pill position-absolute text-uppercase text-white" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
            // window.location = "yourpage.htm" // redirects to specified page once timer ends and ok button is pressed
        } else {
            cd = setTimeout("redo()",1000);
        }
    }

    function init() {
        cd();
    }
    window.onload = init;
</script>