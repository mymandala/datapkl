<?php
	function pilihan($data,$param){
		$hasil		= "<select ";
		$paramKey	= array_keys($param);
		for($i=0;$i<count($param);$i++){
			if($paramKey[$i] == "disabled" or $paramKey[$i] == "selected" or $paramKey[$i] == "readonly"){
				$disabled = $param["disabled"];
				$selected = $param["selected"];
				$readonly = $param["readonly"];
			}
			else{
				$hasil	.= $paramKey[$i]."=\"".$param[$paramKey[$i]]."\" ";
			}
		}
		$hasil 		.= $disabled." ".$readonly.">";
		for($i=0;$i<count($data);$i++){
			$dataKey	= array_keys($data[$i]);
			$pilihan 	= "";
			if($data[$i][$dataKey[0]] == $selected){
				$pilihan = "selected";
			}
			$hasil .= "<option value=\"".$data[$i][$dataKey[0]]."\" ".$pilihan.">".$data[$i][$dataKey[1]]."</option>";
		}	
		$hasil .= "</select>";
		return $hasil;
	} ?>

<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Laporan Data Siswa PKL Pertahun </h2> </td>
	</tr>
</table>
<br>
<div class="row">
	<div class="col-lg-12">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<form method="post" action="index.php?pages=cari_tahun">
					<div class="form-group">
					<label class="col-sm-1 control-label"> Tahun </label>
						<div class="col-sm-3">
							<select name="tahun" class="form-control">
							<?php

for($i=date('2007'); $i<=date('Y')+1; $i+=1)
		{
			if ($_POST['tahun']==$i) {
				echo"<option value='$i' selected> $i </option>";
			}
echo"<option value='$i'> $i </option>";
}
?>
</select>
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
						</thead>

<tbody>
<?php
include "config/config.php";
//memilih table SQL yang akan ditampilkan
if (!empty($_POST))
{
	$cari = $_POST['tahun'];
	$tampil = "SELECT * from tampil_lengkap where YEAR(tgl_masuk) like '$cari%' or YEAR (tgl_keluar) like '$cari%'";
}
	$sql = mysql_query ($tampil) or die (mysql_error());
	$i =1;
	while ($laporan_taun=mysql_fetch_array($sql)) { ?>
		<tr>
								<td><?php echo $i++; ?> </td>
								<td><?php echo $laporan_taun['nis']?></td>
								<td><?php echo $laporan_taun['nama_siswa']?></td>
								<td><?php echo $laporan_taun['s_nama']?></td>
								<td><?php echo tgl_indo($laporan_taun['tgl_masuk'])?></td>
								<td><?php echo tgl_indo($laporan_taun['tgl_keluar'])?></td>
								<td><?php echo $laporan_taun['periode_pkl']?></td>
								<td><a href="index.php?pages=view_pertahun&nis=<?php echo $laporan_taun['nis'];?>"> <input type="button" value="lihat" class="btn btn-primary btn-sm"> </a>
								    </a>
							    </td>
							</tr>
	<?php } ?>
	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
