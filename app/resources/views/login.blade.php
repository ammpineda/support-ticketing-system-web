<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CounselCompanion | Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
     

      

      .container {
        position: relative;
        max-width: 700px;
        width: 50%;
        background: #fff;
        padding: 25px;
        margin: 0 auto; 
      }

      h1 {
        margin-top: 100px;
        font-size: 50px;
        color: #333;
        font-weight: 500;
        text-align: center;
      }
      .container .form {
        margin-top: 30px;
        margin-bottom:110px;
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
.input-box input[type="password"] {
  width: calc(100% - 30px); /* Subtract the padding from the width */
  height: 50px;
  outline: none;
  font-size: 1rem;
  color: #707070;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}

.input-box input[type="text"]:focus,
.input-box input[type="password"]:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

      .form :where(.input-box input) {
        position: relative;
        height: 50px;
        width: 700px;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
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

      .form {
  margin-top: 30px;
  margin-bottom: 110px;
}

.form button {
  height: 55px;
  width: 700px; 
  border: 1px solid black;
  color: black;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  cursor: pointer;
  background: #FCE4B4;
  display: inline-block; 
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
      <form action="#" class="form">
        <div class="input-box">
          <label>Email</label>
          <input type="text" required />
        </div>    
        <div class="input-box">
          <label>Password</label>
          <input type="password" required />
        </div>        
          </div>
        </div>
        <br />
        <br />
        <button>Log In</button>
      </form>
    </section>
    @include('footer')
  </body>
</html>