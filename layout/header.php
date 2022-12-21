<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizo HTML Template - V.6</title>
    <link rel="stylesheet" href="<?=$asset?>/assets/news/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&amp;family=Poppins:wght@700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$asset?>/assets/news/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$asset?>/assets/news/css/animate.min.css">
    <link rel="stylesheet" href="<?=$asset?>/assets/news/css/style.css">
    <link rel="stylesheet" href="<?=$asset?>/assets/news/css/font-size.css">
    <style>
        .container{
            max-width: 1320px !important;
        }
        .box{
            box-shadow: rgb(99 99 99 / 20%) 0 2px 8px 0;
            background: #fff;
            border-radius: 6px;
        }
        .box p{
            line-height: 1.3;
        }
        .box h5{
            line-height: 1.3;
        }
        .box-img img{
            object-fit: cover;
            height: 150px;
            border-radius: 6px 6px 0 0;
            width: 100% !important;
        }
        .box-content{
            padding: 10px;
        }
        .text-right{
            text-align: right;
        }
        .myBtn a{
            background: #e1330a59;
            color: #e1330a;
            padding: 5px 20px;
            border-radius: 6px;
            width : 100%;
        }
        .myBtn a:hover{
            background: #e1330a;
            color: #fff;
        }
        .w-20{
            width: 20% !important;
        }
        .w-30{
            width: 30% !important;
        }
        .myClock{
            color: #f77523;
            font-size: 33px;
        }

        .text-chrono{
            color: #fd5b2c;
            background: #fff;
            padding: 10px 2px;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 24%) 0 3px 8px;
            text-align: center;
            border: 0;
            font-weight: 700;
        }
        .text-note{
            color: #008000;
            background: #fff;
            padding: 10px 25px;
            border-radius: 6px;
            box-shadow: rgb(0 0 0 / 24%) 0 3px 8px;
            text-align: center;
            border: 0;
            font-weight: 700;
        }
        .chrono-img{
            position: absolute;
            left: 306px;
            top: 9px;
        }

        .alert {
            position: relative;
            padding: 7px 10px;
        }
        .question_title h1 {
            font-weight: 800;
            padding: 10px 0 10px 0 !important;
        }
        .next_btn{

            padding: 7px 35px !important;
        }
        .box-correction{
            background: #fff;
            border-radius: 15px;
        }
        .w-icon-reaction{
            width: 130px;
        }
        .btn-green-transparent{
            background: #00800052;
            color: #008000;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;

        }
        .btn-green-transparent:hover{
            background: #008000;
            color: #fff;
        }
        .btn-blue-transparent{
            background: rgba(10, 88, 202, 0.37);
            color: #0a58ca;
            padding: 6px 15px;
            font-weight: 500;
            border-radius: 6px;
        }
        .btn-blue-transparent:hover{
            background: #0a58ca;
            color: #fff;
        }
        .w-85{
            width: 85%;
        }
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1140px !important;
        }
        .myFeuille{
            max-width: 56.25rem;
            min-height: 45.9375rem;
            margin: 5rem auto;
            border-radius: 15px;
        }

        .btn-orange {
            right: 55px;
            bottom: 26px;
            font-size: 1.125rem;
            font-weight: 700;
            padding: 0.84375rem 4.375rem;
            outline: none;
            border: none;
            background: -webkit-gradient(linear, left top, right top, from(#ff522f), to(#f09719));
            background: linear-gradient(to right, #ff522f, #f09719);
        }

        fieldset {
            border: 2px solid #efefef;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 15px;
        }






        @media(max-width: 767px) {
            .offset-4,.offset-3,.offset-2 {
                margin-left: 0;
            }


        }


    </style>
</head>
<body>
<div class="wrapper overflow-hidden">