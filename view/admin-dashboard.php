<?php
require('../view/template-atas-admin.php');

?>





<div class="container-fluid">
  <div class="title">
    <h3 class="text-gray-800 my-2">Dashboard</h3>
  </div>
  <div class="subtitle border-bottom mb-4 pb-2">
    <span class=""><a href="./admin-monev-dashboard.php">Beranda </a></span>
    <span class="text-grey"> /</span>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="fa fa-users"></i>
          </div>
          <p class="card-category">KPA</p>
          <h3 class="card-title">-

          </h3>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">store</i>
          </div>
          <p class="card-category">PPTK</p>
          <h3 class="card-title">-</h3>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="fa fa-book"></i>
          </div>
          <p class="card-category">Program</p>
          <h3 class="card-title">-</h3>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="fa fa-sitemap"></i>
          </div>
          <p class="card-category">Kegiatan</p>
          <h3 class="card-title">-</h3>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card card-chart">
        <div class="card-header card-header-success">
          <div class="ct-chart" id="dailySalesChart"></div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Realisasi Fisik Keuangan</h4>
          <p class="card-category">
          </p>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-chart">
        <div class="card-header card-header-warning">
          <div class="ct-chart" id="websiteViewsChart"></div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Realisasi Program</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-chart">
        <div class="card-header card-header-danger">
          <div class="ct-chart" id="completedTasksChart"></div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Realisasi Kegiatan</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-footer">
          <div class="stats">

          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<?php
require('../view/template-bawah-monev.php')
?>