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

						<?php
						if(!isset($_POST['bulan'])){$default_bulan = 0;} else{$default_bulan = $_POST['bulan'];}
						$data[] 	= array("bulan_number"=>1,"bulan_nama"=>"Januari");
						$data[] 	= array("bulan_number"=>2,"bulan_nama"=>"Februari");
						$data[] 	= array("bulan_number"=>3,"bulan_nama"=>"Maret");
						$data[] 	= array("bulan_number"=>4,"bulan_nama"=>"April");
						$data[] 	= array("bulan_number"=>5,"bulan_nama"=>"Mei");
						$data[] 	= array("bulan_number"=>6,"bulan_nama"=>"Juni");
						$data[] 	= array("bulan_number"=>7,"bulan_nama"=>"Juli");
						$data[] 	= array("bulan_number"=>8,"bulan_nama"=>"Agustus");
						$data[] 	= array("bulan_number"=>9,"bulan_nama"=>"September");
						$data[] 	= array("bulan_number"=>10,"bulan_nama"=>"Oktober");
						$data[] 	= array("bulan_number"=>11,"bulan_nama"=>"November");
						$data[] 	= array("bulan_number"=>12,"bulan_nama"=>"Desember");
						$parm 		= array("class"=>"form-control","name"=>"bulan","selected"=>$default_bulan);
							echo pilihan($data,$parm);
						 ?>

						

						</div>
					</div>
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
					<tbody>
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
			<td> <?php echo tgl_indo($data['tgl_masuk']); ?> </td>
			<td> <?php echo tgl_indo($data['tgl_keluar']); ?> </td>
			<td> <?php echo $data['periode_pkl']; ?> </td>
			<td> 
				<div class="btn-group">
					<button type="button" class="btn btn-primary btn-sm"> 
						<a href="index.php?pages=view_perbulan&nis=<?php echo $data['nis'];?>"> <font color="white"> Lihat </font> </a> 
					</button>
				</div>
			</td>
		</tr>
		<?php } ?>
	</tbody>
		</table>
