<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the value of the input field
    $name = htmlspecialchars($_POST['name']);
    if (empty($name)) {
        $greeting = "Hello, Guest!";
    } else {
        $greeting = "Hello, " . $name . "!";
    }
} else {
    $greeting = "Please enter your name!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Greeting Script</title>
</head>
<body>
    <h1>PHP Greeting Example</h1>
    <p><?php echo $greeting; ?></p>

    <!-- Form to collect the user's name -->
    <form method="post" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
