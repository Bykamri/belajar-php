<?php
include("db_config.php");
if (!isset($_GET['id'])) {
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    <!-- <link rel="stylesheet" href="./src/newuser.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e0f7fa;
        }

        .form-container {
            border: 1px solid #00796b;
            padding: 20px;
            width: 100%;
            max-width: 800px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #004d40;
        }

        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #b2dfdb;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            padding: 10px 15px;
            background-color: #00796b;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }



        .form-container input[type="submit"]:hover {
            background-color: #004d40;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
        }

        .form-row .form-group {
            width: 48%;
        }
    </style>
</head>

<body>
    <form action="post_edit.php" method="POST">

        <div class="form-container">
            <input type="hidden" id="id" name="id" value="<?php echo $user['ID'] ?>" />
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" value="<?php echo $user['Nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tgl Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $user['Tgl_lahir'] ?>">
                </div>
            </div>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" placeholder="Masukkan alamat"><?php echo $user['Alamat'] ?></textarea>
            <div class="form-row">

                <div class="form-group">

                    <label for="prodi">Prodi</label>
                    <?php $prodi = $user['Prodi']; ?>
                    <select id="prodi" name="prodi">
                        <option <?php echo ($prodi == 'Informatika') ? "selected" : "" ?>>Informatika</option>
                        <option <?php echo ($prodi == 'Sistem Informasi') ? "selected" : "" ?>>Sistem Informasi</option>
                        <option <?php echo ($prodi == 'Teknik Komputer') ? "selected" : "" ?>>Teknik Komputer</option>
                        <option <?php echo ($prodi == 'Psikologi') ? "selected" : "" ?>>>Psikologi</option>
                        <option <?php echo ($prodi == 'Akuntansi') ? "selected" : "" ?>>Akuntansi</option>
                        <option <?php echo ($prodi == 'Teknik Sipil') ? "selected" : "" ?>>Teknik Sipil</option>
                        <option <?php echo ($prodi == 'Teknik Mesin') ? "selected" : "" ?>>Teknik Mesin</option>
                        <option <?php echo ($prodi == 'Arsitektur') ? "selected" : "" ?>>Arsitektur</option>
                        <option <?php echo ($prodi == 'Teknik Lingkungan') ? "selected" : "" ?>>Teknik Lingkungan</option>
                        <option <?php echo ($prodi == 'Manajemen') ? "selected" : "" ?>>Manajemen</option>
                        <option <?php echo ($prodi == 'Ekonomi Pembangunan') ? "selected" : "" ?>>Ekonomi Pembangunan</option>
                        <option <?php echo ($prodi == 'Ilmu Administrasi') ? "selected" : "" ?>>Ilmu Administrasi</option>
                        <option <?php echo ($prodi == 'Ilmu Hukum') ? "selected" : "" ?>>Ilmu Hukum</option>
                        <option <?php echo ($prodi == 'Kedokteran') ? "selected" : "" ?>>Kedokteran</option>
                        <option <?php echo ($prodi == 'Kedokteran Gigi') ? "selected" : "" ?>>Kedokteran Gigi</option>
                        <option <?php echo ($prodi == 'Sastra Inggris') ? "selected" : "" ?>>Sastra Inggris</option>
                        <option <?php echo ($prodi == 'Antropologi') ? "selected" : "" ?>>Antropologi</option>
                        <option <?php echo ($prodi == 'Sejarah') ? "selected" : "" ?>>Sejarah</option>
                        <option <?php echo ($prodi == 'Ilmu Politik') ? "selected" : "" ?>>Ilmu Politik</option>
                        <option <?php echo ($prodi == 'Ilmu Komunikasi') ? "selected" : "" ?>>Ilmu Komunikasi</option>
                        <option <?php echo ($prodi == 'Sosiologi') ? "selected" : "" ?>>Sosiologi</option>
                        <option <?php echo ($prodi == 'Matematika') ? "selected" : "" ?>>Matematika</option>
                        <option <?php echo ($prodi == 'Statistika') ? "selected" : "" ?>>Statistika</option>
                        <option <?php echo ($prodi == 'Kimia') ? "selected" : "" ?>>Kimia</option>
                        <option <?php echo ($prodi == 'Biologi') ? "selected" : "" ?>>Biologi</option>
                        <option <?php echo ($prodi == 'Fisika') ? "selected" : "" ?>>Fisika</option>
                        <option <?php echo ($prodi == 'Kehutanan') ? "selected" : "" ?>>Kehutanan</option>
                        <option <?php echo ($prodi == 'Agribisnis') ? "selected" : "" ?>>Agribisnis</option>
                        <option <?php echo ($prodi == 'Desain Produk') ? "selected" : "" ?>>Desain Produk</option>
                        <option <?php echo ($prodi == 'Seni Rupa Murni') ? "selected" : "" ?>>Seni Rupa Murni</option>
                        <option <?php echo ($prodi == 'Farmasi') ? "selected" : "" ?>>Farmasi</option>
                        <option <?php echo ($prodi == 'Keperawatan') ? "selected" : "" ?>>Keperawatan</option>
                        <option <?php echo ($prodi == 'Kesehatan Masyarakat') ? "selected" : "" ?>>Kesehatan Masyarakat</option>
                        <option <?php echo ($prodi == 'Pendidikan Fisika') ? "selected" : "" ?>>Pendidikan Fisika</option>
                        <option <?php echo ($prodi == 'Pendidikan Biologi') ? "selected" : "" ?>>Pendidikan Biologi</option>
                        <option <?php echo ($prodi == 'Pendidikan Matematika') ? "selected" : "" ?>>Pendidikan Matematika</option>
                        <option <?php echo ($prodi == 'Ilmu Kelautan') ? "selected" : "" ?>>Ilmu Kelautan</option>
                        <option <?php echo ($prodi == 'Manajemen Sumber Daya Perairan') ? "selected" : "" ?>>Manajemen Sumber Daya Perairan</option>
                    </select>
                </div>

                <div class="form-group" style="margin-left: 18px; margin-right: 18px;">
                    <label for="fakultas">Fakultas</label>
                    <?php $fakultas = $user['Fakultas']; ?>
                    <select id="fakultas" name="fakultas">
                        <option <?php echo ($fakultas == 'Teknik') ? "selected" : "" ?>>Teknik</option>
                        <option <?php echo ($fakultas == 'Ekonomi') ? "selected" : "" ?>>Ekonomi</option>
                        <option <?php echo ($fakultas == 'Hukum') ? "selected" : "" ?>>Hukum</option>
                        <option <?php echo ($fakultas == 'Psikologi') ? "selected" : "" ?>>Psikologi</option>
                        <option <?php echo ($fakultas == 'Ilmu Sosial') ? "selected" : "" ?>>Ilmu Sosial</option>
                        <option <?php echo ($fakultas == 'MIPA') ? "selected" : "" ?>>MIPA</option>
                        <option <?php echo ($fakultas == 'Ilmu Kelautan') ? "selected" : "" ?>>Ilmu Kelautan</option>
                        <option <?php echo ($fakultas == 'Kedokteran') ? "selected" : "" ?>>Kedokteran</option>
                        <option <?php echo ($fakultas == 'Ilmu Budaya') ? "selected" : "" ?>> Ilmu Budaya</option>
                        <option <?php echo ($fakultas == 'Pertanian') ? "selected" : "" ?>>Pertanian</option>
                        <option <?php echo ($fakultas == 'Seni Rupa') ? "selected" : "" ?>>Seni Rupa</option>
                        <option <?php echo ($fakultas == 'Farmasi') ? "selected" : "" ?>>Farmasi</option>
                        <option <?php echo ($fakultas == 'Kesehatan') ? "selected" : "" ?>>Kesehatan</option>
                        <option <?php echo ($fakultas == 'Keguruan') ? "selected" : "" ?>>Keguruan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="text" id="ipk" name="ipk" placeholder="Masukkan IPK" value="<?php echo $user['IPK'] ?>">
                </div>
            </div>

            <input type="submit" value="Simpan" name="simpan">
        </div>

    </form>

</body>

</html>