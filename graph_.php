<?PHP
session_start();
?>
<?PHP
	$_SESSION['test']=generatorPassword();
	function generatorPassword()
	{
		$password_len = 10;
		$password = '';
		$word = 'OlAacfghKIJH23456789';
		$len = strlen($word);
		for($i = 0; $i < $password_len; $i++) {
			$password .= $word[rand() % $len]; }
		return $password;
	}
?>