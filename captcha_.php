<?PHP
session_start();
?>
<?PHP
	header('Content-Type: image/png');
	$_SESSION['test']=generatorPassword();
	$im = ImageCreate(70,35) or ("Cannot Create image");
	$white = ImageColorAllocate($im,255,255,255);
	$black = ImageColorAllocate($im,0,0,0);
	ImageFill($im,0,0,$black);
	ImageString($im,5,3,10,$_SESSION['test'],$white);
	ImagePng($im);
	ImageDestroy($im);
	function generatorPassword()
	{
		$password_len = 7;
		$password = '';
		$word = 'ABDEFHRTabdefghirt23456789';
		$len = strlen($word);
		for($i = 0; $i < $password_len; $i++) {
			$password .= $word[rand() % $len]; }
		return $password;
	}
?>