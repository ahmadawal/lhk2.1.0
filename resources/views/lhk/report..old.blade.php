<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jembo Cable</title>
  
  <link rel="stylesheet" href="{{ asset('css/report.css') }}">
</head>
<body>
  <div class="container">

    <table class="table" style="overflow-x: auto;">

      @foreach ($data as $item)

      <tr id="row-1">
        <td colspan="17" class="pt_name">PT.JEMBO CABLE COMPANY Tbk.</td>
        <td class="no-lhk"colspan="3">No. LHK : {{ $item->id_lhk }}</td>
      </tr>

      <tr id="row-2">
        <td colspan="19" class="judul">LAPORAN HASIL KERJA</td>
        <td class="offset-tb"></td>
      </tr>

      

      <tr id="row-3">
        <td class="no-border">NO. MESIN</td>
        <td colspan="5" class="no-border">: {{ $item->mesin_id }}</td>
        <td class="text-center h-meter">SHIFT</td>
        <td class="text-center h-meter">JAM</td>
        <td colspan="9" class="text-center h-meter">HOUR METER MESIN</td>
        <td colspan="2" class="text-center h-meter">Total [Jam]</td>
        <td rowspan="3" class="pinggir"></td>
      </tr>
      
      <tr id="row-4">
        <td class="no-border">NAMA MESIN</td>
        <td colspan="5" class="no-border">: {{ $item->mesin_nama }}</td>
        <td rowspan="2" class="shift-pgw h-meter">{{ $item->shift_pgw }}</td>
        <td>06:45</td>
        <td colspan="9">{{ $item->meter_sb }}</td>
        <td rowspan="2" colspan="2" style="widht: 100px;">{{ $item->total_jam }}</td>
      </tr>

      <tr id="row-5">
        <td class="no-border">TANGGAL</td>
        <td colspan="5" class="offset-tb no-border">:
          @php
              $dt = $item->tgl_mulai;
              $d = explode(" ", $dt);
              $tgl = date("d-m-Y", strtotime($d[0]));
              echo $tgl;
          @endphp
        </td>
        <td class="h-meter">14:45</td>
        <td colspan="9">{{ $item->meter_sd }}</td>
      </tr>

      <tr>
        <td colspan="20" class="bottom-ofs"></td>
      </tr>
      {{-- header table --}}
      <tr id="row-6">
        <th rowspan="2">JAM</th>
        <th rowspan="2">Kegiatan</th>
        <th rowspan="2">
          Proses
            <br>
          Type Size
        </th>
        <th rowspan="2" class="opos">SO</th>
        <th rowspan="2" style="width: 220px;">Customer</th>
        <th rowspan="2" class="opos">OP</th>
        <th rowspan="2">
          Line
            <br>
          Speed
            <br>
          [mpm]
        </th>
        <th rowspan="2">RPM</th>
        <th colspan="3">Target</th>
        <th colspan="9">TAKE-UP</th>
      </tr>
      {{-- end header --}}
      <tr id="row-7">
        <th colspan="3">
          Panjang
            <br>
          ( Meter )
        </th>
        <th colspan="4">
          Ukuran Bobin
            <br>
          Nomor
        </th>
        <th colspan="3">
          Panjang
            <br>
          ( Meter )
        </th>
        <th colspan="2">Warna</th>
      </tr>
      {{-- input --}}
      <tr id="row-8" class="input-lhk">
        <td>
          @php
            $dt = $item->tgl_mulai;
            $d = explode(" ", $dt);
            $jam = $d[1];
            echo $jam;
          @endphp
        </td>
        <td>{{ $item->kegiatan }}</td>
        <td>{{ $item->proses_type }}</td>
        <td>{{ $item->so_no }}</td>
        <td>{{ $item->customer }}</td>
        <td>{{ $item->op_no }}</td>
        <td>{{ $item->speed_line }}</td>
        <td>{{ $item->rpm }}</td>
        <td colspan="3">{{ $item->target_panjang }}</td>
        <td colspan="4">{{ $item->bobin_id }}</td>
        <td colspan="3">{{ $item->panjang_fg }}</td>
        <td colspan="2">{{ $item->warna_fg }}</td>
      </tr>
      {{-- end input --}}
      

      <tr class="text-center">
        <td colspan="4" class="offset-tb">Mengetahui</td>
        <td class="no-right-border">Disetujui</td>
        <td class="no-right-border" colspan="7">Diperiksa</td>
        <td colspan="8" class="no-right-border">Pelaksana</td>
      </tr>
      <tr></tr>
      <tr class="ttd">
        <td colspan="20"></td>
      </tr>
      <tr class="text-center footer">
        <td colspan="4">Manager</td>
        <td>Supervisor</td>
        <td colspan="7">Foreman</td>
        <td colspan="8">
          {{ $item->operator1.'/'.$item->operator2 }}
          <br>
          Operator
        </td>
      </tr>

      @endforeach
      
    </table>

  </div>
</body>
</html>