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
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Timeline</h3>
      </div>
      <div class="card-body">
        <div id="timesheet"></div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('style')
  <link rel="stylesheet" href="bower_components/timesheet.js/dist/timesheet.min.css">
  <link rel="stylesheet" href="css/graph.css">
@endpush
@push('script')
<script src="bower_components/timesheet.js/dist/timesheet.min.js"></script>
<script>
  $(function(){
    new Timesheet('timesheet', 2010, 2020, [
      ['2010', '09/2010', 'MITSUBISHI', 'lorem'],
      ['06/2010', '09/2011', 'SCKP', 'ipsum'],
      ['2011', 'IKPT'],
      ['10/2011', '2014', 'JANGKRIK PROJECT', 'dolor'],
      ['02/2013', '05/2014', 'SINMONAS', 'ipsum'],
      ['07/2013', '09/2014', 'PT INDONESIA COMNET PLUS', 'default'],
      ['10/2013', '05/2017', 'PLN', 'dolor'],
      ['01/2017', '05/2018', 'TELKOM AKSES', 'lorem'],
      ['011/2017', '05/2019', 'MORATELINDO', 'lorem'],
      ['02/2018', '05/2020', 'PINDODELI', 'lorem'],
      ['09/2018', '06/2020', 'TOWER BERSAMA', 'ipsum']
    ]);
  })
</script>
@endpush