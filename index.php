<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>PHP contact form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- Contact form to submit name and email address -->
    <div id="formContainer">
    <form id="contactForm">
        <h1>Subscribe to our mailing list</h1>
        <p>First Name: <input type="text" name="first_name" id="firstName" placeholder="First Name"></p>
        <p>Last Name: <input type="text" name="last_name" id="lastName" placeholder="Last Name"></p>
        <p>Email: <input type="text" name="email" id="email" placeholder="Email"></p>
        <button type="submit">Submit</button>
    </form>
    <p id="successMessage" class="hide">Thank you! Request received</p>
    </div>

    <script src="formhandler.js"></script>

</body>

</html>