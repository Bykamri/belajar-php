<?php include("../config/db_config.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];
    $ipk = $_POST['ipk'];

    // Validate the date
    if (empty($tgl_lahir)) {
        die("Tanggal lahir tidak boleh kosong");
    }

    // Convert date format if necessary
    $tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));

    $sql = "UPDATE user SET Nama='$nama', Alamat='$alamat', Tgl_lahir='$tgl_lahir', Prodi='$prodi', Fakultas='$fakultas', IPK='$ipk' WHERE ID=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang ....");
}
