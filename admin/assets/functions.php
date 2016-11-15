<?php
	class user extends Database
	{
		function isAdmin()
		{
			$query = $this->selectPrepare("SELECT `rank` FROM `users` WHERE `ID` = :id", array(
				':id' => $_SESSION['ID']
			));
			$rank  = $this->fetchObject($query)->rank;
			return ($rank == 1) ? true : false;
		}
		
		function LoggedIn()
		{
			@session_start();
			if (isset($_SESSION['username'], $_SESSION['ID'])) {
				return true;
			} else {
				return false;
			}
		}
	}
	function RandomString($len)
	{
		$randstr = '';
		srand((double) microtime() * 1000000);
		for ($i = 0; $i < $len; $i++) {
			$n = rand(48, 120);
			while (($n >= 58 && $n <= 64) || ($n >= 91 && $n <= 96)) {
				$n = rand(48, 120);
			}
			$randstr .= chr($n);
		}
		return $randstr;
	}
	function generate_salt()
	{
		return RandomString(8);
	}
	
	/**
	 * Salts a password based on a supplied salt.
	 *
	 * @param string The md5()'ed password.
	 * @param string The salt.
	 * @return string The password hash.
	 */
	function salt_password($password, $salt)
	{
		return md5(md5($salt) . $password);
	}
	
	if (isset($_SESSION['ID'])) {
		$getsalt = $Database->selectPrepare("SELECT `salt` FROM `users` WHERE `ID` = :id", array(
			':id' => $_SESSION['ID']
		));
		$salts   = $Database->fetchObject($getsalt);
		$salt    = $salts->salt;
	} else {
		
	}
	
	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) { //check ip from share internet
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //to check ip is pass from proxy
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
	function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['ID']);
		header('location: index.php');
	}
	
	function dateDiffTs($start_ts, $end_ts)
	{
		$diff = $end_ts - $start_ts;
		return round($diff / 86400);
	}
	
?>
