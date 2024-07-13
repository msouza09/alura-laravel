<x-layout title="Editar série">
    <form action="{{ route('series.update', $serie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $serie->nome) }}" required>
        </div>
        <button type="submit" class="btn btn-dark">Editar</button>
    </form>
</x-layout>
