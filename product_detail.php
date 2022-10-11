<?php require_once('connections/cheetah.php'); ?>
<?php
    $id = $_GET['id'];
    $sql_product = "SELECT * FROM product,type,model,movie WHERE ID = $id AND product.Type_ID = type.Type_ID AND model.Model_ID = product.Model_ID AND product.Movie_ID = movie.Movie_ID";
    $qry_product = mysqli_query($conn, $sql_product);
    
    $fetch_product = mysqli_fetch_assoc($qry_product);
?>
<?php include 'component/header.php'?>

        <!-- Plan -->
    <div class="container">
        <div class="row paddinghead head-content tm-bg-orange-1">
            รายละเอียด: <?php echo $fetch_product['Name']; ?>
        </div>

        <div class="row whitebg">

            <!-- Container for the image gallery -->
            <div class="container">
            <br>

                <?php
                    /*สั่ง fetch 8 ครั้งเพื่อเอารูปออกมาทั้งหมด */ 
                    for($i=1;$i<=8;$i++){
                        /*fetch เอาจำนวนรูปตามที่มี*/
                        $file = "./product_img/$id/$i.jpg";
                        if (file_exists($file)) {
                            /*ถ้ารูปไหนเป็นแนวตั้งจะโดนตัดขอบบนล่างให้กลายเป็น 4 เหลี่ยมจัตุรัส*/
                            echo "<div class='mySlides spacemainimg'>
                                    <img src='$file' class='squaremainimg' style='border-radius:15px;display: block;margin-left: auto;margin-right: auto;'>
                                    </div>";}
                            }      
                ?>
            <div class="container" style="text-align:center;">
                <?php
                        /*สั่ง fetch 8 ครั้งเพื่อเอารูปออกมาทั้งหมด */ 
                        for($i=1;$i<=8;$i++){
                            /*fetch เอาจำนวนรูปตามที่มี*/
                            $file = "./product_img/$id/$i.jpg";
                            if (file_exists($file)) {
                                /*ถ้ารูปไหนเป็นแนวตั้งจะโดนตัดขอบบนล่างให้กลายเป็น 4 เหลี่ยมจัตุรัส*/
                                echo "<div style='display:inline-block;margin:5px'>
                                      <img class='thumbnail squarethumbimg' src='$file' onclick='currentSlide($i)'>
                                      </div>";}
                                }      
                ?>
            </div>
                <br><br>
            </div> <!--div container-->
        </div>  <!--div row-->
    </div> <!--div container-->

    <div class="container divspace">
        <div class="row tm-bg-orange-2">
            <div class="col-md-6 content">    
            <b>รหัสสินค้า:</b> <?php echo $fetch_product['ID']; ?></div>
            <div class="col-md-6 content"><b>ชื่อสินค้า:</b>&nbsp; <?php echo $fetch_product['Name']; ?></div>
            <div class="col-md-6 content"><b>ประเภท:</b>&nbsp;&nbsp; <?php echo $fetch_product['Type_Name']; ?></div>
            <div class="col-md-6 content"><b>เรื่อง:</b>&nbsp; <?php echo $fetch_product['Movie_Name']; ?></div>
            <div class="col-md-6 content"><b>ตัวละคร:</b>&nbsp; <?php echo $fetch_product['Model_Name']; ?></div>
            <div class="col-md-6 content"><b>ราคา:</b>&nbsp; <?php echo $fetch_product['Price']; ?> บาท</div>
            <div class="col-md-6 content"></div>
            <div class="col-md-12 content" style="word-wrap: break-word;"><b>คำอธิบาย:</b> <?php echo $fetch_product['Description']; ?></div>
        </div>
    </div>
</div> <!-- container-fluid -->         
</div> <!-- tm-bg-img-header -->
<?php include 'component/footer.php' ?>
<?php include 'component/chat_balloon.php' ?>
<script src="assets/js/slideshow.js" type="text/javascript "></script>
</body>
</html>