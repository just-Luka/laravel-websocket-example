import React from 'react';
import ReactDOM from 'react-dom/client';
import ChatMessage from '../components/ChatMessage';
import ChatInput from '../components/ChatInput';
import Echo from '../configs/echo';

var channel = Echo.private('privChannel');

class ChatApp extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      inputValue: '',
      messages: [],
    }
  }

  componentDidMount() {
    channel.listen('MessageSent', (data) => {
      this.setState((state, _) => ({
        messages: [
          ...state.messages,
          {
            id: data.message.id,
            user: data.user.name,
            message: data.message.message
          }
        ],
        inputValue: '',
      }))
    });
  }

  handleInputChange = (event) => {
    this.setState({
      inputValue: event.target.value,
    });
  };

  handleSubmit = (event) => {
    event.preventDefault();
    axios.post('/send', {message: this.state.inputValue});
  };

  render() {
    return (
      <div className="chat-container">
        <div className="chat-header">
          <h3>Chat App</h3>
          <button>Close</button>
        </div>
        <div className="chat-body">
          {this.state.messages.map((message) => (
            <ChatMessage key={message.id} user={message.user} message={message.message}/>
          ))}
        </div>
        <ChatInput onSubmit={this.handleSubmit} value={this.state.inputValue} onChange={this.handleInputChange}/>
      </div>
    );
  }
}

export default ChatApp;

if (document.getElementById('chatapp')) {
    const Index = ReactDOM.createRoot(document.getElementById("chatapp"));

    Index.render(
      <ChatApp/>
    )
}
