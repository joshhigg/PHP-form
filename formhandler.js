$(document).ready(function () {
    // function fires when submit button is clicked
    $('#contactForm').on('submit', function (event) {
        event.preventDefault();
        
        // check if each input has a value.  If not, throw alert and return
        var isValid = true;
        $('#contactForm input').each(function () {
            if ($(this).val() === '') {
                isValid = false;
                alert('Please fill out all fields');
                return false;
            }
        });

        // Use a regex to check the email to ensure it is in the proper format
        const emailRegex = new RegExp('^[\\w.%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$');
        // Name regex allows for names to start with letters, but will allow spaces, ', and -, as long as they are followed by letters
        const nameRegex = new RegExp("^[A-Za-z]+(([' -][A-Za-z])?[A-Za-z]*)*$");

        if (!emailRegex.test($('#email').val())) {
            isValid = false;
            alert('Please enter a valid email');
            return false;
        }

        if (!nameRegex.test($('#firstName').val()) || !nameRegex.test($('#lastName').val())) {
            isValid = false;
            alert('Please enter a valid name');
            return false;
        }

        // If all inputs are there, 
        if (isValid) {
            // serialize the form data to enable it to be submitted using the AJAX request
            var formData = $(this).serialize();

            // use AJAX to send the form data to the formhandler-inc.php file with simple error handling
            $.ajax({
                type: 'POST',
                url: 'includes/formhandler-inc.php',
                data: formData,
                success: function () {
                    console.log('success!');
                    // clear out form fields
                    $('#firstName').val('');
                    $('#lastName').val('');
                    $('#email').val('');
                    $('#successMessage').removeClass('hide').addClass('visible');
                },
                error: function () {
                    console.log('an error occured in the ajax request');
                }
            });
            
        }
        
    });
});