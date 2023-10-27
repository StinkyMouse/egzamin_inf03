
			<?php
				$laczenie = mysqli_connect('localhost', 'root', '', 'baza');
				if(!empty($_POST['data']) && !empty($_POST['liczba']) && !empty($_POST['numer'])) {
					$data = $_POST['data'];
					$liczba = $_POST['liczba'];
					$numer = $_POST['numer'];
					$select = "INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) VALUES ('$data', '$liczba', '$numer');";
					mysqli_query($laczenie, $select);
					
					echo "Dodano rezerwacje do bazy" ;
					
				}else{
					echo "Nie dodano rezerwacji";
				}
				mysqli_close($laczenie);
				?>
