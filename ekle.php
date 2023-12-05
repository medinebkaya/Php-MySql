<?php 

include("connection.php");
$ad=$_POST["name"];
$soyad=$_POST["surname"];
$kullanici_adi=$_POST["username"];
$sifre=$_POST["password"];
$email=$_POST["email"];

echo $ad."<br>";
echo $soyad."<br>";
echo $kullanici_adi."<br>";
echo $sifre."<br>";
echo $email."<br>";

$ekle=mysqli_query($conn,"INSERT INTO $tablo (adi,soyadi, parola, email, kullanici_adi) VALUES ('$ad','$soyad','$sifre','$email', '$kullanici_adi')");
if ($ekle) {
    echo "Veri başarıyla eklendi.";
} else {
    echo "Veri eklenirken bir hata oluştu: " . mysqli_error($conn);
}

?>
