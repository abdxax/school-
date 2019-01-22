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
					<li><a href="addgroup.php">Add new Machine</a></li>
					
					<!--<li><a href="#">Add new Machine</a></li>-->
				</ul>
			</div>
			<div class="col-8">
				<table class="table">
					<thead>
						<th>المجموعة </th>
						<th > الحالة </th>
						<th> </th>
					</thead>
					<tbody>
						<?php 
                          $sql=$db->getAllsGroup();
                          foreach ($sql as $key) {
							echo '

                             <tr>
                             <td><a href=gropIndex.php?id='.$key['id_group'].'>'.$key['group_name'].'</td>
                             <td>
                                '.$key['status'].'
                             </td>

                             </td>
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