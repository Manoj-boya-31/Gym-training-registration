<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribtion</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <!-- a simple message to the user that appears in the middle of the page and has a button to the Gym page -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Thank you for subscribing!</h4>
                    <p>Now you will receive our latest news and updates.</p>
                    <hr>
                    <p class="mb-0">Click <a href="index.html">here</a> to go back to the home page.</p>
                </div>
            </div>
        </div>
</body>
<!-- write a php code to add the email to the database -->
<?php
    // connect to the database
    $conn = mysqli_connect("localhost", "root", "", "gym");
    // check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // get the email from the form if it exists
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        // insert the email into the database if it doesn't exist
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    // close the connection
    mysqli_close($conn);
?>
</html>