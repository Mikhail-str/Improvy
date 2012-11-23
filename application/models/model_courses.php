<?php

class Model_Courses extends Model
{

	public function get_sport()
	{	
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' or courses.type = 'latin' ");              
        return $data;
		
	}
    	public function get_martial()
	{	
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = hiphop or courses.type = latin ");              
        return $data;
		
	}
    	public function get_computer()
	{	
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = hiphop or courses.type = latin ");              
        return $data;
		
	}
    	public function get_languages()
	{	
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = hiphop or courses.type = latin ");              
        return $data;
		
	}
		public function get_dance()
	    {	
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' ");              
        return $data;
		
	    }
        public function get_data($course)
        {
            $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `companies`.`compname_rus` ,`companies`.`compname_eng`
                                FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                             JOIN companies on venues.id_company = companies.id_company 
                                where courses.type = '$course' ");
            return $data;                           
        }
        public function get_yoga()
    {   
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' or courses.type = 'latin' ");              
        return $data;
        
    }

       public function get_pilates()
    {   
        $data = mysql_query("SELECT `courses`.`coursename_rus`, `courses`.`coursename_eng`, `course.price`, `companies`.`companyname_rus`,`companies`.`companyname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' or courses.type = 'latin' ");              
        return $data;
        
    }
}

