<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->view = 'backend/pages/';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all()->sortBy('created_at');

        return view($this->view . 'category/index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view . 'category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new Category;

        $this->validate($request, [
            'id'      => 'required|unique:category,id,' . $d['id'],
            'name'      => 'required'
        ]);

        $d->id = $request->id;
        $d->name = $request->name;
        $d->save();
        
        toast('Your Post as been submited!', 'success')->autoClose(2000);

        if ($request->btn_save == "save_add_another") {
            return redirect('admin/category/create');
        } else {
            return redirect('admin/category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view($this->view . 'category/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view($this->view . 'category/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'      => 'required'
        ]);

        $category->name = $request->name;
        $category->save();

        toast('Your Post as been updated!', 'success')->autoClose(2000);
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->id == "ID") {
            toast('Your category is main content, and cannot deleted!', 'error');
        } else {
            $category->delete();
            toast('Your Post as been deleted!', 'success')->autoClose(2000);
        }
        return redirect('admin/category');
    }
}