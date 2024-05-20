<?php

// Check to see if user submitted form and got sent here via post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set variables to be what the user entered
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    try {
        // Link to database through dbh-inc.php file
        require_once "dbh-inc.php";

        // SQL query to insert user data into users table
        $query = "INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?);";

        // prepare method to prepare the query to be executed
        $statement = $pdo->prepare($query);

        // execute method to execute the query with our values
        $statement->execute([$first_name, $last_name, $email]);

        // close connection and statement for best practice
        $pdo = null;
        $statement = null;

        // keep the user at the index.php page
        header("Location: ../index.php");

        // exit
        die();
    } catch (PDOException $e) {
        // End the script and display error message
        die("Query failed: " . $e->getMessage());
    }

} else {
    // If accessed page a different way, send user back to index.php page
    header("Location: ../index.php");
}
