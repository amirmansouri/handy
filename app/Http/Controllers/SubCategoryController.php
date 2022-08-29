<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
        {
            $subcategory = SubCategory::all();
            return view ('subcategory.index')->with('subcategory', $subcategory);

        }


        public function create()
        {
            $category=Category::all();
            return view('subcategory.create')->with('category',$category);
        }


        public function store(Request $request)
        {
            $input = $request->all();
            SubCategory::create($input);
            return redirect('subcategory-liste')->with('flash_message', 'SubCategory Addedd!');
        }


        public function show($id)
        {
            $subcategory = SubCategory::find($id);
            return view('subcategory.show')->with('subcategory', $subcategory);
        }


        public function edit($id)
        {
            $subcategory = SubCategory::find($id);
            return view('subcategory.edit')->with('subcategory', $subcategory);
        }


        public function update(Request $request, $id)
        {
            $subcategory = SubCategory::find($id);
            $input = $request->all();
            $subcategory->update($input);
            return redirect('subcategory')->with('flash_message', 'SubCategory Updated!');
        }


        public function destroy($id)
        {
            SubCategory::destroy($id);
            return redirect('subcategory')->with('flash_message', 'SubCategory deleted!');
        }
        public function search(){
$search_text = $_GET['query'];
$subcategory = subcategory::where('name','LIKE','%'.$search_text.'%')->with('category')->get();
return view('subcategory.index',compact('subcategory'));
        }
}
