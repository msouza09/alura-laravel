<x-layout title="Nova série">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3" >
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        <label for="genero" class="form-label">Gênero:</label>
        <input type="text" id="genero" name="genero" class="form-control">
        <label for="numberTemp" class="form-label">Número de Temporadas:</label>
        <input type="number" id="numberTemp" name="numberTemp" class="form-control">
        <label for="descricao" class="form-label">Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Adicionar Série</button>
    </form>
</x-layout>
