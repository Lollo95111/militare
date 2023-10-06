<x-layout>

    <div class="container my-5">

        <div class="row">

            <div class="col-12">

                <h2>Prodotti per Genere {{ $gender->name }}</h2>

            </div>

        </div>



    </div>


<div class="container-fluid">
    <div class="row">



        <div class="col-3 p-3">
            @foreach ($productCategories as $category)

            <form id="formCategory" action="{{ route('product.category', compact('gender','category') )}}" method="GET">

                <input name="gender" onchange="this.form.submit()" type="checkbox">
                  <label > {{$category->name}}</label>
               </form>
               @endforeach
            </div>


<div class="col-3 p-3">
            @foreach ($productCalibers as $caliber)

            <form id="formCategory" action="{{ route('product.genderCal', compact('gender','caliber') )}}" method="GET">

                <input name="gender" onchange="this.form.submit()" type="checkbox">
                  <label > {{$caliber->name}}</label>
               </form>
               @endforeach
            </div>





            <div class="col-9">

                <div class="row my-3">

                    @foreach($gender->products as $product)

                        <div class="col-12 col-md-4">

                            <x-card :product="$product" />

                        </div>

                    @endforeach

                </div>


            </div>
    </div>
</div>







</x-layout>
