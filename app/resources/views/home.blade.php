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
        <link rel="stylesheet" href="">
        <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      
      
      h1 {
        font-size: 50px;
        color: #333;
        font-weight: 500;
        text-align: left;
      }
      .container{
        height: 40vh;
        display: flex;
        align-items: center;
        justify-content: space-evenly; 
        background: #FFFEE1;
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
        border: none;
        outline: none;
        padding-left: 25px;
      }
      .container-left textarea{
        height: 140px;
        padding-top: 15px;
      }
      .container-right img{
        width: 550px;
      }
      button {
        height: 45px;
        width: 160px;
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
	  .container2{
        height: 40vh;
        display: flex;
        align-items: center;
		flex-direction: column;
		margin-top: 30px;
        justify-content: space-evenly; 
        margin-bottom: 60px;
	  }
	  .posters{
		margin-top: 30px;
	  }
	  .posters img{
	    width: 250px;
		margin-left: 20px;
		margin-right: 20px;
	  }
	</style>
    </head>
    <body>

        @include('navbar')

        <div class="container">
        <div class="container-left">
            <img src="{{asset('images/Banner.png')}}">
            <button>Get started</button>
        </div>
        <div class="container-right">
            <img src="{{asset('images/ImageAsset.png')}}">
        </div>
        </div>
        <div class="container2">
        <h2>News & Announcements</h2>
        <div class="posters">
            <img src="{{asset('images/PosterAsset1.png')}}">
            <img src="{{asset('images/PosterAsset2.png')}}">
            <img src="{{asset('images/PosterAsset3.png')}}">
        </div>
        </div>

        @include('footer')
        <script src="" async defer></script>
    </body>
</html>