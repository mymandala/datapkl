<?php
include("../../config/config.php");
$select = "SELECT nis, nama_siswa, s_nama, tgl_masuk, tgl_keluar FROM tampil_lengkap";
$export = mysql_query($select);
$fields = mysql_num_fields($export);
for ($i = 0; $i < $fields; $i++) {
$header .= mysql_field_name($export, $i) . "\t";
}
while($row = mysql_fetch_row($export)) {
$line = '';
foreach($row as $value) {
if ((!isset($value)) OR ($value == "")) {
$value = "\t";
} else {
$value = str_replace('"', '""', $value);
$value = '"' . $value . '"' . "\t";
}
$line .= $value;
}
$data .= trim($line)."\n";
}
$data = str_replace("\r","",$data);
if ($data == "") {
$data = "n(0) record found!\n";
}
$tanggal=date("Ymd");
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=DATA_PESERTA_PKL".$tanggal.".xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>