    <?php
    require './config/config.php';
    require './config/config.php';
    if (!isset($_SESSION['username'])) {
        header("location:$server/index.php?page=login");
    }
    $sql = "SELECT * FROM merek";
    $result = $conn->query($sql);
    ?>
    
    <form method="post" action="action/tambah.php">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h3 class="pt-5">TAMBAH DATA SEPATU</h3>
                    <div class="form-group">
                        <label>Nama Sepatu</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ukuran</label>
                        <input type="number" name="ukuran" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>warna</label>
                        <input type="text" name="warna" class="form-control">
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