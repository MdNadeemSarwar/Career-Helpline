<?php include 'assets/globals/top.php';
if (isset($_GET["explore"])) {
  $title = $_GET['search'];
  $category = $_GET['category'];
  echo "<script> alert('$category')</script>";
  $items = $obj->getAllDatabylikecolumn("content", $category, $title);
  if (empty($items)) {
    echo "<script type='text/javascript'> document.location = 'dashboard.php?error=Nothing match to your search'; </script>";
  }
} else if (isset($_GET['category'])) {
  $category = $_GET['category'];
  $items = $obj->getDataByUniqueColumn("content", "s-category", $category, "0");
  print_r($items);
  if (empty($items)) {
    echo "<script type='text/javascript'> document.location = 'dashboard.php?error=not a valid request'; </script>";
  }
} else {
  echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
}
?>
<!-- End Header/Navbar -->

<main id="main">
  <!-- =======Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Agents</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Agents Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Agents Grid ======= -->
  <section class="agents-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/agent-6.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing lorem5</h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/agent-1.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing lorem5</h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/agent-1.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/plan2.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing lorem5</h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-3 col-sm-6 col-12">
          <div class="card card-h" style="width: 100%;">
            <div class="card-img" style="background-image:url(assets/img/agent-1.jpg);"> </div>
            <div class="card-body card-body-h">
              <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing </h5>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
    </div>
  </section><!-- End Agents Grid-->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "assets/globals/bottom.php"; ?>