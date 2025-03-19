@include('includes.head')


<body>

    @include('includes.header')


    <div class="container-fluid" style="margin-top: 100px">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1>Alterar Categoria</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="border p-3" method="POST" action="{{ route('categoria-update') }}">
                      @csrf
                        <div class="mb-3">
                          <label for="category_name" class="form-label">Nome da Categoria</label>
                          <input name="nome_categoria" type="text" class="form-control" id="category_name" value="{{ $categoria_to_edit->nome_categoria }}" required>
                          <input type="hidden" name="id" value="{{ $categoria_to_edit->id }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alteração</button>
                      </form>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')
</body>

</html>
