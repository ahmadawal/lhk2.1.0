@extends('apps')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Sandbox</h4>
      </div>
      <div class="card-body">
        <input type="text" class="form-control col-sm-3 mb-3" id="t1">
        <input type="text" class="form-control col-sm-3 mb-3" id="t2">
        <button class="btn btn-danger">Cek</button>
        <div class="form-group row col-sm-12 col-md-7">
          <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 1</label>
          <div class="col-sm-9 input-group input-group-sm" id="tc1">
            <div class="input-group-prepend mb-3">
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="ts" data-mask name="ts">
            </div>
            <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te">
            <select name="keg" id="keg" class="form-control">
              <option value="">Pilih</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-sm btn-primary mb-3" id="tk1"><i class="fas fa-plus"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('script')
<script>
  $(function(){
    $('.btn').click(function(){
      var format = 'hh:mm'
      var now = moment()
      var day = now.day()
      var t1 = moment($('#t1').val(), format)
      var t2 = moment($('#t2').val(), format)

      if (t1 > t2) {
        alert('no')
      }
    })
  })
</script>
@endpush