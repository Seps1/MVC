<?php 

	class database{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "septian_uts_bpwl";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			mysqli_select_db($this->con, $this->db);
		}

		function tampil_data(){
			$data = mysqli_query($this->con, "select * from septian_uts_bpwl");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nama, $email, $password, $prodi){
			mysqli_query($this->con, "insert into septian_uts_bpwl values ('', '$nama', '$email', '$password', '$prodi')");
		}

		function hapus($id){
			mysqli_query($this->con,"DELETE FROM septian_uts_bpwl WHERE id='$id'");
		}

		function edit($id){
			$data = mysqli_query($this->con, "select * from septian_uts_bpwl where id='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($id, $nama, $email, $password, $prodi){
			mysqli_query($this->con, "update septian_uts_bpwl set nama='$nama',email='$email',password='$password', prodi='$prodi' where id='$id'");
		}
		function tampil($nama, $password){
			mysqli_query($this->con, "select * from septian_uts_bpwl where nama='$nama' and password='$password'");
		}
	}
 ?>