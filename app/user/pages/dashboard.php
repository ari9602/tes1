<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-family: 'Quicksand', sans-serif; font-weight: bold;">
            Dashboard
 
        </h1>
        <ol class="breadcrumb">
            <li><a href="../../assets/#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i");

        // atur salam dengan IF
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'Siang';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }
        ?>
    
        <!-- -->
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM identitas");
        $row = mysqli_fetch_assoc($query);

        ?>

        <img src="../../assets/dist/img/logo_app.png" 
        width="120px" height="120px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 100px;">

    </section>
    <!-- /.content -->
</div>