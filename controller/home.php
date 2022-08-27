<?php
if (isset($_POST['submit_login'])) {
	$msdn = $_POST['msdn'];
	$matkhau = $_POST['matkhau'];
	if (count(_check_matkhau($msdn, $matkhau)) == 1) {
		foreach (_check_matkhau($msdn, $matkhau) as $r) {
			$ID_ADMIN = $r->ID_ADMIN;
			$ID_VPCC = $r->ID_VPCC;
			$hoten = $r->TEN_ADMIN;
			setcookie("ID_ADMIN", $ID_ADMIN, time() + 30758400, "/");
			setcookie("ID_VPCC", $ID_VPCC, time() + 30758400, "/");
			setcookie("hoten", $hoten, time() + 30758400, "/");
			header('Location:index.html');
		}
	}
}



// --------------------------------------------------
switch ($components) {

	case "khachhang":
		require_once CONTROLS . "khachhang.php";
		break;
	case "vpcc":
		require_once CONTROLS . "vpcc.php";
		break;
	case "ccv":
		require_once CONTROLS . "ccv.php";
		break;
	case "DangNhap":
		require_once CONTROLS . "dangnhap.php";
		break;
	default:

		$filename = "home";
		break;
}
