
<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Laporan Data Siswa PKL Perbulan </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<form method="post" action="index.php?pages=search_perbulan">
	    			<div class="form-group">
					<label class="col-sm-1 control-label" > Bulan </label>
						<div class="col-sm-3">	
							<select name="bulan" class="form-control">
								<option> --Pilih Bulan--</option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>  
								<option value="12">Desember</option>  
							</select>
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">	
							<input type="text" name="tahun" class="form-control">
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="cari">
				</form>
			</div>
            <div class="panel-body">
            	<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
						<tr>
						<th> No </th>
						<th> NIS </th>
						<th> Nama Siswa </th>
						<th> Sekolah/Universitas </th>
						<th> Tanggal Masuk </th>
						<th> Tanggal Keluar </th>
						<th> Periode PKL </th>
						<th> Menu </th>
						</tr>
<?php
include "config/config.php";
//memilih table SQL yang akan ditampilkan
if (!empty($_POST))
{
$tampil="SELECT * FROM tampil_lengkap WHERE '$_POST[bulan]' BETWEEN MONTH(tgl_masuk) AND MONTH(tgl_keluar) 
 AND '$_POST[tahun]' BETWEEN YEAR(tgl_masuk) AND YEAR(tgl_keluar)";
}
$hasil=mysql_query($tampil);
$no = 1;

while($data=mysql_fetch_array($hasil)){?>
		<tr>
			<td> <?php echo $no++; ?> </td>
			<td> <?php echo $data['nis']; ?> </td>
			<td> <?php echo $data['nama_siswa']; ?> </td>
			<td> <?php echo $data['s_nama']; ?> </td>	
			<td> <?php echo $data['tgl_masuk']; ?> </td>
			<td> <?php echo $data['tgl_keluar']; ?> </td>
			<td> <?php echo $data['periode_pkl']; ?> </td>
			<td> 
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-sm"> 
						<a href="index.php?pages=view_perbulan&id_siswa=<?php echo $data['id_siswa'];?>"> <font color="white"> Lihat </font> </a> 
					</button>
				</div>
			</td>
		</tr>
		<?php } ?>
		</table>
