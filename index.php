<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Demo CI/CD PHP</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Danh sách người dùng (Từ Database)</h1>
    <ul>
        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>ID: " . $row["id"] . " - Tên: " . $row["username"] . "</li>";
            }
        } else {
            echo "0 kết quả";
        }
        $conn->close();
        ?>
    </ul>

</body>

</html>