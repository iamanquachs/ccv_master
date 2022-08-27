<?php
if ($_GET['action'] == "Logout") {
    setcookie("ID_VPCC", "", time() - 30758400, "/");
    setcookie("ID_ADMIN", "", time() - 30758400, "/");
    setcookie("msdv", "", time() - 30758400, "/");
    setcookie("tendv", "", time() - 30758400, "/");
    setcookie("msdn", "", time() - 30758400, "/");
    setcookie("hoten", "", time() - 30758400, "/");
    setcookie("loainv", "", time() - 30758400, "/");

    header("Location:../index.html");
}

$filename = "DangNhap";
