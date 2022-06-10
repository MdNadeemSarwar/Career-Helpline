<?php include 'assets/globals/top.php';
if (isset($_GET['category'])) {
  $data = $_GET['category'];
  if (!isset($data)) {
    $obj->redirect_to("index.php");
  }
  $arr = explode("-", $data);
  $value = $arr[0];
  $name =  $arr[1] . "-category";
  $response = $obj->getDataByUniqueColumn("content", $name, $value, 12);
  if (empty($response)) {
    $obj->redirect_to("index.php");
  }
} else if (isset($_POST['explore'])) {
  $title = $_POST['search'];
  $value = $_POST['category'];
  // echo "<script> alert('$category')</script>";
  // echo ""
  $response = $obj->getAllDatabylikecolumn("content", $value, $title);
  // print_r($response);
  if (empty($response)) {
    $value = "Oops! Nothing match to your result";
  }
} else {
  $obj->redirect_to("index.php");
}
?>
<!-- End Header/Navbar -->

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section style="margin-top:130px;margin-bottom:30px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center text-capitalize">
          <div class="title-single-box p-2" style="background-color: #2eca6a;border-radius:5px">
            <h1 class="title-single"><?php echo $value ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- =======  Blog Grid ======= -->
  <section class="section-news">
    <div class="container-fluid">
      <div class="container-fluid p-4">
        <div class="row">
          <?php
          // $posts = $obj->getDatabyLimit("content", "8");
          foreach ($response as $blogs) {


          ?>

            <div class="col-md-4 card-height-grid col-lg-3 col-12 p-4">
              <div style="height: 100%;" class="mycard">
                <a href="blog-single.php?slug=<?php echo $blogs["slug"] ?>">
                  <div class="my-bg-image" style="height: 80%;background-image:url('assets/thumb_image/<?php echo $blogs["image"] ?>')"></div>
                  <div class="row align-items-center px-3 justify-content-center" style="height: 20%;">
                    <h2 class=" colo-12 fs-6 text-nowrap text-truncate p-2 text-capitalize"><?php echo $blogs["title"] ?></h2>
                  </div>
                </a>
              </div>
            </div>
          <?php } ?>


        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "assets/globals/bottom.php"; ?>