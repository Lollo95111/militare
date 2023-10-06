<x-layout>




    <section class="container my-5 dettagli position-relavtive">
        <h1>Dettagli Prodotto : {{ $product->name }}</h1>
        <div class="row my-5">

            <div class="col-12 col-md-8 col-lg-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    @if (count($product->images) > 0)
                        <div class="carousel-inner">
                            @foreach ($product->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ !$image->get()->isEmpty() ? $image->getUrl(390, 490) : '/public/default.jpg' }}"
                                        class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>


            <div class="col-12 col-md-4 col-lg-8">
                <table class="table table-striped product-details mt-3 col-6">
                    <thead>
                        <tr>
                            <th scope="col">Nome:</th>
                            <th scope="col">Genere:</th>
                            <th scope="col">Calibro:</th>
                            <th scope="col">Categoria:</th>
                            <th scope="col">Prezzo:</th>
                            <th scope="col">Venditore:</th>
                            <th scope="col">Data:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $product->name }}</th>
                            <td>{{$product->gender->name}}</td>
                            <td>{{$product->caliber->name}}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}€</td>
                            <td>{{ $product->user->name }}</td>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="product-text mt-4">
                    <h4 class="text-center"> DESCRIZIONE:</h4>
                    <p class=" text-center">{{ $product->description }}</p>
                </div>

            </div>
        </div>
    </section>


</x-layout>
