<?php
$mes=date("m");
$any=date("y");
$diaActual=date("d");
$diaSetmana=date("w",mktime(0,0,0,$mes,1,$any))+7;
$ultimDiaMes=date("dm",(mktime(0,0,0,$mes+1,1,$any)-1));
$mesos=array(1=>"Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre");
?>
 
<!DOCTYPE html>
<head>
    <title>Calendari</title>		
</head>
<body>
<table id="calendar">
	<caption><?php echo $mesos[$mes]." ".$any?></caption>
	<tr>
		<th>Dl.</th>
		<th>Dt.</th>
		<th>Dc.</th>
		<th>Dj.</th>
		<th>Dv</th>
		<th>Ds</th>
		<th>Dg</th>
	</tr>
	<tr>
		<?php
		$last_cell=$diaSetmana+$ultimDiaMes;
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSetmana)
			{
				$dia=1;
			}
			if($i<$diaSetmana || $i>=$last_cell)
			{
				echo "<td>&nbsp;</td>";
			}else{
				if($dia==$diaActual)
					echo "<td class='avui'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>