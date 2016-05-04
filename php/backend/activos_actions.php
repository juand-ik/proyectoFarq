<div class="activos">
	<!--<select id="id" name="activos">-->
		<?php

		/*include_once "DBConect.php";
		include_once "Activos.php";*/

		include_once "../php/backend/DBConect.php";
		include_once "../php/backend/Activos.php";


		$db = new DBConect();
		$acts = new Activos($db);	

		$id=2;
		if ($rows = $acts->getById($id) )
		{
			foreach ($rows as $value)
			{
				echo "Ok <br><br>";
				echo htmlentities(mb_convert_encoding($value['id'],"UTF-8"));
				echo "<br><br>";
				echo htmlentities(mb_convert_encoding($value['nombre'],"UTF-8"));
			}
		}
		
			/*if($rows = $acts->getAll())
			{
				foreach($rows as $val)
				{
					echo "<option value='".htmlentities(mb_convert_encoding($val['id'],"UTF-8"))."'>".
						htmlentities(mb_convert_encoding($val['nombre'],"UTF-8"))."</option>";
				}
			}
			else
			{
				die("Error");
			}*/
		?>
	<!--</select>-->
</div>

