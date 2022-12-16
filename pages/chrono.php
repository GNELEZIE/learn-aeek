<?php
require_once $layout.'/header.php';
$fin = 20;
?>
<head>
    <style type="text/css">
        #txt {
            border:none;
            font-size:16pt;
            font-weight:bold;
            border-right-color:#FFFFFF
        }

    </style>
</head>
<form name="cd">
    <input id="txt" readonly="true" type="text" name="disp">
    <input type="hidden" name="tim" id="tim" value="3"/>
</form>

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
<!--
    This script downloaded from www.JavaScriptBank.com
    Come to view and download over 2000+ free javascript at www.JavaScriptBank.com
-->

