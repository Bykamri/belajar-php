<?php include("db_config.php");

if (isset($_POST['submit'])) {
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

    $sql = "INSERT INTO user (Nama, Alamat, Tgl_lahir, Prodi, Fakultas, IPK) VALUES ('$nama', '$alamat', '$tgl_lahir', '$prodi', '$fakultas', '$ipk')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang ....");
}
