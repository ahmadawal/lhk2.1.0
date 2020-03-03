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
          <div class="form-group row col-sm-6 col-md-7">
            <label for="ope" class="col-sm-3 col-form-label">Operator</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control form-control-sm" id="ope" name="ope" >
            </div>
          </div>
        <div class="form-group row col-sm-6 col-md-7">
          <label for="keg" class="col-sm-3 col-form-label">Kegiatan</label>
          <div class="col-sm-3 input-group timerange" id="datetimepickerDate">
            <input type="text" class="form-control form-control-sm" name="wak">
            {{-- <select name="keg" id="keg" class="form-control form-control-sm">
              <option value="">Pilih</option>
              <option value="06:45">06:45</option>
            </select> --}}
          </div>
          <div class="col-sm-6 input-group">
            <select name="keg" id="keg" class="form-control form-control-sm">
              <option value="">Pilih</option>
              @foreach ($prob as $i)
                <option value="{{ $i->idp }}">{{ $i->desc }}</option>
              @endforeach
            </select>
          </div>
        </div>
          <div class="form-group row col-sm-6 col-md-7">
            <label for="wkt" class="col-sm-3 col-form-label">Waktu kegiatan</label>
            <div class="col-sm-9 input-group">
              <div class="input-group-prepend" id="wkb">
                <input type="text" class="form-control form-control-sm" name="wkb"data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="datemask2" data-mask>
              </div>
              <input type="text" class="form-control form-control-sm" data-inputmask-alias="datetime" data-inputmask-inputformat="HH:mm" id="datemask" data-mask>
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
          <button class="btn btn-primary">
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
@endprepend
@push('script')
<script>
  $(function(){
    /*
    $('#timepicker').timepicker({
      format: 'LT'
    })
    $('#wkt').datetimepicker({
      format: 'LT'
    })
    */
    $('#datemask').inputmask('HH:mm', { 'placeholder': 'HH:mm' })
    $('#datemask2').inputmask('HH:mm', { 'placeholder': 'HH:mm' })
    $('[data-mask]').inputmask()
  })
</script>
<script>
    $('.timerange').on('click', function(e) {
    e.stopPropagation();
    var input = $(this).find('input');

    var now = new Date();
    var hours = now.getHours();
    var period = "PM";
    if (hours < 12) {
      period = "AM";
    } else {
      hours = hours - 11;
    }
    var minutes = now.getMinutes();

    var range = {
      from: {
        hour: hours,
        minute: minutes,
        period: period
      },
      to: {
        hour: hours,
        minute: minutes,
        period: period
      }
    };

    if (input.val() !== "") {
      var timerange = input.val();
      var matches = timerange.match(/([0-9]{2}):([0-9]{2}) (\bAM\b|\bPM\b)-([0-9]{2}):([0-9]{2}) (\bAM\b|\bPM\b)/);
      if( matches.length === 7) {
        range = {
          from: {
            hour: matches[1],
            minute: matches[2],
            period: matches[3]
          },
          to: {
            hour: matches[4],
            minute: matches[5],
            period: matches[6]
          }
        }
      }
    };
    console.log(range);

    var html = '<div class="timerangepicker-container">'+
      '<div class="timerangepicker-from">'+
      '<label class="timerangepicker-label">From:</label>' +
      '<div class="timerangepicker-display hour">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">'+('0' + range.from.hour).substr(-2)+'</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      ':' +
      '<div class="timerangepicker-display minute">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">'+('0' + range.from.minute).substr(-2)+'</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      ':' +
      '<div class="timerangepicker-display period">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">PM</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      '</div>' +
      '<div class="timerangepicker-to">' +
      '<label class="timerangepicker-label">To:</label>' +
      '<div class="timerangepicker-display hour">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">'+('0' + range.to.hour).substr(-2)+'</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      ':' +
      '<div class="timerangepicker-display minute">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">'+('0' + range.to.minute).substr(-2)+'</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      ':' +
      '<div class="timerangepicker-display period">' +
          '<span class="increment fa fa-angle-up"></span>' +
          '<span class="value">PM</span>' +
          '<span class="decrement fa fa-angle-down"></span>' +
      '</div>' +
      '</div>' +
    '</div>';

    $(html).insertAfter(this);
    $('.timerangepicker-container').on(
      'click',
      '.timerangepicker-display.hour .increment',
      function(){
        var value = $(this).siblings('.value');
        value.text(
          increment(value.text(), 12, 1, 2)
        );
      }
    );

    $('.timerangepicker-container').on(
      'click',
      '.timerangepicker-display.hour .decrement',
      function(){
        var value = $(this).siblings('.value');
        value.text(
          decrement(value.text(), 12, 1, 2)
        );
      }
    );

    $('.timerangepicker-container').on(
      'click',
      '.timerangepicker-display.minute .increment',
      function(){
        var value = $(this).siblings('.value');
        value.text(
          increment(value.text(), 59, 0 , 2)
        );
      }
    );

    $('.timerangepicker-container').on(
      'click',
      '.timerangepicker-display.minute .decrement',
      function(){
        var value = $(this).siblings('.value');
        value.text(
          decrement(value.text(), 12, 1, 2)
        );
      }
    );

    $('.timerangepicker-container').on(
      'click',
      '.timerangepicker-display.period .increment, .timerangepicker-display.period .decrement',
      function(){
        var value = $(this).siblings('.value');
        var next = value.text() == "PM" ? "AM" : "PM";
        value.text(next);
      }
    );

  });

  $(document).on('click', e => {

    if(!$(e.target).closest('.timerangepicker-container').length) {
      if($('.timerangepicker-container').is(":visible")) {
        var timerangeContainer = $('.timerangepicker-container');
        if(timerangeContainer.length > 0) {
          var timeRange = {
            from: {
              hour: timerangeContainer.find('.value')[0].innerText,
              minute: timerangeContainer.find('.value')[1].innerText,
              period: timerangeContainer.find('.value')[2].innerText
            },
            to: {
              hour: timerangeContainer.find('.value')[3].innerText,
              minute: timerangeContainer.find('.value')[4].innerText,
              period: timerangeContainer.find('.value')[5].innerText
            },
          };

          timerangeContainer.parent().find('input').val(
            timeRange.from.hour+":"+
            timeRange.from.minute+" "+    
            timeRange.from.period+"-"+
            timeRange.to.hour+":"+
            timeRange.to.minute+" "+
            timeRange.to.period
          );
          timerangeContainer.remove();
        }
      }
    }
    
  });

  function increment(value, max, min, size) {
    var intValue = parseInt(value);
    if (intValue == max) {
      return ('0' + min).substr(-size);
    } else {
      var next = intValue + 1;
      return ('0' + next).substr(-size);
    }
  }

  function decrement(value, max, min, size) {
    var intValue = parseInt(value);
    if (intValue == min) {
      return ('0' + max).substr(-size);
    } else {
      var next = intValue - 1;
      return ('0' + next).substr(-size);
    }
  }
</script>
@endpush