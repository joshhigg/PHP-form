<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>PHP contact form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <!-- Contact form to submit name and email address -->
    <form id="contactForm">
        <h1>Contact Us</h1>
        First Name: <input type="text" name="first_name" id="firstName" placeholder="First Name"><br>
        Last Name: <input type="text" name="last_name" id="lastName" placeholder="Last Name"><br>
        Email: <input type="text" name="email" id="email" placeholder="Email"><br>
        <button type="submit">Submit</button>
    </form>

    <script src="formhandler.js"></script>

</body>

<!-- To do -->
<!-- add .env file to secure password -->
<!-- style -->

</html>