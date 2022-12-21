<?php
ini_set("session.cookie_httponly", True);
session_start();


//Include Connexion
include_once 'class/Connexion.php';
// appelle des class
include_once "class/Quiz.class.php";
include_once "class/Question.class.php";
include_once "class/Option.class.php";
include_once "class/Reponse.class.php";
include_once "class/Reponse.deatail.php";

$cdn = 'cdn';
$class = 'class';
$controller = 'controller';
$function = 'function';
$mail = 'mail';
$layout = 'layout';
$pages = 'pages';
//https://detectdevice.com/#php-class
include_once $function."/detectdevice/Mobile_Detect.php";
include_once $function."/detectdevice/detect.php";
// include function
include_once $function."/function.php";
include_once $function."/domaine.php";






/*
if(isset($_COOKIE['_cookieivoirebox3647']) AND !isset($_SESSION['_userivoirebox3647'])){
    $username = my_decrypt($_COOKIE['_cookieivoirebox3647']);
    $result = $client->getClientById($username);
    if($data = $result->fetch()){
        if($data['bloquer'] == 0){
            $_SESSION['_userivoirebox3647'] = $data;
        }else{
            setcookie('_cookieivoirebox3647',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
        }
    }else{
        setcookie('_cookieivoirebox3647',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
    }
}

if(isset($_SESSION['_userivoirebox3647'])){
    $user = $client->getClientById($_SESSION['_userivoirebox3647']['id_client'])->fetch();
    if($user['bloquer'] != 0){
        if(isset($_COOKIE['_cookieivoirebox3647'])) {
            setcookie('_cookieivoirebox3647',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
        }
        unset($_SESSION['_userivoirebox3647']);
    }
}*/
