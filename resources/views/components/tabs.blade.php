@section('tabs')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Data LHK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
  </li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="container-fluid mt-3">
      @include('components.menu')
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h2>Menu1</h2>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h2>Menu 2</h2>
  </div>
</div>
@endsection

