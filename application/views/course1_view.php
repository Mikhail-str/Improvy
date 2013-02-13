<div class="container pad">
    <div class="row">
        <div class="span12">
            <h4>CourseName
            <p><small><a href="/summerhouse">CompanyName</a>,Adress,Telephone</small>
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
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">О курсе</a></li>
                    <li><a href="#tab2" data-toggle="tab">Преподаватели</a></li>
                    <li><a href="#tab2" data-toggle="tab">Расписание</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="well well-small" id="about">
                            <h6>О курсе....</h6>
                                <?php   
                                	$routes = explode('/', $_SERVER['REQUEST_URI']);
                                    $data = mysql_query("SELECT * FROM companies
                                                          JOIN venues ON companies.id_company = venues.id_company
                                                          JOIN courses ON venues.id_venue = courses.id_venue
                                                          where companies.compname_eng ='$routes[1]' and courses.coursename_eng = '$routes[2]'"); 
                                    while($row = mysql_fetch_array($data)) 
                                    {
                                        $text_description =  $row['description'];
                                        echo $text_description;
                                    }
                                ?>

                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <p>Howdy, I'm in Section 2.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="span4">
            <div class="well">
                <h4>1500руб</h4>
                <p>Провайдер</p>
                <p>Календарь</p>
                <button class="btn btn-danger" type="button">Оплатить</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            
        </div>
    </div>
</div>
<div class = "hfooter"></div>
</div>
