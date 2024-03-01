<?php

namespace Controller;

/**
 * main controller class
 */

use Database;

class Controller
{

	public $data = [];
	public $db_name = null;
	public $table_name = null;
	public $class_name = null;
	public $column_name = null;
	public $platform = null;
	public $columns = null;
	public $indexs = null;
	
	public function __construct()
	{
	
		$this->db_name = get('db_name');
		$this->table_name = get('table_name');
		$this->column_name = get('column_name');

		$this->platform = getURL()[0];
		$this->data['platform'] = $this->platform;

		$this->class_name = setTableNameAsClassName($this->table_name);

		$db = new Database();
		$this->data['title'] = "Home";
		$this->data['db_name'] = $this->db_name;
		$this->data['tables'] = null;
		$this->data['column_name'] = $this->column_name;
		
		$this->data['count_of_tables'] = null;
		$this->data['result'] = null;
		$this->data['table_name'] = $this->table_name;
		$this->data['action'] = null;
		
		$this->data['dbs'] = $db->query("SELECT * FROM `tb_projects`");
 
		if ($this->db_name) :
			$this->data['db_name'] = $this->db_name;
			$this->data['tables'] = $db->getTables($this->db_name);
			$this->data['count_of_tables'] = (isset($data['tables'])) ? count($data['tables']) : 0;
			
			if ($this->table_name) {
				
				$this->columns = $db->getColumns($this->db_name, $this->table_name);
				$this->data['columns'] = $this->columns;
				
				$this->indexs = $db->query("SHOW INDEX FROM " . $this->db_name . "." . $this->table_name . " WHERE key_name != 'PRIMARY';");
				$this->data['result'] = $db->query("SELECT * FROM $this->db_name.$this->table_name ORDER BY " . $this->data['columns'][0]->COLUMN_NAME . " DESC LIMIT 10");

				if($this->column_name){
					$this->data['column_name'] = $this->column_name;
				}
			}

		endif;
		$arr = [];
		switch ($this->platform) {
			case 'php':
				$arr['index'] = 'View';
				$arr['MVC_Model'] = 'Create Model';
				$arr['MVC_View'] = 'Create View';
				$arr['MVC_Controller'] = 'Create Controller';
				break;
			case 'javascript':
				$arr['index'] = 'View';

				break;
		}

		$actions = $arr;

		if (!empty($_POST['doCreateFullFile'])) {

		

			$url =  ROOT . "/php/MVC_Model/?db_name=smcdb&table_name=settings&doCreateFile=1";
			echo "<br><br><br><br><br><br>$url";
 

		}
		 
		$this->data['actions'] = $actions;
		
	}

	public function view($view, $data = [])
	{


		extract($data);

		$filename = "../app/views/" . $view . ".view.php";
		if (file_exists($filename)) {
			require $filename;
		} else {
			echo "could not find view file: " . $filename;
		}
	}
}
