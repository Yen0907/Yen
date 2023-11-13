<?php
// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number < 2) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }

    return true; // Là số nguyên tố
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "<h2>Danh sách các số nguyên tố từ 1 đến 100:</h2>";
echo "<ul>";

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "<li>$i</li>";
    }
}

echo "</ul>";
?>