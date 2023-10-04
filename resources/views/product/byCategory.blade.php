{{-- <x-layout>





@foreach ($productGenders as $gender)

    <form action="{{ route('product.gender', compact('gender','category') )}}" method="GET">

        <input type="radio" name="gender" value="">

        <button type="submit">
           {{$gender->name}}
          </button>
       </form>
       @endforeach



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

</x-layout> --}}




<x-layout>

    <div class="container my-5">

        <div class="row">

            <div class="col-12">

                <h2>Prodotti per Categoria {{ $category->name }}</h2>

            </div>

        </div>



    </div>


<div class="container-fluid">
    <div class="row">
        <div class="col-3 p-3">
            @foreach ($productGenders as $gender)

            <form id="formGender" action="{{ route('product.gender', compact('category','gender') )}}" method="GET">

                <input name="category" onchange="this.form.submit()" type="checkbox">
                  <label > {{$gender->name}}</label>
               </form>
               @endforeach
            </div>
            <div class="col-9">

                <div class="row my-3">

                    @foreach($category->products as $product)

                        <div class="col-12 col-md-4">

                            <x-card :product="$product" />

                        </div>

                    @endforeach

                </div>


            </div>
    </div>
</div>







</x-layout>
