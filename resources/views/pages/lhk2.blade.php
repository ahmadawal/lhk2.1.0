@extends('apps')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 col-md-7">
          <h1>No. LHK : {{ $noLhk }}</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form detail</h3>
        <div class="card-tools">

          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('sn') }}" method="POST">
          @csrf
          <input type="hidden" name="id_lhk" value="{{ $noLhk }}" >
          <div class="form-group row col-sm-6 col-md-7">
            <label for="mesin" class="col-sm-3 col-form-label">Mesin</label>
            @foreach ($data as $i)
              <div class="col-sm-9 input-group">
                <input type="text" class="form-control form-control-sm" id="mesin" name="mesin" placeholder="{{ $i->m_code.' / '.$i->m_name }}" readonly>
                <input type="hidden" class="hidden" name="mId" value="{{ $i->m_id }}">
              </div>
            @endforeach
          </div>
          
          <div class="form-group row col-sm-6 col-md-7">
            <label for="r2" class="col-sm-3 col-form-label">Shift</label>
            <div class="form-group clearfix col-sm-9">
              <div class="icheck-danger d-inline">
                <input type="radio" name="rs" checked id="radioDanger1" value="1">
                <label for="radioDanger1">
                  1 &nbsp;
                </label>
              </div>
              <div class="icheck-danger d-inline">
                <input type="radio" name="rs" id="radioDanger2" value="2">
                <label for="radioDanger2">
                  2 &nbsp;
                </label>
              </div>
              <div class="icheck-danger d-inline">
                <input type="radio" name="rs" id="radioDanger3" value="3">
                <label for="radioDanger3">
                  3 &nbsp;
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row col-sm-6 col-md-7" id="op1" >
            <label for="ope" class="col-sm-3 col-form-label">Operator</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-sm"name="op1" placeholder="Nama Operator">
                <div class="input-group-append">
                  <a class="btn btn-success" id="bo1"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7" id="op2">
            <label for="ope" class="col-sm-3 col-form-label">Operator 2</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-sm"name="op2" placeholder="Nama Operator">
                <div class="input-group-append">
                  <a class="btn btn-success" id="bo2"><i class="fas fa-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7" id="op3">
            <label for="ope" class="col-sm-3 col-form-label">Operator 3</label>
            <div class="col-sm-9">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-sm"name="ope3" placeholder="Nama Operator">
              </div>
            </div>
          </div>

          <div class="form-group row col-sm-12 col-md-7">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 1</label>
            <div class="col-sm-9 input-group input-group-sm" id="tc1">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" data-mask name="ts1">
              </div>
              <input type="text" class="form-control ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te1">
              <select name="k1" id="k1" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary mb-3" id="tk1"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>

          <div class="form-group row col-sm-12 col-md-7" id="tc2">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 2</label>
            <div class="col-sm-9 input-group input-group-sm">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" data-mask name="ts2">
              </div>
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te2">
              <select name="k2" id="k2" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary mb-3" id="tk2"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-12 col-md-7" id="tc3">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 3</label>
            <div class="col-sm-9 input-group input-group-sm">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm"  data-mask name="ts3">
              </div>
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te3">
              <select name="k3" id="k3" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary mb-3" id="tk3"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-12 col-md-7" id="tc4">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 4</label>
            <div class="col-sm-9 input-group input-group-sm">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" data-mask name="ts4">
              </div>
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te4">
              <select name="k4" id="k4" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary mb-3" id="tk4"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-12 col-md-7" id="tc5">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 5</label>

            <div class="col-sm-9 input-group input-group-sm">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="ts" data-mask name="ts5">
              </div>
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te5">
              <select name="k5" id="k5" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary mb-3" id="tk5"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="form-group row col-sm-12 col-md-7" id="tc6">
            <label for="keg" class="col-sm-3 col-form-label">Waktu/Kegiatan 6</label>

            <div class="col-sm-9 input-group input-group-sm">
              <div class="input-group-prepend mb-3">
                <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="ts" data-mask name="ts6">
              </div>
              <input type="text" class="form-control form-control-sm ts" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="te" data-mask name="te6">
              <select name="k6" id="k6" class="form-control">
                <option value="">Pilih</option>
                @foreach ($prob as $i)
                  <option value="{{ $i->idp }}">{{ $i->desc }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row col-sm-6 col-md-7">
            <label for="noso" class="col-sm-3 col-form-label">Nomor SO</label>
            <div class="col-sm-9 input-group">
              <input type="number" class="form-control form-control-sm" id="noso" name="noso" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="noop" class="col-sm-3 col-form-label">Nomor OP</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="number" class="form-control" id="noop" name="noop" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="ts" class="col-sm-3 col-form-label">Type / Size</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="text" class="form-control" id="ts" name="ts" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="nobob" class="col-sm-3 col-form-label">Nomor Bobin</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="text" class="form-control" id="bid" name="bid" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="pan" class="col-sm-3 col-form-label">Panjang</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="number" class="form-control" id="pan" name="pan" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="war" class="col-sm-3 col-form-label">Warna</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="text" class="form-control" id="war" name="war" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="cus" class="col-sm-3 col-form-label">Customer</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="text" class="form-control" id="cus" name="cus" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="tar" class="col-sm-3 col-form-label">Target (Meter)</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="number" class="form-control" id="tar" name="tar" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="spe" class="col-sm-3 col-form-label">Speed (mpm)</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="number" class="form-control" id="spe" name="spe" >
            </div>
          </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="rpm" class="col-sm-3 col-form-label">RPM</label>
            <div class="col-sm-9 input-group input-group-sm">
              <input type="number" class="form-control" id="rpm" name="rpm" >
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="button-group row">
          <button class="btn btn-primary" id="submit">
            Simpan
          </button>
        </div>
        </form>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@prepend('script')
{{-- <script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script> --}}
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
@endprepend
@push('script')
<script>
  $(function(){
    
    $('#tc2').hide()
    $('#tc3').hide()
    $('#tc4').hide()
    $('#tc5').hide()
    $('#tc6').hide()

    $('#op2').hide()
    $('#op3').hide()

    $('#tk1').click(function(e){
      e.preventDefault
      $('#tc2').show()
      $(this).remove()
    })
    $('#tk2').click(function(e){
      e.preventDefault
      $('#tc3').show()
      $(this).remove()
    })
    $('#tk3').click(function(e){
      e.preventDefault
      $('#tc4').show()
      $(this).remove()
    })
    $('#tk4').click(function(e){
      e.preventDefault
      $('#tc5').show()
      $(this).remove()
    })
    $('#tk5').click(function(e){
      e.preventDefault
      $('#tc6').show()
      $(this).remove()
    })

    $('#bo1').click(function(e){
      e.preventDefault
      $('#op2').show()
      $(this).remove()
    })
    $('#bo2').click(function(e){
      e.preventDefault
      $('#op3').show()
      $(this).hide()
    })

    $('#submit').click(function(e){
      var format = 'hh:mm'
      var now = moment()
      var day = now.day()
      var t1 = moment($('#ts').val(), format)
      var t2 = moment($('#te').val(), format)

      if (t1 > t2) {
        e.preventDefault
        alert('Jam mulai kegiatan lebih besarS')

      }
    })

    $('.ts').inputmask('HH:mm', { 'placeholder': 'HH:mm' })
    $('input[name="ts2"]').inputmask('HH:mm', { 'placeholder': 'HH:mm' })
    $('input[name="te2"]').inputmask('HH:mm', { 'placeholder': 'HH:mm' })
    $('[data-mask]').inputmask()

  })
</script>
@endpush