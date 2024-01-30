function temizDiziOlustur($dizi, $adet) {
    $temizDizi = array_filter($dizi); // Boş elemanları temizle
    $rastgeleDegerler = array_rand($temizDizi, $adet); // Belirtilen adette rastgele indisler seç
    if (!is_array($rastgeleDegerler)) {
        $rastgeleDegerler = [$rastgeleDegerler];
    }
    $sonucDizi = array_map(function($index) use ($temizDizi) {
        return $temizDizi[$index];
    }, $rastgeleDegerler); // Rastgele indislerle yeni bir dizi oluştur
    return $sonucDizi;
}

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(temizDiziOlustur($planets, 2));
print_r(temizDiziOlustur($planets, 3));
print_r(temizDiziOlustur($planets, 2));
print_r(temizDiziOlustur($planets, 4));
print_r(temizDiziOlustur($planets, 5));
