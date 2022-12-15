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
            <div class="col-sm-6 d-none d-sm-block">
                <div class="count_box d-flex float-end pt-5 pe-5">
                    <div class="count_clock countdown_timer d-flex align-items-center pe-5 me-3" data-countdown="2022/10/24">
                    </div>
                    <div class="count_progress clip-1">
                     <span class="progress-left">
                        <span class="progress_bar"></span>
                     </span>
                     <span class="progress-right">
                        <span class="progress_bar"></span>
                     </span>
                        <div class="progress-value">
                            <div id="value">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <form class="multisteps_form bg-white position-relative overflow-hidden" id="wizard" method="POST" action="https://www.jthemes.net/themes/html/quizo/thankyou/index-3.html">
    <div class="multisteps_form_panel step">
        <div class="question_title text-center text-uppercase">
            <h1 class="animate__animated animate__fadeInRight animate_25ms">What kind of services you are quiz?</h1>
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