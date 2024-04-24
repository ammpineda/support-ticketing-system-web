<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CounselCompanion | Submit Form</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      * {
        font-family: "Poppins", sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background: #FFFEE1;
      }
      h1 {
        font-size: 50px;
        color: #333;
        font-weight: 500;
        text-align: left;
      }
      .container{
        height: 80vh;
        display: flex;
        align-items: center;
        justify-content: space-evenly; 
      }
      .container-left{
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 20px;
      }
      .container-inputs{
        width: 500px;
        height: 50px;
        border: 1px solid black;
        outline: none;
        padding-left: 25px;
      }
      .container-left textarea{
        height: 140px;
        padding-top: 15px;
      }
      .container-right img{
        width: 500px;
      }
      button {
        height: 55px;
        width: 300px;
        color: black;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: 1px solid black;
        cursor: pointer;
        background: #FCE4B4;
        text-align: center;
      }
      @media (max-width:800px){
        .container-inputs{
          width: 80vw;
        }
        .container-right{
          display: none;
        }
      }
    </style>
  </head>
  <body>
    @include('navbar')
    <div class="container">
    <form action="{{ route('submit_ticket') }}" method="POST" class="container-left">
        @csrf
        <h1>Support Ticket Form</h1>
        <br>
        <label>Subject</label>
        <input type="text" name="subject" class="container-inputs" required>
        <label>Description of Concern</label>
        <textarea name="description" class="container-inputs" required></textarea>
        <button type="submit">Submit</button>
    </form>
      <div class="container-right">
        <img src="{{asset('images/submit-ticket.png')}}">
      </div>
    </div>
    @include('footer')
  </body>
</html>