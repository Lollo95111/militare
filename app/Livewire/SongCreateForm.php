<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
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
    $this->validate();
    $product = Product::create([

    'name' => $this->name,

    'price' =>$this->price,

    'description'=> $this->description,

    'category_id'=>$this->category_id

    ]);

    if(count($this->images)){

        foreach($this->images as $image){

            $product->images()->create(['path' => $image->store('images' , 'public')]);





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
