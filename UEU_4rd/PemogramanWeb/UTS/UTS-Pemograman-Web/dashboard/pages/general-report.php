<?php
error_reporting(0);
session_start();
$param = htmlspecialchars($_GET['title']);

?>
<div class="head-title">
    <div class="left">
        <h1><?php echo $param; ?></h1>
        <ul class="breadcrumb">
            <li>
                <a href="javascript:void(0)"><?php echo $param; ?></a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="javascript:void(0)">Information</a>
            </li>
        </ul>
    </div>
</div>
<ul class="box-general-report">
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Keseluruhan Wilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Keseluruhan Perwilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file' ></i>
        <span class="text">
            <p>Laporan <br> Jumlah Mintra Seluruh Wilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file' ></i>
        <span class="text">
            <p>Laporan <br> Jumlah Mitra Perwilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Agen Seluruh Wilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Agen Perwilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Transaksi Seluruh Wilayah</p>
        </span>
    </li>
    <li>
        <i class='bx bx-file'></i>
        <span class="text">
            <p>Laporan <br> Transaksi Perwilayah</p>
        </span>
    </li>
</ul>