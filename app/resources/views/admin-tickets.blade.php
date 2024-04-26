<!DOCTYPE html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CounselCompanion | My Tickets</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

  * {
      font-family: "Poppins", sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
  }

  body {
      background: #FFFEE1;
  }

  h1 {
      font-size: 50px;
      color: #333;
      font-weight: 500;
      text-align: left;
  }

  .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 80vh;
  }

  .table {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      max-width: 100%; /* Set maximum width */
      overflow-x: auto; /* Enable horizontal scrolling */
      overflow-y: auto; /* Enable vertical scrolling */
  }

  .table table {
      border-collapse: collapse;
      width: 100%;
      max-width: 1300px;
      border: 1px solid; /* Added border to both tables */
  }

  .table th,
  .table td {
      border-top: 1px solid;
      border-bottom: 1px solid;
      padding: 10px;
      background-color: white;
  }

  .table th {
      color: black;
      background-color: #EEB388;
  }

  .table th.headings {
      width: 16.67%;
      text-align: left; /* Align headings text to left */
  }

  button {
      height: 35px;
      width: 110px;
      color: black;
      font-weight: 400;
      cursor: pointer;
      background-color: #FCE4B4;
      text-align: center;
      border-radius: 10px; 
      border: 1px black;
      border: 1px solid black;  
  }

  @media (max-width: 800px) {
      .table table {
          max-width: 80vw;
      }
  }


      </style>
  </head>
  <body>
    @include('navbar')
    
    <body>
    <div class="container">
      <div class="table">
              <h1>Tickets Managed by You</h1>
              <table style="border: 1px solid;">
    <tr>
        <th class="headings" style="width: 70px;">Ticket ID</th>
        <th class="headings" style="width: 90px;">Subject</th>
        <th class="headings" style="width: 180px;">Description</th>
        <th class="headings" style="width: 100px;">Status</th>
        <th class="headings" style="width: 120px;">Date Updated</th>
        <th class="headings" style="width: 100px;">Actions</th>
    </tr>
    @foreach($tickets as $ticket)
    @if($ticket->status === "In Progress" || $ticket->status === "Resolved")
    <tr>
        <td>{{ $ticket->id }}</td>
        <td>{{ $ticket->subject }}</td>
        <td>{{ Str::limit($ticket->description, 50) }}</td>
        <td>{{ $ticket->status }}</td>
        <td>{{ $ticket->updated_at->format('m-d-y') }}</td>
        <td><a href="{{ $ticket->status === 'Unopened' ? '#' : route('ticket.messages', ['ticket_id' => $ticket->id]) }}"><button>VIEW</button></a></td>
    </tr>
    @endif
    @endforeach
</table>

          </div><br><br>
              <div class="table">
                <h1>Unhandled Tickets</h1>

                <table>
    <tr>
        <th class="headings" style="width: 50px;">Ticket ID</th>
        <th class="headings" style="width: 90px;">Subject</th>
        <th class="headings" style="width: 180px;">Description</th>
        <th class="headings" style="width: 100px;">Status</th>
        <th class="headings" style="width: 150px;">Date Submitted</th>
        <th class="headings" style="width: 100px;">Actions</th>
    </tr>
    @foreach($tickets as $ticket)
        @if($ticket->status === 'Unopened' || $ticket->status === 'Unresolved')
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->subject }}</td>
                <td>{{ Str::limit($ticket->description, 50) }}</td>
                <td>{{ $ticket->status }}</td>
                <td>{{ $ticket->created_at->format('m-d-y') }}</td>
                <td>
    <form action="{{ route('ticket.accept', ['id' => $ticket->id]) }}" method="POST">
        @csrf
        <button type="submit">ACCEPT</button>
    </form>
</td>
            </tr>
        @endif
    @endforeach
</table>

          </div>
      </div>

    @include('footer')
  </body>
</html>