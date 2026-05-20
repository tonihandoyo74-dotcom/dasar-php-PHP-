<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<h2>Konversi Suhu</h2>

<form method="post">
    Masukkan Suhu Celsius:
    <input type="number" name="celsius" step="any" required>
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST['celsius'];

    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    $reamur = $celsius * 4/5;

    echo "<h3>Hasil Konversi:</h3>";
    echo "Celsius: $celsius °C<br>";
    echo "Fahrenheit: $fahrenheit °F<br>";
    echo "Kelvin: $kelvin K<br>";
    echo "Reamur: $reamur °R<br>";
}
?>

</body>
</html>