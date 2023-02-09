import React from 'react';

export default function ChatInput(props) {
  return (
    <form onSubmit={props.onSubmit}>
      <div className="chat-input">
        <input type="text" value={props.value} onChange={props.onChange} placeholder="Type your message here..." />
        <button type="submit">Send</button>
      </div>
    </form>
  );
}