<html>
<head>
	<title></title>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="table-responsive">
	<table style="margin:10px;" width="1000">
		<tr>
			<td width="200" style="font-size:40px;"> <h2> Data Siswa </h2> </td>
			<td> <a href="index.php?pages=tambah_siswa"> <input type="button" value=" + Tambah Data" class="btn btn-primary"></a></td>
			<td align="right"> 
			<form method="post" action="" class="form-inline">
				<input type="text" name="cari" required="required" placeholder="Cari.." class="form-control">				
				<input type="submit" value="Cari" name="pencarian" class="btn btn-primary">
			</form> 
			</td>
		</tr>
	</table>
	<br>
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>

	<div class="panel-body">
    	<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<tr>
					<td> No </td>
					<td> NIS </td>
					<td> Nama Siswa </td>
					<td> Sekolah </td>
					<td> Program Keahlian </td>
					<td> Pembimbing </td>
					<td> Periode PKL </td>
					<td> &nbsp; </td>
				</tr>
				<?php 
				$i =1;
				$qry = mysql_query("SELECT * from tampil_lengkap");
				while ($data = mysql_fetch_array($qry)) { ?>
				<tr>
					<td> <?php echo $i++; ?> </td>
					<td> <?php echo $data['nis']; ?> </td>
					<td> <?php echo $data['nama_siswa']; ?> </td>
					<td> <?php echo $data['s_nama']; ?> </td>			
					<td> <?php echo $data['nama_prog_keahlian']; ?> </td>
					<td> <?php echo $data['p_nama']; ?> </td>
					<td> <?php echo $data['periode_pkl']; ?> </td>
					<td> 
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Aksi</button>
		  						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		    					<span class="caret"></span>
		    					<span class="sr-only"></span>
		  					</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#"> Lihat </a>
								</li>
								<li> 
									<a href="proses/data_siswa/hapus.php?nis=<?php echo $data['nis'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus data siswa <?php echo $data['nama_siswa']; ?>?')">Hapus</a>
								</li>
								<li>
									<a href="index.php?pages=ubah_siswa&nis=<?php echo $data['nis']?>"> Ubah </a>
								</li>
							</ul>
						</div>
					</td>
				</tr>
				<? } ?>
			</table>
		</div>
	</div>	
</div>
</div>
</div>
</div>
 <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>











</body>
</html>
