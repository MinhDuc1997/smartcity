<?php
session_start();

class connect{
	private $localhost = 'localhost';
	private $dbuser = 'techitvn';
	private $dbname = 'techitvn_smartcity';
	private $dbpass = '01689470862';
	public $con;
	function connect_(){
		$this->con = new mysqli($this->localhost,$this->dbuser,$this->dbpass,$this->dbname) or die('loi');
		mysqli_set_charset($this->con,"utf8");
	}

	function createJson_nodeInfo(){
		$sql = "SELECT * FROM nodeinfo";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function login($u,$p){
	$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p' ";
		$query = $this->con->query($sql);
		$row = $query->fetch_assoc();
		if($row['username'] == $u and $row['password'] == $p){
			$status = array("status"=>"true");
			$info = array("name: "=>$row['username'],"email"=>$row['email'],"phone"=>$row['phone'],"address"=>$row['address']);
			array_push($status, $info);//json doi tuong, vi psuh mang vao mang
			$json = json_encode($status);
			echo $json;
		}
		else{
			$status = array("status"=>"flase");
			$json = json_encode($status);
			echo $json;
		}
	}

	function createJson_cauhinh(){
		$sql = "SELECT * FROM cauhinh";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_chedo(){
		$sql = "SELECT * FROM chedo";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_congtrinh(){
		$sql = "SELECT * FROM congtrinh";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_congtrinhinfo(){
		$sql = "SELECT * FROM congtrinhinfo";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_denduong(){
		$sql = "SELECT * FROM denduong";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_dentag(){
		$sql = "SELECT * FROM dentag";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_node(){
		$sql = "SELECT * FROM node";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function createJson_phanhoi(){
		$sql = "SELECT * FROM phanhoi";
		$query = $this->con->query($sql);
		$array =array();
		while ($row = $query->fetch_assoc()) {
			array_push($array, $row);//json doi tuong, vi psuh mang vao mang
		}
		$json = json_encode($array);
		echo $json;
	}

	function action($sql){
			$sql_ = $sql; 
			$array = array("status"=>"false");
			$json = json_encode($array);
			$query = $this->con->query($sql_) or die($json);
			if($query){
				$array = array("status"=>"true");
				$json = json_encode($array);
				echo $json;
			}
			else{
				$array = array("status"=>"true");
				$json = json_encode($array);
				echo $json;
			}
			
	}
}