<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <nav class="primary-nav">
        <div class="container-fluid bg-warning d-flex align-items-center justify-content-between px-5 py-3">
            <div class="left-content d-flex col-4 align-items-center">
                <a href="#" class="brand-logo fs-2 text-dark">
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
            <ul class="actions-list d-flex gap-2 justify-content-end list-unstyled align-items-center col-5 fs-5 my-auto">
                <li class="actions-item px-2 py-1 border border-secondary border-2 rounded-3">
                    <a href="#" class="actions-link text-dark text-decoration-none">Uploaded</a>
                </li>
                <li class="actions-item px-2 py-1 border border-secondary border-2 rounded-3">
                    <a href="#" class="actions-link text-dark text-decoration-none">Users</a>
                </li>
                <li class="actions-item px-2 py-1 border border-secondary border-2 rounded-3">
                    <a href="#" class="actions-link text-dark text-decoration-none">Product Orders</a>
                </li>
            </ul>
        </div>
    </nav>
</div>