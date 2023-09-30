



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




