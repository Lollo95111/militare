<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    public function home(){

        return view('welcome');

    }

    public function index(){

            $products =  Product::paginate(8);

            return view('product.index', compact('products'));
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $genders = Gender::all();

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }



    public function byCategory(Category $category){

        return view('product.bycategory', compact('category'));

    }

    public function byGender(Gender $gender){

        return view('product.bygender', compact('gender'));

    }



    public function searchProduct(Request $request){

        $products = Product::search($request->searched)->where('is_accepted', true)->paginate(8);

                return view('product.index', compact('products'));

            }




            public function filterBygender(Gender $gender ,Category $category){

                $products = $category->products->where('gender_id',$gender->id);

                return view('product.generi',compact('products'));

                }


            public function filterBycategory(Category $category , Gender $gender){

                $products = $gender->products->where('category_id',$category->id);

                return view('product.categorie',compact('products'));

                }










}
