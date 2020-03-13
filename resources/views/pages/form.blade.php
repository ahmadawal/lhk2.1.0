@extends('apps')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Laporan Hasil Kerja</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="col-sm-7">
      <div class="container-fluid">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">LHK Digital</h3>
          </div>
          <form class="form-horizontal" method="POST" action="{{ route('cn') }}">
            @csrf
            <div class="card-body">
              <div class="form-group row">
                <label for="noMesin" class="col-sm-2 col-form-label">No. Mesin</label>
                <div class="col-sm-10 input-group input-group-sm mb-3">
                  <input type="text" class="form-control" id="noMesin" name="noMesin" placeholder="Nomor Mesin" readonly>
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat btn-sm" id="btnSearch" data-toggle="modal" data-target="#modal-mac">
                      (1) Cari mesin 
                      <i class="fa fa-search"></i>  
                    </button>
                  </span>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" id="btnCreate">(2) Buat lhk  <i class="far fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-mac">
      <div class="modal-dialog modal-default">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Klik nomor mesin</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-striped" id="mac-table">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mac as $m)
                  <tr class="mac-row">
                    <td class="mac-code"><span>{{ $m->m_code }}</span></td>
                    <td class="mac">{{ $m->m_name }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-info" data-dismiss="modal">&times; Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@push('script')
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<script>
$(document).ready(function () {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000
  })

  var msg = '{{Session::get("alert")}}'
  var exist = '{{Session::has("alert")}}'
  if (exist) {
    Toast.fire({
      type: 'success',
      title: msg
    })
  }
})
</script>
<script>
  $(function () {
    
    $('.mac-row').on('click', 'span', function(e) {
      $('#noMesin').val($(this).text());
      $('#modal-mac').modal('hide');
    });

    $('#mac-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": true,
    });

    $('#btnSearch').click(function (e) { 
      e.preventDefault();
      // $.ajax({
      //   type: "GET",
      //   url: "{{ route('mac') }}",
      //   success: function (r) {
      //     const mac = r.mac;
          
      //     mac.forEach(item => {
      //       // $('.mac-field').text(item.m_id);
      //       // console.log(item.m_code + item.m_name);
      //       });
      //     });
          
      //   }
      // });
    });

    $('#btnCreate').click(function (e) { 
      var no = $('#noMesin').val();
      if (no == '') {
        e.preventDefault();
        alert('Nomor mesin masih kosong !');
      }
    });
  })
</script>
@endpush

@push('script')
<script>
  $(function () 
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
</script>
@endpush