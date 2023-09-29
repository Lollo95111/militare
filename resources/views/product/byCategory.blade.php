<x-layout>

    <div class="container my-5">

        <div class="row">

            <div class="col-12">

                <h2>Prodotti per categoria {{ $category->name }}</h2>

            </div>

        </div>

        <div class="row my-3">

            @foreach($category->products as $product)

                <div class="col-12 col-md-4">

                    <x-card :product="$product" />

                </div>

            @endforeach

        </div>

    </div>

</x-layout>
