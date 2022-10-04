<header>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-4">
                <a href="{{ route('home') }}" style="color:black; text-decoration: none"><div class="h1">Ecommerce</div></a>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <a class="text-secondary mr-4" href="{{ route('categories.show', ['category' => 1]) }}">Prodotti</a>
                <a class="text-secondary mr-4" href="#">Materiali</a>
                <a class="text-secondary" href="#">Chi siamo</a>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <a class="text-secondary mr-4" href="#">IT</a>
                <a class="text-secondary mr-4" href="#">Login</a>
                <a class="text-secondary" href="#">Registrazione</a>
            </div>
        </div>
    </div>
</header>