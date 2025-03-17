<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">

        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Bela's Admin</a>
                </li>
            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center">
                <a href="{{ route('products-TofillIn') }}" data-mdb-ripple-init class="btn btn-success me-3">
                    <i class='bx bx-plus'></i> Produto
                </a>
                <a href="{{ route('vendas-TofillIn') }}" data-mdb-ripple-init class="btn btn-danger me-3">
                    <i class='bx bx-plus'></i> Venda
                </a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
