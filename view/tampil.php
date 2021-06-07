<?php 
	include '../model/database.php';
	$db = new database();
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="viewport" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Tampil</title>
    
</head>

<body background="background2.jpg">
    <div class="container">
        <table class="table">
            <tr class="table-primary">
                <th>no</th>
                <th>name</th>
                <th>email</th>
                <th>prodi</th>
                <th>aksi</th>
            </tr>
                <?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['prodi'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']?>&aksi=update">Edit</a>
					<a href="../controller/proses.php?id=<?php echo $data['id']?>&aksi=hapus">Hapus</a>
                </td>
            </tr>
            <?php } ?>
            
        </table>
        <a href="tambah.php" class="btn btn-success">tambah</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <a style="margin-left:10%; color:red;" href="logout.php">Logout</a>
</body>

</html>