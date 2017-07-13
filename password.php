<script src = "js/jquery.js"></script>
<?php
function passFunc($len, $set = "")
	{
		$gen = "";
		for($i = 0; $i < $len; $i++)
			{
				$set = str_shuffle($set);
				$gen.= $set[0]; 
			}
		return $gen;
	} 
	$pass =  passFunc(8, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
		
?>

<input type = "button" onclick = "document.getElementById('pass').value = '<?php echo $pass?>'" value = "Generate">
<input type = "text" id = "pass" > 
<script>
	
</script>

















<?php
function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
{
	$sets = array();
	if(strpos($available_sets, 'l') !== false)
		$sets[] = 'abcdefghjkmnpqrstuvwxyz';
	if(strpos($available_sets, 'u') !== false)
		$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
	if(strpos($available_sets, 'd') !== false)
		$sets[] = '23456789';
	if(strpos($available_sets, 's') !== false)
		$sets[] = '!@#$%&*?';

	$all = '';
	$password = '';
	foreach($sets as $set)
	{
		$password .= $set[array_rand(str_split($set))];
		$all .= $set;
	}

	$all = str_split($all);
	for($i = 0; $i < $length - count($sets); $i++)
		$password .= $all[array_rand($all)];

	$password = str_shuffle($password);

	if(!$add_dashes)
		return $password;

	$dash_len = floor(sqrt($length));
	$dash_str = '';
	while(strlen($password) > $dash_len)
	{
		$dash_str .= substr($password, 0, $dash_len) . '-';
		$password = substr($password, $dash_len);
	}
	$dash_str .= $password;
	return $dash_str;
}
 $price = generateStrongPassword();
?>
<input type = "button" onclick = "document.getElementById('try').value = '<?php echo $price?>'" value = "Generate">
<input type = "text" id = "try"></a>	