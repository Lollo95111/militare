




<x-layout>

    <div class="container my-5">

        <div class="row">

            <div class="col-12">

                <h2>Prodotti per Calibro {{ $caliber->name }}</h2>

            </div>

        </div>



    </div>


<div class="container-fluid">
    <div class="row">


        <div class="col-2 p-3">
            @foreach ($productGenders as $gender)

            <form id="formGender" action="{{ route('product.caliberGen', compact('caliber','gender') )}}" method="GET">

                <input name="caliber" onchange="this.form.submit()" type="checkbox">
                  <label > {{$gender->name}}</label>
               </form>
               @endforeach
            </div>


            <div class="col-2 p-3">

                @foreach ($productCategories as $category)

                <form id="formCategory" action="{{ route('product.caliberCat', compact('caliber','category') )}}" method="GET">

                    <input name="caliber" onchange="this.form.submit()" type="checkbox">
                      <label > {{$category->name}}</label>
                   </form>
                   @endforeach
                </div>



            <div class="col-9">

                <div class="row my-3">

                    @foreach($caliber->products as $product)

                        <div class="col-12 col-md-4">

                            <x-card :product="$product" />

                        </div>

                    @endforeach

                </div>


            </div>
    </div>
</div>







</x-layout>

