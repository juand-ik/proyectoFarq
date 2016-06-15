
<div class="activos">
	<?php

		include_once "../php/backend/DBConect.php";
		include_once "../php/backend/Activos.php";


		$db = new DBConect();
		$acts = new Activos($db);	
	?>
</div>	
