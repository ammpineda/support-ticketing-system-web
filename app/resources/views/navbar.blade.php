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
            border: 1px solid black;
        }

        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%; 
            margin-left: 10px; 
            border: 2px solid #3A0000;
        }

        .profile-details {
            display: flex;
            align-items: center; 
        }

        .profile-details span {
            margin-right: 10px; 
        }

        .profile-details .logout-button {
    display: none;
}

.profile-details:hover .logout-button {
    display: inline-block;
}

.profile-details:hover span,
.profile-details:hover img {
    display: none;
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
            <a href="{{route('home')}}">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">EVENTS</a>
        </div>
        <div class="navbar-buttons">
            @if(session('is_student'))
            <div class="profile-details">
                <span>{{ session('first_name') }} {{ session('last_name') }}</span>
                <img class="profile-picture" src="{{ asset('images/default_dp.jpg') }}" alt="Profile Picture">
                <a href="" id="logout-btn" class="logout-button">LOGOUT</a>
            </div>
            @else
                <a href="{{ route('login-page') }}">LOGIN</a>
                <a href="{{ route('register-page') }}">REGISTER</a>
            @endif
        </div>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logout-btn').addEventListener('click', function(event) {
            event.preventDefault();
            // Send AJAX request to clear sessions
            fetch('{{ route("clear-sessions") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            })
            .then(response => {
                if (response.ok) {
                    // Sessions cleared successfully, redirect to login page or any other page
                    window.location.href = '{{ route("login-page") }}';
                } else {
                    // Handle error case
                    console.error('Failed to clear sessions');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>



    </body>
</html>