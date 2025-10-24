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
        if (isset($_POST['bookday'])) {
            echo "Date : " . htmlspecialchars($_POST['bookday']) . "<br>";
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
        if (isset($_POST['accom']) || isset($_POST['4day']) || isset($_POST['10day'])) {
    echo "<p>Booking: ";

    if (isset($_POST['accom'])) echo htmlspecialchars($_POST['accom']) . " ";
    if (isset($_POST['4day'])) echo htmlspecialchars($_POST['4day']) . " ";
    if (isset($_POST['10day'])) echo htmlspecialchars($_POST['10day']) . " ";

    echo "</p>";
} else {
    echo "CHECK PLS";
}
     if (isset($_POST['species'])) {

        $species_map = [
            'M' => 'Human',
            'D' => 'Dwarf',
            'E' => 'Elf',
            'H' => 'Hobbit'
        ];

        
        $species_code = htmlspecialchars($_POST['species']);
        $species_name = $species_map[$species_code] ?? 'Unknown';


    echo "<p>Species: " . $species_name . "</p>";
} else {
    echo "<p>CHECK PLS</p>";
}

    echo "</p>";
} else {
    echo "CHECK PLS";
}  
    ?>
</body>
</html>
