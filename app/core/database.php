<?php

/**
 * database class
 */
class Database
{

	private function connect()
	{
		$str = DBDRIVER . ":hostname=" . DBHOST . ";dbname=" . DBNAME;
		return new PDO($str, DBUSER, DBPASS);
	}

	public function query($query, $data = [], $type = 'object')
	{
		$con = $this->connect();

		$stm = $con->prepare($query);
		if ($stm) {
			$check = $stm->execute($data);
			if ($check) {
				if ($type == 'object') {
					$type = PDO::FETCH_OBJ;
				} else {
					$type = PDO::FETCH_ASSOC;
				}

				$result = $stm->fetchAll($type);

				if (is_array($result) && count($result) > 0) {

					//run afterSelect functions
					if (property_exists($this, 'afterSelect')) {
						foreach ($this->afterSelect as $func) {

							$result = $this->$func($result);
						}
					}

					return $result;
				}
			}
		}

		return $con->lastInsertId();
	}
	

	public function create_tables()
	{
		//users table
		$query = "

			CREATE TABLE IF NOT EXISTS `users` (
			 `id` int(11) NOT NULL AUTO_INCREMENT,
			 `email` varchar(100) NOT NULL,
			 `firstname` varchar(30) NOT NULL,
			 `lastname` varchar(30) NOT NULL,
			 `password` varchar(255) NOT NULL,
			 `role` varchar(20) NOT NULL,
			 `date` date DEFAULT NULL,
			 PRIMARY KEY (`id`),
			 KEY `email` (`email`),
			 KEY `firstname` (`email`),
			 KEY `lastname` (`email`),
			 KEY `date` (`date`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

		";

		$this->query($query);
	}


	public function getTables($TABLE_SCHEMA = "")
	{
		$sql = "SELECT TABLE_NAME
        FROM INFORMATION_SCHEMA.TABLES
        WHERE TABLE_SCHEMA = '$TABLE_SCHEMA' ";
		$tables = $this->query($sql);

		return ($tables) ? $tables : null;
	}

	public function getColumns($db_name = '', $table_name = '')
	{
		$sql = "SELECT COLUMN_NAME, COLUMN_TYPE
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = '$db_name' AND TABLE_NAME = '$table_name'";
        $columns = $this->query($sql);

		return ($columns) ? $columns : null;
	}

	
}
