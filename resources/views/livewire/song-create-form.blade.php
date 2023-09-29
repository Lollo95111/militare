
{{-- <div>

<div class="row position-relative justify-content-center align-content-center">


    <div class="col-lg-6 col-md-12 my-5 login-box col-11">

      <div class="col-lg-12 login-title">
          AGGIUNGI UN PRODOTTO
      </div>

      <div class="col-lg-12 login-form">
        <div class="col-lg-12 login-form">
          <form wire:submit.prevent="store">
            <div class="form-group">
              <label class="form-control-label">Nome</label>
              <input type="text" class="form-control" wire:model.blur="name">
              <div class="text-danger">@error('name') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
              <label class="form-control-label">Descrizione</label>
              <input type="text" class="form-control" wire:model.blur="description">
              <div class="text-danger">@error('description') {{ $message }} @enderror</div>
            </div>

            <div class="mb-3">
                <label  class="form-label">Categoria</label>
                <select class="form-control" wire:model.blur="category_id">
    <option value="null" disabled >seleziona una categoria</option>
                    @foreach($productCategories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
                 @endforeach
               </select>
          </div>

              <div class="form-group">
                <label class="form-control-label">Prezzo</label>
                <input type="prezzo" class="form-control" wire:model.blur="price">
                <div class="text-danger">@error('price') {{ $message }} @enderror</div>
              </div>

              <button class="button-container1" type="submit " class=" shadow px-4 py-2 my-4"> <span>CREA</span></button>

          </form>

        </div>
      </div>
    </div>
  </div>


</div> --}}






<div class="row">

    <div class="col-lg-3 col-md-2"></div>

    <div class="col-lg-6 col-md-8 my-5 login-box">

      <div class="col-lg-12 login-key">

        <i class="fa fa-key" aria-hidden="true"></i>

      </div>

      <div class="col-lg-12 login-title">

        Aggiungi Articolo

      </div>




      <div class="col-lg-12 login-form">

        <div class="col-lg-12 login-form">

          <form wire:submit.prevent="store">

            <div class="form-group">

              <label class="form-control-label">NOME</label>

              <input type="text" class="form-control" wire:model.blur="name">

              <div class="text-danger">@error('name') {{ $message }} @enderror</div>

            </div>




            <div class="form-group">

              <label class="form-control-label">DESCRIZIONE</label>

              <input type="text" class="form-control" wire:model.blur="description">

              <div class="text-danger">@error('description') {{ $message }} @enderror</div>

            </div>




            <div class="form-group">

              <label class="form-control-label">CATEGORIA</label>

              <select class="form-control" wire:model.blur="category_id">

                <option value="null" disabled>seleziona una categoria</option>

                @foreach($productCategories as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach

              </select>




              <div class="form-group">

                <label class="form-control-label">PREZZO</label>

                <input type="prezzo" class="form-control" wire:model.blur="price">

                <div class="text-danger">@error('price') {{ $message }} @enderror</div>

              </div>

              <div class="form--group">




                <label class="form-control-label">COPERTINA</label>

                <input wire:model='temporary_images' type="file" name="images" multiple class="form-controll shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="image">

                @error('temporary_images.*')

                <p class="text-danger mt-2">{{$message}}</p>

                @enderror

              </div>

              @if(!empty($images))

              <div class="row">

                <div class="col-12">

                  <p>Photo preview:</p>

                  <div class="row border border-4 border-info rounded shadow py-4">

                    @foreach($images as $key => $image)

                    <div class="col my-3">

                      <div class="img-preview mx-auto shadow rounded" style="background-image: url('{{$image->temporaryUrl()}}')"></div>

                      <button type="button" class="button-container1 shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">

                        CANCELLA

                      </button>

                    </div>

                    @endforeach

                  </div>

                </div>

              </div>

              @endif

              <button class="button-container1" type="submit " class=" shadow px-4 py-2 my-4"> <span>CREA</span></button>

            </div>

          </form>




        </div>

      </div>

    </div>

  </div>

</div>

</div>
