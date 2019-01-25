<!DOCTYPE html>
<html>
<head>
	<title>BMI OOP</title>
	<?php require("Kalkulator.php"); ?>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	 Tinggi<input type="text" name="tinggi"><br>
	 Berat<input type="text" name="berat"><br>
	 Jenis Kelamin<br>
	 				<input type="radio" name="jk" value="Laki" id="l">
					 <label for="l">Laki-laki</label>
				  	<br>
	 				<input type="radio" name="jk" value="Perempuan" id="p">
	 				<label for="p">Perempuan</label>
	 				<br>
	 <input type="submit" name="submit">


</body>
</html>

<?php

$hasil= new Kalkulator();

if(isset($_POST['submit'])){
$hasil->bmi($_POST['tinggi'], $_POST['berat'], $_POST['jk']);
	echo $hasil->bmi();
}
    

// if($_POST['jk'] == 'Laki'){
// 	if($_POST['jk'] == 'Laki' < 17) {
// 	        echo "Underweight/Kurus";
// 	        $hasil->bmi($tinggi, $berat);
// 	    }elseif ($Laki < 23 ) {
// 	        echo "Normal";
// 	        $hasil->bmi($tinggi, $berat);
// 	    }elseif ($Laki < 27 ) {
// 	        echo "Overweight";
// 	        $hasil->bmi($tinggi, $berat);
// 	    }elseif ($Laki > 27 ) {
// 	        echo "Obesitas";
// 	        $hasil->bmi($tinggi, $berat);
// 	    }	
// }

// if($_POST['jk'] == 'Perempuan'){
//  if($_POST['jk'] == 'Perempuan' < 18) {
//         echo "Underweight/Kurus";
//         $hasil->bmi($tinggi, $berat);
//     }elseif ($Perempuan < 25 ) {
//         echo "Normal";
//         $hasil->bmi($tinggi, $berat);
//     }elseif ($Perempuan < 27 ) {
//         echo "Overweight";
//         $hasil->bmi($tinggi, $berat);
//     }elseif ($Perempuan > 27 ) {
//         echo "Obesitas";
//         $hasil->bmi($tinggi, $berat);
//     }
// }

?>
