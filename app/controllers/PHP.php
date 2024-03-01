<?php

namespace Controller;

if (!defined("ROOT")) die("direct script access denied");

use Database;
use Model\Model;

class PHP extends Controller
{

    private static $db;
    public function __construct()
    {
        parent::__construct();
        self::$db = new Database();

        $project = array_filter($this->data['dbs'], function ($var) {
            return ($var->project_db == $this->db_name);
        });
        $project = array_values($project);
        $this->data['project'] = (!empty($project[0])) ? $project[0] : null;
    }
    public function index()
    {
        $this->data['action'] = 'index';

        $this->view('php/home', $this->data);
    }


    public function createFullProject()
    {
        $this->data['action'] = 'index';
        $this->data['db_name'] = set_value('db_name');
        $this->data['path'] = set_value('path');

        $this->createApp();
        $this->createPublicFolder();
    }

    private function createApp()
    {
      
        $db_name = $this->data['db_name'];
        $this->db_name = $db_name;
        $project = array_filter($this->data['dbs'], function ($var) {
            return ($var->project_db == $this->db_name);
        });
        $project = array_values($project);
        $this->data['project'] = $project[0];
    
     
      
     
        $path = $this->data['path'];
        //main folder system
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $path .= '\\app';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $folders = ['core', 'thirdparty', 'models', 'views', 'controllers'];
        foreach ($folders as $k => $v) {
            if (!file_exists($path . '\\' . $v)) {
                mkdir($path . '\\' . $v, 0777, true);
                file_put_contents($path . '\\' . $v . "\\index.php", '<?php //silence is golden');
            }
        }


        file_put_contents($path . "\\index.php", '<?php //silence is golden');

        $coreFiles = ['app', 'controller', 'database', 'functions', 'init', 'model', 'permissions'];

        foreach ($coreFiles as $k => $v) {
            $file = "C:\\xampp\\htdocs\\help\\app\\core\\$v.php";
            $newfile = $path . '\\core\\' . $v . '.php';
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }
        }


        file_put_contents($path . '\\core\\config.php', "<?php
        /****
         * app info
         */
         define('APP_NAME', '".$this->data['project']->project_name."');
         define('APP_DESC', '".$this->data['project']->project_name."');
         
         /****
         * database config
         */
         if($"."_SERVER['SERVER_NAME'] == 'localhost')
         {
             //database config for local server
             define('DBHOST', 'localhost');
             define('DBNAME', '$db_name');
             define('DBUSER', 'root');
             define('DBPASS', '');
             define('DBDRIVER', 'mysql');
         
             //root path e.g localhost/
             define('ROOT', 'http://localhost/".strtolower($this->data['project']->project_name)."/public');
         }else
         {
             //database config for live server
             define('DBHOST', 'localhost');
             define('DBNAME', '$db_name');
             define('DBUSER', 'root');
             define('DBPASS', 'root');
             define('DBDRIVER', 'mysql');
         
             //root path e.g https://www.yourwebsite.com
             define('ROOT', 'http://10.64.239.121/".strtolower($this->data['project']->project_name)."/public');
         }
        
        ");

        $controllersFiles = ['_404', 'Home'];

        foreach ($controllersFiles as $k => $v) {
            $file = "C:\\xampp\\htdocs\\help\\app\\controllers\\$v.php";
            $newfile = $path . '\\controllers\\' . $v . '.php';
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }
        }


        $viewssFiles = ['home_temp.view', '404.view'];

        foreach ($viewssFiles as $k => $v) {
            $file = "C:\\xampp\\htdocs\\help\\app\\views\\$v.php";
            $newfile = $path . '\\views\\' . $v . '.php';
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }
        }

        $file = "C:\\xampp\\htdocs\\help\\app\\models\\Auth.php";
        $newfile = $path . '\\models\\Auth.php';
        if (!copy($file, $newfile)) {
            echo "failed to copy $file...\n";
        }

        

        if (!file_exists($path . '\\views\\includes')) {
            mkdir($path . '\\views\\includes', 0777, true);
        }
        

        $includesFiles = ['footer.view', 'header.view', 'nav.view'];

        foreach ($includesFiles as $k => $v) {
            $file = "C:\\xampp\\htdocs\\help\\app\\views\\includes_temp\\$v.php";
            $newfile = $path . '\\views\\includes\\' . $v . '.php';
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }
        }





        echo "Create APP Folder <br>";
    }

    private function createPublicFolder()
    {
        $path = $this->data['path'] . '\\public';

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if (!file_exists($path . '\\assets')) {
            mkdir($path . '\\assets', 0777, true);
        }

        if (!file_exists($path . '\\node_modules')) {
            mkdir($path . '\\node_modules', 0777, true);
        }

        $publicFiles = ['.htaccess', 'index.php', 'robots.txt'];

        foreach ($publicFiles as $k => $v) {
            $file = "C:\\xampp\\htdocs\\help\\public\\$v";
            $newfile = $path . '\\' . $v;
            if (!copy($file, $newfile)) {
                echo "failed to copy $file...\n";
            }
        }


        echo "Create public Folder <br>";
    }

    public function ajax()
    {
        $this->data['action'] = 'index';
        $db_name = set_value('db_name');
        $table_name = set_value('table_name');
        $this->table_name = $table_name;
        $this->class_name = setTableNameAsClassName($this->table_name);
        $_POST['doCreateFile'] = 1;
        $this->columns = self::$db->getColumns($db_name, $this->table_name);
        //show($this->columns);

        $this->MVC_Model();
        $this->MVC_View();
        $this->MVC_Controller();
    }

    public function MVC_Model()
    {
        $this->data['action'] = 'MVC_Model';

        $out = "";
        $out .= htmlentities('<?PHP') . "\nnamespace Model;
        if(!defined(\"ROOT\")) die (\"direct script access denied\");
        "
            . "\n"
            . "\n \n/* Start $this->class_name Model */\n"
            . "class $this->class_name extends Model\n"
            . "{\n"
            . 'public $errors = [];
                protected $table = "' . strtolower($this->table_name) . '";
            
                protected $afterSelect = ['
            . "";

        if (!empty($this->indexs)) {


            $indexs = array_column($this->indexs, "Column_name");
            $indexs = array_unique($indexs);

            foreach ($indexs as $key => $val) {

                $Column_name = $val;
                $Column_name = substr($val, 0, -3);
                $out .= "
                'get" . ucfirst(ToCamelCase($Column_name)) . "',";
            }
        }
        $out .= "
    ];\n"
            . "\n"
            . "protected $" . "beforeUpdate = [];\n"
            . "\n"

            . "protected $" . "allowedColumns = [
    ";
        foreach ($this->columns as $col) {

            $name = $col->COLUMN_NAME;
            $type = getDataType($col->COLUMN_TYPE);

            $out .= "\n'$name',";
        }


        $out .= "];\n\n"

            . "public function validate($" . "data = null)
	            {
                "
            . "}\n";


        if (!empty($this->indexs)) {
            foreach ($indexs as $key => $val) {

                $Column_name = $val;
                $Column_name = substr($Column_name, 0, -3);

                $out .= "public function get" . ucfirst(ToCamelCase($Column_name)) . "($" . "result = null)
	            {
                    $" . "db = new \Database();\n
                    
                        foreach ($" . "result as $" . "key => $" . "row) {
                            if(!empty($" . "row->" . $Column_name . "_id))
                    {
                        $" . "query = \"select * from `$this->db_name`.`tb_$Column_name` where id = :id limit 1\";\n
                        $" . "cat = $" . "db->query($" . "query,['id'=>$" . "row->" . $Column_name . "_id]);\n
                        if(!empty($" . "cat)){
                            $" . "result[$" . "key]->$Column_name" . "_row = $" . "cat[0];
                        }
                    }
                }
                return $" . "result;

                }\n"
                    . "  ";
            }
        }

        $out .= "}\n/* End of $this->class_name */";


        $path = $this->data['project']->project_path;




        if (isset($_POST['doCreateFile'])) {

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if (!file_exists($path . '\\app')) {
                mkdir($path . '\\app', 0777, true);
            }

            if (!file_exists($path . '\\app\\models')) {
                mkdir($path . '\\app\\models', 0777, true);
            }

            $path .= '\\app\\models\\';

            $str = str_replace("&lt;", "<", $out);
            file_put_contents($path . $this->class_name . ".php", $str);
        }


        $this->data['print_code'] = $out;
        $this->view('php/mvc_model', $this->data);
    }

    public function MVC_View()
    {
        $this->data['action'] = 'MVC_View';

        $out = "";

        $out = htmlentities('<?php') . ' $this->view(\'includes/header\',$data) ?>
                <?php $this->view(\'includes/nav\',$data) ?>' . "\n"
            . '
            <!--Main content-->
<main class="main-content" id="main-content">
<!-- ======= ' . $this->class_name . ' Section ======= -->
<section class="bg-gradient-primary text-white">
<div class="container pt-10 pt-lg-10 pb-9 pb-lg-5">
  <h2 class="display-3 mb-4 pt-lg-5">' . ToCamelCase($this->class_name, true) . '</h2>
  <p class="lead mb-0">More information about view ' . $this->class_name . '</p>
</div>
</section>

  <section class="position-relative">
    <div class="container position-relative">
      <div class="">
        <!--Profile info header-->
        <div class="position-relative pt-9 pb-9 pb-lg-11">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex flex-column">

                <section id="' . strtolower($this->class_name) . '" class="' . strtolower($this->class_name) . '">
                  <div class="container" data-aos="fade-up">' . "\n"

            . "<table class=\"table table-hover\">
            <thead>
            <tr>";

        foreach ($this->columns as $key => $name) {

            $name = $name->COLUMN_NAME;
            if ($name == 'id') {
                $out .= "
                    <th>#</th>";
            } else if ($name == 'attachment') {
                $out .= "
                    <th><i class='bx bx-download'></i></th>";
            } else {
                $out .= "
                    <th>" . ToCamelCase($name, true) . "</th>";
            }
        }

        $out .= "</tr>
            </thead>
            <tbody>
            <?PHP foreach($" . "result as $" . "row){?>";
        foreach ($this->columns as $col) {

            $name = $col->COLUMN_NAME;
            $class_name_sm = strtolower($this->table_name);
            if ($name == 'id') {
                $out .= "
                <td><a href='<?=ROOT?>/$class_name_sm/<?=$" . "row->$name?>'><?=$" . "row->$name?></a></td>";
            } else if ($name == 'attachment') {
                $out .= "
                <td><a href='<?=ROOT?>/uploads/$class_name_sm/<?=$" . "row->id?>'><i class='bx bx-download'></i></a></td>";
            } else {
                $out .= "
                <td><?=$" . "row->$name?></td>";
            }
        }
        $out .= "
              </tr>
              <?PHP }?>
              ";




        $out .= "</tbody>
          </table>"
            . '</div></section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section> <!-- End ' . $this->class_name . ' Section -->
</main> ' . "\n"

            . '<?php $this->view(\'includes/footer\',$data) ?>';



        $str = str_replace("<", "&lt;", $out);
        $str = str_replace(">", "&gt;", $str);
        $str = str_replace("", '&quot;', $str);






        $path = $this->data['project']->project_path;

        if (isset($_POST['doCreateFile'])) {

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if (!file_exists($path . '\\app')) {
                mkdir($path . '\\app', 0777, true);
            }

            if (!file_exists($path . '\\app\\views')) {
                mkdir($path . '\\app\\views', 0777, true);
            }


            $path .= '\\app\\views\\';
            if (!file_exists($path . strtolower($this->class_name))) {
                mkdir($path . strtolower($this->class_name), 0777, true);
            }

            $str = str_replace("&lt;", "<", $out);
            $str = str_replace("&gt;", ">", $str);
            $str = str_replace("&quot;", '"', $str);
            file_put_contents($path . strtolower($this->class_name) . "\\home.view.php", $str);
        }


        $this->data['print_code'] = $str;

        $this->view('php/mvc_view', $this->data);
    }

    public function MVC_Controller()
    {
        $this->data['action'] = 'MVC_Controller';


        $out = htmlentities('<?PHP') . "\nnamespace Controller;
        if(!defined(\"ROOT\")) die (\"direct script access denied\");
        "
            . "\n /* Start $this->class_name Controller */\n"
            . "class $this->class_name extends Controller\n"
            . "{\n";

        foreach ($this->columns as $col) {

            $name = $col->COLUMN_NAME;
            $type = getDataType($col->COLUMN_TYPE);
            $out .= "   public $" . $name . ";\n";
        }

        $out .= "\n";

        if (!empty($this->indexs)) {


            $indexs = array_column($this->indexs, "Column_name");
            $indexs = array_unique($indexs);

            foreach ($indexs as $key => $val) {

                $Column_name = $val;
                $Column_name = substr($val, 0, -3);

                $out .= "public static $" . $Column_name . "_row = [] ;\n";
            }
        }

        $out .= "\n function __construct($" . "row = null){";

        $out .= '       if ($row) {
            foreach($row as $key => $val){
                
                 $m = ucfirst(ToCamelCase($key));
                 $method ="set$m";
                if(method_exists($this, $method)){
                        $this->$method($val);
                }' . "\n";


        if (!empty($this->indexs)) {
            //show($indexs);
            foreach ($indexs as $key => $val) {

                $Column_name = $val;
                $Column_name = substr($Column_name, 0, -3);
                $out .= " if ($" . "key == '$Column_name" . "_row') {\n";
                $out .= ' self::$' . $Column_name . '_row = $val;' . "\n";
                $out .= "}\n";
            }
        }

        $out .= '}
            
        }';

        //SHOW INDEX FROM tb_samples WHERE key_name != 'PRIMARY';



        $out .= "\n\n}";
        $class_name_sm = strtolower(setTableNameAsClassName($this->table_name));
        $out .= "\n
                /* begin:index */
        "
            . "public function index($" . "id = 0)
                    {\n
                        $" . "$class_name_sm = new \Model\\$this->class_name();
                        if (!$" . "id) {
                                $" . "" . $class_name_sm . "->limit = 10;
                                $" . "data['result'] = $" . "" . $class_name_sm . "->findAll();
                                $" . "data['title'] = \"$this->class_name\";
                                $" . "this->view('$class_name_sm/home', $" . "data);
                        } else {
                                $" . "data['row'] = $" . "" . $class_name_sm . "->first(['id' => $" . "id]);
                                if (!$" . "data['row']) {
                                        redirect('/$class_name_sm');
                                }
                                $" . "data['title'] = \"$this->class_name\";
                                $" . "this->view('$class_name_sm/view', $" . "data);
                        }
                    
                    }\n/* end:index */\n\n";


        $out .= "
            /* begin:add */
            public function add()
            {
                    $" . "$class_name_sm = new \Model\\$this->class_name();
                    $" . "data['title'] = \"$this->class_name\";
                    ";

        foreach ($this->columns as $col) {

            $name = $col->COLUMN_NAME;
            $type = getDataType($col->COLUMN_TYPE);
            $out .= "
                        $" . "insertData['$name'] = set_value('$name');";
        }



        $out .= "
                $" . "this->view('$class_name_sm/add', $" . "data);
            }
            /* end:add */
    
            /* begin:edit */
            public function edit($" . "id = 0)
            {
                    $" . "$class_name_sm = new \Model\\$this->class_name();
    

                    $" . "data['title'] = \"$this->class_name\";
                    $" . "this->view('$class_name_sm/edit', $" . "data);
            }
            /* end:edit */

            ";

        $out .= "public static function __callStatic($" . "funcname, $" . "args)
        {
            $" . "key = str_replace(\"get\", \"\", strtolower($" . "funcname));
        ";
        if (!empty($this->indexs)) {
            foreach ($indexs as $key => $val) {

                $Column_name = $val;

                $Column_name = substr($Column_name, 0, -3);
                $out .= "
        if (!empty(self::$" . "$Column_name" . "_row->$" . "key)) {
            return self::$" . "$Column_name" . "_row->$" . "key;
        }";
            }
        }
        $out .= "
        return '';
    }
            ";
        // $out .= $this->getterAndSetter();


        $out .= "\n}\n// end of $class_name_sm  class";


        $path = $this->data['project']->project_path;

        if (isset($_POST['doCreateFile'])) {


            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if (!file_exists($path . '\\app')) {
                mkdir($path . '\\app', 0777, true);
            }

            if (!file_exists($path . '\\app\\controllers')) {
                mkdir($path . '\\app\\controllers', 0777, true);
            }

            $path .= '\\app\\controllers\\';

            $str = str_replace("&lt;", "<", $out);
            file_put_contents($path . $this->class_name . ".php", $str);
        }




        $this->data['print_code'] = $out;
        $this->view('php/mvc_controller', $this->data);
    }
}
