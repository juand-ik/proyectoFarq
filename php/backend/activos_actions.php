<style>
	table, th, td{ border: 1px solid black; border-collapse: collapse;}
	th, td{ padding: 5px; }
</style>

<div class="activos">
	<table style="width:100%">
		<tr>
			<th>id</th>
			<th>usuario</th>
			<th>numserie</th>
		</tr>
	<?php

		/*include_once "DBConect.php";
		include_once "Activos.php";*/

		include_once "../php/backend/DBConect.php";
		include_once "../php/backend/Activos.php";


		$db = new DBConect();
		$acts = new Activos($db);	
		//print_r($acts->getAll());
		if($rows = $acts->getAll())
		{
			foreach($rows as $val)
			{
				echo "<tr>";
				echo "<th><a href='detalles.php?id=".htmlentities(mb_convert_encoding($val['id'],"UTF-8"))."' >".htmlentities(mb_convert_encoding($val['id'],"UTF-8"))."</a></th>";
				echo "<th>".htmlentities(mb_convert_encoding($val['usuario'],"UTF-8"))."</th>";
				echo "<th>".htmlentities(mb_convert_encoding($val['numserie'],"UTF-8"))."</th>";
				echo "<tr>";
			}
			echo "</table>";
		}
		else
		{
			die("Error");
		}
		?>
</div>

