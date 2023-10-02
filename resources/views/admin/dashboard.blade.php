<x-layout>

    <div class="container vh50 my-4">

        <div class="row">
            <div class="col-12">
                <h3>{{$product_to_check ? 'ecco l annuncio da revisionare':'Non ci sono annunci da revisionare'}}</h3>
            </div>
        </div>


        <div class="container">
            @if($product_to_check)

            <div class="row justify-content-center">
                <div class="col-12 col-md-3">

                    <x-cardAdmin :product='$product_to_check'></x-cardAdmin>
                </div>



                <div class="d-flex justify-content-center mt-3">
                    <form action="{{ route('admin.accept_product', $product_to_check) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn mx-2 button-customAccept">Accetta</button>
                    </form>

                    <form action="{{ route('admin.reject_product', $product_to_check) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn mx-2 button-customReject">Rifiuta</button>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>




    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8">
                <div class="table-respondive">
                <table class="table">
                    <thead >
                        <tr>

                            <th scope="col">Nome</th>
                            <!-- <th scope="col">Descrizione</th> -->
                            <th scope="col">Prezzo</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Creato da</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_is_revisioned as $product_to_check)
                        <tr>
                            <th scope="row">{{$product_to_check->name}}</th>
                            <!-- <td class="text-truncate">{{$product_to_check->description}}</td> -->
                            <td>{{$product_to_check->price}}</td>
                            <td>{{$product_to_check->category->name}}</td>
                            <td>{{$product_to_check->user->name}}</td>
                            <td>{{$product_to_check->created_at}}</td>



                            <td>

                                <form method="POST" action="{{ route('admin.reverse', $product_to_check) }}">
                                    @csrf
                                    <button class="btn button-custom" type="submit">Annulla</button>
                                </form>
                                @if ($product_to_check->is_accepted == false)
                                <form method="POST" action="{{ route('admin.delete', $product_to_check) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn button-customReject" type="submit">ELIMINA</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>





</x-layout>


