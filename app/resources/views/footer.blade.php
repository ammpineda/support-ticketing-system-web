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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            font-size: 20px;
        }



        .footer {
            background-color: #FFFCB1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            border-top: 2px solid #3A0000; /* Border line color */
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer-logo img {
            width: 400px; 
        }

        .footer-pages {
            flex: 1; 
            display: flex;
            justify-content: center; 
        }

        .footer-pages a {
            color: #3A0000;
            margin-right: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="footer">
    <div class="footer-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div class="footer-pages">
        <p>© 2024 CouncelCompanion | IT136L PROJECT FOPI01</p>
    </div>
    <div class="footer-pages">
        <p><b><i class="fas fa-phone-alt"></i></b> +63 2 2922 923</p>
    </div>
    
</div>

</body>
</html>