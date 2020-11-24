<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Mahasiswa</title>
    <style>
	    body{
	        background-color:#1e4f66;
	    }
	    .latar{
	        width:500px;
	        height:360px;
	        margin-top:7%;
	        margin-left:30%;
	        margin-bottom:7%;
	        background-color:#bfebff;
	        border-radius:20px;
	        padding:20px;
	        box-shadow: 0px 0px 8px 8px;
	    }
	    h2 {
		color:#244554;
		text-align:center;
		}
		table{
			line-height:35px;
		}
	</style>
</head>

<body>
	<div class=latar id="box">
		<h2> Masukkan Data Mahasiswa </h2>
		<form action="" method="post">
			<table>
				<tr>
					<td width=120>Nama Lengkap&nbsp;&nbsp;</td>
					<td><input type="text" name="nama" value="" placeholder="Masukkan Nama Lengkap disini" size="40"></td>
				</tr>
				<br>
				<tr>
					<td width=120>NIM&nbsp;&nbsp;</td>
					<td><input type="text" name="nim" value="" placeholder="Masukkan NIM disini" size="40"></td>
				</tr>
				<tr>
					<td width=120>Nilai Tugas&nbsp;&nbsp;</td>
					<td><input type="number" name="tugas" value="" placeholder="Masukkan Nilai Tugas disini" size="40"></td>
				</tr>
				<tr>
					<td width=120>Nilai UTS&nbsp;&nbsp;</td>
					<td><input type="number" name="uts" value="" placeholder="Masukkan Nilai UTS disini" size="40"></td>
				</tr>
				<tr>
					<td width=120>Nilai UAS&nbsp;&nbsp;</td>
					<td><input type="number" name="uas" value="" placeholder="Masukkan Nilai UAS disini" size="40"></td>
				</tr>
				<tr>
	                <td><input type="submit" name="submit" id="hide" value="kirim"></td>
	            </tr>
			</table> 
		</form>
		<hr>
		<?php
			error_reporting(0);
			ini_set('display_errors', 0);
			if(isset($_POST["submit"]))
			{
				$nilaiAkhir=$_POST["tugas"]*0.4+$_POST["uts"]*0.3+$_POST["uas"]*0.3;
				if($nilaiAkhir>=80)
				{
					$keterangan="A";
				}
				else if($nilaiAkhir>=70){
					$keterangan = "B";
				}else if($nilaiAkhir>=60){
					$keterangan = "C";
				}else {
					$keterangan = "D";
				}
			}

		?>
	    <?php 
	    error_reporting(0);
		ini_set('display_errors', 0);
	    if(isset($nilaiAkhir)){ ?>   
		    <style>
		    .latar{
		    height:700px;
		    }
			</style>
	        <h2>Nilai Akhir Mahasiswa</h2>
	        <form action="" method="post">
		        <table>
		            <tr>
		                <td>Nama Lengkap</td>
		                <td>:</td>
		                <td><?= $_POST["nama"]; ?></td>
		            </tr>
		            <tr>
		                <td>NIM</td>
		                <td>:</td>
		                <td><?= $_POST["nim"]; ?></td>
		            </tr>
		            <tr>
		                <td>Nilai Tugas</td>
		                <td>:</td>
		                <td><?= $_POST["tugas"]; ?></td>
		            </tr>
		            <tr>
		                <td>Nilai UTS</td>
		                <td>:</td>
		                <td><?= $_POST["uts"]; ?></td>
		            </tr>
		            <tr>
		                <td>Nilai UAS</td>
		                <td>:</td>
		                <td><?= $_POST["uas"]; ?></td>
		            </tr>
		            <tr>
		                <td>Nilai Akhir</td>
		                <td>:</td>
		                <td><?= $nilaiAkhir; ?></td>
		            </tr>
		            <tr>
		                <td>Keterangan</td>
		                <td>:</td>
		                <td>Selamat Anda dinyatakan Lulus dengan Nilai <?= $keterangan; ?></td>
		            </tr>
		            <tr>
		                <td><a href="index.php"><button>Reset</button></a></td>
		            </tr>
		        </table>
		     </form>
	    <?php } 
	    ?>
	</div>
</body>
