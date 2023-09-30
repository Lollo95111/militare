



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

<style>

{
    text-decoration: none;
}

.card-front img{
    object-fit: cover;

}

.card {
  --bs-card-border-width: none;
  --bs-card-border-color: none ;
  --bs-card-border-radius: 10px;
  background-color: rgba(255, 255, 255, 0);
    width: 390px;
    height: 490px;
    perspective: 1000px;
  }

  .card-inner {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.999s;
  }

  .card:hover .card-inner {
    transform: rotateY(180deg);
  }

  .card-front,
  .card-back {
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }

  .card-front {
    background-position:center ;
    background-size: cover;
    background-repeat: no-repeat;
    background-color:   var(---ColorSecondary);
    color: #fff;
    display: flex;
    align-items: center;
    border: 2px solid white;
    border-radius: 10px;
    justify-content: center;
    font-size: 24px;
    transform: rotateY(0deg);
  }

  .card-back {
    /* background: rgb(149,221,212);
background: linear-gradient(347deg, rgba(149,221,212,1) 0%, rgba(149,221,212,0.87718837535014) 7%, rgba(149,221,212,0.87718837535014) 28%, rgba(255,255,255,0.711922268907563) 45%, rgb(149, 203, 221) 88%); */


    background-image: url('https://cdn.pixabay.com/photo/2017/02/15/11/05/texture-2068283_1280.jpg');
    background-size: cover;
    background-position: center;

    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    justify-items: center;
    font-size: 24px;
    transform: rotateY(180deg);

  }


  /* .card-back {

    color: #fff;

} */


.card-back {
    /* ... altre proprietà CSS ... */
    text-align: center; /* Centra il testo orizzontalmente */
}

.card-back h3 {
    font-size: 28px; /* Aumenta la dimensione del titolo */
}

.card-back p {
    margin: 10px 0; /* Aggiungi spazi tra i paragrafi */
    font-size: 18px; /* Imposta la dimensione del testo dei paragrafi */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Aggiungi un'ombra al testo */
    /* ... altre proprietà CSS ... */
}

.card-back {
    /* ... altre proprietà CSS ... */
    color: #ffffff; /* Cambia il colore del testo principale */
}

.card-back p.card-text {
    color: #000000; /* Cambia il colore del testo del paragrafo */
}

.card-back a {
    color: #b4900e;
    font-weight: bold; /* Cambia il colore del link */
    /* ... altre proprietà CSS ... */
}

.card-back {
    /* ... altre proprietà CSS ... */
    transition: background-color 0.3s ease-in-out; /* Aggiungi una transizione al cambio di sfondo */
}


.img-card{
  border-radius: 10px;
}

.google{
  position:absolute;
  top:30%;
  right:220%;
}

.google2{
  position:absolute;
  top:0%;
  left:160%;

}





/* MEDIA QUERY */


@media (min-width:320px) and (max-width:479px)  {
  .card{
    width: 360px;
    height: 490px;
    margin-left: auto;
    margin-right: auto;
  }
  .img-card{
    width: 360px;
    height: 490px;
  }

  .google2{
    position: unset;

  }
  .google{
    position: unset;
  }
  .annulla{
    display: none;
  }
  .annullaTel{
  display:table-row;
}



}

@media (min-width:480px) and (max-width:599px)  {
  .card{
    width: 300px;
    height: 490px;
    margin-left: auto;
    margin-right: auto;
  }
  .img-card{
    width: 300px;
    height: 490px;
  }
}

@media (min-width:600px) and (max-width: 1000px)  {

.card{
    width: 300px;
    height: 400px;
}
.img-card{
width: 300px;
height: 400px;
}

}

@media (min-width:1000px) and (max-width:1600px){
    .card{
        width: 350px;
        height: 470px;
    }
    .img-card{
    width: 350px;
    height: 470px;
    }
}
</style>


