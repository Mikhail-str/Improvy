
<?php

$fp = fopen('../application/controllers/controller_test.php','w+');
$mytext = '<?php
            class Controller_Summerhouse extends Controller{
            function __construct(){
            $this->model = new Model_Summerhouse();
            $this->view = new View();}
            function action_index() {
            $data = $this->model->get_data();
            $this->view->generate("company_view.php","template_view.php",$data);}
            
             
            }'; // Исходная строка

$test = fwrite($fp, $mytext);