<div class="container mt-4">

    <div class="card p-4">

        <h3>Editar Produto</h3>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="update">

            <div class="mb-3">
                <label>Nome</label>
                <input type="text" class="form-control" wire:model="nome">
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

             <div class="mb-3">
                <label>Descrição</label>
                <textarea class="form-control" wire:model="descricao"></textarea>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ativo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Inativo
                </label>
            </div>

               <button class="btn btn-primary w-100">Atualizar</button>

        </form>

    </div>

</div>
