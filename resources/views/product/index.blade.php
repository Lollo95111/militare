<x-layout>


    <br><br><br><br>


    <div class="container-fluid mt-5">
        <div class="row">
            <h2 class="text-center">Tutti gli annunci</h2>
        </div>
        <div class="row">


            @forelse($products as $product)

            <div class="col-12 col-md-3 my-5">

            <a href="{{route('product.show',$product)}}"><x-card :Product='$product'></x-card></a>

            </div>

            @empty
            <h4 class="text-center">La ricerca non ha dato risultati</h4>

        @endforelse
        {{ $products->links() }}
        </div>
    </div>



</x-layout>
