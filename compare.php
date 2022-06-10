<?php
// if (isset($_GET['id1'])) {
//     $error = $_GET['error'];
//     echo "<script> alert('$error')</script>";
// }
include 'assets/globals/top.php';
$slug1 = $_GET['slug1'];
$slug2 = $_GET['slug2'];
if (!isset($slug1) || !isset($slug2)) {
    $obj->redirect_to("index.php");
}
$post1 = $obj->getDataByUniqueColumn("content", "slug", $slug1, "0");
$post2 = $obj->getDataByUniqueColumn("content", "slug", $slug2, "0");

?>
<!-- ======= Blog Single ======= -->
<section style="margin-top: 100px;" class="news-single nav-arrow-b">
    <div class="container-fluid row">
        <div class="col-6">
            <div class="col-12">
                <div class="title-single-box">
                    <h2 style="border-left: 3px solid green ;padding-left:4px" class="fs-3 border-left pl-1"><?php echo $post1[0]['title'] ?></h2>
                    <!-- <span style="float: right;" class="color-text-a"> <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#collegePopup">Compare</button></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="news-img-box" style="background-image: url('assets/thumb_image/<?php echo $post1[0]['image'] ?>');height:60vh;background-position:center;background-size:cover;">
                    <!-- <img src="assets/img/slide-3.jpg" alt="" class="img-fluid"> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class="post-content color-text-a">
                    <p>
                        <?php echo $post1[0]['content'] ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="col-12">
                <div class="title-single-box">
                    <h2 style="border-left: 3px solid green ;padding-left:4px" class="fs-3 border-left pl-1"><?php echo $post2[0]['title'] ?></h2>
                    <!-- <span style="float: right;" class="color-text-a"> <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#collegePopup">Compare</button></span> -->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="news-img-box" style="background-image: url('assets/thumb_image/<?php echo $post2[0]['image'] ?>');height:60vh;background-position:center;background-size:cover;">
                    <!-- <img src="assets/img/slide-3.jpg" alt="" class="img-fluid"> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class="post-content color-text-a">
                    <p>
                        <?php echo $post2[0]['content'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Blog Single-->
<?php include "assets/globals/bottom.php"; ?>
<script>
    let tab = $("table");
    $(tab).each(function() {
        $(this).addClass("table-bordered p-2");
        $(this).css("width", "100%");
        // $(this).css("width", "100%");
        // this.width = "100%";
    })
</script>