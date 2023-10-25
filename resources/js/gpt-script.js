document.getElementById('user-input').addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && e.target.value) {
        // Send user message to server
        const message = e.target.value;
        e.target.value = '';
        console.log(e.target.value);
        addToChatHistory('User', message);
        sendUserMessageToServer(message);
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
