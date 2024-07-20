<x-layout title="Nova série">
    <form action="/series/salvar" method="POST">
        @csrf
        <div class="mb-3" >
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        <label for="nome" class="form-label">Gênero:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        <label for="nome" class="form-label">Ano de Lançamento:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        <label for="nome" class="form-label">Número de Temporadas:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        <label for="nome" class="form-label">Descrição:</label>
        <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Adicionar Série</button>
    </form>
</x-layout>
