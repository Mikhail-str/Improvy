<div class="container">
    <div class="row">
        <div class="span3">
           
<div id="side">

  <h3><a href="#">Спорт/Фитнес</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="sport">Все</a></li>
                    <li><a href="yoga">Yoga</a></li>
                    <li><a href="pilates">Pilates</a></li>
                    <li><a href="strip_dance">Strip Dance</a></li>
                    <li><a href="tennis">Теннис</a></li>
                    <li><a href="run">Бег</a></li>
                    <li><a href="streching">Стречинг</a></li>
  </ul>

  <h3><li><a href="#">Боевые искусства</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="box">Бокс</a></li>
                    <li><a href="karate">Каратэ</a></li>
                    <li><a href="sambo">Самбо</a></li>
                    <li><a href="dzudo">Дзюдо</a></li>
                    <li><a href="tai_box">Тайский бокс</a></li>
  </ul>

  <h3><li><a href="#">Компьютерные курсы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">SMM</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Видеомонтаж</a></li>
                    </ul>
  </ul>

  <h3><li><a href="/courses/languages">Иностранные языки</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="/courses/languages">Английский</a></li>
                    <li><a href="#">Французский</a></li>
                    <li><a href="#">Испанский</a></li>
                    <li><a href="#">Итальянский</a></li>
                    <li><a href="#">Немецкий</a></li>
                    <li><a href="#">Китайский</a></li>
  </ul>

  <h3><li><a href="#">Танцы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="#">Клубные танцы</a></li>
                    <li><a href="#">Hip-Hop</a></li>
                    <li><a href="#">Бальные танцы</a></li>
                    <li><a href="#">Детские танцы</a></li>
                    <li><a href="#">Танец живота</a></li>
                    <li><a href="#">Танго</a></li>
  </ul>

</div>
        </div>
        <div class="span9">
               <!-- <div  class="row">
                    <?php
                   /* if(mysql_num_rows($data) > 0) {
                        while($row = mysql_fetch_array($data)) {
                         echo ("<div class='result'>
                        <div class='span2'>
                            <div class='thumbnail'>
                                <img src='../images/1.jpg'/>
                            </div>
                        </div>
                        <div class='span5'>    
                            <div class='details'>"
                            .$row['name']
                             .$row['description'].   
                            "</div>
                        </div>
                        <div class='span2'>
                            <div class='price'>"
                            .$row['price'].
                            "</div>
                        </div>
                    </div>
                </div>");
                           }
                         } else echo 1;*/
                     ?>       
    </div>-->
    <table class="table table-hover">
        <tr>
             <?php
                    if(mysql_num_rows($data) > 0) {
                        while($row = mysql_fetch_array($data)) {
                         echo ("<td class='picture'><img src='../images/1.jpg'/></td>
            <td class='details'>
                <span class='page-header'> 
                    <h4><a href=''>".$row['name']."</a><p><small>".$row['description']."</small></h4>
                </span>
            </td>
            <td class='price'><p class='lead'>".$row['price']."</p></td>
        </tr>");
                     }
                 } else echo 1;
        ?>
       <!-- <tr>
            <td class="picture"><img src="../images/1.jpg"/></td>
            <td class="details">Alex</td>
            <td class="price">2000</td>
        </tr>
        <tr>
            <td>123</td>
            <td class="details">Alex</td>
            <td class="price">2000</td>
        </tr>
        <tr>
            <td>123</td>
            <td class="details">Alex</td>
            <td class="price">2000</td>
        </tr>
        <tr>
            <td>123</td>
            <td class="details">Alex</td>
            <td class="price">2000</td>
        </tr>
        <tr>
            <td>123</td>
            <td class="details">Alex</td>
            <td class="price">2000</td>
        </tr>-->
    </table>
</div>
</div>
</div>