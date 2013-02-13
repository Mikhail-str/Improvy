<?php

class Model_Courses extends Model
{

	public function get_sport()
	{	
        $data = mysql_query("SELECT distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`,`courses`.`description`, `courses`.`minprice`, `companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'yoga' or courses.type = 'pilates' or courses.type = 'strip-dance' or courses.type='tennis' or courses.type='run' or courses.type = 'stretching' ");              
        return $data;
		
	}
    public function get_martial()
	{	
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `courses`.`description`, `courses`.`minprice`,`companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'box' or courses.type = 'karate' or courses.type = 'sambo' or courses.type = 'judo' or courses.type = 'tai-box'");              
        return $data;
		
	}
    public function get_computer()
	{	
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`,`courses`.`description`, `courses`.`minprice`, `companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'programming' or courses.type = 'seo' or courses.type = 'smm' or courses.type = 'design' or courses.type = 'editing' ");              
        return $data;
		
	}
    public function get_languages()
	{	
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `courses`.`description`, `courses`.`minprice`,`companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'english' or courses.type = 'french' or courses.type = 'spanish' or courses.type = 'italian' or courses.type = 'german' or courses.type = 'chinese' ");              
        return $data;
		
	}
	public function get_dance()
	{	
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`,`courses`.`description`, `courses`.`minprice`, `companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'club-dance' or courses.type = 'hip-hop' or courses.type = 'balroom' or courses.type = 'child-dance' or courses.type = 'belly-dance' or courses.type = 'tango' ");              
        return $data;
		
	}
    public function get_data($course)
    {
            $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `courses`.`description`, `courses`.`minprice`,`companies`.`compname_rus` ,`companies`.`compname_eng`
                                FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                             JOIN companies on venues.id_company = companies.id_company 
                                where courses.type = '$course' ");
            return $data;                           
    }
    public function get_yoga()
    {   
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `courses`.`description`, `courses`.`minprice`,`companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' or courses.type = 'latin' ");              
        return $data;
        
    }

       public function get_pilates()
    {   
        $data = mysql_query("SELECT  distinct `courses`.`coursename_rus`, `courses`.`coursename_eng`, `courses`.`price`, `courses`.`description`, `courses`.`minprice`,`companies`.`compname_rus`,`companies`.`compname_eng`
                            FROM courses JOIN venues on courses.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company 
                            where courses.type = 'hiphop' or courses.type = 'latin' ");              
        return $data;
        
    }
}

