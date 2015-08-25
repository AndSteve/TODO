<?php
require_once('startup.php');
$to_json = false;
if(!isset($from_index) || $from_index==false)
{
	$to_json = true;
	ob_start();
}
?>

<header>
This is my header, yo
<nav>
	<ul>
	<?php
	if(empty($_SESSION['user'])){
		?>
		<li>Login</li>
		<?php
	}
	else{
		?>
		<li>Create</li>
		<li>List</li>
		<li>Logout</li>
		<?php
	}
	?>
		<li>About us</li>
	</ul>
</nav>
</header>
<?php
	if($to_json){
		$html = ob_get_contents();
		ob_end_clean();
		$output = ['success'=>true, 'new_header'=>$html];
		echo json_encode($output);
		exit();
	}
?>
