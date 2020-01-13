@extends('layouts.master')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Dashboard</h4>
      <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
          <li><a href="#">ICE Market data</a></li>
          <li><a href="#">Own analysis</a></li>
          <li><a href="#">Historic market data</a></li>
        </ul>
        <ul class="quick-links ml-auto">
          <li><a href="#">Settings</a></li>
          <li><a href="#">Analytics</a></li>
          <li><a href="#">Watchlist</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="page-header-toolbar">
      <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
        <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
        <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
      </div>
      <div class="filter-wrapper">
        <div class="dropdown toolbar-item">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
          <div class="dropdown-menu" aria-labelledby="dropdownsorting">
            <a class="dropdown-item" href="#">Last Day</a>
            <a class="dropdown-item" href="#">Last Month</a>
            <a class="dropdown-item" href="#">Last Year</a>
          </div>
        </div>
        <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
      </div>
      <div class="sort-wrapper">
        <button type="button" class="btn btn-primary toolbar-item">New</button>
        <div class="dropdown ml-lg-auto ml-3 toolbar-item">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
          <div class="dropdown-menu" aria-labelledby="dropdownexport">
            <a class="dropdown-item" href="#">Export as PDF</a>
            <a class="dropdown-item" href="#">Export as DOCX</a>
            <a class="dropdown-item" href="#">Export as CDR</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title Header Ends-->

<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title mb-0">Market Overview</h4> <br>
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center pb-2">
            <div class="dot-indicator bg-danger mr-2"></div>
            <p class="mb-0">Total Anggaran</p>
          </div>
          <h4 class="font-weight-semibold">Rp. 100.000.000</h4>
          <div class="progress progress-md">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="d-flex align-items-center pb-2">
            <div class="dot-indicator bg-success mr-2"></div>
            <p class="mb-0">Sudah DiAnggarkan</p>
          </div>
          <h4 class="font-weight-semibold">Rp. 80.000.000</h4>
          <div class="progress progress-md">
            <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-0">Market Overview</h4> <br>
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-danger mr-2"></div>
              <p class="mb-0">Total Anggaran</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 100.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">Sudah DiAnggarkan</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 80.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-0">Market Overview</h4> <br>
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-danger mr-2"></div>
              <p class="mb-0">Total Anggaran</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 100.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">Sudah DiAnggarkan</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 80.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-0">Market Overview</h4> <br>
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-danger mr-2"></div>
              <p class="mb-0">Total Anggaran</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 100.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">Sudah DiAnggarkan</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 80.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-0">Market Overview</h4> <br>
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-danger mr-2"></div>
              <p class="mb-0">Total Anggaran</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 100.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="d-flex align-items-center pb-2">
              <div class="dot-indicator bg-success mr-2"></div>
              <p class="mb-0">Sudah DiAnggarkan</p>
            </div>
            <h4 class="font-weight-semibold">Rp. 80.000.000</h4>
            <div class="progress progress-md">
              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>



@endsection
