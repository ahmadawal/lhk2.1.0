@extends('layouts')
@section('content')

@php
  date_default_timezone_set('Asia/Jakarta');
  $rd = rand(10, 100);
  $dt = date("ymdm");
  $lhk = $dt.$rd;
@endphp
<div class="form-group row">
  <label for="id-lhk" class="col-sm-3 col-form-label">No. LHK</label>
  <div class="col-sm-9 col-md-8 col-lg-5">
    <input type="text" class="form-control form-control-sm" id="id_lhk" name="id_lhk" autocomplete="off" value="{{ $lhk }}" readonly>
  </div>
</div>

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

@include('components.tabs')

@endsection