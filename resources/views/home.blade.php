@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
  function jojo(){
    var dato;
    dato = <?php echo json_encode($dato); ?>;
    
    alert(dato[1]);
    var capa;
    capa = document.getElementById('menu2');
    capa.style.display = 'none';
  }
  window.addEventListener('load',jojo,false);
</script>