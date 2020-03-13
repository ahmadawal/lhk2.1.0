@extends('apps')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Graph</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="card">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">Productivity by Machine</h3>
          <a href="javascript:void(0);">View Report</a>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex">
          <p class="d-flex flex-column">
            <span class="text-bold text-lg">Kilometer</span>
            <span>Production since 2020</span>
          </p>
          <!--
          <p class="ml-auto d-flex flex-column text-right">
            <span class="text-success">
              <i class="fas fa-arrow-up"></i> 33.1%
            </span>
            <span class="text-muted">Since last month</span>
          </p>-->
        </div>
        <!-- /.d-flex -->

        <div class="position-relative mb-4">
          <canvas id="sales-chart" height="200"></canvas>
        </div>

        <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
            <i class="fas fa-square text-primary"></i> This month
          </span>

          <span>
            <i class="fas fa-square text-gray"></i> Last month
          </span>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('script')
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="js/chart.js"></script>
<script>
  
$(function () {
  //
})
</script> 
@endpush