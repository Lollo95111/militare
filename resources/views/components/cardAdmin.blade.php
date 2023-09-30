<div class="container">
    <div class="row  position-relative justify-content-center">
        <div class="col-12 ">

            <div class="card">
                <div class="card-inner">

                    <div class="card-front">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            @if(count($product->images)>0)
                                <div class="carousel-inner">
                                 @foreach ($product->images as $image)

                                    <div class="carousel-item @if($loop->first)active @endif">
                                        <img src="{{!$image->get()->isEmpty() ? $image->getUrl(390 , 490) : '/public/default.jpg'}}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-back">
                        <h3 class="card-title">{{$product->name}}</h3>
                        @if($product->category)
                            <a href="{{ route('product.bycategory', $product->category) }}">
                                <p>{{ $product->category->name }}</p>
                            </a>
                        @else
                            <p>Senza Categoria</p>
                        @endif
                        <p class="card-text text-truncate col-9">{!!$product->description!!}</p>

                        {{-- <p class="card-text">Creato da : {{$product->user->name}}</p>
                        <p class="card-text">Creato il : {{$product->created_at}}</p> --}}


                        <div class="card-footer rounded">
                            <p class="card-text">{{$product->price}}€/mese</p>
                        </div>
                        <a href="{{route('product.show' , $product)}}" class="mt-5 button-custom btn ">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 google">
        <table class="table">
            <thead>
                <tr>

                <th scope="col">Adult</th>
                <th scope="col">Medical</th>
                <th scope="col">Satire</th>
                <th scope="col">Violence</th>
                <th scope="col">Spicy</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product->images as $image)
                    <tr>

                        <td class="text-center"><p><span class="{{$image->adult}}"></span></p></td>
                        <td class="text-center"><p><span class="{{$image->medical}}"></span></p></td>
                        <td class="text-center"><p><span class="{{$image->spoof}}"></span></p></td>
                        <td class="text-center"><p><span class="{{$image->violence}}"></span></p></td>
                        <td class="text-center"><p><span class="{{$image->racy}}"></span></p></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="col-8 google2 d-flex">
            @foreach($product->images as $image)
        <table class="mx-3 table">

            <tr>
                <th>
                    Tags
                </th>
            </tr>


            @if($image->labels)
            @foreach($image->labels as $label)
            <tr >
                <td >
                    {{$label}}
                </td>
            </tr>

            @endforeach
            @endif


        </table>
        @endforeach
        </div>
    </div>

</div>


