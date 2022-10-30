<?php

class RoutesModel{

	static public function View($route){	

		$route = explode(APP_FOLDER, $route);
		
		if($route[0] == "index"){

			$page = "resources/views/index.php";

		}else if (
			
            $route[1] == "index"){

			$page = "resources/views/$route[1].php";

		}else{

			$page = "resources/views/error404.php";

		}

		return $page;
	}
}	