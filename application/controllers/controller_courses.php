<?php

include "application/models/model_courses.php";
class Controller_Courses extends Controller{
    
    function __construct(){
	$this->model = new Model_Courses();
	$this->view = new View();
	}
    
    function action_index(){

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_sport(){
        
        $data = $this->model->get_sport();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_martial(){
        $course = "martial";
        $data = $this->model->get_martial();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_computer(){
        $course = "computer";
        $data = $this->model->get_computer();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_languages(){
        $course = "languages";
        $data = $this->model->get_languages();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
     function action_dance(){
        
        $data = $this->model->get_dance();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    function action_hiphop(){
        $course = "hiphop";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    function action_yoga(){
        $course = "yoga";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }

    function action_pilates(){
        $course = "pilates";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
}

