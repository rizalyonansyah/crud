<head>
    <title>rizalyonansyah</title>

<style>
  	.textfield{
  		color: #000;
  		border: 1px double #09F;
  	}
  	.far{
  		color: #000;
  		border: 2px double #09F;
  		background-color: #CCC;
  	}

  	.lada{
	  background:#2C97DF;
	  color:black;
	  border-top:0;
	  border-left:0;
	  border-right:0;
	  border-bottom:5px solid #2A80B9;
	  padding:10px 20px;
	  text-decoration:none;
	  font-family:sans-serif;
	  font-size:11pt;
	}

  	{
	font-size: 15px;
	}


  	.row.content{
  		height: 450px;
  	}

	label,

	.large{
  	display:inline-block;
  	vertical-align:top;
  	width:500px;
  	height:200px;

	}
</style>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<nav class="navbar logo-w navbar-left" >
					<a class="logo" href="index.html">Saturn</a>
				</nav>
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    <span class="logo">Saturn</span>
				</div>
			    <nav id="navbar-1" class="navbar item-nav navbar-right">
				    <ul>
				        <li><a href="index.php">Home</a></li>
				        <li><a href="about.html">About</a></li>
				        <li><a href="daftar.php">Join</a></li>
				        <li><a href="contact.html">Contact</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro">
		<div class="container">
			<div class="units-row">
			    <div class="unit-10">
			    	<img class="img-intro" src="img/avatar.png" alt="">
			    </div>
			    <div class="unit-90">
			    	<p class="p-intro">JADI LAH ANDA BAGIAN DARI KAMI :)</p>
			    </div>
			</div>
		</div>
	</div>


<br>
<div>
<form action="" name="register" method="POST">
<pre>
DATA PRIBADI


	Nama                  <input type="text" name="nama" a class="textfield" placeholder=" Nama anda"></input>                                    

	tempat tanggal lahir  <input type="text" name="tempat" a class="textfield" placeholder=" tempat"> <select name="tgl" a class="textfield">
				<?php for ($i = 1; $i <= 31; $i++) { ?>
				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
				<?php } ?>
			</select> <select name="bln" a class="textfield">
				<option value="januari">Januari</option>
				<option value="febuari">Februari</option>
				<option value="maret">Maret</option>
				<option value="april">April</option>
				<option value="mei">Mei</option>
				<option value="juni">Juni</option>
				<option value="juli">Juli</option>
				<option value="agustus">Agustus</option>
				<option value="september">September</option>
				<option value="oktober">Oktober</option>
				<option value="november">November</option>
				<option value="desember">Desember</option>
			</select> <select name="thn" a class="textfield">	
			<?php 
				$thn = date("Y");
				$min = 17;
				$range = 50;
			?>
				<?php for ($i = $thn - $min - $range; $i <= $thn - $min; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>									
				<?php } ?>
			</select>

	Alamat                <textarea name="alamat" size="20" rows="5" cols="40" a class="large" placeholder=" Alamat"></textarea>

        Alamat email          <input type="email" name="email" a class="textfield" placeholder=" anda@contoh.com"></input>

	Telepon               <input type="number" name="telepon" a class="textfield" placeholder=" 08***********"></input>

	jenis kelamin         <input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki <input type="radio" name="jk" value="Perempuan">Perempuan</td>

	Agama                 <select name="agama" a class="textfield">
	                      <option value="Islam">Islam</option>
	                      <option value="Kristen">Kristen</option>
	                      <option value="Budha">Budha</option>
	                      <option value="Hindu">Hindu</option></select>

	Status                <select name="status" a class="textfield">
				          <option value="menikah">menikah</option>
				          <option value="lajang">lajang</option>
				          </select>

	Tinggi/Berat badan    <input type="text" name="tinggi" size="7" a class="textfield" placeholder=" tinggi"></input>/<input type="text" name="berat" size="5" a class="textfield" placeholder=" berat"></input>

	Kesehatan             <input type="text" name="kesehatan" a class="textfield" placeholder=" Kondidisi anda"></input>

	Kewarnegaraan         <select name="warga" a class="textfield">
				          <option value="warga negara indonesia">warga negara indonesia</option>
				          <option value="warga negara asing">warga negara asing</option>
				          </select>

	</pre>
	<pre>

DATA PENIDIDKAN

     Pemdidikan formal     <textarea name="pendidikan" rows="5" cols="40" a class="large" placeholder=" Riwayat pendidikan anda"></textarea>
    
</pre>
	<center>
    <button type="submit" name="submit" value="SUBMIT" a class="lada" href="#">SUBMIT</button>
    <button type="reset" name="reset" value="RESET" a class="lada" href="#">RESET</button>
    


    </center>  
    <br>
    <br>
</form>
</div>


<?php
	if (isset($_POST['submit'])) 
	{
		$nama = $_POST['nama'];
		$tempat = $_POST['tempat'];
		$tgl = $_POST['tgl'];
		$bln = $_POST['bln'];
		$thn = $_POST['thn'];
		$alamat= $_POST['alamat'];
		$email = $_POST['email'];
		$telepon = $_POST['telepon'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$status = $_POST['status'];
		$tinggi = $_POST['tinggi'];
		$berat = $_POST['berat'];
		$kesehatan = $_POST['kesehatan'];
		$Kewarnegaraan = $_POST['warga'];
		$pendidikan = $_POST['pendidikan'];
	

		$to = "rizalyonansyah845@gmail.com";
		$subject = "LAMARAN KERJA";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
		$headers .= "From : <".$email.">"."\r\n";
		$headers .= "Cc: rizalramonez@yahoo.com"."\r\n";
		$message = "<html>


<head>
	<title>LAMARAN KERJA</title>
</head>
<body>
Nama : ".$nama." <br>
Tempat, tanggal lahir : ".$tempat.", ".$tgl."-".$bln."-".$thn." <br>
Alamat : ".$alamat." <br>
Email : ".$email." <br>
Telepon : ".$telepon." <br>
Jenis kelamin : ".$jk." <br>
Agama : ".$agama." <br>
Status : ".$status." <br>
Tinggi/berat badan : ".$tinggi."/".$berat." <br>
Kewarnegaraan : ".$Kewarnegaraan." <br>
<br>
<br>
pendidikan formal : ".$pendidikan." <br>
</body>
</html>";
	mail($to, $subject, $message, $headers);
	echo "<script>alert('lamaran ada telah terkirim')</script>";
}
?>