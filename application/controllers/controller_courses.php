<?php

class Controller_Courses extends Controller{
    
    function __construct(){
	$this->model = new Model_Courses();
	$this->view = new View();
	}
    
    function action_index() {

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_sport(){

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_martial(){
        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_computer(){
        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_languages(){
        $data = $this->model->get_data();
        $data = $this->model->languages();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
}


