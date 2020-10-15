<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Katalog Sepatu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item btn btn-primary active">
                <a class="nav-link" href="<?php echo $server . '/index.php?page=add' ?>">Tambah Barang <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="navbar-nav form-inline my-2 my-lg-0">
            <?php if (isset($_SESSION['username'])) {
                echo "<li class='nav-item'><a class='nav-link' href='$server/index.php?page=logout'>Logout</a></li>";
            } ?>

        </form>
    </div>
</nav>