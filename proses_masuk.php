<?php

if ( $_POST['username'] == 'admin' && $_POST['password']=='admin' ) {

    echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="homepage.php";</script>';
    exit();
} else {
	echo '<script language="javascript">alert("Anda tidak berhasil Login Admin!"); document.location="index.php";</script>';
    exit();
}