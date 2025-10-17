<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['firstname'])) {
            echo "Firstname : " . htmlspecialchars($_POST['firstname']) . "<br>";
        }
        else {
            echo "CHECK PLS";
        }
        if (isset($_POST['lastname'])) {
            echo "Lastname : " . htmlspecialchars($_POST['lastname']) . "<br>";
        }
        else {
            echo "CHECK PLS";
        }
        if (isset($_POST['age'])) {
            echo "Age : " . htmlspecialchars($_POST['age']) . "<br>";
        }
        else {
            echo "CHECK PLS";
        }
        if (isset($_POST['food'])) {
            echo "<p>Food Preference : " . htmlspecialchars($_POST['food']) . "</p>";
        }
        else {
            echo "CHECK PLS";
        }
        if (isset($_POST['date'])) {
            echo "Date : " . htmlspecialchars($_POST['date']) . "<br>";
        }
        else {
            echo "CHECK PLS";
        }
        if (isset($_POST['partysize'])) {
            echo "Party Size : " . htmlspecialchars($_POST['partysize']) . "<br>";
        }
        else {
            echo "CHECK PLS";
        }


    }
    ?>
</body>
</html>
