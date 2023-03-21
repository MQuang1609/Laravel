<header class="d-flex justify-content-left">
    <h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Demo</a>
            </li>
            <li class="nav-item {{ Request::route()->getName() === 'home' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::route()->getName() === 'product-detail' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('product-detail') }}">Product</a>
            </li>
            <li class="nav-item {{ Request::route()->getName() === 'contact' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item {{ Request::route()->getName() === 'aboutUs' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('aboutUs') }}">About US</a>
            </li>
        </ul>
    </h1>
</header>
