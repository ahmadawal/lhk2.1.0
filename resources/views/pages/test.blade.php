@extends('apps')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sandbox</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="card card-dark">
      <div class="card-header">
        <h4 class="card-title">Sandbox-card</h4>
      </div>
      <div class="card-body">
        <form action="{{route('store-t')}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <table class="table" id="table-sample">
            <thead>
              <tr>
                <th>Name</th>
                <th>Mesin</th>
                <th>
                  <a href="#" class="btn btn-sm btn-info float-right add-row" data-added="0">
                    <i class="fas fa-plus" aria-hidden="true"></i>
                  </a>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="row-tr" id="row-1">
                <td>
                  <input type="text" class="form-control form-control-sm nama" name="nama[]" />
                </td>
                <td>
                  <input type="text" class="form-control form-control-sm mesin" name="mesin[]" />
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-danger float-right remove">
                    <i class="fas fa-trash" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="form-group" align="center">
            <button class="btn btn-sm btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
@endsection
@push('script')
<script>
  $(function(){
    $('.add-row').on('click', function(){
      addRow();
    });
    function addRow(){
      var row = $('tbody tr').length;
      var size = row + 1;
      // $('tbody tr').attr('id', 'row-'+size);
      var tr = 
        '<tr class="row-tr" id="row-'+size+'">'+
          '<td>'+
            '<input type="text" class="form-control form-control-sm" name="nama[]"/>'+
          '</td>'+
          '<td>'+
            '<input type="text" class="form-control form-control-sm" name="mesin[]"/>'+
          '</td>'+
          '<td>'+
            '<a href="#" class="btn btn-sm btn-danger float-right remove">'+
                '<i class="fas fa-trash" aria-hidden="true"></i>'+
              '</a>'+
          '</td>'+
        '</tr>';
      $('tbody').append(tr);
    };

    $(document).on('click', '.remove', function(){
      var last = $('tbody tr').length;

      if(last == 1){
        alert("oooh, tidak bisa !!!");
      } else {
        $(this).closest ('tr').remove ();
      }
    });
  });

</script>
<script>
  /*
  $(function(){
    var count = 0
    
    $('#test_dialog').dialog({
      autoOpen: false,
      width: 400,
      modal: true
    })

    $('#dialog').click(function(){
      $('#test_dialog').dialog('option', 'title', 'Dialogin')
      $('#first_name').val('')
      $('#email').val('')
      $('#error_first_name').text('')
      $('#error_email').text('')
      $('#first_name').css('border-color', '')
      $('#email').css('border-color', '')
      $('#save').text('Save')
      $('#test_dialog').dialog('open')
    })

    $('#save').click(function(){
      var error_first_name = ''
      var error_email = ''
      var first_name = ''
      var email = ''
      if ($('#first_name').val() == '') {
        error_first_name = 'First name is required'
        $('#error_first_name').text(error_first_name)
        $('#first_name').css('border-color', '#cc0000')
        first_name = $('#first_name').val()
      } else {
        error_first_name = ''
        $('#error_first_name').text(error_first_name)
        $('#first_name').css('border-color', '')
        first_name = ''
      }

      if ($('#email').val() == '') {
        
      }

    })
  })
  */
</script>
@endpush