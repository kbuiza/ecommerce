<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-users"></i>
        <p>Users</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('products') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-box"></i>
        <p>Products</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('logout') }}" class="nav-link ">
        <i class="nav-icon fas fa-solid fa-sign-out-alt"></i>
        <p>Logout</p>
    </a>
</li>