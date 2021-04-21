
<?php require_once('connections/cheetah.php'); ?>
<?php

  if(isset($_GET['typeid'])){ /*เช็คว่ามี typeid เข้ามาหรือไม่*/
  $typeid = $_GET['typeid']; /*รับค่า typeid ที่ส่งมาจากหน้าแรก*/
  if ($typeid == '1') { /*ถ้าเลข 1 เข้ามาให้มันค้นหาโดยไม่ % เพราะถ้าใส่ % มันจะเอาเลข 11 มาด้วย */
    $sql_product = "SELECT * FROM product WHERE product.Type_ID = '$typeid' ORDER BY Movie_ID,Name";
  }
  else {
    $sql_product = "SELECT * FROM product WHERE product.Type_ID LIKE '$typeid%' ORDER BY Movie_ID,Name";
  }
 $qry = mysqli_query($conn, $sql_product); /*sql สำหรับการ fetch รายการสินค้าออกมา*/

 /* เชื่อมเพื่อดึง type_name*/
$sql_typename = "SELECT * FROM type WHERE type.Type_ID = '$typeid'";
$qry_typename = mysqli_query($conn, $sql_typename);
$fetch_name = mysqli_fetch_assoc($qry_typename);

  }

 if (isset($_GET['movieid'])){ /*เช็คว่ามี movieid เข้ามาหรือไม่*/
  $movieid = $_GET['movieid']; /*รับค่า movie_id ที่มาจากการกดเลือกประเภทการ์ตูน*/
  $sql_movie = "SELECT * FROM product WHERE Movie_ID = $movieid";
  $qry = mysqli_query($conn, $sql_movie);

   /* เชื่อมเพื่อดึง movie_name*/
  $sql_movie = "SELECT * FROM movie WHERE Movie_ID = $movieid";
  $qry_movie = mysqli_query($conn, $sql_movie);
  $fetch_name = mysqli_fetch_assoc($qry_movie);
}



?>
<?php include 'component/header.php'?>
    <div class="container divspace">
    <div class="row tm-bg-orange-1" style="border:1px solid orange;">
            <div class="col-sm-12"><font class="head-content">
            <?php 
            /*ถ้าเป็นประเภทสินค้าให้แสดงคำว่าหมวดหมู่ ถ้าเป็นการ์ตูนเรื่อง ให้แสดงคำว่าการ์ตูนเรื่อง*/
            if (isset($typeid))  {echo "ประเภท : ".$fetch_name['Type_Name'];;}
            if (isset($movieid)) {echo "การ์ตูนเรื่อง : ".$fetch_name['Movie_Name'];;} 
            ?>
          </font></div>
        </div>
    <?php include 'component/sub_type.php' ?>
            

            <div class="row">
                <?php 
                while($fetch_product = mysqli_fetch_assoc($qry)){ 
                  ?>

                <div class="paddingproduct col-sm-2 spaceproduct whitebg underline focuscoverimg">
                        <a href="product_detail.php?id=<?php echo $fetch_product['ID'];?>">
                        <div class="spacecoverimg">
                        <?php 
                        /*ตรวจสอบว่ารูปเป็นแนวตั้งหรือแนวนอน จะได้ตัดรูปเฉพาะรูปแนวตั้ง*/
                        $idfolder = $fetch_product['ID'];?>
                            <img class="fix-img squarecoverimg" src="product_img/<?php echo $idfolder;?>/1.jpg" />
                        </div>
                        <div class="productname"> <?php echo $fetch_product['Name'];?></div>
                        <?php 
                        $recid = $fetch_product['Recommend'];
                        if ($recid == 1 || $recid == 1.1) {  /*ถ้าสินค้าชิ้นนี้ลดราคาจะมีค่า Reccommend เท่ากับ 1  และทำให้ค่าเหล่านี้แสดงออกได้*/
                            $sale_price = $fetch_product['Sale_Price'];
                            $class="class='discount'"; /*ถ้ามีสินค้าลดราคา ปกติจะเป็นสีเทา และขีดค่า */
                            $detail_sale_price="<span class='price'> ฿$sale_price</span>"; 
                        } 
                        else{  /*ถ้าสินค้าชิ้นนี้ไม่ได้ลดราคาจะเข้าเงื่อนไขนี้ จะทำให้แสดงราคาปกติและไม่แสดงตัวราคาโปรโมชั่นออกมา*/
                            $class="class='price'"; /*ถ้าไม่มีสินค้าลดราคา ราคาปกตินี้จะเป็นสีส้ม */
                            $detail_sale_price="";
                        }
                          $price = $fetch_product['Price']; /*เอาราคาไปใส่ เพราะเราไม่สามารถเอา fetch ['Price']ไปใส่ในตัวแปร $product ได้ มันไม่ทำงาน*/
                          $product = "<span $class>฿ $price</span>";
                        
                        echo $product.$detail_sale_price; /*ถ้าสินค้าชิ้นนี้ลดราคา ตัวแปร $detail_sale_price จะแสดงออกมาเป็นการลดราคาตามที่ตั้งไว้ข้างต้น*/ ?>
                </div>
                <?php } ?>
                </div>
             </div>
               
            
    </div>


<?php include 'component/footer.php' ?>
<?php include 'component/chat_balloon.php' ?>
    
</body>
</html>