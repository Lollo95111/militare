
<div>

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


</div>






