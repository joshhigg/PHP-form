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
                },
                error: function () {
                    console.log('an error occured in the ajax request');
                }
            });

            // clear out form fields
            $('#firstName').val('');
            $('#lastName').val('');
            $('#email').val('');
        }
    });
});