<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="jembo.png" type="image/x-icon">
  <title>Form Laporan Harian Kabel</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

  {{-- <script type="text/javascript" src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script> --}}
  
  {{-- <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" /> --}}
  {{-- <link rel="stylesheet" href="{{ asset('/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" /> --}}
  
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/css/lhk.css') }}">

  {{-- <script type="text/javascript" src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}

</head>
<body>
  @include('include.nav')
  
  <div class="container mt-1 pt-2">
    @if ('session')
      <div class="alert alert-success">

        {{ session('status') }}
      </div>
      {{-- <script>
        var msg = {{ session('status') }};
        alert(msg);
      </script> --}}
    @else
      <div></div>
    @endif

    <div id="form" class="form-lhk">
      <h3 class="text-center">Laporan Harian Kerja</h3>

      <form action="{{ route('storelhk') }}" method="post" id="form-lhk" class="needs-validation" novalidate>
        @csrf

        @yield('content')
        @yield('tabs')
      </div>

        {{-- @include('lhk.takeup') --}}

        <div class="form-group row row-btn-submit">
          <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-dark">Simpan</button> 
          </div>
        </div>
      </form>
    </div>
  </div>


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('/bower_components/moment/min/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script>
    $(function () {
      var dt = new Date();
      var month = dt.getMonth() < 10 ? '0'+dt.getMonth() : '';
      var date = dt.getDate() < 10 ? '0'+dt.getDate() : '';
      var date = dt.getFullYear() + '-' + month +'-'+ date;
      var time = dt.getHours() + ':' + dt.getMinutes() + ':' + dt.getSeconds();
      var cdt = date + ' ' + time
      $('#start_dates').datepicker({ footer: true, modal: true, header: true, format: 'dd-mm-yyyy' });
      // $('#start_dates').val(cdt);

      $('#end_dates').datepicker({ footer: true, modal: true, header: true, format: 'dd-mm-yyyy' });

      $('#start_k').timepicker();
      $('#end_k').timepicker();

      $('#hour_sd').keyup( function() {
        var num1, num2, total;
        num1 = $('#hour_sd').val();
        num2 = $('#hour_sb').val();

        total = num1 - num2;

        $('#hour_mesin').val(total);

      });
    });
    
  </script>
  
  <script>
    $(function() {
      $('#operator-2').hide();
      $('#operator-3').hide();

      $('#btn-tambah-operator').click(function (e){
        e.preventDefault();
        $('#operator-2').show();
        $(this).remove();
      });

      $('#btn-tambah-operator-2').click(function (e){
        e.preventDefault();
        $('#operator-3').show();
        $(this).remove();
      });
    });
  </script>

  {{-- <script>
    $(function(e){
      e.preventDefault;
      $.ajax({
        type: "POST",
        url: "{{ route('storelhk') }}",
        data: {
          '_token'  : '{{ csrf_token }}',

        },
        dataType: "dataType",
        success: function (r) {
          $alert('Input data tersimpan');
        },
        error : function (e) { 
          e.responseText;
        }
      });
    });
  </script> --}}

  <script>
    // Disable form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

</body>
</html>