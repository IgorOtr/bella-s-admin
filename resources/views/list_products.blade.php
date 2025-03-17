@include('includes.head')

<body>

    @include('includes.header')

    <div class="container-fluid" style="margin-top: 180px">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h1>Todos os Produtos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-hover align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Nome</th>
                            <th>Valor de Custo</th>
                            <th>Valor de Venda</th>
                            <th>Quantidade</th>
                            <th>Lucro p/ Unidade</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $item)
                            
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/produtos/'.$item->nome_img) }}" alt=""
                                        style="width: 60px; height: 60px"/>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">{{$item->nome_produto}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">R$ {{$item->valor_custo}}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">R$ {{$item->valor_venda}}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$item->quantidade}}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$item->valor_lucro}}</p>
                                </td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">{{$item->status}}</span>
                                </td>
                                <td>
                                    <div class="dropend">
                                        <button type="button" class="btn btn-link btn-sm btn-rounded dropdown-toggle"
                                        data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                                        <i style="font-size: 28px" class='bx bx-dots-vertical-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/Produtos/edit/{{ $item->id }}"><i style="font-size: 18px"
                                            class='bx bx-edit'></i> Editar</a></li>
                                            <li><a class="dropdown-item" href="/Produtos/delete/{{ $item->id }}"><i style="font-size: 18px"
                                                class='bx bx-trash'></i> Remover</a></li>
                                                <li><a class="dropdown-item" href="#"><i style="font-size: 18px"
                                                    class='bx bx-search'></i> Visualizar</a></li>
                                                </ul>
                                            </div>
                                        </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    @include('includes.footer')
</body>

</html>
