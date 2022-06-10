<?php include 'assets/globals/top.php';


$slug = $_GET['slug'];
if (!isset($slug)) {
    $obj->redirect_to("index.php");
}
$post = $obj->getDataByUniqueColumn("content", "slug", $slug, "0");
$similar = $modal =  $obj->getDataByUniqueColumn("content", "s-category", $post[0]['s-category'], 10);
// print_r($post);
$post_id = $post[0]['id'];
if (empty($post)) {
    $obj->redirect_to("index.php");
}
$comm_count = $obj->getNumrowsCount("comments", "post-id", $post_id);
// print_r($post);
// echo $post[0]['title'];
// echo "<script> alert(" . $post['title'] . ")</script>"
?>
<!-- Modal -->
<div class="modal fade" id="collegePopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="min-width:80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="staticBackdropLabel">Compare With</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container row">
                <?php
                foreach ($modal as $c_option) {
                ?>
                    <div class='col-md-4 col-lg-3 col-6'>
                        <a href="compare.php?slug1=<?php echo $c_option["slug"] ?>&slug2=<?php echo $post[0]["slug"] ?>">
                            <div class="card-body">
                                <h5 class="card-text fs-5"><?php echo $c_option['title'] ?></h5>
                                <!-- <p class="card-title"></p> -->
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end modal -->



<div class="column-fluid row">
    <div class="col-md-8 col-12">
        <main id="main">

            <!-- ======= Intro Single ======= -->
            <section style="margin-top:100px;margin-bottom:30px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    </li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">
                                        
                                    </li> -->
                                </ol>
                            </nav>

                        </div>
                        <div class="col-12">
                            <div class="title-single-box">
                                <h1 style="border-left: 3px solid green ;padding-left:4px" class="fs-3 border-left pl-1"><?php echo $post[0]['title'] ?></h1>
                                <span style="float: right;" class="color-text-a"> <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#collegePopup">Compare</button></span>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- End Intro Single-->

            <!-- ======= Blog Single ======= -->
            <section class="news-single nav-arrow-b">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="news-img-box" style="background-image: url('assets/thumb_image/<?php echo $post[0]['image'] ?>');height:60vh;background-position:center;background-size:cover;">
                                <!-- <img src="assets/img/slide-3.jpg" alt="" class="img-fluid"> -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="post-content color-text-a">
                                <p>
                                    <?php echo $post[0]['content'] ?>
                                </p>
                            </div>
                            <div class="post-footer">
                                <!-- <div class="post-share">
                                    <span>Share: </span>
                                    <ul class="list-inline socials">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="bi bi-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="bi bi-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="bi bi-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                            <div class="title-box-d">

                                <h3 class="title-d">Comments (<?php echo $comm_count ?>)</h3>
                            </div>
                            <div class="box-comments">
                                <ul class="list-comments">
                                    <?php
                                    $all_comm = $obj->getDataByUniqueColumn("comments", "post-id", $post_id, "0");
                                    $all_comm = array_reverse($all_comm);
                                    foreach ($all_comm as $single) {
                                        $name = $single['name'];
                                        $msg = $single['msg'];
                                        $date = date('m/d/Y', $single['date']);

                                    ?>
                                        <li style="padding-bottom: 1.5rem;">
                                            <div class="comment-avatar">
                                                <img src="https://avatars.dicebear.com/api/male/<?php echo $name ?>.svg?mood[]=happy" alt="">
                                            </div>
                                            <div class="comment-details">
                                                <h4 class="comment-author"><?php echo $name ?></h4>
                                                <span><?php echo $date ?></span>
                                                <p class="comment-description">
                                                    <?php echo $msg ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="form-comments">
                                <div class="title-box-d">
                                    <h3 class="title-d"> Leave a Reply</h3>
                                </div>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="inputName">Enter name</label>
                                                <input name="uname" type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="inputEmail1">Enter email</label>
                                                <input name="email" type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="inputUrl">Enter website</label>
                                                <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
                                            </div>
                                        </div> -->
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="textMessage">Enter message</label>
                                                <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button name="comment" type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                            if (isset($_POST['comment'])) {
                                // echo "<script> alert('alert')</script>";
                                $name = $_POST['uname'];
                                echo "<script> alert('$name')</script>";
                                $email = $_POST['email'];
                                $msg = $_POST['message'];
                                $id = $post_id;
                                echo "<script> alert($name)</script>";
                                $data1['post-id'] = $id;
                                $data1['name'] = $name;
                                $data1['email'] = $email;
                                $data1['msg'] = $msg;
                                $data1['date'] = time();
                                // print_r($data1);
                                $check = $obj->addData($data1, "comments");
                                // echo $check;
                                // echo "<script> alert($check)</script>";
                                if ($check) {
                                    echo "<script> alert('Thanks For your Comment');</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section><!-- End Blog Single-->

        </main><!-- End #main -->
    </div>
    <div class="col-md-4 col-12 border" style="padding-top: 100px;">
        <div>
            <h2 class="text-center">You May Also Like</h2>
            <?php
            // echo $post[0]['m-category'];
            // print_r($data);
            foreach ($similar as $post) {
            ?>
                <div class="mt-3" style="width: 100%;">
                    <a href="blog-single.php?slug=<?php echo $post["slug"] ?>">
                        <div class="card-body">
                            <h5 style="color: blue;" class="card-text fs-5 text-decoration-underline"><?php echo $post['title'] ?></h5>
                            <!-- <p class="card-title"><?php echo $post['meta'] ?></p> -->
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </a>
                </div>
            <?php
            }

            ?>
        </div>

    </div>
</div>

<!-- ======= Footer ======= -->
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