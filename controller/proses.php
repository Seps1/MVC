<?php 
	include "../model/database.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['nama'], $_POST['email'], $_POST['password'], $_POST['prodi']);		
		header("location:../view/index.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/tampil.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['id'], $_POST['nama'], $_POST['email'], $_POST['password'], $_POST['prodi']);
		header("location:../view/tampil.php");
	}
	elseif ($aksi == "tampil"){
		foreach ($db->tampil_data() as $data){
			if ($_POST['nama'] == "admin" && $_POST['password']=='password'){
				// $db->tampil($_POST['email'], $_POST['password']);
				header("location:../view/tampil.php");
			}elseif ($_POST['nama']==$data['nama'] && $_POST['password']==$data['password']){
				session_start();
				$_SESSION['name']=$data['nama'];
				$_SESSION['email']=$data['email'];
				header("location:../view/home.php");
			break;
			}else{
				header("location:../view/index.php");
			}
		}
		
	}
	elseif($aksi == "google") {
        include("../config/config.php");
            if(isset($_SESSION['acces_token'])){
                $google_client->setAccessToken($_SESSION['access_token']);
            }
            elseif (isset($_GET['code'])) {
                $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
                $_SESSION['access_token'] = $token;
            }

            $google_service = new Google_Service_Oauth2($google_client);
			$data = $google_service->userinfo_v2_me->get();
			$_SESSION['name'] = $data['name'];
			$_SESSION['user_last_name'] = $data['family_name'];
			$_SESSION['email'] = $data['email'];
			if(!empty($data['gender'])){
				$_SESSION['user_gender'] = $data['gender'];
				}else{
					$_SESSION['user_gender'] = "-";
				}
			$_SESSION['user_image'] = $data['picture'];
			
        foreach ($db->tampil_data() as $u) {
            if($_SESSION['email'] == $u['email']) {
                header("Location:../view/home.php");
                break;
            }else {
                header("Location:../view/regis.php");
            }
        }
    }
 ?> 