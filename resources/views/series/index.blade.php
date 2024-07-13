<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
                <form action="{{ route('series.destroy', $serie->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta série?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>

                <form action="{{route('series.edit', $serie->id)}}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm">Editar</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
