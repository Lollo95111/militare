<div class="container">
    <div class="row">
        <div class="col-5">

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




                        <div class="card-footer rounded">
                            <p class="card-text">{{$product->price}}€/mese</p>
                        </div>
                        <a href="{{route('product.show' , $product)}}" class="mt-5 button-custom btn ">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row wrap">
                @foreach($product->images as $image)
                <div class="col-12">
                    <h5 class="tc-accent">Revisioni immagini</h5>
                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                    <p>Medical: <span class="{{$image->medical}}"></span></p>
                    <p>Spoof: <span class="{{$image->spoof}}"></span></p>
                    <p>Violence: <span class="{{$image->violence}}"></span></p>
                    <p>Racy: <span class="{{$image->racy}}"></span></p>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
