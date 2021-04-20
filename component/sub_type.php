<?php 

    if(isset($_GET['typeid'])){
            /*ถ้าประเภทสินค้าเป็น 3 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='3' || $typeid=='3.1' || $typeid=='3.2' || $typeid=='3.3' || $typeid=='3.4' || $typeid=='3.5' || $typeid=='3.6' || $typeid=='3.7' || $typeid=='3.8'){ ?>
            <a href="category_detail.php?typeid=3" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=3.1" class="btn btn-secondary">กระเป๋าซิบ</a> 
            <a href="category_detail.php?typeid=3.2" class="btn btn-secondary">กระเป๋าตัง</a>
            <a href="category_detail.php?typeid=3.3" class="btn btn-secondary">กระเป๋าเคียง</a>
            <a href="category_detail.php?typeid=3.4" class="btn btn-secondary">กระเป๋าดินสอ</a>            
            <a href="category_detail.php?typeid=3.5" class="btn btn-secondary">กระเป๋าเครื่องสำอาง</a>            
            <a href="category_detail.php?typeid=3.6" class="btn btn-secondary">กระเป๋าหูรูด</a>                
            <a href="category_detail.php?typeid=3.7" class="btn btn-secondary">กระเป๋าสะพายข้าง</a> 
            <a href="category_detail.php?typeid=3.8" class="btn btn-secondary">กระเป๋าหูหิ้ว</a> 
            <br><br>
            <?php } ?>  

            <?php 
            /*ถ้าประเภทสินค้าเป็น 4 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='4' || $typeid=='4.1' || $typeid=='4.2' || $typeid=='4.3' || $typeid=='4.4'){ ?>
            <a href="category_detail.php?typeid=4" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=4.1" class="btn btn-secondary">หมอนผ้าห่ม</a> 
            <a href="category_detail.php?typeid=4.2" class="btn btn-secondary">หมอนสอดมือ</a>
            <a href="category_detail.php?typeid=4.3" class="btn btn-secondary">หมอนอิง</a>
            <a href="category_detail.php?typeid=4.4" class="btn btn-secondary">หมอนรองคอ</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 5 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='5' || $typeid=='5.1' || $typeid=='5.2' || $typeid=='5.3'){ ?>
            <a href="category_detail.php?typeid=5" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=5.1" class="btn btn-secondary">หมวก</a> 
            <a href="category_detail.php?typeid=5.2" class="btn btn-secondary">ที่รวบผม</a> 
            <a href="category_detail.php?typeid=5.3" class="btn btn-secondary">ที่คาดผม</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 8 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='8' || $typeid=='8.1' || $typeid=='8.2'){ ?>
            <a href="category_detail.php?typeid=8" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=8.1" class="btn btn-secondary">โคมไฟ</a> 
            <a href="category_detail.php?typeid=8.2" class="btn btn-secondary">ไฟประดับ</a>
            <br><br>
            <?php } ?> 
            
            <?php 
            /*ถ้าประเภทสินค้าเป็น 1 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='11' || $typeid=='11.1' || $typeid=='11.2' || $typeid=='11.3' || $typeid=='11.4' || $typeid=='11.5'){ ?>
            <a href="category_detail.php?typeid=11" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=11.1" class="btn btn-secondary">ป้าย</a>
            <a href="category_detail.php?typeid=11.2" class="btn btn-secondary">ผ้าแต่งห้อง</a>
            <a href="category_detail.php?typeid=11.3" class="btn btn-secondary">ติดผนัง</a>
            <a href="category_detail.php?typeid=11.4" class="btn btn-secondary">ปฏิทิน</a>
            <a href="category_detail.php?typeid=11.4" class="btn btn-secondary">ตะแกรง</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 12 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='12' || $typeid=='12.1' || $typeid=='12.2'){ ?>
            <a href="category_detail.php?typeid=12" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=12.1" class="btn btn-secondary">พิน</a> 
            <a href="category_detail.php?typeid=12.2" class="btn btn-secondary">เข็มกลัด</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 13 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='13' || $typeid=='13.1' || $typeid=='13.2'){ ?>
            <a href="category_detail.php?typeid=13" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=13.1" class="btn btn-secondary">ผ้าห่ม</a> 
            <a href="category_detail.php?typeid=13.2" class="btn btn-secondary">หมอนหนุน</a> 
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 14 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='14' || $typeid=='14.1' || $typeid=='14.2'){ ?>
            <a href="category_detail.php?typeid=14" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=14.1" class="btn btn-secondary">ผ้าคลุม</a> 
            <a href="category_detail.php?typeid=14.2" class="btn btn-secondary">ผ้าเช็ดหัว</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 15 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='15' || $typeid=='15.1' || $typeid=='15.2' || $typeid=='15.3' || $typeid=='15.4'){ ?>
            <a href="category_detail.php?typeid=15" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=15.1" class="btn btn-secondary">แก้ว</a> 
            <a href="category_detail.php?typeid=15.2" class="btn btn-secondary">จาน</a>
            <a href="category_detail.php?typeid=15.3" class="btn btn-secondary">ชาม</a>
            <a href="category_detail.php?typeid=15.4" class="btn btn-secondary">กล่องอาหาร</a>
            <br><br>
            <?php } ?> 

            <?php 
            /*ถ้าประเภทสินค้าเป็น 15 จะแสดงหมวดหมู่ย่อยให้เลือก*/
             if($typeid=='18' || $typeid=='18.1' || $typeid=='18.2' || $typeid=='18.3' || $typeid=='18.4' || $typeid=='18.5' || $typeid=='18.6' || $typeid=='18.7'){ ?>
            <a href="category_detail.php?typeid=18" class="btn btn-secondary">ทั้งหมด</a> 
            <a href="category_detail.php?typeid=18.1" class="btn btn-secondary">ลำโพง</a> 
            <a href="category_detail.php?typeid=18.2" class="btn btn-secondary">ร่ม</a>
            <a href="category_detail.php?typeid=18.3" class="btn btn-secondary">สมุด</a>
            <a href="category_detail.php?typeid=18.4" class="btn btn-secondary">กระถาง</a>
            <a href="category_detail.php?typeid=18.5" class="btn btn-secondary">กล่องใส่ของ</a>
            <a href="category_detail.php?typeid=18.6" class="btn btn-secondary">กล่องเพลง</a>
            <a href="category_detail.php?typeid=18.7" class="btn btn-secondary">อื่นๆ</a>
            <br><br>
            <?php }
            
             }?> 