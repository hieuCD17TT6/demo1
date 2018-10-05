<?php
	include ('./users.php');
	if(isset($_GET['username'])){
		$data = ['username' => $_GET['username'], 'password' => $_GET['password']];
	
	$obj_user = new users();

	$users = $obj_user->insertUser($data);
	}
?>
<form>
	<input type="text" name="username" placeholder="Nhập User">
	<input type="text" name="password" placeholder="Nhập Password">
	<button type="submit">Thêm mới</button>
</form>