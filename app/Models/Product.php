<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','description','category_id'];



    public function category(){

        return $this->belongsTo(Category::class);

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
