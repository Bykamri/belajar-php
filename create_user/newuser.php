<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    <link rel="stylesheet" href="../style/newuser.css">

</head>

<body>
    <form action="./post_add.php" method="post">

        <div class="form-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tgl Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir">
                </div>
            </div>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
            <div class="form-row">

                <div class="form-group">

                    <label for="prodi">Prodi</label>
                    <select id="prodi" name="prodi">
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Arsitektur">Arsitektur</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                        <option value="Ilmu Administrasi">Ilmu Administrasi</option>
                        <option value="Ilmu Hukum">Ilmu Hukum</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                        <option value="Sastra Inggris">Sastra Inggris</option>
                        <option value="Antropologi">Antropologi</option>
                        <option value="Sejarah">Sejarah</option>
                        <option value="Ilmu Politik">Ilmu Politik</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <option value="Sosiologi">Sosiologi</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kehutanan">Kehutanan</option>
                        <option value="Agribisnis">Agribisnis</option>
                        <option value="Desain Produk">Desain Produk</option>
                        <option value="Seni Rupa Murni">Seni Rupa Murni</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Keperawatan">Keperawatan</option>
                        <option value="Kesehatan Masyarakat"></option>
                        <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                        <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                        <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                        <option value="Ilmu Kelautan">Ilmu Kelautan</option>
                        <option value="Manajemen Sumber Daya Perairan">Manajemen Sumber Daya Perairan</option>
                    </select>
                </div>

                <div class="form-group" style="margin-left: 18px; margin-right: 18px;">
                    <label for="fakultas">Fakultas</label>
                    <select id="fakultas" name="fakultas">
                        <option value="Teknik">Teknik</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Ilmu Sosial">Ilmu Sosial</option>
                        <option value="MIPA">MIPA</option>
                        <option value="Ilmu Kelautan">Ilmu Kelautan</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Ilmu Budaya"> Ilmu Budaya</option>
                        <option value="Pertanian">Pertanian</option>
                        <option value="Seni Rupa">Seni Rupa</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Keguruan">Keguruan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="text" id="ipk" name="ipk" placeholder="Masukkan IPK">
                </div>
            </div>

            <input type="submit" value="Submit" name="submit">
        </div>
    </form>

</body>

</html>