<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Cable</title>
  
  <link rel="stylesheet" href="{{ asset('css/report.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}"> --}}
</head>
<body>
  <div class="container-lhk">
    <div class="table-container">
      <table class="table-lhk table table-bordered">
        @foreach ($data as $item)
        <tr id="row-1" style="padding: 20px">
          <td colspan="10" class="pt_name">PT.JEMBO CABLE COMPANY Tbk.</td>
          <td class="no-lhk" colspan="4" style="padding-right: 10px">No. LHK : {{ $item->id_lhk }}</td>
        </tr>
  
        <tr id="row-2">
          <td colspan="13" class="judul" style="margin-bottom: 20px">LAPORAN HASIL KERJA</td>
          <td class="offset-tb"></td>
        </tr>
  
        <tr id="row-3">
          <td class="no-border" colspan="2">NO. MESIN</td>
          <td colspan="6" class="no-border">: {{ $item->m_code }}</td>
          <td class="text-center h-meter" style="width: 80px">SHIFT</td>
          <td class="text-center h-meter">JAM</td>
          <td colspan="" class="text-center h-meter" style="width: 150px">HOUR METER MESIN</td>
          <td colspan="2" class="text-center h-meter">Total [Jam]</td>
          <td rowspan="4" class="pinggir"></td>
        </tr>
        @php
              switch ($item->sh_id) {
                case 1:
                  $jm = '06:45';
                  $jk = '15:15';
                  break;
                case 2:
                  $jm = '14:45';
                  $jk = '23:15';
                  break;
                case 3:
                  $jm = '22:45';
                  $jk = '07:15';
              break;
                default:
                  $jm = '06:45';
                  $jk = '15:15';
                  break;
              }
          @endphp
        <tr id="row-4">
          <td class="no-border" colspan="2">NAMA MESIN</td>
          <td colspan="6" class="no-border">: {{ $item->m_name }}</td>
          <td rowspan="2" class="shift-pgw h-meter">{{ $item->sh_d }}</td>
          <td class="h-meter text-center">{{ $jm }}</td>
          <td class="text-center">{{ $item->h_b }}</td>
          <td rowspan="2" colspan="2" style="" class="h-meter text-center">
            @php
                $b = $item->h_b;
                $a = $item->h_a;
                $c = $a - $b;
                echo $c;
            @endphp
          </td>
        </tr>
  
        <tr id="row-5">
          <td class="no-border" colspan="2">TANGGAL</td>
          <td colspan="6" class="offset-tb no-border">:
            @php
                $dt = $item->tgl;
                $d = explode(" ", $dt);
                $tgl = date("d-m-Y", strtotime($d[0]));
                echo $tgl;
            @endphp
          </td>
          
          <td class="h-meter text-center">{{ $jk }}</td>
          <td class="text-center">{{ $item->h_a }}</td>
        </tr>
  
        <tr>
          <td colspan="14" class="bottom-ofs"></td>
        </tr>
        {{-- header table --}}
        <tr id="row-6">
          <th rowspan="2" style="width: 65px;">JAM</th>
          <th rowspan="2" colspan="2" style="width: 90px;">Kegiatan</th>
          <th rowspan="2" style="width: 210px;">
            Proses
              <br>
            Type Size
          </th>
          <th rowspan="2" class="opos">SO</th>
          <th rowspan="2" style="width: 100px;">Customer</th>
          <th rowspan="2" class="opos">OP</th>
          <th rowspan="2">
            Line
              <br>
            Speed
              <br>
            [mpm]
          </th>
          <th rowspan="2">RPM</th>
          <th colspan="">Target</th>
          <th colspan="4">TAKE-UP</th>
        </tr>
        {{-- end header --}}
        <tr id="row-7">
          <th colspan="">
            Panjang
              <br>
            ( Meter )
          </th>
          <th colspan="">
            Nomor
              <br>
            Bobin
          </th>
          <th colspan="">
            Panjang
              <br>
            ( Meter )
          </th>
          <th colspan="2" style="padding-left: 2px; padding-right: 2px;">Warna</th>
        </tr>
        {{-- input --}}
        <tr id="row-8" class="input-lhk">
          <td>

          </td>
          <td colspan="2">

          </td>
          <td>{{ $item->type }}</td>
          <td>{{ $item->sono }}</td>
          <td>{{ $item->cus }}</td>
          <td>{{ $item->opno }}</td>
          <td>{{ $item->spe }}</td>
          <td>{{ $item->rpm }}</td>
          <td colspan="">{{ $item->tar}}</td>
          <td colspan="">{{ $item->bid }}</td>
          <td colspan="">{{ $item->pan }}</td>
          <td colspan="2">{{ $item->war }}</td>
        </tr>
        {{-- end input --}}
  
        <tr class="input-lhk">
          <td></td>
          <td colspan="2"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td colspan=""></td>
          <td colspan=""></td>
          <td colspan=""></td>
          <td colspan="2"></td>
        </tr>
  
        <tr class="input-lhk">
          <td></td>
          <td colspan="2"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td colspan=""></td>
          <td colspan=""></td>
          <td colspan=""></td>
          <td colspan="2"></td>
        </tr>
  
        <tr class="text-center">
          <td colspan="3" class="offset-tb">Mengetahui</td>
          <td class="no-right-border" colspan="3">Disetujui</td>
          <td class="no-right-border" colspan="3">Diperiksa</td>
          <td colspan="5" class="no-right-border">Pelaksana</td>
        </tr>
        <tr></tr>
        <tr class="text-center ttd">
          <td colspan="3" class="offset-tb">
            @if ($item->mgr)
                {{ $item->mgr }}
            @else
              <a href="{{ route('approvemn', ['id' => $item->id_lhk]) }}" class="btn btn-apr" id="manager">Approve</a>
            @endif
          </td>
          <td colspan="3" class="no-right-border">
            @if ($item->spv)
                {{ $item->spv}}
            @else
              <a href="{{ route('approvesv', ['id' => $item->id_lhk]) }}" class="btn btn-apr" id="supervisor">Approve</a>
            @endif
          </td>
          <td colspan="3" class="no-right-border">
            @if ($item->frm)
                {{ $item->frm}}
            @else
              <a href="{{ route('approvefr', ['id' => $item->id_lhk]) }}" class="btn btn-apr" id="foreman">Approve</a>
            @endif
          </td>
          <td colspan="5" class="no-right-border"></td>
        </tr>
        <tr class="text-center footer">
          <td colspan="3">Manager</td>
          <td colspan="3">Supervisor</td>
          <td colspan="3">Foreman</td>
          <td colspan="5">
            {{ $item->op1.'/'.$item->op2 }}
            <br>
            Operator
          </td>
        </tr>
  
        @endforeach
        
      </table>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script>
  $(function(){
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN' :$('meta[name="csrf-token"').attr('content')
    //   }
    // });
    // $('#foreman').click(function (e) { 
      // e.preventDefault;
      // $.ajax({
      //   type: "post",
      //   url: "",
      //   data: {
      //      foremanapr : 'Approved'
      //   },
      //   dataType: "dataType",
      //   success: function (response) {
          
      //   }
      // });
      // alert('bisa');
    //  });
  });
  </script>
</body>
</html>