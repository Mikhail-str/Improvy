<?php


class Model_Company extends Model{
    
        public function get_data(){
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            
            //$location = $_POST['location'];
            //echo $location;
            $data1 = mysql_query("SELECT * FROM companies
                                  where companies.compname_eng = '$routes[1]'"); 
            if (!isset($location))
            {
                $data2 = mysql_query(" SELECT distinct compname_eng, coursename_eng, coursename_rus, compname_rus, minprice, description 
                                        FROM `courses` 
                                                   join `cv` on `courses`.`id_course` = `cv`.`id_course` 
                                                   join `venues` on `cv`.`id_venue` = `venues`.`id_venue`                       
                                                   join `companies` on `companies`.`id_company`=`venues`.`id_company` 
                                       where companies.compname_eng = '$routes[1]'
			                         ");
            } else {
            	$data2 = mysql_query("SELECT * FROM companies
                                JOIN venues on companies.id_company = venues.id_company			
                                where companies.name_eng = '$routes[1]' and venues.address = '$location'");
            }

            $data[1] = $data1;
            $data[2] = $data2;            

            return $data;
        }
    
}

?>