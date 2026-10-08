<!-- ÚNICA TAG RAIZ (ROOT TAG) NO INÍCIO DO ARQUIVO -->
<div> 

    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
            <h3>Lista de Ambientes</h3>
            <a href="/ambientes/create" class="btn btn-primary">Novo Lugar</a>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="mb-3">
            <input type="text"
                class="form-control"
                placeholder="Buscar ambiente..."
                wire:model.live="search">
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>status</th>
                    <th>Ações</th> <!-- Adicionado para alinhar as colunas -->
                </tr>
            </thead>

            <tbody>
                @forelse($ambientes as $ambiente)
                <tr>
                    <td>{{ $ambiente->nome }}</td>
                    <td>{{ $ambiente->descricao }}</td>
                    <td>{{ $ambiente->status }}</td>

                    <td>
                        <a href="/ambientes/edit/{{ $ambiente->id }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <button class="btn btn-danger btn-sm"
                            wire:click="delete({{ $ambiente->id }})"
                            wire:confirm="Tem certeza que deseja excluir este ambiente?"> <!-- Confirmação nativa do Livewire v3 -->
                            Excluir
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Nenhum ambiente encontrado
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</div> <!-- FECHAMENTO DA TAG RAIZ NO FINAL DO ARQUIVO -->
