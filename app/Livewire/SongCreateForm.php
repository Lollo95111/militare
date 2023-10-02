<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SongCreateForm extends Component
{

    use WithFileUploads;
    public $name;

    public $validate;

    public $description;

    public $images;

    public $temporary_images;

    public $price;

    public $category_id;

    public $user_id;




    protected $rules = [

        'name' => 'required|min:3',

        'description' => 'required|min:3',

        'price'=> 'required',

        'category_id'=>'required',

        'images.*'=> 'image|max:1024',

        'temporary_images.*'=> 'image|max:1024'

    ];





    protected $messages = [

        'name.required' => "Il nome non puo' essere vuoto",
        'description.required'=> "La descrizione non può essere vuota",
        'price'=>"il prezzo non può essere vuoto",
        'category_id'=>"Devi scegliere una categoria !",

        'temporary_image.*.required'=> "L\' immagine è richiesta",
        'temporary_image.*.image' => "il file devono essere immagini",
        'temporary_max.*.max' => "L\' immagine dev\' essere massimo di 1mb",
        'images.image' =>"L\' immagine dev\' essere un\' immagine",
        'image.max' =>"L\' immagine dev\' essere massimo di 1mb"

    ];



    public function updatedTemporaryImages(){

        if($this->validate(['temporary_images.*' => 'image|max:1024'])){

            foreach($this->temporary_images as $image){

                $this->images[] = $image;

            }

        }

    }




    public function removeImage($key){

        if(in_array($key, array_keys($this->images))){

            unset($this->images[$key]);

        }

    }




    public function store(){




        $this->user_id=Auth::user()->id;




         $this->validate();
         $this->user_id=Auth::user()->id;
         $product = Product::create([

             'name'=>$this->name,

             'price'=>$this->price,

             'category_id'=>$this->category_id,

             'description'=>$this->description,

             'user_id'=>$this->user_id,

         ]);




         if(count($this->images)){

             foreach($this->images as $image){

                 // $product->images()->create(['path' => $image->store('images' , 'public')]);

                 $newFileName="products/{$product->id}";

                 $newImage=$product->images()->create(['path' => $image->store($newFileName , 'public')]);

                 dispatch(New ResizeImage($newImage->path, 390, 490));
                 dispatch(New GoogleVisionSafeSearch($newImage->id));
                 dispatch(new GoogleVisionLabelImage($newImage->id));


             }

             File::deleteDirectory(storage_path('/app/livewire-tmp'));




         }

         return redirect('')->route('product.create')->with('message','BRAVO.., HAI INSERITO UN ARTICOLO');

     }



    public function render()
    {
        return view('livewire.song-create-form');
    }



}
