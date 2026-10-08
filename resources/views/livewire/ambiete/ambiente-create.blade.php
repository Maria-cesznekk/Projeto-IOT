<div class="container mt-4">
    <div class="card p-4">
        <h3 class="mb-3">Cadastrar Ambiente</h3>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form wire:submit.prevent="store">
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" class="form-control" wire:model="nome">
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label>Descrição</label>
                <textarea type="text" class="form-control" wire:model="descricao"></textarea>
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- <div class="mb-3">
                <label>Status</label> -->
            <!-- 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ativo
                </label>
            </div>-->
           
   
          <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" wire:model="status">
                  <label class="form-check-label" for="switchCheckDefault">Status</label>
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            </div>


            <button type="submit" class="btn btn-primary w-100">Salvar Ambiente</button>

        </form>

    </div>

</div>