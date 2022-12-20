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
    <form  name="cd" class="myFeuille bg-white position-relative overflow-hidden p-5" method="post">
    <h2 class="text-center " style="position: relative">
        <img src="<?=$asset?>/media/watch.png" class="chrono-img" alt=""/>
        <input class="text-chrono" id="txt" readonly="true" type="text" name="disp">
        <input type="hidden" name="tim" id="tim" value="102"/>
    </h2>
        <h1 class="animate__animated animate__fadeInRight animate_25ms font-25 text-center pt-4">Evaluation 1 : AEEK et fondement</h1>
        <fieldset class="pb-3">
            1- Que signifie AEEK
            <div class="form-group">
                <input type="radio" name="q1" id="q1" value="1"/>
                <label for="q1">Association es mangeurs</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q1" id="q1" value="2"/>
                <label for="q1">Association es entreprise </label>
            </div>
            <div class="form-group">
                <input type="radio" name="q1" id="q1" value="3"/>
                <label for="q1">Association des élèves et étudiants de Kassséré </label>
            </div>
        </fieldset>
        <fieldset class="pb-3">
            2- Qui est le president de l'AEEK ?
            <div class="form-group">
                <input type="radio" name="q2" id="q2" value="1"/>
                <label for="q2">Dramane</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q2" id="q2" value="2"/>
                <label for="q2">Gnelezie</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q2" id="q2" value="3"/>
                <label for="q2">Yahafe </label>
            </div>
        </fieldset>
        <fieldset class="pb-3">
            3- Qui est le sécretaire general de l'AEEK ?
            <div class="form-group">
                <input type="radio" name="q3" id="q3" value="1"/>
                <label for="q3">Kone Zana</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q3" id="q3" value="2"/>
                <label for="q3">Cissé Hamad</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q3" id="q3" value="3"/>
                <label for="q1">Beh Brahiman</label>
            </div>
        </fieldset>
        <fieldset class="pb-3">
            4- Qui est Yafe de l'AEEK ?
            <div class="form-group">
                <input type="radio" name="q4" id="q4" value="1"/>
                <label for="q3">Kone Zana</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q4" id="q4" value="2"/>
                <label for="q3">Organusateur</label>
            </div>
            <div class="form-group">
                <input type="radio" name="q4" id="q" value="3"/>
                <label for="q1">Beh Brahiman</label>
            </div>
        </fieldset>

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