<?php
if(isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']) {
    extract($_POST);

    $stp_1_select_option = htmlentities(trim(addslashes(strip_tags($stp_1_select_option))));
    $stp_2_select_option = htmlentities(trim(addslashes(strip_tags($stp_2_select_option))));

     $note = 0;
    if($stp_1_select_option == 3){
        $note1 = 10;
    }else{
        $note1 = 0;
    }
    if($stp_2_select_option == 1){
        $note2 = 10;
    }else{
        $note2 = 0;
    }

    $fin = $note1 + $note2;
    $tabs = array(
        'note_final' => $fin
    );

    $_SESSION['note'] = $tabs;

    header('location:' . $domaine .'/result');



}