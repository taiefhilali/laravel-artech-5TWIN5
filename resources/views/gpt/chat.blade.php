<html>
    <body>
<div id="chat-container" style="display: flex;
    flex-direction: row;
    width: 100vw;
    height: 100vh;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 25px;
    background-color: #e7e7e7;">
    <div id="chat-history">
        {{$message}}
    </div>
    <form action="{{ route('chat.sendMessage') }}" method="POST">
    @csrf
    <input id="message" name="message" type="text" style="height: 50px;
    border-radius: 15px;
    width: 500px;
    padding: 5px;
    border: 3px solid #a9a9c4;
    padding-left: 10px;" placeholder="Type a message..." autofocus>
    </form>
</div>
<script>document.getElementById('user-input').addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && e.target.value) {
        // Send user message to server
        const message = e.target.value;
        e.target.value = '';
        addToChatHistory('User', message);
        //sendUserMessageToServer(message);
    }
});

function sendUserMessageToServer(message) {
    // Make a POST request to your Laravel endpoint, e.g., '/chat'
    // Pass the user message as data
    fetch('/chat', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ message: message }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the chatbot's response
        addToChatHistory('Chatbot', data.message);
    })
    .catch(error => console.error(error));
}

function addToChatHistory(sender, message) {
    // Add the message to the chat history display
    const chatHistory = document.getElementById('chat-history');
    chatHistory.innerHTML += `<div><strong>${sender}:</strong> ${message}</div>`;
}
</script>
</body>
</html>
