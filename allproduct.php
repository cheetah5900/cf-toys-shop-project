
<?php require_once('connections/cheetah.php'); ?>
<?php
 $recid = $_GET['rec'];
/*ถ้าเลข 1 เข้ามาแสดงว่าเป็นสินค้าลดราคา ถ้าเลข 2 เข้ามาแสดงว่าเป็นรายการแนะนำ */
  if ($recid==1){
  $sql_rec = "SELECT * FROM product WHERE Recommend LIKE '1%'";
  }
  if ($recid==2){
    $sql_rec = "SELECT * FROM product WHERE Recommend LIKE '2%'";
  }

 $qry_rec = mysqli_query($conn, $sql_rec);
?>
<?php include 'component/header.php'?>
    <div class="container divspace">
    <div class="row tm-bg-green-1" style="border:1px solid orange;">
            <div class="col-sm-12"><font class="head-content">
            <?php /*ตรงหัวข้อ ถ้ากดมาจากลดราคาสินค้าทั้งหมดจะแสดงคำว่า สินค้าลดราคา และถ้ากดดูทั้งหมดจากรายการแนะนำ จะขึ้นคำว่า รายการแนะนำ */
            if($recid=='1')
            {echo "สินค้าลดราคา";}
            elseif($recid=='2')
            {echo "รายการแนะนำ";}
            ?>
            </font></div>
        </div>
            

            <div class="row">
                <?php while($fetch_rec = mysqli_fetch_assoc($qry_rec)){ ?>

                <div class="paddingproduct col-sm-2 spaceproduct whitebg underline focuscoverimg">
                        <a href="product_detail.php?id=<?php echo $fetch_rec['ID'];?>">
                        <div class="spacecoverimg">
                        <?php 
                        /*ตรวจสอบว่ารูปเป็นแนวตั้งหรือแนวนอน จะได้ตัดรูdssปเฉพาะรูปแนวตั้ง*/
                        $idfolder = $fetch_rec['ID'];?>
                            <img class="fix-img squarecoverimg" src="product_img/<?php echo $idfolder;?>/1.jpg" />
                        </div>
                        <div class="productname"> <?php echo $fetch_rec['Name'];?></div>
                        <?php 
                        if ($recid == 1) { /*ถ้าเป็นประเภทสินค้าลดราคาให้มีราคา Sale_Price ขึ้นมา*/
                            $sale_price = $fetch_rec['Sale_Price'];
                            $class="class='discount'";
                            $detail_sale_price="<span class='price'> ฿$sale_price</span>";
                        } /*เอา Sale_Price มาซ่อนไว้เพราะมันจะออกมาเมื่อกดเข้าสินค้าลดราคาเท่านั้น ถ้าเป็นสินค้าแนะนำต้องไม่ออกมา*/
                        elseif($recid == 2){
                            $class="class='price'";
                            $detail_sale_price="";
                        }
                          $price = $fetch_rec['Price']; /*เอาราคาไปใส่ เพราะเราไม่สามารถเอา fetch ['Price']ไปใส่ในตัวแปร $product ได้ มันไม่ทำงาน*/
                          $product = "<span $class>฿ $price</span>";
                        
                        echo $product.$detail_sale_price; ?>
                </div>
                <?php } ?>
             </div>
               
            
    </div>


<?php include 'component/footer.php' ?>
<?php include 'component/chat_balloon.php' ?>
    
</body>
</html>