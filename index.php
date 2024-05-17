<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>PHP contact form</title>
</head>

<body>
    <!-- Contact form to submit name and email address -->
    <form action="includes/formhandler-inc.php" method="post">
        First Name: <input type="text" name="first_name" placeholder="First Name"><br>
        Last Name: <input type="text" name="last_name" placeholder="Last Name"><br>
        Email: <input type="text" name="email" placeholder="Email"><br>
        <button>Submit</button>


    </form>

</body>

</html>