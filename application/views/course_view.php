<div class="container pad">
    <div class="row">
        <div class="span12">
            <h4>
             
              <?php
                    global $routes ;
                    $name_companies_eng =  $routes[1];
                    $name_course_eng = $routes[2];
                    $info_company = mysql_query("   
                        SELECT `compname_rus`, `telephone`
                        FROM `companies` 
                        where   `companies`.`compname_eng` =  '$name_companies_eng'                    
                    ");
                    while($row = mysql_fetch_array($info_company))
                    { 
                        $name_companies_rus = $row["compname_rus"];
                        $telephone = $row["telephone"];
                    }
                    
                    $info_course = mysql_query("   
                        SELECT distinct `coursename_rus`
                        FROM `courses`                         
                            join `venues` on `venues`.`id_venue` = `venues`.`id_venue` 
                            join `companies` on `companies`.`id_company`=`venues`.`id_company`
                        where   `courses`.`coursename_eng` = '$name_course_eng' and 
                            `companies`.`compname_eng` =  '$name_companies_eng'                   
                    ");
                    while($row = mysql_fetch_array($info_course))
                    { $name_course_rus = $row["coursename_rus"]; }
                    
                    echo $name_course_rus.'<br>
                        <small><a href="/'.$name_companies_eng.'">'.$name_companies_rus.'</a></small>';
                    
                    ?>
                    
                    
            </h4>
        </div>
    </div>
    
    <div class="row">
        <div class="span8">
            <div class="thumbnail">
             <img src="../images/comp.jpg" />
            </div>
            <br />
            <div class="tabbable"> <!-- Only required for left/right tabs -->
                <?php 
            
                                  
                                	$routes = explode('/', $_SERVER['REQUEST_URI']);
                                    $data = mysql_query("SELECT * FROM companies
                                                          JOIN venues ON companies.id_company = venues.id_company
                                                          JOIN courses ON venues.id_venue = courses.id_venue
                                                          where companies.compname_eng ='$routes[1]' and courses.coursename_eng = '$routes[2]'"); 
                                    while($row = mysql_fetch_array($data)) 
                                    {
             echo  '<ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">О курсе</a></li>
                    <li><a href="#tab2" data-toggle="tab">Цена от '.$row['minprice'].'</a></li>
                    <li><a href="#tab3" data-toggle="tab">Расписание</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="well well-small" id="about">'.$row['description'].'
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="well well-small" id="about">
                            <p> '.$row['price'].'</p>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="well well-small" id="about">
                            <p> '.$row['timetable'].'</p>
                        </div>
                    </div>';}
                    ?>
                </div>
            </div>
            
        </div>
        
        <div class="span4">
            <div class="well" style="padding: 9px; ">
                <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
            <div id="ymaps-map-id_1" style="width: 280px; height: 320px;"></div>
            <script type="text/javascript">

            function fid_1(ymaps) {
                var map = new ymaps.Map("ymaps-map-id_1", {center: [30.381683621829444, 59.950885785505406], zoom: 8, type: "yandex#map"});

                    map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
                    <?php
                    $info_address_course = mysql_query(" 
                    SELECT  `venues`.`venuename_rus`, 
                            `venues`.`phone`, 
                            `venues`.`metro`, 
                            `venues`.`country`, 
                            `venues`.`street`, 
                            `venues`.`home`, 
                            `venues`.`corpus`, 
                            `venues`.`how_found`, 
                            `venues`.`coordinate`
                    FROM `courses` 
                       join `cv` on `courses`.`id_course` = `cv`.`id_course` 
                       join `venues` on `cv`.`id_venue` = `venues`.`id_venue`                       
                       join `companies` on `companies`.`id_company`=`venues`.`id_company`
                    where   `courses`.`coursename_eng` = '$name_course_eng' and 
                            `companies`.`compname_eng` =  '$name_companies_eng'
                    ");
                    $ij = 0;
                    while($row = mysql_fetch_array($info_address_course))
                    {
                        $ij = $ij + 1;
                        echo 'map.geoObjects.add(new ymaps.Placemark(['.$row["coordinate"].'], {balloonContent: "1", iconContent: "'.$ij.'"}, {preset: "twirl#redIcon"}));';
                        
                    }
                    ?>
                    };</script>
            <script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_1"></script>
            <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
            </div>
            
            <?php
                    $info_address_course = mysql_query(" 
                    SELECT  `venues`.`venuename_rus`, 
                            `venues`.`phone`, 
                            `venues`.`metro`, 
                            `venues`.`country`, 
                            `venues`.`street`, 
                            `venues`.`home`, 
                            `venues`.`corpus`, 
                            `venues`.`how_found`, 
                            `venues`.`coordinate`
                    FROM `courses` 
                       join `cv` on `courses`.`id_course` = `cv`.`id_course` 
                       join `venues` on `cv`.`id_venue` = `venues`.`id_venue`                       
                       join `companies` on `companies`.`id_company`=`venues`.`id_company`
                    where   `courses`.`coursename_eng` = '$name_course_eng' and 
                            `companies`.`compname_eng` =  '$name_companies_eng'
                    ");
                    $ij = 0;
                    echo "<dl>";
                    while($row = mysql_fetch_array($info_address_course))
                    {
                        $ij = $ij + 1;
                        echo  '<dt>'.$ij.') '.$row['venuename_rus'].'</dt><dd> Адрес: ';
                        if ($row["metro"]!='')
                        echo 'метро '.$row["metro"].', '; 
                        
                        if ($row["home"]=='')                        
                            echo 'улица  '.$row["street"].', дом '.$row["home"].'<br>';                        
                        else                         
                            echo 'улица  '.$row["street"].', дом '.$row["home"].', корпус '.$row["corpus"].'<br>';
                        
                        if ($row["phone"]!='') 
                            echo 'Телефон:'.$row["phone"].'</dd>';
                        else
                            if  ($telephone!='')
                                echo 'Телефон:'.$telephone.'</dd>';
                            else 
                                echo '</dd>';
                    }
                    echo "</dl>";
                    ?>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            
        </div>
    </div>
</div>
<div class = "hfooter"></div>
</div>
