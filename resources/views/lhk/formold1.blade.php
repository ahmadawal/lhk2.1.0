<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="jembo.png" type="image/x-icon">
  <title>Form Laporan Harian Kabel</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/css/lhk.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Jembo Cable</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Lihat Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reportlhk') }}">Print</a>
        </li> 
      </ul>
    </div>  
  </nav>
  <br>
  <div class="container">
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
      <hr>
      <form action="{{ route('storelhk') }}" method="post" id="form-lhk" class="needs-validation" novalidate>
        @csrf
        <div class="form-group row">
          <label for="mesin_nama" class="col-sm-2 col-lg-2 col-form-label">Nama Mesin</label>
          <div class="col-sm-10 col-lg-3">
            <input type="name" class="form-control form-control-sm" name="mesin_nama" id="mesin_nama" autofocus required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="mesin_id" class="col-sm-2 col-lg-2 col-form-label">Nomor Mesin</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="mesin_id" name="mesin_id" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="tgl_proses" class="col-sm-2 col-form-label">Tanggal Proses</label>
          <div class="col-sm-7">
            <input id="tgl_proses" name="tgl_proses" class="form-control form-control-sm" readonly required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <div class="col-sm-3">
            <!-- kosong -->
          </div>
        </div>

        <fieldset>
          <div class="form-group row">
            <legend class="col-form-label col-sm-2 pt-0">Shift Pegawai</legend>
            <div class="col-sm-10">
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
          <label for="" class="col-sm-2 col-form-label">Hour Meter Mesin</label>
          <div class="col-sm-5">
            <input type="number" class="form-control form-control-sm" id="hour_sb" name="hour_sb" placeholder="Sebelum" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <br>
          <br>
          <div class="col-sm-5">
            <input type="number" class="form-control form-control-sm" id="hour_sd" name="hour_sd" placeholder="Sesudah" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="hour_mesin" class="col-sm-2 col-form-label">Total Hour Mesin</label>
          <div class="col-sm-10">
            <input type="number" class="form-control form-control-sm" id="hour_mesin" name="hour_mesin" readonly>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <hr>

        <div class="form-group row">
          <label for="jam_p" class="col-sm-2 col-form-label">Jam</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="jam_p" name="jam_p" required readonly>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="kegiatan_p" class="col-sm-2 col-form-label">Kegiatan</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control form-control-sm" name="kegiatan_p" required> -->
            <input type="text" class="form-control form-control-sm">
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="proses_k" class="col-md-2 col-sm-2 col-form-label">Proses Type/Size</label>
          <div class="col-sm-3 col-md-2">
            <input type="text" class="form-control form-control-sm" id="proses_k" name="proses_k" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        
          <div class="col-sm-4 form-group row">
            <label for="so_no" class="col-md-3 col-sm-2 col-form-label">SO No.</label>
            <div class="col-md-9 col-sm-8">
              <input type="number" class="form-control form-control-sm" id="so_no" name="so_no" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</>
            </div>
          </div>
          <div class="col-sm-4 form-group row">
            <label for="po_no" class="col-md-4 col-sm-4 col-form-label">PO No.</label>
            <div class="col-md-8 col-sm-8">
              <input type="number" class="form-control form-control-sm" id="po_no" name="po_no" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</div>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="customer" class="col-sm-2 col-form-label">Customer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="customer" name="customer" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
        </div>

        <div class="form-group row">
          <label for="speed" class="col-sm-2 col-form-label">Line Speed [mpm]</label>
          <div class="col-sm-2">
            <input type="number" class="form-control form-control-sm" id="speed" name="speed" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <div class="col-sm-3 form-group row">
            <label for="rpm" class="col-sm-3 col-form-label">RPM</label>
            <div class="col-sm-9">
              <input type="number" class="form-control form-control-sm" id="rpm" name="rpm" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</div>
            </div>
          </div>
          <div class="col-sm-5 form-group row">
            <label for="target_p" class="col-sm-6 col-form-label">Target Panjang (Meter)</label>
            <div class="col-sm-6">
              <input type="number" class="form-control form-control-sm" id="target_p" name="target_p" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</div>
            </div>
          </div>
        </div>

        <hr>

        <div class="form-group row">
          <label for="no_bobin" class="col-sm-2 col-form-label">Nomor Bobin</label>
          <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm" id="no_bobin" name="no_bobin" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
          </div>
          <div class="col-sm-4 form-group row">
            <label for="p_bahan" class="col-sm-6 col-form-label">Panjang (Meter)</label>
            <div class="col-sm-6">
              <input type="number" class="form-control form-control-sm" id="p_bahan" name="p_bahan" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</div>
            </div>
          </div>
          <div class="col-sm-4 form-group row">
            <label for="warna_b" class="col-sm-4 col-form-label">Warna</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="warna_b" name="warna_b" required>
              <div class="valid-feedback">Benar.</div>
              <div class="invalid-feedback">isian Tidak boleh kosong.</div>
            </div>
          </div>
        </div>

        <hr>

        <div class="form-group row">
          <label for="operator" class="col-sm-2 col-form-label">Operator</label>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="operator" name="operator" required>
            <div class="valid-feedback">Benar.</div>
            <div class="invalid-feedback">isian Tidak boleh kosong.</div>
        </div>

        </div>

        <div class="form-group row row-btn-submit">
          <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button> 
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script>
    $('#tgl_proses').datepicker({
      uiLibrary: 'bootstrap4',
      format: 'yyyy/mm/dd'
    });

    $('#jam_p').timepicker({
      uiLibrary: 'bootstrap'
    });

    $('#hour_sd').keyup( function() {
      var num1, num2, total;
      num1 = $('#hour_sd').val();
      num2 = $('#hour_sb').val();

      total = num1 - num2;

      $('#hour_mesin').val(total);

    });
    
  </script>
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