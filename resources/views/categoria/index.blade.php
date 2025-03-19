@include('includes.head')


<body>

    @include('includes.header')


    <div class="container-fluid" style="margin-top: 100px">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1>Gerenciar Categorias</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-hover table-striped border">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($categorias as $categoria)
                              
                            <tr>
                              <th scope="row">{{ $categoria->id }}</th>
                              <td>{{ $categoria->nome_categoria }}</td>
                              <td>
                                <div class="dropend">
                                    <button type="button" class="btn btn-link btn-sm btn-rounded dropdown-toggle"
                                    data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                                    <i style="font-size: 28px" class='bx bx-dots-vertical-rounded'></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/Categoria/edit/{{ $categoria->id }}"><i style="font-size: 18px"
                                        class='bx bx-edit'></i> Editar</a></li>
                                        <li><a class="dropdown-item" href="/Categoria/delete/{{ $categoria->id }}"><i style="font-size: 18px"
                                            class='bx bx-trash'></i> Remover</a></li>
                                            <li><a class="dropdown-item" href="#"><i style="font-size: 18px"
                                                class='bx bx-search'></i> Visualizar Produtos</a></li>
                                            </ul>
                                        </div>
                                    </td>
                            </tr>

                          @endforeach
              
                        </tbody>
                      </table>
                </div>
                <div class="col-md-6">
                    <form class="border p-3" method="POST" action="{{ route('categoria-store') }}">
                      @csrf
                        <div class="mb-3">
                          <label for="category_name" class="form-label">Nome da Categoria</label>
                          <input name="nome_categoria" type="text" class="form-control" id="category_name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>


    @include('includes.footer')
</body>

</html>
