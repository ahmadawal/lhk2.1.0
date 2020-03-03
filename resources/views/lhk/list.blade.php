<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Cable</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="{{ route('listlhk') }}">Jembo Cable</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('formlhk') }}">Form</a>
        </li>
      </ul>
    </div>  
  </nav>
  <br>
  <br>
  <div class="container-fluid pt-3">
    <table id="listlhk" class="table table-sm table-striped table-hover">
      <thead>
        <tr>
          <th>No. LHK</th>
          <th>No. Mesin</th>
          <th>Nama Mesin</th>
          <th>Tanggal</th>
          <th>SO No.</th>
          <th>OP No.</th>
          <th>Customer</th>
          <th>Bobin ID</th>
          <th>Proses/Type</th>
          <th>Panjang</th>
          <th>Warna</th>
          <th>Operator</th>
          <th></th>
        </tr>
      </thead>
      <body>
        @foreach ($data as $item)
        <tr>
          <td>{{ $item->id_lhk }}</td>
          <td>{{ $item->mesin_id }}</td>
          <td>{{ $item->mesin_nama }}</td>
          <td>{{ $item->tgl_mulai }}</td>
          <td>{{ $item->so_no }}</td>
          <td>{{ $item->op_no }}</td>
          <td>{{ $item->customer }}</td>
          <td>{{ $item->bobin_id }}</td>
          <td>{{ $item->proses_type }}</td>
          <td>{{ $item->panjang_fg }}</td>
          <td>{{ $item->warna_fg }}</td>
          <td>{{ $item->operator1 }}, {{ $item->operator2 }}</td>
          <td>
            <a href="{{ route('detaillhk', ['id' => $item->id_lhk]) }}" class="btn btn-sm btn-dark">Lihat detail</a>
          </td>
        </tr>
        @endforeach
      </body>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 
  <script>
    $(function () {
      $('#listlhk').DataTable();
    });
  </script>
</body>
</html>