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
    <a class="btn-realtime" href="javascript:void(0)" id="btn-realtime">
        <i class='pause bx bx-pause-circle'></i>
        <span class="text" id="pause-text">Stop</span>
    </a>
</div>
<ul class="box-info">
    <li>
        <i class='bx bx-street-view'></i>
        <span class="text">
            <h3 id="count-total-mitra">0</h3>
            <p>Total Mitra</p>
        </span>
    </li>
    <li>
        <i class='bx bx-street-view'></i>
        <span class="text">
            <h3 id="count-mitra-aktif">0</h3>
            <p>Mitra Aktif</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3 id="count-total-pengguna">0</h3>
            <p>Total Pengguna</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3 id="count-pengguna-aktif">0</h3>
            <p>Pengguna Aktif</p>
        </span>
    </li>
    <li>
        <i class='bx bx-transfer-alt'></i>
        <span class="text">
            <h3 id="count-total-order">0</h3>
            <p>Total Order</p>
        </span>
    </li>
    <li>
        <i class='bx bx-transfer-alt'></i>
        <span class="text">
            <h3 id="count-order-berhasil">0</h3>
            <p>Order Berhasil</p>
        </span>
    </li>
    <li>
        <i class='bx bx-transfer-alt'></i>
        <span class="text">
            <h3 id="count-order-berjalan">0</h3>
            <p>Order Berjalan</p>
        </span>
    </li>
    <li>
        <i class='bx bx-transfer-alt'></i>
        <span class="text">
            <h3 id="count-order-batal">0</h3>
            <p>Order Batal</p>
        </span>
    </li>
</ul>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Transaksi</h3>
        </div>
        <div class="chart">
            <div id="realtime-transaction" class="epoch" style="height: 200px"></div>
        </div>
    </div>
    <div class="todo">
        <div class="head">
            <h3>Total Transaksi</h3>
        </div>
        <div class="transaction">
            <ul class="box-transaction">
                <li>
                    <i class='bx bxs-diamond'></i>
                    <span class="text">
                        <h3>
                            <span>Rp. </span>
                            <span id="count-transaksi">0</span>
                        </h3>
                        <p>Total Bagi Hasil</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-diamond'></i>
                    <span class="text">
                        <h3>
                            <span>Rp. </span>
                            <span id="count-transaksi">0</span>
                        </h3>
                        <p>Total Transaksi</p>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $("#btn-realtime").click((e) => {
        e.stopImmediatePropagation();
        e.preventDefault();
        if(pauseIndicator == 0){
            pauseIndicator = 1;
            $(".pause").removeClass("bx-pause-circle");
            $(".pause").addClass("bx-play-circle");
            $("#pause-text").text("Start");
            new App().AppClearChart();
        }else if(pauseIndicator == 1){
            pauseIndicator = 0;
            new App().AppStartChart();
            $(".pause").removeClass("bx-play-circle");
            $(".pause").addClass("bx-pause-circle");
            $("#pause-text").text("Stop");
        }
    });    
</script>