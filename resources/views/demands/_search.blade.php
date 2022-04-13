<h2>Busque um processo</h2>
   <form action="{{ route ('demands.create')}}" method="GET">
        <input type="text" id="search" name="search" id= "process" class="form-control" placeholder="Procurar">
    </form>

    @if($search)
        <h3>Buscando por:  {{$search}}</h3>
        @else
        <p class="subtitle">Pesquise um processo</p>
    @endif

    @if(count($processes) == 0 && $search)
        <p>Não foi possível encontrar nenhum processo com {{ $search }} ! <a href="{{route ('processes.index')}}"> Ver todos os processos</a> </p>
    @endif