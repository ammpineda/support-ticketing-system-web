<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CounselCompanion | Ticket Messages</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Add your CSS styling here */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    body {
      font-family: 'Poppins', sans-serif;
    }

    .chat-container {
      width: 900px; 
      height: 600px; 
      margin: 50px auto; 
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: hidden;
    }

    .chat-heading {
      background-color: #EEB388; 
      color: black;
      padding: 15px;
      font-size: 20px;
      text-align: center;
      font-weight:bold;
    }

    .chat-messages {
      max-height: 400px;
      overflow-y: scroll;
      padding: 15px;
    }

    .chat-message {
      margin-bottom: 15px;
      padding: 8px 15px;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    .chat-input {
      display: flex;
      align-items: center;
      padding: 15px;
      background-color: #fff;
    }

    .message-input {
      flex: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      outline: none;
      width: 730px;
    }

    .send-button {
      padding: 10px 25px;
      margin-left: 15px;
      border: none;
      border-radius: 20px;
      background-color: #FCE4B4; 
      color: black;
      font-size: 16px;
      cursor: pointer;
      outline: none;
    }

    .send-button:hover {
      background-color: darkorange; 
    }
  </style>
</head>
<body>
  @include('navbar')

  <div class="chat-container">
  <div class="chat-heading">
    Chat with Support (Ticket #{{ $ticket->id }})
  </div>
  <div class="chat-messages">
    @foreach($messages as $message)
      @if($message->sent_by == "Admin")
        <div class="chat-message">
          <strong>{{ $staff->first_name }} {{ $staff->last_name }}</strong>: {{ $message->message_content }}
        </div>
      @elseif($message->sent_by == "Student")
        <div class="chat-message">
          <strong>{{ $student->first_name }} {{ $student->last_name }}</strong>: {{ $message->message_content }}
        </div>
      @else
        <div class="chat-message">
          {{ $message->message_content }}
        </div>
      @endif
    @endforeach
  </div>

  <div class="chat-input">
  <form action="{{ route('send.message') }}" method="POST">
      @csrf
      <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
      <input type="text" class="message-input" name="message_content" placeholder="Type your message here..." />
      <button type="submit" class="send-button">Send</button>
    </form>
  </div>
</div>




  @include('footer')
</body>
</html>
