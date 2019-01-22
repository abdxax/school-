<?php
require "../connect/function.php";
$db=new funs();

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
				<div class="col-6">
					<form class="inline-form">
						<div class="col-6">
							<input type="text" name="email" placeholder="Email">
							<input type="submit" name="save" value="بحص"  class="btn btn-info">
						</div>
						<div class="4">
							
						</div>
					</form>
				</div>
			</div>


			<div class="col-3">
				<ul class="nav navbar-nav">
					<li><a href="addstudent.php">Add new Machine</a></li>
					
					<!--<li><a href="#">Add new Machine</a></li>-->
				</ul>
			</div>
			<div class="col-8">
				<table class="table">
					<thead>
						<th>الاسم </th>
						<!--<th > اضاقة مجموعة </th>-->
						<th> حذف </th>
					</thead>
					<tbody>
						<?php
						$sql=$db->getAllsStudent();
						foreach ($sql as $key) {
							echo '

                             <tr>
                             <td>'.$key['name'].'</td>
                             <td>
                                <a href=delet.php?email='.$key['email'].'>DELETE</a>
                             </td>

                             /td>
                             </tr>
							';
						}

						?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</section>
</body>
</html>