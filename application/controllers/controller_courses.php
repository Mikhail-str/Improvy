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
    //Обрабатывают главные категории
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
    
    //Обрабатывают подкатегории
    
    //СПОРТ-ФИТНЕС
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
    function action_stripdance(){
        $course = "strip-dane";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_tennis(){
        $course = "tennis";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_run(){
        $course = "run";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_stretching(){
        $course = "stretching";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //БОЕВЫЕ ЕДИНОБОРСТВА
    function action_box(){
        $course = "box";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_karate(){
        $course = "karate";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_sambo(){
        $course = "sambo";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_taibox(){
        $course = "tai-box";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //КОМПЬЮТЕРНЫЕ КУРСЫ
    function action_programming(){
        $course = "programming";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_seo(){
        $course = "seo";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_smm(){
        $course = "smm";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_design(){
        $course = "design";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_editing(){
        $course = "editing";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //ИНОСТРАННЫЕ ЯЗЫКИ
    function action_english(){
        $course = "english";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_french(){
        $course = "french";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_spanish(){
        $course = "spanish";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_italian(){
        $course = "italian";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_german(){
        $course = "german";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_chinese(){
        $course = "chinese";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //ТАНЦЫ
    function action_clubdance(){
        $course = "clubdance";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_hiphop(){
        $course = "hiphop";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_balroom(){
        $course = "baldance";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_childdance(){
        $course = "childdance";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_bellydance(){
        $course = "bellydance";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_tango(){
        $course = "tango";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    
    
}

