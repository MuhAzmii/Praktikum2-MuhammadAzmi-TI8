<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Array Siswa</title>
	</head>
	<body class="bg-light">
		<?php
			$ns1 = ['id'=>1,'nim'=>'02330','uts'=>81,'uas'=>80,'tugas'=>77];
			$ns2 = ['id'=>2,'nim'=>'02331','uts'=>72,'uas'=>53,'tugas'=>69];
			$ns3 = ['id'=>3,'nim'=>'02332','uts'=>64,'uas'=>82,'tugas'=>71];
			$ns4 = ['id'=>4,'nim'=>'02333','uts'=>87,'uas'=>90,'tugas'=>83];
			
			$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
		?>
		<div class="container-fluid position-absolute top-50 left-50 translate-middle-x translate-middle-y">
			<h3 class="text-center">Daftar Nilai Siswa</h3>
			<table class="table table-blue table-striped table-hover text-center w-50 m-auto shadow">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIM</th>
						<th scope="col">UTS</th>
						<th scope="col">UAS</th>
						<th scope="col">Tugas</th>
						<th scope="col">Nilai Akhir</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
						foreach($ar_nilai as $ns){
							echo '<tr><th scope="row">'.$nomor.'</th>';
							echo '<td>'.$ns['nim'].'</td>';
							echo '<td>'.$ns['uts'].'</td>';
							echo '<td>'.$ns['uas'].'</td>';
							echo '<td>'.$ns['tugas'].'</td>';
							$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
							echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
							echo '<tr/>';
							$nomor++;
						}
					?>
				</tbody>
			</table>
		</div>

		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>