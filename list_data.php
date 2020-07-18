<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA RELAWAN CIVID19 WILAYAH DKI JAKARTA</title>
</head>

<body>
    <header>
        <h3>DATA RELAWAN CIVID19 WILAYAH DKI JAKARTA</h3>
        <h1>per 17 juli 2020 21:38:16 (waktu jam sekarang)</h1>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nomer</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Provinsi</th>
            <th>email</th>
            <th>no hp</th>
            <th>keahlian</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_masuk";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['nomer']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['no_hp']."</td>";
            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['keahlian']."</td>";
            echo "<td>".$data['action']."</td>";

            echo "<td>";
            echo "<a href='from-edit.php?id=".$data['id']."'>Edit</a>| ";
            echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>