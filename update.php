<!DOCTYPE html>
<html lang="en">
<? include "ajax/head.php";?>
<body>
<?include "ajax/header.php" ?>
<!--Start Container-->

<? include "ajax/container.php";?>
<div id="content" class="col-xs-12 col-sm-10">
			
		
<?
include "koneksi.php";
$nis = $_GET['NIS'];
$sql="SELECT * from tbl_pkl where NIS='$nis'";
$query = mysql_query($sql);
$data = mysql_fetch_array($query);?>
<div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Forms</a></li>
			<li><a href="input_data.php">input data</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>form registrasi PKL </span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Registration form</h4>
				<form action="proses_update.php" method="post" class="form-horizontal" >
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Lengkap</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" value=<? echo $data['nama'];?> name="nama">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">NIS</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" value=<? echo $data['NIS'];?> name="NIS">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">TTL</label>
						<div class="col-sm-4">
							<input type="text" id="input_date" class="form-control" value=<? echo $data['TTL'];?> name="ttl">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">jenis kelamin</label>
						<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="jk" value=<? echo $data['JK'];?>> perempuan
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox" >
							<label>
								<input type="checkbox" name="jk" value=<? echo $data['JK'];?>> laki-laki
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">No telepon</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" value=<? echo $data['no_tlpn'];?> name="tlpn">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-3">
								<select class="populate placeholder" id="e12" name="prov" value=<? echo $data['provinsi'];?>>
									<option value="">-- pilih provinsi --</option>
							        <option name="nangro_aceh"><li><b>Bold list item</b></li></option>
									<option name="sumatera_u">sumatera utara</option>
									<option name="sumatera_b">sumatera barat</option>
									<option name="riau">riau</option>
									<option name="jambi">jambi</option>
									<option name="sumatera_s">sumatra selatan</option>
									<option name="bengkulu">bengkulu</option>
									<option name="lampung">lampung</option>
									<option name="pulau_bangka">kepulauan bangka belitung</option>
									<option name="pulau_riau">kepulauan riau</option>
									<option name="dki_jakarta">DKI jakarta</option>
									<option name="jw_barat">jawa barat</option>
									<option name="jawa tengah">jawa tengah</option>
									<option name="jw_timur">jawa timur</option>
									<option name="banten">banten</option>
									<option name="yogya">DI yogyakarta</option>
									<option name="bali">bali</option>
									<option name="ntb">nusa tenggara barat</option>
									<option name="ntt">Nusa tenggara timur</option>
									<option name="kal_barat">kalimantan barat</option>
									<option name="kal_tengah">kalimantan tengah</option>
									<option name="kal_selatan">kalimantan selatan</option>
									<option name="kal_timur">kalimantan timur</option>
									<option name="kal_utara">kalimantan utara</option>
									<option name="sulawesi_u">sulawesi utara</option>
									<option name="sulawesi_t">sulawesi tengah</option>
									<option name="sulawesi_s">sulawesi selatan</option>
									<option name="sulawesi_t">sulawesi tenggara</option>
									<option name="gorontalo">gorontalo</option>
									<option name="sulawesi_b">sulawesi barat</option>
									<option name="maluku">maluku</option>
									<option name="maluku_u">maluku utara</option>
									<option name="papua">papua</option>
								</select>
						</div>
							<div class="col-sm-3">
								<select class="populate placeholder" id="s2_country" value=<? echo $data['kabupaten'];?> name="kab">
									<option value="">-- pilih kabupaten --</option>
							        <optgroup label="Nangro Aceh Darusalah">
								        <option>Kab. Aceh Barat</option>
										<option>Kab. Aceh Barat Daya</option>
										<option>Kab. Aceh Besar</option>
										<option>Kab. Aceh Jaya</option>
										<option>Kab. Aceh Selatan</option>
										<option>Kab. Aceh Singkil</option>
										<option>Kab Aceh Tamiang</option>
										<option>Kab. Aceh Tengah</option>
										<option>Kab. Aceh Tenggara</option>
										<option>Kab. Aceh Timur</option>
										<option>Kab. Aceh Utara</option>
										<option>Kab. Bener Meriah</option>
										<option>Kab. Bireun</option>
										<option>Kab. Gayo Lues</option>
										<option>Kab. Nagan Raya</option>
										<option>Kab. Pidie</option>
										<option>Kab. Pidie Jaya</option>
										<option>Kab. Simeulue</option>
									</optgroup>
									<optgroup label="sumatera utara">
										<option>Kab. Asahan</option>
										<option>Kab. Batubara</option>
										<option>Kab. Dairi</option>
										<option>Kab. Deliserdang </option>
										<option>Kab. Humban Hasundutan</option>
										<option>Kab. Karo </option>
										<option>Kab. Labuhanbatu</option>
										<option>Kab. Langkat </option>
										<option>Kab. Mandating Natal</option>
										<option>Kab. Nias</option>
										<option>Kab. Nias Selatan</option>
										<option>Kab. PakakBharat</option>
										<option>Kab. Samosir</option>
										<option>Kab. Serdan Bedagai</option>
										<option>Kab. Simalungun></option>
										<option>Kab. Tapanuli Selatan</option>
										<option>Kab. Tapanuli Tengah</option>
										<option>Kab. Tapanuli Utara</option>
										<option>Kab. Toba Samosir</option>
										<option>Kab. Padang Lawas Utara</option>
										<option>Kab. Padan Lawas</option>
										<option>Kab. Labuhanbatu Utara</option>
										<option>Kab. Labuhanbatu Selatan</option>
										<option>Kab. Nias Barat</option>
										<option>Kab. Nias Utara</option>
									</optgroup>
									<optgroup label="sumatera barat">
										<option>Kab. Agam</option>
										<option>Kab. Dharmasraya</option>
										<option>Kab. Limapuluhkota</option>
										<option>Kab. Kep. Mentawai</option>
										<option>Kab. Padang Pariaman</option>
										<option>Kab. Pasaman</option>
										<option>Kab. Pasaman Barat </option>
										<option>Kab. Pesisir Selatan</option>
										<option>Kab. Sawahlunto Sijunjung</option>
										<option>Kab. Solok</option>
										<option>Kab. Solok Selatan</option>
										<option>Kab. Tanah Datar</option>
									</optgroup>
									<optgroup label="riau">
										<option>Kab. Bengkalis</option>
										<option>Kab. Indragiri Hilir</option>
										<option>Kab. Indragiri Hulu</option>
										<option>Kab. Kampar</option>
										<option>Kab. Kuantan Singingi</option>
										<option>Kab. Pelalawan</option>
										<option>Kab. Rokan Hulu</option>
										<option>Kab. Rokan Hilir</option>
										<option>Kab. Siak</option>
										<option>Kab. Kep. Meranti</option>
									</optgroup>
									<optgroup label="jambi">
										<option>Kab. Batanghari</option>
										<option>Kab. Bungo </option>
										<option>Kab. Kerinci</option>
										<option>Kab. Merangin</option>
										<option>Kab. Muaro Jambi</option>
										<option>Kab. Sarolangun</option>
										<option>Kab. Tanjung Jabung Barat</option>
										<option>Kab. Tanjung Jabung Timur</option>
										<option>Kab. Tebo</option>
									</optgroup>
									<optgroup label="sumatra selatan">
										<option>Kab. Banyuasin</option>
										<option>Kab. Lahat </option>
										<option>Kab. Empat Lawang</option>
										<option>Kab. Muara Enim </option>
										<option>Kab. Musi Banyuasin</option>
										<option>Kab. Musi Rawas</option>
										<option>Kab. Ogan Ilir</option>
										<option>Kab. Ogan Komering Ilir</option>
										<option>Kab. Ogan Komering Ulu</option>
										<option>Kab. OKU Selatan</option>
										<option>Kab. OKU Timur</option>
										<option>Kab. Penukal Abab Lematang Ilir</option>
									</optgroup>
									<optgroup label="bengkulu">
										<option>Kab. Bengkulu Selatan </option>
										<option>Kab. Bengkulu Utara</option>
										<option>Kab. Kaur</option>
										<option>Kab. Kepahiang</option>
										<option>Kab. Lebong</option>
										<option>Kab. Muko-Muko</option>
										<option>Kab. Rejang Lebong</option>
										<option>Kab. Seluma</option>
										<option>Kab. Bengkulu Tengah</option>
									</optgroup>
									<optgroup label="lampung">
										<option>Kab. Lampung Barat </option>
										<option>Kab. Lampung Selatan</option>
										<option>Kab. Lampung Tengah</option>
										<option>Kab. Lampung Timur</option>
										<option>Kab. Lampung Utara</option>
										<option>Kab. Tanggamus</option>
										<option>Kab. Tulang Bawang</option>
										<option>Kab. Way Kanan</option>
										<option>Kab. Pesawaran</option>
										<option>Kab. Pringsewu</option>
										<option>Kab. Mesuji</option>
										<option>Kab. Tulang Bawang Barat</option>
										<option>Kab. Pesisir Barat</option>
									</optgroup>
									<optgroup label="kepulauan bangka belitung">
										<option>Kab. Bangka </option>
										<option>Kab. Bangka Barat</option>
										<option>Kab. Bangka Selatan</option>
										<option>Kab. Bangka Tengah</option>
										<option>Kab. Belitung</option>
										<option>Kab. Belitung Timur</option>
									</optgroup>
									<optgroup label="kepulauan riau">
										<option>Kab. Karimun </option>
										<option>Kab. Bintan (Kep. Riau)</option> 
										<option>Kab. Lingga</option>
										<option>Kab. Natuna</option>
										<option>Kab. Kep. Anambas</option>
									</optgroup>
									<optgroup label="DKI jakarta">
										<option>1 Kab. Kepulauan Seribu</option>
									</optgroup>
									<optgroup label="jawa barat">
										<option>Kab. Bandung </option>
										<option>Kab. Bandung Barat </option>
										<option>Kab. Bekasi </option>
										<option>Kab. Bogor </option>
										<option>Kab. Ciamis</option>
										<option>Kab. Cianjur </option>
										<option>Kab. Cirebon </option>
										<option>Kab. Garut </option>
										<option>Kab. Indramayu </option>
										<option>Kab. Karawang</option>
										<option>Kab. Kuningan</option>
										<option>Kab. Majalengka</option>
										<option>Kab. Purwakarta</option>
										<option>Kab. Subang</option>
										<option>Kab. Sukabumi</option>
										<option>Kab. Sumedang</option>
										<option>Kab. Tasikmalaya</option>
										<option>Kab. Pangandaran</option>
									</optgroup>
									<optgroup label="jawa tengah">
										<option>Kab. Banjarnegara </option>
										<option>Kab. Banyumas </option>
										<option>Kab. Batang </option>
										<option>Kab. Blora </option>
										<option>Kab. Boyolali </option>
										<option>Kab. Brebes </option>
										<option>Kab. Cilacap</option>
										<option>Kab. Demak</option>
										<option>Kab. Grobogan</option>
										<option>Kab. Jepara</option>
										<option>Kab. Karanganyar</option>
										<option>Kab. Kebumen</option>
										<option>Kab. Kendal</option>
										<option>Kab. Klaten</option>
										<option>Kab. Kudus</option>
										<option>Kab. Magelang</option>
										<option>Kab. Pati</option>
										<option>Kab. Pekalongan</option>
										<option>Kab. Pemalang</option>
										<option>Kab. Purbalingga</option>
										<option>Kab. Purworejo</option>
										<option>Kab. Rembang</option>
										<option>Kab. Semarang</option>
										<option>Kab. Sragen</option>
										<option>Kab. Sukoharjo</option>
										<option>Kab. Tegal</option>
										<option>Kab. Temanggung</option>
										<option>Kab. Wonogiri</option>
										<option>Kab. Wonosobo</option>
									</optgroup>
									<optgroup label="jawa timur">
										<option>Kab. Bangkalan </option>
										<option>Kab. Banyuwangi </option>
										<option>Kab. Blitar </option>
										<option>Kab. Bojonegoro </option>
										<option>Kab. Bondowoso </option>
										<option>Kab. Gresik </option>
										<option>Kab. Jember </option>
										<option>Kab. Jombang </option>
										<option>Kab. Kediri </option>
										<option>Kab. Lamongan</option>
										<option>Kab. Lumajang</option>
										<option>Kab. Madiun</option>
										<option>Kab. Magetan</option>
										<option>Kab. Malang</option>
										<option>Kab. Mojokerto</option>
										<option>Kab. Nganjuk</option>
										<option>Kab. Ngawi</option>
										<option>Kab. Pacitan</option>
										<option>Kab. Pamekasan></option>
										<option>Kab. Pasuruan</option>
										<option>Kab. Ponorogo</option>
										<option>Kab. Probolinggo</option>
										<option>Kab. Sampang</option>
										<option>Kab. Sidoarjo</option>
										<option>Kab. Situbondo</option>
										<option>Kab. Sumenep</option>
										<option>Kab. Trenggalek</option>
										<option>Kab. Tulungagung</option>
										<option>Kab. Tuban</option>
									</optgroup>
									<optgroup label="banten">
										<option>Kab. Lebak </option>
										<option>Kab. Pandeglang </option>
										<option>Kab. Serang </option>
										<option>Kab. Tangerang</option>
									</optgroup>
									<optgroup label="yogya">
										<option>Kab. Bantul </option>
										<option>Kab. Gunung Kidul</option>
										<option>Kab. Kulon Progo</option>
										<option>Kab. Sleman></option>
									</optgroup>
									<optgroup label="bali">
										<option>Kab. Badung </option>
										<option>Kab. Bangli</option>
										<option>Kab. Buleleng</option>
										<option>Kab. Gianyar</option>
										<option>Kab. Jembrana</option>
										<option>Kab. Karang Asem</option>
										<option>Kab. Klungkung</option>
										<option>Kab. Tabanan</option>
									</optgroup>
									<optgroup label="nusa tenggara barat">
										<option>Kab. Bima </option>
										<option>Kab. Dompu </option>
										<option>Kab. Lombok Barat</option>
										<option>Kab. Lombok Tengah</option>
										<option>Kab. Lombok Timur</option>
										<option>Kab. Sumbawa</option>
										<option>Kab. Sumbawa Barat</option>
										<option>Kab. Lombok utara</option>
									</optgroup>
									<optgroup label="Nusa tenggara timur">
										<option>Kab. Alor </option>
										<option>Kab. Belu</option>
										<option>Kab. Ende</option>
										<option>Kab. Flores Timur</option>
										<option>Kab. Kupang</option>
										<option>Kab. Lembata</option>
										<option>Kab. Manggarai</option>
										<option>Kab. Manggarai Barat</option>
										<option>Kab. Ngada</option>
										<option>Kab. Nagekeo</option>
										<option>Kab. Rote Ndao</option>
										<option>Kab. Slkka</option>
										<option>Kab. Sumba Barat</option>
										<option>Kab. Sumba Barat Daya</option>
										<option>Kab. Sumba Tengah</option>
										<option>Kab. Manggarai Timur</option>
										<option>Kab. Sumba Timur</option>
										<option>Kab. Timor Tengah Selatan</option>
										<option>Kab. Timor Tengah Utara</option>
										<option>Kab. Sabu Raijua</option>
										<option>Kab. Malaka</option>
									</optgroup>
									<optgroup label="kalimantan barat">
										<option>Kab. Bengkayang </option>
										<option>Kab. Kapuas Hulu </option>
										<option>Kab. Ketapang</option>
										<option>Kab. Kayong Utara</option>
										<option>Kab. Kubu Raya</option>
										<option>Kab. Landak</option>
										<option>Kab. Melawi</option>
										<option>Kab. Pontianak</option>
										<option>Kab. Sambas</option>
										<option>Kab. Sanggau</option>
										<option>Kab. Sintang</option>
										<option>Kab. Sekadau</option>
									</optgroup>
									<optgroup label="kalimantan tengah">
										<option>Kab. Barito Selatan </option>
										<option>Kab. Barito Timur</option>
										<option>Kab. Barito Utara</option>
										<option>Kab. Gunung Mas</option>
										<option>Kab. Kapuas</option>
										<option>Kab. Katingan</option>
										<option>Kab. Kotawaringin Barat</option>
										<option>Kab. Kotawaringin Timur</option>
										<option>Kab. Lamandau</option>
										<option>Kab. Murung Raya</option>
										<option>Kab. Pulang Pisau</option>
										<option>Kab. Seruyan</option>
										<option>Kab. Sukamara</option>
									</optgroup>
									<optgroup label="kalimantan selatan">
										<option>Kab. Balangan </option>
										<option>Kab. Banjar </option>
										<option>Kab. Barito Kuala</option>
										<option>Kab. Hulu Sungai Selatan</option>
										<option>Kab. Hulu Sungai Tengah</option>
										<option>Kab. Hulu Sungai Utara</option>
										<option>Kab. Kotabaru</option>
										<option>Kab. Tabalong</option>
										<option>Kab. Tanah Bumbu</option>
										<option>Kab. Tanah Laut</option>
										<option>Kab. Tapin</option>
									</optgroup>
									<optgroup label="kalimantan timur">
										<option>Kab. Berau </option>
										<option>Kab. Bulungan </option>
										<option>Kab. Kutai Barat </option>
										<option>Kab. Kutai Kertanegara </option>
										<option>Kab. Kutai Timur</option>
										<option>Kab. Penajam Paser Utara</option>
										<option>Kab. Pasir</option>
										<option>Kab. Mahakam Ulu</option>
									</optgroup>
									<optgroup label="kalimantan utara">
										<option>Kab Malinau</option>
										<option>Kab. Nunukan</option>
										<option>Kab. Tana Tidung</option>
									</optgroup>
									<optgroup label="sulawesi utara">
										<option>Kab. Bolaang Mongondow </option>
										<option>Kab. Bolaang Mongondow Utara </option>
										<option>Kab. Minahasa </option>
										<option>Kab. Minahasa Tenggara </option>
										<option>Kab. Minahasa Selatan</option>
										<option>Kab. Minahasa Utara</option>
										<option>Kab. Sangihe Talaud</option>
										<option>Kab. Kep. Talaud</option>
										<option>Kab. Kep. Siau Tagulandang Biaro</option>
										<option>Kab. Bolaang Mongondow Timur</option>
										<option>Kab. Bolaang Mongondow Selatan</option>
									</optgroup>
									<optgroup label="sulawesi tengah">
										<option>Kab. Banggai </option>
										<option>Kab. Banggai Kepulauan</option>
										<option>Kab. Buol</option>
										<option>Kab. Donggala</option>
										<option>Kab. Morowali</option>
										<option>Kab. Parigi Mountong</option>
										<option>Kab. Poso</option>
										<option>Kab. Tojo Una-Una</option>
										<option>Kab. Toli-Toli</option>
										<option>Kab. Sigi</option>
										<option>Kab. Banggai Laut</option>
									</optgroup>
									<optgroup label="sulawesi selatan">
										<option>Kab. Selayar </option>
										<option>Kab. Bantaeng </option>
										<option>Kab. Barru </option>
										<option>Kab. Bone</option>
										<option>Kab. Bulukumba</option>
										<option>Kab. Enrekang</option>
										<option>Kab. Gowa</option>
										<option>Kab. Jeneponto</option>
										<option>Kab. Luwu</option>
										<option>Kab. Luwu Timur</option>
										<option>Kab. Luwu Utara</option>
										<option>Kab. Maros</option>
										<option>Kab. Pangkep</option>
										<option>Kab. Pinrang</option>
										<option>Kab. Sidenreng Rappang</option>
										<option>Kab. Sinjai</option>
										<option>Kab. Soppeng</option>
										<option>Kab. Takalar</option>
										<option>Kab. Tanatoraja</option>
										<option>Kab. Wajo</option>
										<option>Kab. Toraja Utara</option>
									</optgroup>
									<optgroup label="sulawesi tenggara">
										<option>Kab. Bombana </option>
										<option>Kab. Buton </option>
										<option>Kab. Konawe </option>
										<option>Kab. Kolaka </option>
										<option>Kab. Kolaka Utara </option>
										<option>Kab. Konawe Selatan</option>
										<option>Kab. Muna</option>
										<option>Kab. Wakatobi</option>
										<option>Kab. Konawe Utara</option>
										<option>Kab. Buton Utara</option>
										<option>Kab. Kolaka Timur</option>
									</optgroup>
									<optgroup label="gorontalo">
										<option>Kab. Boalemo </option>
										<option>Kab. Bone Bolango</option>
										<option>Kab. Gorontalo</option>
										<option>Kab. Gorontalo Utara</option>
										<option>Kab. Pohuwato</option>
									</optgroup>
									<optgroup label="sulawesi barat">
										<option>Kab. Mamuju</option>
										<option>Kab. Majene</option>
										<option>Kab. Mamuju Utara</option>
										<option>Kab. Mamasa</option>
										<option>Kab. Polewali Mamasa</option>
										<option>Kab. Mamuju Tengah</option>
									</optgroup>
									<optgroup label="maluku">
										<option>Kab. Buru </option>
										<option>Kab. Kepulauan Aru </option>
										<option>Kab. Seram Bagian Barat</option>
										<option>Kab. Seram Bagian Timur</option>
										<option>Kab. Maluku Tengah</option>
										<option>Kab. Maluku Tenggara</option>
										<option>Kab. Maluku Tenggara Barat</option>
										<option>Kab. Maluku Barat Daya</option>
										<option>Kab. Buru Selatan</option>
									</optgroup>
									<optgroup label="maluku utara">
										<option>Kab. Halmahera Barat </option>
										<option>Kab. Halmahera Selatan </option>
										<option>Kab. Halmahera Tengah</option>
										<option>Kab. Halmahera Tirnur</option>
										<option>Kab Halmahera Utara</option>
										<option>Kab. Kepulauan Sula></option>
										<option>Kab. Morotai</option>
										<option>Kab. Pulau Taliabu</option>
									</optgroup>
									<optgroup label="papua">
										<option>Kab. Asmat </option>
										<option>Kab. Biak Numfor</option>
										<option>Kab. Boven Digoel</option>
										<option>Kab. Jayapura</option>
										<option>Kab. Jayawijaya</option>
										<option>Kab. Keerom</option>
										<option>Kab. Mappi</option>
										<option>Kab. Merauke</option>
										<option>Kab. Mimika</option>
										<option>Kab. Paniai</option>
										<option>Kab. Pegunungan Bintang</option>
										<option>Kab. Puncak Jaya</option>
										<option>Kab. Sarmi</option>
										<option>Kab. Mamberamo Raya</option>
										<option>Kab. Supiori</option>
										<option>Kab. Tolikara</option>
										<option>Kab. Yahukimo</option>
										<option>Kab. Yapen Waropen</option>
										<option>Kab. Waropen</option>
										<option>Kab. Nabire</option>
										<option>Kab. Mamberamo Tengah</option>
										<option>Kab. Yalimo</option>
										<option>Kab. Lanny Jaya</option>
										<option>Kab. Nduga</option>
										<option>Kab. Puncak</option>
										<option>Kab. Dogiyai</option>
										<option>Kab. Deiyai</option>
										<option>Kab. Intan Jaya</option>
									</optgroup>


								</select>
						</div>
						<div class="col-sm-3">
							<input type="text" class="form-control" value=<? echo $data['nm_jalan'];?> name="jalan">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Asal Sekolah</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" value=<? echo $data['asal_sekolah'];?> name="sekolah">
						</div>
						<label class="col-sm-2 control-label">jurusan</label>
						<div class="col-sm-4">
							<select class="populate placeholder" value=<? echo $data['jurusan'];?> name="jurusan">
								<option value="">-- pilih jurusan --</option>
								<option>RPL</option>
								<option>Analis</option>
								<option>Akutansi</option>
								<option>Otomotif</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Hobi</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" value=<? echo $data['hobi'];?> name="hobi">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Pelajran kesukaan</label>
						<div class="col-sm-6">
							<input type="text"  class="form-control" value=<? echo $data['pelajaran_suka'];?> name="favorite">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Kata Mutira</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="wysiwig_simple" value=<? echo $data['kata_mutiara'];?> name="katmut"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Tujuan PKL</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="wysiwig_simple1" value=<? echo $data['tujuan_pkl'];?>name="tujuan_pkl"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Data period</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" id="date3_example" placeholder="Date period" name="periode1">-
							<input type="text" class="" id="date3-1_example" placeholder="Date period" name="periode2">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="kirim">
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		<!--End Content-->
	</div>
</div>

<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedgallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
<script src="js/tagsinput/jquery.tagsinput.js"></script>



<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});

$(document).ready(function() {
	// Load TimePicker plugin and callback all time and date pickers
	LoadTimePickerScript(AllTimePickers);
	// Create jQuery-UI tabs
	$("#tabs").tabs();
	// Sortable for elements
	$(".sort").sortable({
		items: "div.col-sm-2",
		appendTo: 'div.box-content'
	});
	// Droppable for example of trash
	$(".drop div.col-sm-2").draggable({containment: '.dropbox' });
	$('#trash').droppable({
		drop: function(event, ui) {
			$(ui.draggable).remove();
		}
	});
	var icons = {
		header: "ui-icon-circle-arrow-e",
		activeHeader: "ui-icon-circle-arrow-s"
	};
	// Make accordion feature of jQuery-UI
	$("#accordion").accordion({icons: icons });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();
});
</script>