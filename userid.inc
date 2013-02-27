<?php

// Función que retorna un array asociativo con el screen_name e id del usuario
// o false si hay algún problema (no se puede abrir el zip, no contiene el 
// archivo user_details, no hay JSON válido o no encuentra los campos buscados)
//
function getUserFromTweetsZIP ($pathToZipFile) {
  $return=false;

	$z=zip_open($pathToZipFile);

	if (is_resource($z)) {
		while ($entry = zip_read($z)) {
			$name=zip_entry_name($entry);
			if (strpos($name,"user_details.js")!==false) {
				if (zip_entry_open($z,$entry,"r")) {
					$contents=zip_entry_read($entry,zip_entry_filesize($entry));
					
					list($trash,$json)=explode("=",$contents);
					
					$user_details=json_decode(trim($json));
					
					$screen_name=$user_details->screen_name;
					$id=$user_details->id;

					unset($return);

					$return["screen_name"]=$screen_name;
					$return["id"]=$id;

					zip_entry_close($entry);
				}
				break;
			}
		}
		zip_close($z);
	}

	return $return;
}

?>
