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
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="col-md-6">
                    <form class="border p-3" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome da Categoria</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
