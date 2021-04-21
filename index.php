

<?php require_once('connections/cheetah.php'); ?>
<?php
/*รายการแนะนำ*/
$sql_recommend = "SELECT * FROM product WHERE Recommend=2";
$qry_reccommend = mysqli_query($conn, $sql_recommend);
/*สินค้าลดราคา*/
$sql_sale = "SELECT * FROM product WHERE Recommend=1";
$qry_sale = mysqli_query($conn, $sql_sale);

?>
<?php include 'component/header.php'?>
<?php include 'component/main_type.php' ?>
        

     <!-- สินค้าลดราคา --> 
     <?php /*ถ้ามีรายการสินค้าลดราคาให้แสดงกรอบสินค้าลดราคาออกมา*/
        $check_row_sale = mysqli_num_rows($qry_sale); /*นับจำนวน row ที่มี*/
        if($check_row_sale>=1){ /*ตรวจสอบว่าถ้ามีแถวออกมา แสดงว่ามีสินค้า*/
    ?>
     <div class="container divspace">
        <div class="row tm-bg-orange-1">
            <div class="col-sm-6" style="float:left;"><font class="head-content">สินค้าลดราคา</font></div><div class="col-sm-6 allproduct"><a href="allproduct.php?rec=1" class="whitetext">ดูทั้งหมด > &nbsp;</a></div>
        </div>

        <div class="row">
            <?php while($fetch_sale = mysqli_fetch_assoc($qry_sale)){ ?>

                <div class="paddingproduct col-sm-2 spaceproduct whitebg underline focuscoverimg">
                    <a href="product_detail.php?id=<?php echo $fetch_sale['ID'];?>">
                        <div class=""><img class="squarecoverimg" src="product_img/<?php echo $fetch_sale['ID'];?>/1.jpg" /></div>
                        <div class="productname"><?php echo $fetch_sale['Name'];?></div>
                        <div class="divprice underline">
                            <div>
                                <span class="discount">฿<?php echo $fetch_sale['Price'];?></span>
                                <span class="price"> ฿<?php echo $fetch_sale['Sale_Price'];?></span>
                            </div>
                           
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>

    </div> 
    <?php } /*สิ้นสุดเขตที่ตรวจสอบว่ามีสินค้าลดราคาหรือไม่*/?>
    <!-- สิ้นสุดสินค้าลดราคา -->  

     <!-- รายการแนะนำ --> 
    
     <div class="container divspace">
        <div class="row tm-bg-orange-1">
            <div class="col-sm-6" style="float:left;"><font class="head-content">รายการแนะนำ</font></div><div class="col-sm-6 allproduct"><a href="allproduct.php?rec=2" class="whitetext">ดูทั้งหมด > &nbsp;</a></div>
        </div>

        <div class="row">
            <?php while($fetch_recommend = mysqli_fetch_assoc($qry_reccommend)){ ?>

                <div class="paddingproduct col-sm-2 spaceproduct whitebg underline focuscoverimg">
                        <a href="product_detail.php?id=<?php echo $fetch_recommend['ID'];?>">
                        <div><img class="squarecoverimg" src="product_img/<?php echo $fetch_recommend['ID'];?>/1.jpg" /></div>
                        <div class="productname"><?php echo $fetch_recommend['Name'];?></div>
                        <div class="divprice price">฿<?php echo $fetch_recommend['Price'];?></div></a>
                </div>
            <?php } ?>
        </div>

    </div> 
    <!-- สินสุดรายการแนะนำ -->  

<?php include 'component/footer.php' ?>
<?php include 'component/chat_balloon.php' ?>

<script src="assets/js/collapse.js" type="text/javascript "></script>
<script>

</script>
</body>
</html>