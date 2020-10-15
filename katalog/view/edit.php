<?php
require './config/config.php';
if (!isset($_SESSION['username'])) {
    header("location:$server/index.php?page=login");
}
$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id='$id'";
$data = $conn->query($sql);
$row = $data->fetch_assoc();


$sql2 = "SELECT * FROM merek";
$result = $conn->query($sql2);

?>
<form method="post" action="action/edit.php">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <h3 class="pt-5">EDIT DATA BARANG</h3>
                <tr>
                    <td><input type="text" hidden name="id" value="<?php echo $row['id'] ?>"></td>
                </tr>
                <div class="form-group">
                    <label>Nama Sepatu</label>
                    <input type="text" value="<?php echo $row['nama'] ?>" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <input type="number" value="<?php echo $row['ukuran'] ?>" name="ukuran" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" value="<?php echo $row['stok'] ?>" name="stok" class="form-control">
                </div>
                <div class="form-group">
                    <label>warna</label>
                    <input type="text" value="<?php echo $row['warna'] ?>" name="warna" class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputState">Merk</label>
                    <select id="inputState" name="merek" class="form-control">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row["id"] ?>">
                                <?php echo $row["merek"] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>

</form>