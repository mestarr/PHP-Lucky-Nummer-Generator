<style type="text/css">
    div{
        font-family:Verdana;
		text-align:center;
		width:200px;
	}
    	
	table {
		margin:20px auto;
		width:180px;
	}
	
	td {
		font-size:25px;
		text-align:center;
	}
</style>

<div>
<table border='0'>
	<tr>
	<?php
	//arr. of numbers
	$numbers = array();
					
	for($n=0;$n<20;) {
		//list random number
		$r = rand (100, 1000);
		
		// Checking the number, if is not in the array list
		if(!in_array( $r, $numbers) )  :
			$numbers[$n] = $r;
			$n++;
		endif;
	}
		
	
	sort($numbers);
	
	// Print 
	for($n=0;$n<20;$n++) {
		if($numbers[$n] == 100)
			echo("<td>?</td>");	
		else
			echo("<td>" . $numbers[$n] . "</td>");
	}
	?>
	</tr>
</table>
</div>
