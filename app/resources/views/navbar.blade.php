<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>

        * {
            font-family: 'Roboto', sans-serif;
            margin:0;
            font-size: 20px;
        }

        .navbar {
                background-color: #FFFCB1;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 30px;
                border: 2px solid #3A0000; 
            }        

            .navbar-logo img {
            width: 400px; 
        }

        .navbar-pages a {
            color: #3A0000;
            margin-right: 50px;
            text-decoration: none;
        }

        .navbar-buttons {
            display: flex;
        }

        .navbar-buttons a {
            background-color: #EEB388;
            color: #3A0000;
            width: 100px;
            text-align: center;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-buttons {
                margin-top: 10px;
            }
        }

        </style>

    </head>
    <body>
        
    <div class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div class="navbar-pages">
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">EVENTS</a>
        </div>
        <div class="navbar-buttons">
            <a href="#">LOGIN</a>
            <a href="#">REGISTER</a>
        </div>
    </div>

    </body>
</html>