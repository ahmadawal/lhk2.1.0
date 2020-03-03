@section('menu1')
@parent


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
@endsection
