<?php include("./config/db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    <link rel="stylesheet" href="./src/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="container">
        <h1>User Management</h1>
        <a href="./create_user/newuser.php" class="new-user-btn"><i class="fas fa-user-plus"></i> New User</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th>IPK</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $sql = "SELECT * FROM user";
                $query = mysqli_query($db, $sql);

                while ($user = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $user['ID'] . "</td>";
                    echo "<td>" . $user['Nama'] . "</td>";
                    echo "<td>" . $user['Alamat'] . "</td>";
                    echo "<td>" . $user['Tgl_lahir'] . "</td>";
                    echo "<td>" . $user['Prodi'] . "</td>";
                    echo "<td>" . $user['Fakultas'] . "</td>";
                    echo "<td>" . $user['IPK'] . "</td>";
                    echo "<td>";
                    echo "<a href='./edit_user/edit_user.php?id=" . $user['ID'] . "'><i class='fas fa-edit'></i> Edit</a> | ";
                    echo "<a href='./delete_user/delete_user.php?id=" . $user['ID'] . "'><i class='fas fa-trash-alt'></i> Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>


            </tbody>
        </table>
    </div>

</body>

</html>