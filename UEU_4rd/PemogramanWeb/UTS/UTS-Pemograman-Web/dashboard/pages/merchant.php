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