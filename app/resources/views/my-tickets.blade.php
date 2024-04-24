<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CounselCompanion | My Tickets</title>
  <link rel="stylesheet" href="style.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #FFFEE1;
    }

    .container {
      width: 100%;
      min-height: 90vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    h1 {
      margin-top:50px;  
      font-size: 50px;
      color: #333;
      font-weight: 500;
      text-align: center;
    }

    .callout {
      width: 50%;
      border: 2px solid #000;
      background-color: #fff;
      padding: 20px;
      margin-top: 50px;
    }

    .callout h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
    }

    .callout p {
      font-size: 18px;
      color: #333;
    }

    .star {
      font-size: 24px;
      color: gold;
      margin-right: 5px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(3, 305px); /* Three columns with fixed width */
      gap: 20px;
      margin-top: 50px;
      margin-bottom: 100px;
    }

    .box {
      width: 100%;
      height: 250px;
      background-color: #fff;
      border: 1px solid #000;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
      padding: 20px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      position: relative; /* Make box position relative for absolute positioning of button */
    }

    .box h3 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }

    .box p {
      font-size: 16px;
      color: #333;
      margin-bottom: 10px;
    }

    .subtitle {
      font-size: 14px;
      color: #666;
      margin-bottom: 10px;
    }

    /* Button styles */
    .view-button {
      position: absolute; /* Position button absolutely within the box */
      bottom: 20px; /* Adjust the distance from the bottom */
      left: 20px; /* Adjust the distance from the left */
      width: 100px;
      border: 1px solid #000;
      background-color: #FCE4B4;
      padding: 5px 10px;
      color: #333;
      cursor: pointer;
    }

    /* Status indicator styles */
    .status {
      position: absolute; /* Position status indicator absolutely within the box */
      bottom: 20px; /* Adjust the distance from the bottom */
      right: 20px; /* Adjust the distance from the right */
      padding: 5px 10px;
      background-color: #90EE90; /* Light green */
      color: #333;
      font-size: 14px;
    }
  </style>
</head>
<body>
  @include('navbar')

  <div class="container">
    <h1>Manage Your Tickets</h1>

    <div class="callout">
      <h2><span class="star">&#9733;</span> Important Message</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at ligula et justo porta efficitur vel id purus.</p>
    </div>

    <div class="grid">
      <div class="box">
        <h3>Title 1</h3>
        <p class="subtitle">Ticket Subject</p>
        <p>Description 1</p>
        <!-- Button -->
        <button class="view-button">View</button>
        <!-- Status -->
        <div class="status">Open</div>
      </div>
      <div class="box">
        <h3>Title 2</h3>
        <p class="subtitle">Ticket Subject</p>
        <p>Description 2</p>
        <!-- Button -->
        <button class="view-button">View</button>
        <!-- Status -->
        <div class="status">Closed</div>
      </div>
      <div class="box">
        <h3>Title 3</h3>
        <p class="subtitle">Ticket Subject</p>
        <p>Description 3</p>
        <!-- Button -->
        <button class="view-button">View</button>
        <!-- Status -->
        <div class="status">In Progress</div>
      </div>
    </div>
  </div>

  @include('footer')
</body>
</html>