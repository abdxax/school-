<?php
require "../connect/function.php";
if (isset($_POST['sub'])) {
	$email=strip_tags($_POST['email']);
	$name=strip_tags($_POST['name']);
	$class=strip_tags($_POST['class']);
	$db=new funs();
	$db->addStudent ($name,$email,$class);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<header></header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="col-8">
					<form class="inline-form" method="POST">
						<input type="email" name="email" class="form-contrl">
						<input type="text" name="name" class="form-contrl">
						<input type="text" name="class" class="form-contrl">
						<input type="submit" name="sub" class="btn btn-info" >
						<div class="4">
							
						</div>
					</form>
				</div>
			</div>



		</div>
	</div>
</section>
</body>
</html>