<x-layout>




    <section class="container my-5 dettagli position-relavtive">
        <h1>Dettagli Prodotto : {{$product->name}}</h1>
        <div class="row my-5">




            <div class="col-12 col-md-4 col-lg-8">
                <table class="table table-striped product-details mt-3 col-6">
                    <thead>
                        <tr>
                            <th scope="col">{{__('ui.nome')}}:</th>
                            <th scope="col">{{__('ui.categoria')}}:</th>
                            <th scope="col">{{__('ui.regione')}}:</th>
                            <th scope="col">{{__('ui.prezzo')}}:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$product->name}}</th>
                            <td>{{$product->price}}€</td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="product-text mt-4">

                    <h4 class="text-center"> DESCRIZIONE:</h4>
                    <p class=" text-center">{{$product->description}}</p>
                </div>

            </div>
        </div>
    </section>


</x-layout >
