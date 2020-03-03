<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Cable</title>
  
  <link rel="stylesheet" href="{{ asset('css/report.css') }}">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
</head>
<body class="report--view">
  <div class="container-lhk">
    @foreach ($data as $item)
    <div class="table-container">
      @yield('table')
    </div>

    <div class="row fr mt--10 btn--group">
      <a href="{{route('excel', ['id' => $item->id_lhk])}}" class="btn btn--link">Export ke Excel</a>
      <a href="{{route('listlhk')}}" class="btn btn--link ml--10">Kembali ke list</a>
      <a href="{{route('formlhk')}}" class="btn btn--link ml--10">Form LHK</a>
    </div>

    @endforeach
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  $(function(){
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN' :$('meta[name="csrf-token"').attr('content')
    //   }
    // });
    // $('#foreman').click(function (e) { 
      // e.preventDefault;
      // $.ajax({
      //   type: "post",
      //   url: "",
      //   data: {
      //      foremanapr : 'Approved'
      //   },
      //   dataType: "dataType",
      //   success: function (response) {
          
      //   }
      // });
      // alert('bisa');
    //  });
  });
  </script>
</body>
</html>