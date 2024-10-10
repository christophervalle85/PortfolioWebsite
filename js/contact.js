$(document).ready(function() {
    $('#contact-form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: '../controllers/send_message.php', // Update this path as necessary
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                // Show success or error message
                let notification = $('#notification');
                if (response.success) {
                    notification.text(response.message).css('background-color', '#d4edda').show();
                    $('#contact-form')[0].reset(); // Reset the form
                } else {
                    notification.text(response.errors.join('\n')).css('background-color', '#f8d7da').show();
                }

                // Hide the notification after 5 seconds
                setTimeout(function() {
                    notification.fadeOut();
                }, 5000);
            },
            error: function() {
                let notification = $('#notification');
                notification.text('An error occurred. Please try again later.').css('background-color', '#f8d7da').show();
                setTimeout(function() {
                    notification.fadeOut();
                }, 5000);
            }
        });
    });
});
