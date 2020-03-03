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
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top mb-6">
    <a class="navbar-brand" href="{{ route('formlhk') }}">Jembo Cable</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('listlhk') }}">Lihat Data</a>
        </li>
      </ul>
    </div>  
  </nav>
  <br>
  <br>
  <div class="container pt-3">
    @if ('session')
      <div class="alert alert-success">

        {{ session('status') }}
      </div>
      {{-- <script>
        var msg = {{ session('status') }};
        alert(msg);
      </script> --}}
    @endif
    <div id="form" class="form-lhk">
      <h3 class="text-center">Laporan Harian Kerja</h3>

      <form action="{{ route('storelhk') }}" method="post" id="form-lhk" class="needs-validation" novalidate>
        @csrf
        <div class="form-group row">
          <label for="mesin_id" class="col-sm-3 col-form-label">Nomor Mesin</label>
          <div class="col-sm-9 col-md-8 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="mesin_id" name="mesin_id" autocomplete="off" required autofocus>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="mesin_nama" class="col-sm-3 col-form-label">Nama Mesin</label>
          <div class="col-sm-9 col-md-8 col-lg-5">
            <input type="name" class="form-control form-control-sm" name="mesin_nama" id="mesin_nama" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="start_dates" class="col-sm-3 col-form-label">Waktu Mulai</label>
          <div class="col-sm-9 col-md-5 col-lg-4">
            <input id="start_dates" name="start_dates" class="form-control form-control-sm" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="end_dates" class="col-sm-3 col-form-label">Waktu Selesai</label>
          <div class="col-sm-9 col-md-5 col-lg-4">
            <input type="text" class="form-control form-control-sm" id="end_dates" name="end_dates" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <fieldset>
          <div class="form-group row">
            <legend class="col-form-label col-sm-3 pt-0">Shift Pegawai</legend>
            <div class="col-sm-9">
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="shiftRadios" id="shift1" value="1" checked>
                <label class="custom-control-label" for="shift1">
                  Shift 1
                </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="shiftRadios" id="shift2" value="2">
                <label class="custom-control-label" for="shift2">
                  Shift 2
                </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="shiftRadios" id="shift3" value="3">
                <label class="custom-control-label"for="shift3">
                  Shift 3
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        

        <div class="form-group row">
          <label for="" class="col-sm-3 col-form-label">Hour Meter Mesin</label>
          <div class="col-sm-4">
            <input type="number" class="form-control form-control-sm" id="hour_sb" name="hour_sb" placeholder="Sebelum" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <br>
          <br>
          <div class="col-sm-4">
            <input type="number" class="form-control form-control-sm" id="hour_sd" name="hour_sd" placeholder="Sesudah" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="hour_mesin" class="col-sm-3 col-form-label">Total Hour Mesin</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="hour_mesin" name="hour_mesin" required readonly>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row" id="operator-1">
          <label for="operator1" class="col-sm-3 col-form-label">Operator</label>
          <div class="col-sm-2 col-md-5 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="operator1" name="operator1" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <br>
          <br>
          <div class="col-sm-2">
            <button class="btn btn-sm btn-dark" id="btn-tambah-operator">+ Tambah operator</button>
          </div>
        </div>

        <div class="form-group row" id="operator-2">
          <label for="operator2" class="col-sm-3 col-form-label">Operator 2</label>
          <div class="col-sm-9 col-md-5 col-lg-5 col-md-offset-7">
            <input type="text" class="form-control form-control-sm" id="operator2" name="operator2" placeholder="Optional" autocomplete="off">
          </div>
          <br>
          <br>
          <div class="col-sm-2">
            <button class="btn btn-sm btn-dark" id="btn-tambah-operator-2">+ Tambah operator</button>
          </div>
        </div>

        <div class="form-group row" id="operator-3">
          <label for="operator3" class="col-sm-3 col-form-label">Operator 3</label>
          <div class="col-sm-9 col-md-5 col-lg-5 col-md-offset-7">
            <input type="text" class="form-control form-control-sm" id="operator3" name="operator3" placeholder="Optional" autocomplete="off">
          </div>
        </div>

        <div class="form-group row">
          <label for="so_no" class="col-sm-3 col-form-label">SO No.</label>
            <div class="col-sm-9 col-md-5 col-lg-5">
              <input type="number" class="form-control form-control-sm" id="so_no" name="so_no" required>
              
              <div class="invalid-feedback">isian Tidak boleh kosong.</>
            </div>
          </div>
        </div>

        {{-- tabs --}}
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Data LHK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div class="container-fluid">

            </div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <h2>Menu1</h2>
          </div>
          <div id="menu2" class="tab-pane fade">
            <h2>Menu 2</h2>
          </div>
        </div>

        <div class="form-group row">
          <label for="hour_mesin" class="col-sm-3 col-form-label">Kegiatan</label>
          <div class="col-sm-3 col-md-2 mb-3">
            <input type="text" class="form-control form-control-sm" id="start_k" name="start_k" required autocomplete="off">
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <div class="col-sm-3 col-md-2 ml-3 mb-3">
            <input type="text" class="form-control form-control-sm" id="end_k" name="end_k" required autocomplete="off">
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <div class="col-sm-3 col-md-3 ml-3">
            <select name="kegiatan_p" id="" class="form-control form-control-sm">
              <option value="">Kegiatan</option>
              <option value="p">Persiapan | P</option>
              <option value="o">Operasi | O</option>
              <option value="r">Reloading | R</option>
              <option value="co">Change Over/ Ganti Order | CO</option>
              <option value="bd">Break Down/ Mesin Rusak | BD</option>
              <option value="go">Gangguan Operasi | GO</option>
            </select>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="proses_k" class="col-sm-3 col-form-label">Gangguan</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <textarea name="problem_p" id="problem_p" cols="40" rows="5"  class="form-control form-control-sm"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="proses_k" class="col-sm-3 col-form-label">Proses Type/Size</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="proses_k" name="proses_k" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        

        <div class="form-group row">
          <label for="op_no" class="col-sm-3 col-form-label">OP No.</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="op_no" name="op_no" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="customer" class="col-sm-3 col-form-label">Customer</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="customer" name="customer" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="speed" class="col-sm-3 col-form-label">Line Speed [mpm]</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="speed" name="speed" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>
          
        <div class="form-group row">
          <label for="target_p" class="col-sm-3 col-form-label">Target Panjang (Meter)</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="target_p" name="target_p" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>


        <div class="form-group row">
          <label for="rpm" class="col-sm-3 col-form-label">RPM</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="rpm" name="rpm" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="no_bobin" class="col-sm-3 col-form-label">Nomor Bobin (ID)</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="no_bobin" name="no_bobin" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>  
        <div class="form-group row">
          <label for="p_bahan" class="col-sm-3 col-form-label">Panjang (Meter)</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="number" class="form-control form-control-sm" id="p_bahan" name="p_bahan" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="warna_b" class="col-sm-3 col-form-label">Warna</label>
          <div class="col-sm-9 col-md-5 col-lg-5">
            <input type="text" class="form-control form-control-sm" id="warna_b" name="warna_b" autocomplete="off" required>
            
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

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