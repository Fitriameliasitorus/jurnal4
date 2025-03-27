<?php
include "db_conn.php";
$result = mysqli_query (sconn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=divace=width, initial=scale1.0">
	<title>Daftar buku<title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result)) : ?> 
					"<tr>
                        <td>" . $row["id_buku"] ; ?></td>
                        <td>" . $row["judul"] ; ?></td>
                        <td>" . $row["penulis"] ; ?></td>
                        <td>" . $row["tahun_terbit"] ; ?></td>
                     </tr>";
					<?php  endwhile; ?>
    </table>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
