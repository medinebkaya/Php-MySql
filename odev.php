<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="odev.php" method="$_POST">
        <input type="number" name="number" required>
        <input type="submit" value="Gönder">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    if ($number === '') {
        echo "Değer boş olamaz.";
    } else {
        $result = checkDivisibility($number);
        if ($result['divisible']) {
            echo "Girdiğiniz sayı 3'e bölünebilir.";
        } else {
            echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı " . $result['nextDivisible'] . "'dır.";
        }
    }
}

function checkDivisibility($number) {
    $divisible = ($number % 3 === 0);
    if ($divisible) {
        return ['divisible' => true];
    } else {
        $nextDivisible = ceil($number / 3) * 3;
        return ['divisible' => false, 'nextDivisible' => $nextDivisible];
    }
}
?>
