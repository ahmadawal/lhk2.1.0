@extends('apps')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Laporan Harian Kabel</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">List Data LHK</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped" id="lhk">
            <thead>
              <tr>
                <th>No. LHK</th>
                <th>Mesin</th>
                <th>Tgl</th>
                <th>SO No.</th>
                <th>OP No.</th>
                <th>Bobin</th>
                <th>Type/Size</th>
                <th>Customer</th>
                <th>Operator/ Shift</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $i)
              <tr>
                <td>{{ $i->id_lhk }}</td>
                <td>{{ $i->m_code.'/'.$i->m_name }}</td>
                <td>
                  @php
                      $dt = date_create($i->tgl);
                      $d = date_format($dt, 'd/m/Y');
                      echo $d;
                  @endphp
                </td>
                <td>{{ $i->sono }}</td>
                <td>{{ $i->opno }}</td>
                <td>
                  {{$i->bid}}
                  {{$i->bid2}}
                  {{$i->bid3}}
                  {{$i->bid4}}
                  {{$i->bid5}}
                </td>
                <td>{{$i->type}}</td>
                <td>{{ $i->cus }}</td>
                <td>{{ $i->op1 }}, {{ $i->op2 }}, {{ $i->op3 }}/ {{ $i->sh_d }}</td>
                <td>
                  <a href="{{ route('pr', ['id' => $i->id_lhk ])}}">
                    Lihat <i class="fas fa-edit"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('script')
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function(){
    $('#lhk').DataTable()
  })
</script>
@endpush