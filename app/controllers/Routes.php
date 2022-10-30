<?php

require_once './config/Core.php';
require_once "./app/models/Routes.php";

class Routes{
	
    static public function View(){
	
		$route = array();
		
		if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != APP_FOLDER) {
			
			$route = $_SERVER['REQUEST_URI'];
			
		}else{
			
			$route = 'index';
			
		}

 
		$page = RoutesModel::View($route);
		
		include $page;

	}
}