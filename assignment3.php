<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

#Load classes needed
function __autoload($class) {
	 require_once $class . '.php';
}

session_start();

if(isset($_SESSION['parent']) && isset($_SESSION['child']))
{
	$parent = unserialize($_SESSION['parent']);
	$child = unserialize($_SESSION['child']);

	if(isset($_POST['add']))
	{
		$parent->addOne();
		$child->addOne();
	}
	else if(isset($_POST['sub']))
	{
		$parent->minusOne();
		$child->minusOne();
	}
	else if(isset($_POST['sqrt']))
	{
		$child->root();
	}
	else if(isset($_POST['square']))
	{
		$child->square();
	}
	else if(isset($_POST['end']))
	{
		$child->clear();
		$parent->clear();
		unset($_SESSION['parent']);
		unset($_SESSION['child']);
		session_destroy();
	}

	$_SESSION['parent'] = serialize($parent);
	$_SESSION['child'] = serialize($child);

	echo $parent;
	echo $child;
	show_stuff();

}
else
{
	$parent = new ParentClass(0);
	$child = new ChildClass(0);
	$_SESSION['parent'] = serialize($parent);
	$_SESSION['child'] = serialize($child);
	echo $parent;
	echo $child;
	show_stuff();

}

?>
<?php
	function show_stuff()
	{

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div class="wrapper">
		<form class="" action="" method="post">
			<ul class="flex-list">
				<button type="submit" name="add" value="add">+</button>
				<button type="submit" name="sub" value="sub">-</button>
				<button type="submit" name="sqrt" value="sqrt">sqrt</button>
				<button type="submit" name="square" value="square">square</button>
				<button type="submit" name="end" value="end">JUST END IT</button>
			</ul>
		</form>
	</div>

</body>
</html>

<?php
}
 ?>
