import React from 'react';

function ChatMessage(props) {
  return (
    <div className="chat-message">
      <img src="https://via.placeholder.com/50x50" alt="" />
      <p>
        <strong>{props.user}:</strong> {props.message}
      </p>
    </div>
  );
}

export default ChatMessage;