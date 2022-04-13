@extends('layouts.app')

@section('title' , 'SISDEMANDAS | Criar demanda')

@section('content')




<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <h2 class="mb-0"> <strong>Criar nova demanda</strong></h2>
            </div>
            <div class="card-body">
              <div id="search-container" class="col-md-12">
                @include('demands._search')
                
            </div>
              
              <form action="{{ route('demands.store')}}" method="POST">
                @csrf
                @include('demands._form')
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#process");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
</script>
@endsection

