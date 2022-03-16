<div>
    <!-- He who is contented is rich. - Laozi -->
    <nav class="primary-nav">
        <div class="container-fluid bg-warning d-flex align-items-center justify-content-between px-5 py-3">
            <div class="left-content d-flex col-4 align-items-center">
                <a href="{{route('home')}}" class="brand-logo fs-2 text-dark">
                    <i class="bi bi-tsunami"></i>
                </a>
                <form action="{{route('search')}}" method="post" class="ms-4 w-100 h-auto d-flex align-items-center">
                    @csrf
                    <div class="form-content position-relative d-flex align-items-center w-100">
                        <input type="text" name="search-text" id="search-text" class="form-control fs-5" placeholder="Search..">
                        <i class="bi bi-search position-absolute fs-5" style="right: 0.75rem;"></i>
                    </div>
                </form>
            </div>

            <ul class="actions-list d-flex justify-content-end list-unstyled align-items-center col-3 fs-4 my-auto">
                <li class="actions-item px-2">
                    <a href="{{route('login')}}" class="actions-link text-dark text-decoration-none">Login</a>
                </li>
                <li class="actions-item px-2">
                    <a href="{{route('register')}}" class="actions-link text-dark text-decoration-none">Register</a>
                </li>
                <li class="actions-item px-2">
                    <a href="#" class="actions-link text-dark text-decoration-none">
                        <i class="bi bi-cart3 position-relative">
                            <div class="items-count position-absolute top-0 start-100 translate-middle p-2 rounded-circle bg-danger text-white fw-bold font-monospace d-flex justify-content-center align-items-center" style="height:20px;width:20px;font-size:0.85rem;">0</div>
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
</div>