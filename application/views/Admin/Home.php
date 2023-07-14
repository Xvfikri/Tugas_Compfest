<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top:100px">

<div id="carouselExampleIndicators" class="carousel slide rounded" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <!-- https://static.vecteezy.com/system/resources/previews/002/236/321/original/movie-trendy-banner-vector.jpg -->
      <img class="d-block w-100" src="https://arizonasports.com/wp-content/uploads/2023/06/345890079_649442590532021_8425814995231854364_n.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://collider.com/wp-content/uploads/transformers-3-movie-poster-bumblebee-01.jpg" alt="Second slide" height="547px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiK3UDwDHuQGHQOBqlzm6yXScXVPBsnQfRU5gy9G1s-cw2HCseKMhj6Juus5XMgrf2-Md62C-d_pYsK6IIB8Jkxh-D4vRB89aAw2H73t-FBs7U-Ci0DnhVd2YmPW4rW93HgzTOC-DP74flZt15tifOuCO3Y5rZhQ-sfv66SwHE4QlCdefnTQSLaRTMC/w0/4%20Film%20Indonesia%20Lebaran%202023.jpg" height="547px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row mt-3">

    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $num_user; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Film</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $num_film; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Teater</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $num_teater; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Pemesanan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $num_pemesanan; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->