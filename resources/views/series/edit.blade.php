<x-layout title="Editar série">
    <form action="{{ route('series.update', $serie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $serie->nome) }}" required>
            <label for="genero" class="form-label">Gênero:</label>
            <input type="text" id="genero" name="genero" class="form-control" value="{{ old('genero', $serie->genero) }}" required>
            <label for="numberTemp" class="form-label">Número de Temporadas:</label>
            <input type="number" id="numberTemp" name="numberTemp" class="form-control" value="{{ old('numberTemp', $serie->numberTemp) }}" required>
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" value="{{ old('numberTemp', $serie->descricao) }}" required>
        </div>
        <button type="submit" class="btn btn-dark">Editar</button>
    </form>
</x-layout>
