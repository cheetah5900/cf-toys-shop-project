<div class="container divspace">

        <div class="adsvertise"></div><br> <!--รูปโฆษณา-->
        <?php 
        
                $catclass = "collapsible underline cursor"; 
                $catclass2= "collapsecat";
                $arrow_down = "<span style='padding-left:1%'><img src='assets/img/Arrows_down.gif'></span>";

        if (isset($_GET['catid']) && $_GET['catid'] == 1){
                $catclass = ""; 
                $catclass2= "";
                $arrow_down = "";
        } 

        ?>
        <div class="row tm-bg-orange-1 head-content paddinghead <?php echo $catclass;?>">หมวดหมู่</div>

                <div class="row tm-bg-orange-2 <?php echo $catclass2;?>">
                        <div class="text-xs-center borderbuttom head-content">
                               ประเภทสินค้า
                        </div>

                        <a href="category_detail.php?typeid=1">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/1.png">
                                <div class="productname">ตุ๊กตา</div>
                        </div>
                        </a>
                
                        <a href="category_detail.php?typeid=2">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/2.png">
                                <div class="productname">พวงกุญแจ</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=3">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/3.png">
                                <div class="productname">กระเป๋า</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=4">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/4.png">
                                <div class="productname">หมอน</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=5">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/5.png">
                                <div class="productname">หมวก</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=6">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/6.png">
                                <div class="productname">ถุงเท้า</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=7">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/7.png">
                                <div class="productname">รองเท้า</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=8">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/8.png">
                                <div class="productname">แสงสว่าง</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=9">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/9.png">
                                <div class="productname">โมเดล</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=10">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/10.png">
                                <div class="productname">นาฬิกา</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=11">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/11.png">
                                <div class="productname">ตกแต่งห้อง</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=12">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/12.png">
                                <div class="productname">พินและเข็มกลัด</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=13">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/13.png">
                                <div class="productname">ชุดเครื่องนอน</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=14">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/14.png">
                                <div class="productname">ผ้า</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=15">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/15.png">
                                <div class="productname">บรรจุภัณฑ์</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=16">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/16.png">
                                <div class="productname">กำไลข้อมือ</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=17">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/17.png">
                                <div class="productname">สติ๊กเกอร์</div>
                        </div>
                        </a>
                        <a href="category_detail.php?typeid=18">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/type/18.png">
                                <div class="productname">อื่นๆ</div>
                        </div>
                        </a>



                        
                        <div class="text-xs-center borderbuttom head-content">
                               การ์ตูนเรื่อง
                        </div>
                        <a href="category_detail.php?movieid=31">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/1.png">
                                <div class="productname">Monster, Inc.</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=12">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/2.png">
                                <div class="productname">Frozen</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=26">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/3.png">
                                <div class="productname">Toy Story</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=16">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/4.png">
                                <div class="productname">Lion King</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=44">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/5.png">
                                <div class="productname">How to train your dragon</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=23">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/6.png">
                                <div class="productname">Dumbo</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=35">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/7.png">
                                <div class="productname">Little Mermaid</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=40">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/8.png">
                                <div class="productname">Snoopy</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=37">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/9.png">
                                <div class="productname">One Piece</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=13">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/10.png">
                                <div class="productname">One Punch Man</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=38">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/11.png">
                                <div class="productname">Winnie-the-Pooh</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=11">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/12.png">
                                <div class="productname">Pokemon</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=20">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/13.png">
                                <div class="productname">The Simpsons</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=10">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/14.png">
                                <div class="productname">Totoro</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=39">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/15.png">
                                <div class="productname">We bare bears</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=18">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/16.png">
                                <div class="productname">Shinchan</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=3">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/17.png">
                                <div class="productname">Sesame Street</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=42">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/18.png">
                                <div class="productname">Spirited Away</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=6">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/19.png">
                                <div class="productname">Adventure Time</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=17">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/20.png">
                                <div class="productname">Kakao</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=19">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/21.png">
                                <div class="productname">Sanrio</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=29">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/22.png">
                                <div class="productname">Barbapapa</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=32">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/23.png">
                                <div class="productname">Mickey Mouse</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=33">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/24.png">
                                <div class="productname">Minion</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=9">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/25.png">
                                <div class="productname">Doraemon</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=34">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/26.png">
                                <div class="productname">Your Name</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=24">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/27.png">
                                <div class="productname">The Disney Bear</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=36">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/28.png">
                                <div class="productname">Little Twin Star</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=43">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/29.png">
                                <div class="productname">Avenger</div>
                        </div>
                        </a>
                        <a href="category_detail.php?movieid=7">
                        <div class=" col-md-2 text-xs-center borderbuttom paddingcategory underline">
                                <img class="fix-imgcategory" src="assets/img/category/movie/30.png">
                                <div class="productname">Harry Potter</div>
                        </div>
                        </a>

                </div>  <!-- row collapse-->
</div>  <!-- container-->