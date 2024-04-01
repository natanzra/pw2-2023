<?php
require_once '../config/Database.php';
require_once '../class/Kartu.php';

$database = new Database();
$db = $database->dbConnection();

$kartu = new Kartu($db);

if(isset($_POST['update'])) {
    $kartu->kode = $_POST['kode'];
    $kartu->nama = $_POST['nama'];
    $kartu->diskon = $_POST['diskon'];
    $kartu->iuran = $_POST['iuran'];
    $kartu->aksi = $_POST['aksi'];
    
    $kartu->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $kartu->id = $_GET['id'];
    $stmt = $kartu->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Kartu</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="kode">Kode:</label>
        <input type="text" name="kode" value="<?php echo $kode; ?>" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>
        <br>
        <label for="diskon">Diskon :</label>
        <input type="number" name="diskon" value="<?php echo $diskon; ?>" required>
        <br>
        <label for="iuran">Iuran :</label>
        <input type="number" name="iuran" value="<?php echo $iuran; ?>" required>
        <br>
        <label for="aksi">Aksi :</label>
        <input type="text" name="aksi" value="<?php echo $aksi; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>