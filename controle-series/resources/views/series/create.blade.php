<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Série</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layout>