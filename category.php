

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
        


<?php include 'component/footer.php' ?>
<?php include 'component/chat_balloon.php' ?>

<script src="assets/js/collapse.js" type="text/javascript "></script>
<script>

</script>
</body>
</html>