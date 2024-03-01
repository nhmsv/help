<?PHP

namespace Model;

if (!defined("ROOT")) die("direct script access denied");



/* Start Dho Model */
class Dho extends Model
{
        public $errors = [];
        protected $table = "tb_dho";

        protected $afterSelect = [
                'getDepartment',
                'getType',
                'getStatus',
        ];

        protected $beforeUpdate = [];

        protected $allowedColumns = [

                'id',
                'type_id',
                'subject',
                'status_id',
                'department_id',
                'requester',
                'note',
                'created_date',
                'created_by',
                'created_at',
                'updated_by',
                'updated_at',
                'followup_by',
                'followup_at',
                'assign_to',
                'assign_by',
                'assign_at',
                'attachment',
        ];

        public function validate($data = null)
        {
        }
        public function getDepartment($result = null)
        {
                $db = new \Database();


                foreach ($result as $key => $row) {
                        if (!empty($row->department_id)) {
                                $query = "select * from `smcdb`.`tb_department` where id = :id limit 1";

                                $cat = $db->query($query, ['id' => $row->department_id]);

                                if (!empty($cat)) {
                                        $result[$key]->department_row = $cat[0];
                                }
                        }
                }
                return $result;
        }
        public function getType($result = null)
        {
                $db = new \Database();


                foreach ($result as $key => $row) {
                        if (!empty($row->type_id)) {
                                $query = "select * from `smcdb`.`tb_type` where id = :id limit 1";

                                $cat = $db->query($query, ['id' => $row->type_id]);

                                if (!empty($cat)) {
                                        $result[$key]->type_row = $cat[0];
                                }
                        }
                }
                return $result;
        }
        public function getStatus($result = null)
        {
                $db = new \Database();


                foreach ($result as $key => $row) {
                        if (!empty($row->status_id)) {
                                $query = "select * from `smcdb`.`tb_status` where id = :id limit 1";

                                $cat = $db->query($query, ['id' => $row->status_id]);

                                if (!empty($cat)) {
                                        $result[$key]->status_row = $cat[0];
                                }
                        }
                }
                return $result;
        }
}
/* End of Dho */
