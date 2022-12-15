<?php
if(isset($_POST['entreprise']) and isset($_POST['address_entreprise']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['phone']) and isset($_POST['isoPhone']) and isset($_POST['dialPhone'])  and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
extract($_POST);
    $code = rand(100000, 999999);
    $entreprise = htmlentities(trim(addslashes(strip_tags($entreprise))));
    $address_entreprise = htmlentities(trim(addslashes(strip_tags($address_entreprise))));
    $nom = htmlentities(trim(addslashes(strip_tags($nom))));
    $prenom = htmlentities(trim(addslashes(strip_tags($prenom))));

    $phone = htmlentities(trim(addslashes(strip_tags($phone))));
    $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
    $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));

    $phone2 = htmlentities(trim(addslashes(strip_tags($phone2))));
    $isoPhone2 = htmlentities(trim(addslashes(strip_tags($isoPhone2))));
    $dialPhone2 = htmlentities(trim(addslashes(strip_tags($dialPhone2))));
    $slug = create_slug($_POST['prenom']);
    $numero = $dialPhone.$phone;
    $propriete1 = 'nom';
    $propriete2 = 'prenom';
    $propriete3 = 'nom_entrep';
    $propriete4 = 'adresse_entrep';
    $propriete5 = 'contact1';
    $propriete6 = 'iso_contact1';
    $propriete7 = 'dial_contact1';
    $propriete8 = 'contact2';
    $propriete9 = 'iso_contact2';
    $propriete10 = 'dial_contact2';
    $propriete11 = 'slug';
    $propriete12 = '';
    $propriete = '13';


    if(is_numeric($numero)){
            $updClient = $client->updateData11($propriete1,$nom,$propriete2,$prenom,$propriete3,$entreprise,$propriete4,$address_entreprise,$propriete5,$phone,$propriete6,$isoPhone,$propriete7,$dialPhone,$propriete8,$phone2,$propriete9,$isoPhone2,$propriete10,$dialPhone2,$propriete11,$slug,$_SESSION['_userivoirebox3647']['id_client']);
            if($updClient > 0){
                header('location:'.$domaine.'/dashboard');
            }else{
                $errors['complete'] = 'Une erreur s\'est produite lors de du traitement des données!';
            }

    }






}