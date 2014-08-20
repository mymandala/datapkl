<div class="page-header"> <h2> Dashboard </h2> </div>
<br>
<?php
if ($_SESSION['level']=='3') {
 	echo "";
 } elseif ($_SESSION['level']=='1' or $_SESSION['level']=='2') { ?>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM tampil_lengkap WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah; 
                    	?>
                    </div>
                    <div>Data Siswa PKL</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=list_siswa">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-home fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM sekolah WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Data Sekolah</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=list_sekolah">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM pembimbing WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Data Pembimbing</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=list_pembimbing">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<?php if ($_SESSION['level']=='2') {
	echo "";
} else { ?>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-book fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM user";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Data User</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=list_user">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<?php } ?>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM prog_keahlian WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Data Program Keahlian</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=list_prog_keahlian">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<?php } ?>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM tampil_lengkap WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Laporan Pertahun</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=laporan_pertahun">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM tampil_lengkap WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Laporan Perbulan</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=laporan_perbulan">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>
<div class="col-lg-4 col-md-8">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT * FROM tampil_lengkap WHERE status = '1'";
							$query= mysql_query($sql);
							$jumlah=mysql_num_rows($query);
							echo $jumlah;
                    	?>
                    </div>
                    <div>Laporan Sekolah</div>
                </div>
             </div>
        </div>
        <a href="index.php?pages=laporan_sekolah">
	        <div class="panel-footer">
	            <span class="pull-left">Lihat Selengkapnya</span>
	            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	            <div class="clearfix"></div>
	        </div>
        </a>
    </div>
</div>