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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body background="background1.jpg">
  <div class="container">
        <div>
        <h1>Edit Data User</h1>
	      <form action="../controller/proses.php?aksi=update" method="post">
	      <?php foreach ($db->edit($_GET['id']) as $data) { ?>
	    	<table>
		  	<tr>
				<td>Nama</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id']?>">
				<input type="text" name="nama" value="<?php echo $data['nama']?>">
				</td>
		        	</tr>
		        	<tr>
			      	<td>Email</td>
			      	<td><input type="text" name="email" value="<?php echo $data['email']?>"></td>
		        	</tr>
		        	<tr>
			      	<td>Password</td>
				      <td><input type="password" name="password"?></td>
			        </tr>
			        <tr>
				        <select name="prodi" id="prodi" class="btn btn-warning mt-3">
                    <option value="Program reguler D-III & D-IV ">Program reguler D-III & D-IV</option>
                    <option value="Program Magister">Program Magister</option>
                </select>
			        </tr>
			        <tr>
				      <td></td>
				      <td><input type="submit" value="simpan"></td>
			      </tr>
		      </table>
		      <?php } ?>
        	</form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>