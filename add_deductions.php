<?php
	
		require("db.php");
		
		@$id 			= $_POST['deduction_id'];
		@$bir 			= $_POST['bir'];
		@$gsis 			= $_POST['gsis'];
		@$love 			= $_POST['pag_ibig'];


		$sql = mysqli_query($conn,"UPDATE deductions SET bir='$bir', gsis='$gsis', pag_ibig='$love' WHERE deduction_id='2'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>