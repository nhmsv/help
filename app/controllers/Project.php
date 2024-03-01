<?PHP

namespace Controller;

use Database;

if (!defined("ROOT")) die("direct script access denied");

/* Start Project Controller */
class Project extends Controller
{
	public $id;
	public $project_name;
	public $project_slug;
	public $project_db;
	public $project_path;


	function __construct($row = null)
	{
		self::parent();
		if ($row) {
			foreach ($row as $key => $val) {

				$m = ucfirst(ToCamelCase($key));
				$method = "set$m";
				if (method_exists($this, $method)) {
					$this->$method($val);
				}
			}
		}
	}

	/* begin:index */
	public function index($id = 0)
	{
		$db = new Database();
		$project = new \Model\Project();
		$cdbs = array_column($project->findAll(), "project_db");
		$dbs = array_column($db->query("SHOW DATABASES;"), "Database");
		$data['dbs'] = array_diff($dbs, $cdbs);

		if (!$id) {

			//$project->limit = 10;
			$project->order = 'asc';
			$data['result'] = $project->findAll();

			$data['title'] = "Project";
			$this->view('project/home', $data);
		} else {
			$data['row'] = $project->first(['id' => $id]);
			if (!$data['row']) {
				redirect('/project');
			}
			$data['title'] = "Project";
			$this->view('project/view', $data);
		}
	}
	/* end:index */


	/* begin:add */
	public function add()
	{
		$project = new \Model\Project();
		$data['title'] = "Project";
	
		$insertData['project_name'] = set_value('project_name');
		$insertData['project_slug'] = set_value('project_slug');
		$insertData['project_db'] = set_value('project_db');
		$insertData['project_path'] = set_value('project_path');

		if(empty($project->errors)){
		$lastId = $project->insert($insertData);
		if($lastId){
			redirect("project/$lastId/");
		}
		}else{
			show($project->errors);
		}
	

		$this->view('project/home', $data);
	}
	/* end:add */

	/* begin:edit */
	public function edit($id = 0)
	{
		$project = new \Model\Project();


		$data['title'] = "Project";
		$this->view('project/edit', $data);
	}
	/* end:edit */

	public static function __callStatic($funcname, $args)
	{
		$key = str_replace("get", "", strtolower($funcname));

		return '';
	}
}
// end of project  class  
