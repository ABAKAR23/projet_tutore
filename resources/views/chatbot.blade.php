<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #chat-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        #header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: 500;
        }

        #messages {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            max-height: 400px;
        }

        .message {
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .user-message {
            background-color: #e0f7fa;
            text-align: right;
        }

        .bot-message {
            background-color: #e1bee7;
            text-align: left;
        }

        #input-container {
            display: flex;
            border-top: 1px solid #ddd;
        }

        #message-input {
            flex: 1;
            border: none;
            padding: 10px;
            font-size: 14px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        #send-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        #send-button:hover {
            background-color: #0056b3;
        }

        #message-input:focus {
            outline: none;
        }
    </style>
</head>
<body>
<div id="chat-container">
    <div id="header">Chatbot</div>
    <div id="messages"></div>
    <div id="input-container">
        <input type="text" id="message-input" placeholder="Tapez votre message...">
        <button id="send-button">Envoyer</button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#send-button').click(function() {
            sendMessage();
        });

        $('#message-input').keypress(function(event) {
            if (event.keyCode === 13) { // Enter key
                sendMessage();
            }
        });

        function sendMessage() {
            var message = $('#message-input').val();
            if (message.trim() !== '') {
                $('#messages').append('<div class="message user-message">Vous: ' + message + '</div>');
                $('#message-input').val('');
                $.post({
                    url: '/chatbot',
                    data: { message: message },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#messages').append('<div class="message bot-message">Bot: ' + response.response + '</div>');
                        scrollToBottom();
                    }
                });
            }
        }

        function scrollToBottom() {
            $('#messages').scrollTop($('#messages')[0].scrollHeight);
        }
    });
</script>
</body>
</html>
