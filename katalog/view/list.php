<?php
require './config/config.php';
if (!isset($_SESSION['username'])) {
    header("location:$server/index.php?page=login");
}
$sql = "SELECT * FROM barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<div class="container">
<h1 class="pt-5">list</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>stok</th>
                <th>ukuran</th>
                <th>warna</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["stok"] ?></td>
                    <td><?php echo $row["ukuran"] ?></td>
                    <td><?php echo $row["warna"] ?></td>
                    <td><a href="<?php echo $server . "/index.php?page=delete&id=" .  $row["id"] ?>">delete</a> | <a href="<?php echo $server . "/index.php?page=edit&id=" .  $row["id"] ?>">edit</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php } else echo "0 results" ?>

