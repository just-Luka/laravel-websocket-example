<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <style>
            body {
              font-family: sans-serif;
            }
      
            .chat-container {
              background-color: lightgray;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
              margin-left: 20%;
              margin-right: 20%;
            }
      
            .chat-header {
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 20px;
            }
      
            .chat-header h3 {
              margin: 0;
            }
      
            .chat-header button {
              background-color: transparent;
              border: 1px solid gray;
              padding: 10px 20px;
              border-radius: 20px;
              font-size: 14px;
              outline: none;
              cursor: pointer;
            }
      
            .chat-body {
              height: 300px;
              overflow-y: scroll;
            }
      
            .chat-message {
              display: flex;
              align-items: flex-start;
              margin-bottom: 20px;
            }
      
            .chat-message img {
              width: 50px;
              height: 50px;
              border-radius: 25px;
              margin-right: 20px;
            }
      
            .chat-message p {
              background-color: white;
              padding: 10px;
              border-radius: 10px;
              box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
              font-size: 14px;
              max-width: 60%;
            }
      
            .chat-message p:last-child {
              text-align: right;
              background-color: lightblue;
              color: white;
            }
      
            .chat-input {
              display: flex;
              align-items: center;
              margin-top: 20px;
            }
            .chat-input form {
                display: contents;
            }
            .chat-input input[type="text"] {
              flex-grow: 1;
              padding: 10px;
              font-size: 14px;
              border: 1px solid gray;
              border-radius: 20px;
              outline: none;
            }
      
            .chat-input button {
              background-color: lightblue;
              color: white;
              border: none;
              padding: 10px 20px;
              border-radius: 20px;
              font-size: 14px;
              outline: none;
              cursor: pointer;
            }
          </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat - Websocket</title>

        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="chatapp"></div>
    </body>
</html>
