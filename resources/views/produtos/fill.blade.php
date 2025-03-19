@include('includes.head')


<body>

    @include('includes.header')


    <div class="container-fluid" style="margin-top: 100px">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1>Cadastrar novo Produto</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{ route('product-create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6 class="mb-3 fw-bold">Informações do Produto</h6>

                        <div class="row mb-4">
                            <div class="col-md-4 mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome_produto" class="form-control"
                                    placeholder="Nome do Produto" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Valor de Custos</label>
                                <input name="valor_custo" type="text" id="valor_custo" class="form-control"
                                    onchange="return(calcLucro())" placeholder="R$">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>Valor de Venda</label>
                                <input name="valor_venda" type="text" id="valor_venda" class="form-control"
                                    onchange="return(calcLucro())" placeholder="R$">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade" id="form6Example2" class="form-control" placeholder="Quantidade">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Lucro p/ Unidade</label>
                                <input type="text" name="valor_lucro" id="lucro_unidade" class="form-control" placeholder="R$" readonly>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="">Selecione uma imagem para esse produto</label>
                                    <input class="form-control" type="file" name="nome_img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="">Selecione a categoria do produto</label>
                                    <select class="form-select" name="categoria">
                                        <option selected>Selecione uma opção</option>
                                        @foreach ($categoria as $cats)

                                        <option value="{{ $cats->nome_categoria }}">{{ $cats->nome_categoria }}</option>

                                        @endforeach
                                      </select>
                                </div>
                            </div>
                        </div>

                        <h6 class="mb-3 mt-5 fw-bold">Informações do Fornecedor</h6>

                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label>Nome</label>
                                <input type="text" id="form6Example1" class="form-control"
                                    placeholder="Nome Fornecedor / Loja" name="nome_fornecedor">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Telefone</label>
                                <input type="text" id="valor_venda" class="form-control"
                                    placeholder="Telefone Fornecedor / Loja" name="tel_fornecedor">
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4"><i class='bx bx-plus'></i>
                            Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calcLucro() {
            let valor_custo = document.getElementById('valor_custo').value;
            valor_venda = document.getElementById('valor_venda').value;
            lucro_unidade = document.getElementById('lucro_unidade');

            if (valor_custo != '' && valor_venda != '') {

                let custo = valor_custo.replace(',', '.');
                custo = parseFloat(custo);
                let venda = valor_venda.replace(',', '.');
                venda = parseFloat(venda);

                let lucro = venda - custo;
                lucro = lucro.toFixed(2);
                lucro = lucro.replace('.', ',');

                lucro_unidade.value = `R$ ${lucro}`;

            }
        }
    </script>


    @include('includes.footer')
</body>

</html>
