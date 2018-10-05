<?php
include ('db.php');
class users extends db
{
	/*public function select ()
	{
		$sql = 'SELECT * FROM users';
		$users = $this->query($sql);
		return $users; 
	}*/
	public function getUsers()
	{
		$sql = 'SELECT * FROM users ';
		$users = $this->select ($sql);
		return $users;
	}
    public function getUsersByKeyword($keyword)
    {
    	$sql = 'SELECT * FROM users WHERE username LIKE "%'.$keyword.'%"';
    	$users = $this->select($sql);
    	return $users;
    }
	public function delete($params)
	{
		$sql = '.....cau sql....';
		$this->query($sql);
	}
	public function insertUser($data)
	{
		$sql = 'INSERT INTO users (`username`,`password`)'.'VALUE("'.$data['username'].'","'.$data['password'].'")';
		$this->query($sql);
	}
	public function update($params)
	{
		$sql ='';
		$this->query($sql);
	}
} 
 ?>