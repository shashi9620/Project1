document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');
    var messageDiv = document.getElementById('message');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        var formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            // Handle successful response
            messageDiv.textContent = data; // Update message
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            messageDiv.textContent = 'An error occurred during form submission.';
        });
    });
});
