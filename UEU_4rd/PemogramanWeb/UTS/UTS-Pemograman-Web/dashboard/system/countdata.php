<?php
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    $action = htmlspecialchars($_POST['action']);

    function IdrFormat($angka){	
		$angka = (int)(100 * floor($angka / 100));
		$hasil_rupiah = number_format($angka,2,',','.');
		$return_rupiah = explode(',', $hasil_rupiah);
		return 	$return_rupiah[0];
	}

    if(isset($action) && $action == 'COUNT'){
        include("dbconn.php");
        $_QUERY_DRIVER = "SELECT COUNT(status) FROM tbl_app_driver WHERE status='VERIFIED'";
        $_PROCE_DRIVER = mysqli_query($_dbconn, $_QUERY_DRIVER);
        $_FETCH_DRIVER = mysqli_fetch_array($_PROCE_DRIVER);

        $_QUERY_DRIVER_ON = "SELECT COUNT(status) FROM tbl_system_tracking WHERE status='ON'";
        $_PROCE_DRIVER_ON = mysqli_query($_dbconn, $_QUERY_DRIVER_ON);
        $_FETCH_DRIVER_ON = mysqli_fetch_array($_PROCE_DRIVER_ON);

        $_QUERY_USER = "SELECT COUNT(status) FROM tbl_app_user WHERE phone IS NOT NULL AND whatsapp IS NOT NULL";
        $_PROCE_USER = mysqli_query($_dbconn, $_QUERY_USER);
        $_FETCH_USER = mysqli_fetch_array($_PROCE_USER);

        $_QUERY_USER_ON = "SELECT COUNT(id_user) FROM tbl_app_user WHERE status='ONLINE' AND phone IS NOT NULL AND whatsapp IS NOT NULL AND DAY(last_login) = DAY(CURRENT_DATE()) AND MONTH(last_login) = MONTH(CURRENT_DATE()) AND YEAR(last_login) = YEAR(CURRENT_DATE())";
        $_PROCE_USER_ON = mysqli_query($_dbconn, $_QUERY_USER_ON);
        $_FETCH_USER_ON = mysqli_fetch_array($_PROCE_USER_ON);

        $_QUERY_FINISH = "SELECT COUNT(status) FROM tbl_app_transaction WHERE status='FINISH'";
        $_PROCE_FINISH = mysqli_query($_dbconn, $_QUERY_FINISH);
        $_FETCH_FINISH = mysqli_fetch_array($_PROCE_FINISH);

        $_QUERY_BY_USER = "SELECT COUNT(status) FROM tbl_app_transaction WHERE status='BY_USER'";
        $_PROCE_BY_USER = mysqli_query($_dbconn, $_QUERY_BY_USER);
        $_FETCH_BY_USER = mysqli_fetch_array($_PROCE_BY_USER);

        $_QUERY_BY_DRIVER = "SELECT COUNT(status) FROM tbl_app_transaction WHERE status='BY_DRIVER'";
        $_PROCE_BY_DRIVER = mysqli_query($_dbconn, $_QUERY_BY_DRIVER);
        $_FETCH_BY_DRIVER = mysqli_fetch_array($_PROCE_BY_DRIVER);

        $_QUERY_ORDER = "SELECT COUNT(status) FROM tbl_app_transaction WHERE status='ORDER'";
        $_PROCE_ORDER = mysqli_query($_dbconn, $_QUERY_ORDER);
        $_FETCH_ORDER = mysqli_fetch_array($_PROCE_ORDER);

        $_QUERY_PICKUP = "SELECT COUNT(status) FROM tbl_app_transaction WHERE status='PICKUP'";
        $_PROCE_PICKUP = mysqli_query($_dbconn, $_QUERY_PICKUP);
        $_FETCH_PICKUP = mysqli_fetch_array($_PROCE_PICKUP);

        $total_finish = (int)$_FETCH_FINISH[0];
        $total_cancel = (int)$_FETCH_BY_DRIVER[0] + (int)$_FETCH_BY_USER[0];
        $total_process  = (int)$_FETCH_ORDER[0] + $_FETCH_PICKUP[0];
        $total_order = $total_finish + $total_cancel + $total_process;
        $total_driver = (int)$_FETCH_DRIVER[0];
        $total_driver_on = (int)$_FETCH_DRIVER_ON[0];
        $total_user = (int)$_FETCH_USER[0];
        $total_user_on = (int)$_FETCH_USER_ON[0];
        echo $total_driver .'|'. $total_driver_on .'|'. $total_user .'|'. $total_user_on .'|'. $total_order .'|'. $total_finish .'|'. $total_process .'|'. $total_cancel;
        mysqli_close($_dbconn);
        die;
    }
?>