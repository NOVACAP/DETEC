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
@endsection

