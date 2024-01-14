<?php
$koneksi = mysqli_connect("localhost", "root", "", "furnitureweb");
$data = mysqli_query($koneksi, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Orders</title>
</head>

<body>
    <h1>Data Orders</h1>
    <table border="" cellspacing="0" cellpadding="10">
        <tr>
            <th>name</th>
            <th>phone</th>
            <th>address</th>
            <th>orderDate</th>
            <th>selectedProduct</th>
            <th colspan="2">Action</th>
        </tr>

        <?php while ($result = mysqli_fetch_array($data)) : ?>
            <tr>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['phone'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['orderDate'] ?></td>
                <td><?php echo $result['selectedProduct'] ?></td>
                <td><a href="?kode=<?php echo $result['phone']; ?>">Delete</a></td>
                <!-- Perbaikan pada bagian Edit -->
                <td><a href='detail.html?kode=<?php echo $result['phone']; ?>'>Edit</a></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php
    if (isset($_GET['kode'])) {
        $kode = $_GET['kode']; // Ambil nilai kode

        // Pastikan untuk menggunakan parameter yang benar pada klausa WHERE
        mysqli_query($koneksi, "DELETE FROM orders WHERE phone='$kode'");

        echo "Data DELETED";
        echo "<meta http-equiv=refresh content=2;URL='tabel.php'>";
    }
    ?>
</body>

</html>

