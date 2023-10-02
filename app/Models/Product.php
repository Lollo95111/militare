<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory,Searchable;
    protected $fillable = ['name','price','description','category_id','user_id','category'];




    public function toSearchebleArray():array{

        $category = $this->category;

        $array =[

        'id'=> $this->id,

        'name'=> $this->name,

        'description'=>$this->description,

        "category"=> $category

        ];

        return $array;

        }



    public function category(){

        return $this->belongsTo(Category::class);

    }



    public function user(){

        return $this->belongsTo(User::class);

        }


public function images(){

    return $this->hasMany(Image::class);

}


public static function toBeRevisionedCount(){



    return Product::where('is_accepted',null)->count();

    }


    public function setAccepted($value){


        $this->is_accepted = $value;

        $this->save();

        return true;


}


public function setReverse()

{

    $this->setAccepted(null);

    return redirect()->route('admin.dashboard');


}






}
