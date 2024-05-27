<header class="container d-flex justify-content-between align-items-center py-4 ">
    <div>
        <img src="{{asset('img/dc-logo.png')}}" alt="logo">
    </div>
    <ul>
        <li>
            <a>HOME</a>
        </li>
        <li>
        <a class="nav-link {{Route::currentRouteName() == 'product.index' ? 'active' : ''}}" href="{{route('products.index')}}">COMICS</a>
        </li>
        <li>
        <a class="nav-link {{Route::currentRouteName() == 'product.create' ? 'active' : ''}}" href="{{route('products.create')}}">CREATE</a>
        </li>
    </ul>
    @section('content')
    <div id="jumbo"></div>
        <div class="container py-4">
            <div id="current">
                <h3 class="text-uppercase">current series</h3>
            </div>
        </div>
    @endsection
</header>