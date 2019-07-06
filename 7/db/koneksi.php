<?php
    Class Bootcamp{
		private $host  = 'localhost';
		private $user  = 'root';
		private $pass  = '';
		private $db    = 'bootcamp';
		private $con   = '';
		private $query = '';

		function connect(){
			$this->con = mysqli_connect($this->host,$this->user,$this->pass)or die("Koneksi Gagal!");
			mysqli_select_db($this->con, $this->db)or die("Gagal Terhubung Database!");
			return true;
		}
		function sql($sql){
			$this->query = mysqli_query($this->con, $sql);
			return $this->query;
		}
		function collectData(){
			return mysqli_fetch_array($this->query);
		}
		function assoc(){
			return mysqli_fetch_assoc($this->query);
		}
	}
?>