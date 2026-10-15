<?php
include("db.php");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Template</title>
</head>
<body>
    <h1>Product List</h1>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p><strong>" . $row['title'] . "</strong> - £" . $row['price'] . " (" . $row['category'] . ")</p>";
        }
    } else {
        echo "<p>No products found.</p>";
    }
    ?>
</body>
</html>