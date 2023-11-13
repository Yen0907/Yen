<?php
// Tạo mảng kết hợp chứa thông tin sản phẩm
$products = array(
    "product1" => array(
        "name" => "Sản phẩm A",
        "price" => 20.5,
        "quantity" => 10
    ),
    "product2" => array(
        "name" => "Sản phẩm B",
        "price" => 15.75,
        "quantity" => 5
    ),
    "product3" => array(
        "name" => "Sản phẩm C",
        "price" => 30.0,
        "quantity" => 8
    )
);

// Hiển thị thông tin của tất cả sản phẩm
echo "<h2>Thông tin sản phẩm:</h2>";
foreach ($products as $product) {
    echo "<p>";
    echo "Tên sản phẩm: " . $product["name"] . "<br>";
    echo "Giá: $" . $product["price"] . "<br>";
    echo "Số lượng: " . $product["quantity"] . "<br>";
    echo "</p>";
}

// Hàm tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product["price"] * $product["quantity"];
    }
    return $totalValue;
}

// Hiển thị tổng giá trị của tất cả sản phẩm
$totalValue = calculateTotalValue($products);
echo "<h2>Tổng giá trị của tất cả sản phẩm: $" . $totalValue . "</h2>";
?>