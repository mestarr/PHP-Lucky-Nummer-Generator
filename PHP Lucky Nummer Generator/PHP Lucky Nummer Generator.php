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
		font-size:19px;
		text-align:center;
	}
</style>

<div class="lottery-panel">
<table border='0'>
	<tr>
	<?php
	// Declare an array of numbers
	$numbers = array();
					
	for($n=0;$n<20;) {
		// Generate a random number
		$r = rand (100, 1000);
		
		// Checking if the number is not in the array
		if(!in_array( $r, $numbers) )  :
			$numbers[$n] = $r;
			$n++;
		endif;
	}
		
	// Order the array in ascending order
	sort($numbers);
	
	// Print the numbers drawn
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