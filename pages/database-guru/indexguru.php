<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Guru</title>

    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
</head>

<body>
    <div style="padding: 0 15px;">
        <h2>Data Guru 2020/2021</h2>
        <hr>

<!--     
-- Buat sebuah div dengan class row
-- class row ini berfungsi untuk membagi-bagi layar
-- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
-- Atau lebih tepatnya sering disebut dengan GRID
-- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
-- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
-- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
-->
        <div class="row">
            <div class="col-xs-12 col-sm-6">
<!--             
-- Input Group adalah salah satu komponen yang disediakan bootstrap
-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
-->
                <div class="input-group">
                    <!-- Buat sebuah textbox dan beri id keyword -->
                    <input type="text" class="form-control" placeholder="Pencarian..." id="keyword">

                    <span class="input-group-btn">
                        <!-- Buat sebuah tombol search dan beri id btn-search -->
                        <button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
                        <a href="" class="btn btn-warning">RESET</a>
                    </span>
                </div>
            </div>
        </div>
        <br>

<!-- 
-- Beri atribut id="view" pada tag div yang akan digunakan untuk menampung data 
-- yang ada pada tabel siswa di database dan paginationnya -->

        <div id="view"><?php include "view.php"; ?></div>
    </div>

    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Load File bootstrap.min.js yang ada difolder js -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Load file ajax.js yang ada di folder js -->
    <script src="assets/js/ajax.js"></script>
</body>

</html>