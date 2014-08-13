<div class="page-header"> <h2> Dashboard </h2> </div>
<br>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `data_siswa` WHERE nis ='$t[nis]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-home fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `sekolah` WHERE id_sekolah ='$t[id_sekolah]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
<div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `pembimbing` WHERE id_pembimbing ='$t[id_pembimbing]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-book fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `user` WHERE id_user ='$t[id_user]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
<div class="col-lg-4 col-md-8">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `prog_keahlian` WHERE id_prog_keahlian ='$t[id_prog_keahlian]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
<div class="col-lg-4 col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `data_siswa` WHERE nis ='$t[nis]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-file fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">
                    	<?php
                    		$sql = "SELECT count( * ) as num FROM `data_siswa` WHERE nis ='$t[nis]'";
							$result = mysql_query($sql);
							$result = mysql_fetch_assoc( $result );
							$jml = $result['num'];
							echo $jml;
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