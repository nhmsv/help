<?PHP

namespace Model;

if (!defined("ROOT")) die("direct script access denied");



/* Start Project Model */
class Project extends Model
{
    public $errors = [];
    protected $table = "tb_projects";

    protected $afterSelect = [];

    protected $beforeUpdate = [];

    protected $allowedColumns = [

        'id',
        'project_name',
        'project_slug',
        'project_db',
        'project_path',
    ];

    public function validate($data = null)
    {
    }
}
/* End of Project */
