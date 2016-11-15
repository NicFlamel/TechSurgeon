<?php
	ob_start();
	
	$validPages = array("services","customers","aboutus","login");
	$validActions = array("new","view");
	
	if (isset($_GET['page']) && (in_array($_GET['page'], $validPages))) {
		$currentPage = $_GET['page']; // Get the current page we are on.
	} else {
		$currentPage = "default"; // If current page is not set, it is default.
	}
	
	if (isset($_GET['action']) && (in_array($_GET['action'], $validActions))) {
		$currentAction = $_GET['action']; // Get the current action we are attempting.
	} else {
		$currentAction = "none"; // If current action is not set, it is none.
	}
	
	require_once('/assets/db.php'); //Connect to the DB
	require_once('/assets/init.php'); //Load functions
	
	$query = $Database->selectPrepare("SELECT * FROM `settings` ORDER BY `id` DESC LIMIT 1", array());
	
	while ($sitenameq = $Database->fetchObject($query)) {
		$sitename   = $sitenameq->name;
		$slogan     = $sitenameq->slogan;
		$adminemail = $sitenameq->adminmail;
	}

	
	if ($currentAction == "logout") { //If the user is attempting to logout, log them out. :)
		logout();
	}
	
	//if (!($user->isAdmin())) { //if user is trying to access an admin page, but is not admin, send them to default page.
	//	include('/assets/pages/404.php'); //Display the 404.php file located in the assets/pages folder.
	//	die;
	//}
	
	switch ($currentPage) {
		/******ADMIN PAGES******/
		case "services": //If current page is "services"
			include('/assets/pages/services.php'); //Display the services.php file located in the assets/pages folder.
			break;
		case "customers": //If current page is "customers"
			include('/assets/pages/customers.php'); //Display the customers.php file located in the assets/pages folder.
			break;
		case "aboutus": //If current page is "aboutus"
			include('/assets/pages/aboutus.php'); //Display the aboutus.php file located in the assets/pages folder.
			break;
		/******ADMIN PAGES******/
		case "acpdash": //If current page is "acpdash"
			include('/assets/pages/admin/acpdash.php'); //Display the acpdash.php file located in the assets/pages/admin folder.
			break;
		/******DEFAULT PAGE******/
		default: //If no page is defined, we are on the index.
			include('/assets/pages/default.php'); //Display the default.php file located in the assets/pages folder.
	}
	die;
?>