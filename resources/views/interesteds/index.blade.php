@extends('layouts.app')

@section('title' , 'SISDEMANDAS | Interessados')

@section('content')
 <!-- content -->
 <main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header card-title">
              <div class="d-flex align-items-center">
                <h2 class="mb-0">Todos os interessados</h2>
                <div class="ml-auto">
                  <a href="{{route('activities.create')}}" class="btn btn-success">
                      <i class="fa fa-plus-circle"></i> Adicionar novo</a>
                </div>
              </div>
            </div>
          <div class="card-body">
          
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Interessados</th>
                  
                </tr>
              </thead>
              <tbody>
                  {{-- @if ($message = session('message'))
                    <div class="alert alert-success">{{ $message}}</div>
                  @endif--}}
                @if ($interesteds->count())
                    @foreach ($interesteds as $index => $interested)
                       <tr>
                        <td>{{ $interested->interested_name}}</td>
                        
                       {{-- <td width="150">
                            <a href="{{ route('activities.show', $contact->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('contacts.edit', $contact->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('contacts.destroy', $contact->id)}}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="fa fa-times"></i></a>
                        </td>--}}
                        </tr>
                    @endforeach

                    <form id="form-delete" method="POST" style="display: none">
                        @csrf
                        @method('DELETE')
                    </form>
                @endif
              </tbody>
            </table>

            {{-- <nav class="mt-4">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav> 
            {{ $contacts->appends(request()->only('company_id'))->links() }}--}}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection