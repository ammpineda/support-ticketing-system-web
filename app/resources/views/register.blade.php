<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CounselCompanion | Register</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      
      .container {
        
        margin: 0 auto;
        position: relative;
        max-width: 700px;
        width: 50%;
        background: #fff;
        padding: 25px;
      }
      h1 {
        margin-top: 20px;
        font-size: 50px;
        color: #333;
        font-weight: 500;
        text-align: center;
      }
      h4 {
        font-size: 25px;
        color: #333;
        font-weight: 500;
        text-align: center;
      }
      .container .form {
        margin-top: 10px;
        
        margin-bottom: 30px;
      }
      .form .input-box {
        width: 100%;
        margin-top: 20px;
      }
      .input-box label {
        color: #333;
      }

      .input-box {
  width: 100%;
  margin-top: 20px;
}

.input-box input[type="text"],
.input-box input[type="email"],
.input-box input[type="password"] {
  width: calc(100% - 30px); 
  height: 50px;
  outline: none;
  font-size: 1rem;
  color: #707070;
  border: 1px solid black;
  border-radius: 6px;
  padding: 0 15px;
}

.input-box input[type="text"]:focus,
.input-box input[type="email"]:focus,
.input-box input[type="password"]:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

      .form :where(.input-box input) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid black;
        border-radius: 6px;
        padding: 0 15px;
      }
      .input-box input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
      }
      .form .column {
        display: flex;
        column-gap: 15px;
      }

      .form button {
        height: 55px;
        width: 100%;
        color: black;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: 1px solid black;
        cursor: pointer;
        background: #FCE4B4;
      }

      .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: .25rem;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: .25rem;
        }

      @media screen and (max-width: 500px) {
        .form .column {
          flex-wrap: wrap;
        }
      }
    </style>
  </head>
  <body>
    @include('navbar')
    <section class="container">
      <h1>Welcome!</h1>
      <br />
      <h4>Join us to access support.</h4><br>

      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{route('register')}}" method="POST" class="form">
        @csrf
        <div class="column">
          <div class="input-box">
            <input type="text" name="first_name" placeholder="First Name" required />
          </div>
          <div class="input-box">
            <input type="text" name="last_name" placeholder="Last Name" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <input type="text" name="program" placeholder="Program" required />
          </div>
          <div class="input-box">
            <input type="text" name="year" placeholder="Year (1st, 2nd, 3rd, or 4th)" required />
          </div>
        </div> 
        <div class="input-box">
          <input type="email" name="email" placeholder="Email" required />
        </div>    
        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required />
        </div>        
          </div>
        </div>
        <br />
        <br />
        <button>Join</button>
      </form>
    </section>
    @include('footer')
  </body>
</html>