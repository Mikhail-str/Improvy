<?php

include "application/models/model_summerhouse.php";
class Controller_Summerhouse extends Controller{
    
    function __construct(){
        
        $this->model = new Model_Summerhouse();
        $this->view = new View();
    }
    function action_index() {
       
        //echo $_POST["location"];
        //$namecomp = 'summerhouse';
        $data = $this->model->get_data();
        $this->view->generate('company_view.php','template_view.php',$data);
    }
    function action_hiphop(){
        $data = $this->model->get_data();
        $this->view->generate('course_view.php','template_view.php',$data);
    }
    
}
