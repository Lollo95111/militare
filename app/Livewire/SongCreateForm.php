<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SongCreateForm extends Component
{


    public $name;

    public $description;

    public $price;




    protected $rules = [

        'name' => 'required|min:3',

        'description' => 'required|min:3',

        'price'=> 'required'

    ];





    protected $messages = [

        'name.required' => "Il nome non puo' essere vuoto",
        'description.required'=> "La descrizione non può essere vuota",
        'price'=>"il prezzo non può essere vuoto"

    ];








public function store(){
    $this->validate();
    Product::create([

    'name' => $this->name,

    'price' =>$this->price,

    'description'=> $this->description

    ]);

    $this->reset();

    return redirect()->route('product.create')->with('message','Prodotto aggiunto con successo');

    }









    public function render()
    {
        return view('livewire.song-create-form');
    }



}
